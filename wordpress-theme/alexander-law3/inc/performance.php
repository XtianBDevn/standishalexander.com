<?php
/**
 * Performance + Sitemap/Robots
 *
 * @package Alexander_Law
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Append theme custom post types to the WP core sitemap.
 */
add_filter( 'wp_sitemaps_post_types', function( $post_types ) {
    foreach ( array( 'practice_area', 'case_result' ) as $type ) {
        $obj = get_post_type_object( $type );
        if ( $obj ) {
            $post_types[ $type ] = $obj;
        }
    }
    return $post_types;
} );

/**
 * Append sitemap reference to robots.txt.
 */
add_filter( 'robots_txt', function( $output, $public ) {
    if ( ! $public ) {
        return $output;
    }
    $output .= "\nSitemap: " . home_url( '/wp-sitemap.xml' ) . "\n";
    $output .= "Disallow: /wp-admin/\n";
    $output .= "Allow: /wp-admin/admin-ajax.php\n";
    return $output;
}, 10, 2 );

/**
 * Preconnect / dns-prefetch hints for third-party origins.
 */
add_filter( 'wp_resource_hints', function( $hints, $relation ) {
    if ( 'preconnect' === $relation ) {
        $hints[] = array( 'href' => 'https://fonts.googleapis.com', 'crossorigin' );
        $hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' );
        $hints[] = array( 'href' => 'https://unpkg.com', 'crossorigin' );
    }
    if ( 'dns-prefetch' === $relation ) {
        $hints[] = '//lh3.googleusercontent.com'; // GBP review avatars + post images
        $hints[] = '//maps.googleapis.com';
    }
    return $hints;
}, 10, 2 );

/**
 * Lazy-load + async-decode all content images, ensure width/height attrs.
 */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );

add_filter( 'wp_get_attachment_image_attributes', function( $attr ) {
    if ( empty( $attr['loading'] ) ) {
        $attr['loading'] = 'lazy';
    }
    if ( empty( $attr['decoding'] ) ) {
        $attr['decoding'] = 'async';
    }
    return $attr;
} );

/**
 * Defer non-critical scripts. Skip jQuery and admin.
 */
add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( is_admin() ) {
        return $tag;
    }
    $defer = array( 'alexander-law-script', 'leaflet' );
    if ( in_array( $handle, $defer, true ) && false === strpos( $tag, 'defer' ) ) {
        $tag = str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}, 10, 2 );

/**
 * Preload primary brand font for faster LCP.
 */
add_action( 'wp_head', function() {
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Playfair+Display:wght@600;700&display=swap" />' . "\n";
}, 1 );
