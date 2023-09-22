<?php
/**
 * Setup.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @return void
 */
function setup(): void {
	/*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on The Valley Labor Report, use a find and replace
	* to change 'tvlr' to the name of your theme in all the template files.
	*/
	load_theme_textdomain( 'tvlr', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'align-wide' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support(
		'post-formats',
		array(
			'image',
			'video',
			'audio',
			'gallery',
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Post Thumbnails.
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 400, true );
add_image_size( 'tvlr_post_thumb', 600, 400, true );
