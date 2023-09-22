<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */
namespace The_Valley_Labor_Report;

/**
 * Get all the include files for the theme.
 *
 * @return void
 */
function include_inc_files() : void {
	$files = array(
		'inc/core/',
		'inc/lib/',
		'inc/blocks/',
		'inc/functions/',
		'inc/hooks/',
		'inc/setup/',
		'inc/template-tags/',
	);

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
