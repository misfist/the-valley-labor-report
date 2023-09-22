<?php
/**
 * Hooks
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Add customizer default values.
 *
 * @param array $options
 * @return array $options Updated values.
 */
function customizer_add_defaults( $options ) {
	$defaults = array(
		'tvlr_excerpt_length' => 30,
	);

	$options = wp_parse_args( $defaults, $options );

	return $options;
}
add_filter( 'tvlr_customizer_defaults', __NAMESPACE__ . '\customizer_add_defaults' );
