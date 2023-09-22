<?php
/**
 * Preload styles and scripts.
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Preload styles and scripts.
 *
 * @author WebDevStudios
 */
function preload_scripts() {
	$asset_file_path = get_template_directory() . '/build/index.asset.php';

	if ( is_readable( $asset_file_path ) ) {
		$asset_file = include $asset_file_path;
	} else {
		$asset_file = array(
			'version'      => \wp_get_theme()->get( 'Version' ),
			'dependencies' => array( 'wp-polyfill' ),
		);
	}

	?>
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.css?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="style">
	<link rel="preload" href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/build/index.js?ver=<?php echo esc_html( $asset_file['version'] ); ?>" as="script">
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\preload_scripts', 1 );
