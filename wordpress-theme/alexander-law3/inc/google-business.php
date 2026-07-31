<?php
/**
 * Google Business Profile API Integration
 *
 * OAuth 2.0 client + API wrappers for the Business Profile APIs:
 *   - mybusinessaccountmanagement.googleapis.com (accounts)
 *   - mybusinessbusinessinformation.googleapis.com (locations)
 *   - mybusiness.googleapis.com v4 (reviews, localPosts)
 *
 * Setup steps live in the bundled README. This file expects credentials in
 * the WordPress options table (set via Settings > Google Business).
 *
 * @package Alexander_Law
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Alexander_Law_GBP {

    const OPT_CLIENT_ID     = 'alexander_law_gbp_client_id';
    const OPT_CLIENT_SECRET = 'alexander_law_gbp_client_secret';
    const OPT_TOKENS        = 'alexander_law_gbp_tokens';
    const OPT_ACCOUNT       = 'alexander_law_gbp_account';
    const OPT_LOCATION      = 'alexander_law_gbp_location';
    const OPT_REVIEWS       = 'alexander_law_gbp_reviews_cache';
    const OPT_POSTS         = 'alexander_law_gbp_posts_cache';
    const OPT_LAST_SYNC     = 'alexander_law_gbp_last_sync';
    const OPT_LAST_ERROR    = 'alexander_law_gbp_last_error';

    const SCOPE = 'https://www.googleapis.com/auth/business.manage';

    public static function redirect_uri() {
        return admin_url( 'admin-post.php?action=alexander_law_gbp_oauth' );
    }

    public static function is_configured() {
        return get_option( self::OPT_CLIENT_ID ) && get_option( self::OPT_CLIENT_SECRET );
    }

    public static function is_connected() {
        $tokens = get_option( self::OPT_TOKENS );
        return is_array( $tokens ) && ! empty( $tokens['refresh_token'] );
    }

    public static function authorize_url( $state = '' ) {
        $params = array(
            'client_id'     => get_option( self::OPT_CLIENT_ID ),
            'redirect_uri'  => self::redirect_uri(),
            'response_type' => 'code',
            'scope'         => self::SCOPE,
            'access_type'   => 'offline',
            'prompt'        => 'consent',
            'state'         => $state ?: wp_create_nonce( 'alexander_law_gbp_oauth' ),
        );
        return 'https://accounts.google.com/o/oauth2/v2/auth?' . http_build_query( $params );
    }

    public static function exchange_code( $code ) {
        $response = wp_remote_post( 'https://oauth2.googleapis.com/token', array(
            'timeout' => 20,
            'body'    => array(
                'code'          => $code,
                'client_id'     => get_option( self::OPT_CLIENT_ID ),
                'client_secret' => get_option( self::OPT_CLIENT_SECRET ),
                'redirect_uri'  => self::redirect_uri(),
                'grant_type'    => 'authorization_code',
            ),
        ) );

        if ( is_wp_error( $response ) ) {
            return $response;
        }

        $data = json_decode( wp_remote_retrieve_body( $response ), true );
        if ( empty( $data['access_token'] ) ) {
            return new WP_Error( 'gbp_token_failed', isset( $data['error_description'] ) ? $data['error_description'] : 'Token exchange failed' );
        }

        $data['expires_at'] = time() + intval( $data['expires_in'] ?? 3600 ) - 60;
        update_option( self::OPT_TOKENS, $data, false );
        return $data;
    }

    public static function access_token() {
        $tokens = get_option( self::OPT_TOKENS );
        if ( ! is_array( $tokens ) || empty( $tokens['refresh_token'] ) ) {
            return new WP_Error( 'gbp_not_connected', 'Not connected to Google Business Profile.' );
        }

        if ( ! empty( $tokens['access_token'] ) && ! empty( $tokens['expires_at'] ) && $tokens['expires_at'] > time() ) {
            return $tokens['access_token'];
        }

        $response = wp_remote_post( 'https://oauth2.googleapis.com/token', array(
            'timeout' => 20,
            'body'    => array(
                'client_id'     => get_option( self::OPT_CLIENT_ID ),
                'client_secret' => get_option( self::OPT_CLIENT_SECRET ),
                'refresh_token' => $tokens['refresh_token'],
                'grant_type'    => 'refresh_token',
            ),
        ) );

        if ( is_wp_error( $response ) ) {
            return $response;
        }

        $data = json_decode( wp_remote_retrieve_body( $response ), true );
        if ( empty( $data['access_token'] ) ) {
            return new WP_Error( 'gbp_refresh_failed', $data['error_description'] ?? 'Token refresh failed' );
        }

        $tokens['access_token'] = $data['access_token'];
        $tokens['expires_at']   = time() + intval( $data['expires_in'] ?? 3600 ) - 60;
        update_option( self::OPT_TOKENS, $tokens, false );
        return $tokens['access_token'];
    }

    public static function disconnect() {
        delete_option( self::OPT_TOKENS );
        delete_option( self::OPT_ACCOUNT );
        delete_option( self::OPT_LOCATION );
        delete_option( self::OPT_REVIEWS );
        delete_option( self::OPT_POSTS );
        delete_option( self::OPT_LAST_SYNC );
    }

    /**
     * Authenticated GET against a full URL.
     */
    private static function get( $url ) {
        $token = self::access_token();
        if ( is_wp_error( $token ) ) {
            return $token;
        }

        $response = wp_remote_get( $url, array(
            'timeout' => 20,
            'headers' => array(
                'Authorization' => 'Bearer ' . $token,
                'Accept'        => 'application/json',
            ),
        ) );

        if ( is_wp_error( $response ) ) {
            return $response;
        }

        $code = wp_remote_retrieve_response_code( $response );
        $body = json_decode( wp_remote_retrieve_body( $response ), true );

        if ( $code < 200 || $code >= 300 ) {
            $msg = $body['error']['message'] ?? wp_remote_retrieve_response_message( $response );
            return new WP_Error( 'gbp_api_error', "HTTP $code: $msg" );
        }
        return $body;
    }

    public static function list_accounts() {
        return self::get( 'https://mybusinessaccountmanagement.googleapis.com/v1/accounts' );
    }

    public static function list_locations( $account_name ) {
        $read_mask = rawurlencode( 'name,title,storefrontAddress,websiteUri,phoneNumbers,metadata' );
        $url = "https://mybusinessbusinessinformation.googleapis.com/v1/{$account_name}/locations?readMask={$read_mask}&pageSize=100";
        return self::get( $url );
    }

    public static function fetch_reviews() {
        $account  = get_option( self::OPT_ACCOUNT );
        $location = get_option( self::OPT_LOCATION );
        if ( ! $account || ! $location ) {
            return new WP_Error( 'gbp_no_location', 'No GBP location selected.' );
        }
        return self::get( "https://mybusiness.googleapis.com/v4/{$account}/{$location}/reviews?pageSize=50" );
    }

    public static function fetch_posts() {
        $account  = get_option( self::OPT_ACCOUNT );
        $location = get_option( self::OPT_LOCATION );
        if ( ! $account || ! $location ) {
            return new WP_Error( 'gbp_no_location', 'No GBP location selected.' );
        }
        return self::get( "https://mybusiness.googleapis.com/v4/{$account}/{$location}/localPosts?pageSize=20" );
    }

    /**
     * Sync reviews + posts and store normalised records as options.
     */
    public static function sync() {
        $errors = array();

        $reviews = self::fetch_reviews();
        if ( is_wp_error( $reviews ) ) {
            $errors[] = 'reviews: ' . $reviews->get_error_message();
        } else {
            $normalised = array();
            foreach ( ( $reviews['reviews'] ?? array() ) as $r ) {
                $normalised[] = array(
                    'id'           => $r['reviewId'] ?? '',
                    'reviewer'     => $r['reviewer']['displayName'] ?? 'Anonymous',
                    'avatar'       => $r['reviewer']['profilePhotoUrl'] ?? '',
                    'rating'       => self::star_rating_to_int( $r['starRating'] ?? '' ),
                    'comment'      => $r['comment'] ?? '',
                    'create_time'  => $r['createTime'] ?? '',
                    'update_time'  => $r['updateTime'] ?? '',
                    'reply'        => $r['reviewReply']['comment'] ?? '',
                );
            }
            update_option( self::OPT_REVIEWS, $normalised, false );
        }

        $posts = self::fetch_posts();
        if ( is_wp_error( $posts ) ) {
            $errors[] = 'posts: ' . $posts->get_error_message();
        } else {
            $normalised = array();
            foreach ( ( $posts['localPosts'] ?? array() ) as $p ) {
                $normalised[] = array(
                    'name'        => $p['name'] ?? '',
                    'summary'     => $p['summary'] ?? '',
                    'state'       => $p['state'] ?? '',
                    'topic_type'  => $p['topicType'] ?? '',
                    'media'       => $p['media'][0]['googleUrl'] ?? '',
                    'cta_type'    => $p['callToAction']['actionType'] ?? '',
                    'cta_url'     => $p['callToAction']['url'] ?? '',
                    'search_url'  => $p['searchUrl'] ?? '',
                    'create_time' => $p['createTime'] ?? '',
                    'update_time' => $p['updateTime'] ?? '',
                );
            }
            update_option( self::OPT_POSTS, $normalised, false );
        }

        update_option( self::OPT_LAST_SYNC, time(), false );
        if ( $errors ) {
            update_option( self::OPT_LAST_ERROR, implode( ' | ', $errors ), false );
        } else {
            delete_option( self::OPT_LAST_ERROR );
        }

        return empty( $errors );
    }

    private static function star_rating_to_int( $rating ) {
        $map = array(
            'ONE'   => 1,
            'TWO'   => 2,
            'THREE' => 3,
            'FOUR'  => 4,
            'FIVE'  => 5,
        );
        return $map[ $rating ] ?? 0;
    }

    public static function get_reviews() {
        $reviews = get_option( self::OPT_REVIEWS );
        return is_array( $reviews ) ? $reviews : array();
    }

    public static function get_posts() {
        $posts = get_option( self::OPT_POSTS );
        return is_array( $posts ) ? $posts : array();
    }

    public static function aggregate_rating() {
        $reviews = self::get_reviews();
        $reviews = array_filter( $reviews, function( $r ) { return $r['rating'] > 0; } );
        if ( ! $reviews ) {
            return null;
        }
        $sum = array_sum( array_column( $reviews, 'rating' ) );
        return array(
            'rating' => round( $sum / count( $reviews ), 1 ),
            'count'  => count( $reviews ),
        );
    }
}

/**
 * OAuth callback — Google redirects here with ?code=...
 */
function alexander_law_gbp_oauth_callback() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( 'Insufficient permissions.' );
    }

    if ( isset( $_GET['error'] ) ) {
        wp_safe_redirect( add_query_arg( 'gbp', 'denied', admin_url( 'options-general.php?page=alexander-law-gbp' ) ) );
        exit;
    }

    $code  = sanitize_text_field( $_GET['code'] ?? '' );
    $state = sanitize_text_field( $_GET['state'] ?? '' );
    if ( ! $code ) {
        wp_die( 'Missing authorization code.' );
    }
    if ( ! $state || ! wp_verify_nonce( $state, 'alexander_law_gbp_oauth' ) ) {
        wp_die( 'Invalid OAuth state. Start the connection again.' );
    }

    $result = Alexander_Law_GBP::exchange_code( $code );
    $status = is_wp_error( $result ) ? 'error' : 'connected';
    if ( is_wp_error( $result ) ) {
        update_option( Alexander_Law_GBP::OPT_LAST_ERROR, $result->get_error_message(), false );
    }
    wp_safe_redirect( add_query_arg( 'gbp', $status, admin_url( 'options-general.php?page=alexander-law-gbp' ) ) );
    exit;
}
add_action( 'admin_post_alexander_law_gbp_oauth', 'alexander_law_gbp_oauth_callback' );

/**
 * Cron: hourly sync.
 */
function alexander_law_gbp_cron_sync() {
    if ( Alexander_Law_GBP::is_connected() ) {
        Alexander_Law_GBP::sync();
    }
}
add_action( 'alexander_law_gbp_sync_event', 'alexander_law_gbp_cron_sync' );

function alexander_law_gbp_schedule_cron() {
    if ( ! wp_next_scheduled( 'alexander_law_gbp_sync_event' ) ) {
        wp_schedule_event( time() + 300, 'hourly', 'alexander_law_gbp_sync_event' );
    }
}
add_action( 'init', 'alexander_law_gbp_schedule_cron' );

register_deactivation_hook( __FILE__, function() {
    wp_clear_scheduled_hook( 'alexander_law_gbp_sync_event' );
} );

/**
 * Template helpers + shortcodes.
 */
function alexander_law_get_gbp_reviews( $limit = 5 ) {
    $reviews = Alexander_Law_GBP::get_reviews();
    usort( $reviews, function( $a, $b ) {
        return strcmp( $b['create_time'], $a['create_time'] );
    } );
    return array_slice( $reviews, 0, $limit );
}

function alexander_law_get_gbp_posts( $limit = 5 ) {
    $posts = Alexander_Law_GBP::get_posts();
    $posts = array_filter( $posts, function( $p ) { return $p['state'] === 'LIVE'; } );
    usort( $posts, function( $a, $b ) {
        return strcmp( $b['create_time'], $a['create_time'] );
    } );
    return array_slice( $posts, 0, $limit );
}

function alexander_law_gbp_reviews_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'limit' => 5,
        'min'   => 0,
    ), $atts, 'gbp_reviews' );

    $reviews = alexander_law_get_gbp_reviews( intval( $atts['limit'] ) );
    if ( intval( $atts['min'] ) > 0 ) {
        $reviews = array_filter( $reviews, function( $r ) use ( $atts ) {
            return $r['rating'] >= intval( $atts['min'] );
        } );
    }

    if ( ! $reviews ) {
        return '<div class="gbp-reviews-empty"><em>No Google reviews to display yet.</em></div>';
    }

    ob_start();
    echo '<div class="gbp-reviews">';
    foreach ( $reviews as $r ) {
        $stars = str_repeat( '★', intval( $r['rating'] ) ) . str_repeat( '☆', 5 - intval( $r['rating'] ) );
        echo '<article class="gbp-review" itemscope itemtype="https://schema.org/Review">';
        echo '<header class="gbp-review-header">';
        if ( $r['avatar'] ) {
            echo '<img class="gbp-review-avatar" src="' . esc_url( $r['avatar'] ) . '" alt="" loading="lazy" width="40" height="40" />';
        }
        echo '<div>';
        echo '<span class="gbp-review-author" itemprop="author">' . esc_html( $r['reviewer'] ) . '</span>';
        echo '<span class="gbp-review-stars" aria-label="' . esc_attr( $r['rating'] ) . ' out of 5">' . esc_html( $stars ) . '</span>';
        echo '</div>';
        echo '</header>';
        if ( $r['comment'] ) {
            echo '<blockquote class="gbp-review-body" itemprop="reviewBody">' . esc_html( $r['comment'] ) . '</blockquote>';
        }
        if ( $r['reply'] ) {
            echo '<div class="gbp-review-reply"><strong>Owner reply:</strong> ' . esc_html( $r['reply'] ) . '</div>';
        }
        echo '</article>';
    }
    echo '</div>';
    return ob_get_clean();
}
add_shortcode( 'gbp_reviews', 'alexander_law_gbp_reviews_shortcode' );

function alexander_law_gbp_posts_shortcode( $atts ) {
    $atts = shortcode_atts( array( 'limit' => 5 ), $atts, 'gbp_posts' );
    $posts = alexander_law_get_gbp_posts( intval( $atts['limit'] ) );

    if ( ! $posts ) {
        return '<div class="gbp-posts-empty"><em>No Google updates to display yet.</em></div>';
    }

    ob_start();
    echo '<div class="gbp-posts">';
    foreach ( $posts as $p ) {
        $date = $p['create_time'] ? date_i18n( get_option( 'date_format' ), strtotime( $p['create_time'] ) ) : '';
        echo '<article class="gbp-post">';
        if ( $p['media'] ) {
            echo '<img class="gbp-post-image" src="' . esc_url( $p['media'] ) . '" alt="" loading="lazy" />';
        }
        echo '<div class="gbp-post-body">';
        if ( $date ) {
            echo '<time class="gbp-post-date">' . esc_html( $date ) . '</time>';
        }
        echo '<p class="gbp-post-summary">' . esc_html( wp_trim_words( $p['summary'], 40 ) ) . '</p>';
        if ( $p['cta_url'] ) {
            $label = ucwords( strtolower( str_replace( '_', ' ', $p['cta_type'] ?: 'Learn more' ) ) );
            echo '<a class="gbp-post-cta btn btn-secondary" href="' . esc_url( $p['cta_url'] ) . '" rel="noopener">' . esc_html( $label ) . '</a>';
        } elseif ( $p['search_url'] ) {
            echo '<a class="gbp-post-cta btn btn-secondary" href="' . esc_url( $p['search_url'] ) . '" rel="noopener">View on Google</a>';
        }
        echo '</div></article>';
    }
    echo '</div>';
    return ob_get_clean();
}
add_shortcode( 'gbp_posts', 'alexander_law_gbp_posts_shortcode' );
