<?php
/**
 * Bon Air Media theme setup.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function bonair_media_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'bonair-media' ),
		)
	);

	add_image_size( 'bonair-card', 800, 450, true );
}
add_action( 'after_setup_theme', 'bonair_media_setup' );

function bonair_media_scripts() {
	wp_enqueue_style( 'bonair-media-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'bonair_media_scripts' );

/**
 * Trim excerpts to match the card layout.
 */
function bonair_media_excerpt_length( $length ) {
	return 28;
}
add_filter( 'excerpt_length', 'bonair_media_excerpt_length' );

function bonair_media_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'bonair_media_excerpt_more' );
