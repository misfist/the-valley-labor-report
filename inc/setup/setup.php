<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @author WebDevStudios
 */
function setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tvlr, refer to the
	 * README.md file in this theme to find and replace all
	 * references of tvlr
	 */
	load_theme_textdomain( 'tvlr', get_template_directory() . '/build/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-width', 1600, 800, false ); // 2:1

	update_option( 'thumbnail_size_w', 320 );
	update_option( 'thumbnail_size_h', 160 );
	update_option( 'thumbnail_crop', 1 ); // 2:1

	update_option( 'medium_size_w', 640 );
	update_option( 'medium_size_h', 640 );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'tvlr' ),
		)
	);

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 86,
			'width'       => 274,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Gutenberg support for full-width/wide alignment of supported blocks.
	add_theme_support( 'align-wide' );

	// Gutenberg editor styles support.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/editor.css' );
}

add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Add custom images sizes to block editor
 * 
 * @see https://developer.wordpress.org/reference/hooks/image_size_names_choose/
 *
 * @param  array $sizes
 * @return array
 */
function add_image_sizes( array $sizes ) : array {
    return array_merge( $sizes, array(
        'full-width' => __( 'Full Width', 'tvlr' ),
    ) );
}
add_filter( 'image_size_names_choose', __NAMESPACE__ . '\add_image_sizes' );
