<?php
/**
 * WDS wd_f functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report\tvlr;

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function include_inc_files() {
	$files = [
		'inc/functions/', // Custom functions that act independently of the theme templates.
		'inc/hooks/', // Load custom filters and hooks.
		'inc/post-types/', // Load custom post types.
		'inc/setup/', // Theme setup.
		'inc/shortcodes/', // Load shortcodes.
		'inc/template-tags/', // Custom template tags for this theme.
		'inc/wpcli/', // WPClI to create custom blocks.
	];

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}

include_inc_files();

/**
 * Help admin documentation pages.
 */
require get_template_directory() . '/docs/help-admin-pages.php';
