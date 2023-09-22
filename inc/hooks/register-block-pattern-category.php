<?php
/**
 * Registers custom block pattern categories for the WD_S theme.
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report\tvlr;

/**
 * Registers custom block pattern categories for the WD_S theme.
 */
function tvlr_register_block_pattern_category() {

	register_block_pattern_category(
		'wds-patterns',
		[
			'label' => __( 'WDS Patterns', 'tvlr' ),
		]
	);

	// Remove default patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', __NAMESPACE__ . '\tvlr_register_block_pattern_category', 9 );
