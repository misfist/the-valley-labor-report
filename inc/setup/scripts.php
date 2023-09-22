<?php
/**
 * Enqueue scripts and styles.
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

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
			'version'      => \wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/build/fonts/font-awesome/css/all.css', array(), '5.15.3', 'all' );
	$deps = array( 'font-awesome' );

	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	wp_enqueue_style( 'tvlr-styles', get_stylesheet_directory_uri() . '/build/index.css', $deps, $asset_file['version'], 'screen' );
	wp_enqueue_style( 'custom-preflight', get_stylesheet_directory_uri() . '/src/tailwind-preflight.css', array(), $asset_file['version'] );
	wp_enqueue_script( 'tvlr-scripts', get_stylesheet_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true );
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
		'quincy-blocks',
		get_template_directory_uri() . '/build/blocks.js',
		$asset_file['dependencies'],
		$asset_file['version']
	);
}
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\editor_assets' );

/**
 * Enqueue Block Assets
 *
 * @link https://developer.wordpress.org/reference/hooks/enqueue_block_assets/
 *
 * @return void
 */
function block_assets(): void {
	$asset_file_path = get_template_directory() . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => \wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	wp_enqueue_style( 'tvlr-styles', get_stylesheet_directory_uri() . '/build/editor.css', array( 'font-awesome' ), $asset_file['version'], 'screen' );
	wp_enqueue_style( 'custom-preflight', get_stylesheet_directory_uri() . '/src/tailwind-preflight.css', array(), $asset_file['version'] );
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\block_assets' );

/**
 * Dequeue WordPress core Block Library styles.
 *
 * @author WebDevStudios
 */
function deregister_core_block_styles() {
	// This will remove the inline styles for the following core blocks.
	$block_styles_to_remove = array(
		'heading',
		'paragraph',
		'table',
		'list',
		'post-template',
		'post-query',
	);

	foreach ( $block_styles_to_remove as $block_style ) {
		wp_deregister_style( 'wp-block-' . $block_style );
	}
}
// add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\deregister_core_block_styles' );

