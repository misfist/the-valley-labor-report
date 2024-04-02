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
            'name'         => 'embellished',
            'label'        => __( 'Fancy', 'tvlr' ),
        )
	);
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );
