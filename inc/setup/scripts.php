<?php
/**
 * Enqueue scripts and styles.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Enqueue scripts and styles.
 *
 * @author WebDevStudios
 */
function scripts() {
	$asset_file_path = get_template_directory() . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => '1.0.0',
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	// Register styles & scripts.
	wp_enqueue_style( 'tvlr-styles', get_stylesheet_directory_uri() . '/build/index.css', array(), $asset_file['version'] );
	wp_enqueue_style( 'custom-preflight', get_stylesheet_directory_uri() . '/assets/tailwind-preflight.css', array(), $asset_file['version'] );
	wp_enqueue_script( 'tvlr-scripts', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\scripts' );

/**
 * Load Block Scripts
 *
 * @return void
 */
function editor_assets() {
	$asset_file_path = get_template_directory() . '/build/blocks.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-blocks', 'wp-filters' ),
		);
	}

	wp_enqueue_script(
		'tvlr-blocks',
		get_template_directory_uri() . '/build/blocks.js',
		$asset_file['dependencies'],
		$asset_file['version']
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\editor_assets' );