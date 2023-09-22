<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tvlr
 */
namespace The_Valley_Labor_Report;

/**
 * Register block styles.
 *
 * @return void
 */
function register_block_styles(): void {
	// Image: Borders.
	register_block_style(
		'core/image',
		array(
			'name'  => 'tvlr-border',
			'label' => esc_html__( 'Borders', 'tvlr' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );
