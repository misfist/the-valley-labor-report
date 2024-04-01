<?php
/**
 * Block Pattern Functions.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register Block Pattern Categories
 *
 * @return void
 */
function register_block_pattern_categories() : void {
	register_block_pattern_category(
		'social',
		array(
			'label' => __( 'Social', 'tvlr' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_pattern_categories' );
