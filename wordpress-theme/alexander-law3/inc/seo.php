<?php
/**
 * SEO Helper Functions
 *
 * Provides lightweight per-page meta title, description, and JSON-LD schema output
 * without requiring a full SEO plugin. Call these functions from page templates
 * before get_header() to ensure hooks fire at the right time.
 *
 * @package Alexander_Law
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Output a custom <title> and <meta name="description"> for a page template.
 *
 * Usage (call before get_header()):
 *   alexander_law_output_meta(
 *       'DUI Lawyer Richmond VA | Alexander Law Office',
 *       'Arrested for DUI in Richmond? Call (804) 355-0016.',
 *       'dui-lawyer-richmond-va'
 *   );
 *
 * @param string $title       Full page title string (overrides WordPress default).
 * @param string $description Meta description text (150–160 characters recommended).
 * @param string $slug        Optional. Page slug used to scope the filter so only
 *                            this page is affected (pass the URL slug, e.g. 'dui-lawyer-richmond-va').
 */
function alexander_law_output_meta( $title, $description, $slug = '' ) {

    // --- Page Title ----------------------------------------------------------
    // WordPress uses the `document_title_parts` filter to build <title>.
    // We replace the entire title with our custom string.
    $custom_title = $title; // capture for closure

    add_filter( 'document_title_parts', function( $parts ) use ( $custom_title ) {
        // Replace the 'title' part; WordPress will still append the separator
        // and site name unless we remove them too.
        $parts['title']   = $custom_title;
        $parts['tagline'] = '';
        $parts['site']    = '';
        return $parts;
    } );

    // The separator is added between non-empty parts, so suppress it as well.
    add_filter( 'document_title_separator', function() {
        return '';
    } );

    // --- Meta Description ----------------------------------------------------
    $custom_desc = $description; // capture for closure

    add_action( 'wp_head', function() use ( $custom_desc ) {
        echo '<meta name="description" content="' . esc_attr( $custom_desc ) . '" />' . "\n";
    }, 1 ); // Priority 1 — runs before most plugins so we go first.
}

/**
 * Output a JSON-LD <script> block in <head> for structured data.
 *
 * Accepts a pre-built PHP array (which will be JSON-encoded) or a raw JSON string.
 *
 * Usage:
 *   alexander_law_output_schema( [
 *       '@context' => 'https://schema.org',
 *       '@type'    => 'LegalService',
 *       'name'     => 'Alexander Law Office',
 *   ] );
 *
 * @param array|string $schema_json PHP array or JSON string of the schema object.
 */
function alexander_law_output_schema( $schema_json ) {

    if ( is_array( $schema_json ) ) {
        $json = wp_json_encode( $schema_json, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT );
    } else {
        // Assume caller already has a valid JSON string.
        $json = $schema_json;
    }

    add_action( 'wp_head', function() use ( $json ) {
        echo '<script type="application/ld+json">' . "\n" . $json . "\n" . '</script>' . "\n";
    }, 5 ); // Priority 5 — after description (1) but before most other head output.
}

/**
 * Site-wide head additions: canonical, OG/Twitter cards, GSC verification.
 * Runs on every front-end page.
 */
function alexander_law_seo_head() {
    if ( is_admin() ) {
        return;
    }

    $site_name = get_bloginfo( 'name' );
    $title     = wp_get_document_title();
    $url       = ( is_singular() || is_page() ) ? get_permalink() : home_url( add_query_arg( null, null ) );
    $desc      = alexander_law_get_meta_description();
    $image     = alexander_law_get_og_image();
    $type      = is_singular( 'post' ) ? 'article' : 'website';

    // Google Search Console verification.
    $gsc = get_option( 'alexander_law_gsc_verification' );
    if ( $gsc ) {
        echo '<meta name="google-site-verification" content="' . esc_attr( $gsc ) . '" />' . "\n";
    }

    // Canonical.
    echo '<link rel="canonical" href="' . esc_url( $url ) . '" />' . "\n";

    // Open Graph.
    echo '<meta property="og:type" content="' . esc_attr( $type ) . '" />' . "\n";
    echo '<meta property="og:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $desc ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $url ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta property="og:image" content="' . esc_url( $image ) . '" />' . "\n";
    }

    // Twitter card.
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '" />' . "\n";
    if ( $image ) {
        echo '<meta name="twitter:image" content="' . esc_url( $image ) . '" />' . "\n";
    }

    // Generic meta description fallback when no template-specific one was set.
    if ( ! has_action( 'wp_head', '__alexander_meta_description_set' ) && $desc ) {
        echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'alexander_law_seo_head', 2 );

function alexander_law_get_meta_description() {
    if ( is_singular() ) {
        $post = get_queried_object();
        $excerpt = $post && ! empty( $post->post_excerpt ) ? $post->post_excerpt : '';
        if ( ! $excerpt && $post ) {
            $excerpt = wp_trim_words( wp_strip_all_tags( $post->post_content ), 30, '…' );
        }
        if ( $excerpt ) {
            return $excerpt;
        }
    }
    if ( is_archive() ) {
        $desc = get_the_archive_description();
        if ( $desc ) {
            return wp_trim_words( wp_strip_all_tags( $desc ), 30, '…' );
        }
    }
    return get_bloginfo( 'description' );
}

function alexander_law_get_og_image() {
    if ( is_singular() && has_post_thumbnail() ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'hero' );
        if ( $src ) {
            return $src[0];
        }
    }
    return get_option( 'alexander_law_default_og_image' );
}
