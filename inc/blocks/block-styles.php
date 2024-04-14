<?php
/**
 * Block Style Functions.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register Block Styles
 *
 * @return void
 */
function register_block_styles() : void {
	register_block_style(
		'core/heading',
		array(
			'name'  => 'section-heading',
			'label' => __( 'Section Heading', 'tvlr' ),
		)
	);
	register_block_style(
		'core/heading',
		array(
			'name'  => 'embellished',
			'label' => __( 'Fancy', 'tvlr' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'intro',
			'label' => __( 'Intro', 'tvlr' ),
		)
	);

	register_block_style(
		'core/gallery',
		array(
			'name'  => 'logos',
			'label' => __( 'Logo Grid', 'tvlr' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );
