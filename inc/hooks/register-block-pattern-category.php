<?php
/**
 * Registers custom block pattern categories for the WD_S theme.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Registers custom block pattern categories for the WD_S theme.
 */
function register_custom_block_pattern_category() {

	register_block_pattern_category(
		'tvlr-patterns',
		array(
			'label' => __( 'WDS Patterns', 'tvlr' ),
		)
	);

	// Remove default patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', __NAMESPACE__ . '\register_custom_block_pattern_category', 9 );
