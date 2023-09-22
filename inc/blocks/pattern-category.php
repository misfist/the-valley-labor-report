<?php
/**
 * Block Categories
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Registers pattern categories.
 *
 * @since The Valley Labor Report 1.0
 *
 * @return void
 */
function register_pattern_category() {

	$patterns = array();

	$block_pattern_categories = array(
		'tvlr' => array( 'label' => __( 'The Valley Labor Report', 'tvlr' ) ),
	);

	$block_pattern_categories = apply_filters( 'tvlr_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! \WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_pattern_category', 9 );
