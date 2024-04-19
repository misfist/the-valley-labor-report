<?php
/**
 * Block Bindings.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register block binding source
 * 
 * @see https://developer.wordpress.org/reference/functions/register_block_bindings_source/
 *
 * @return void
 */
function register_block_bindings() : void {
	register_block_bindings_source( __NAMESPACE__ . '/featured-image', array(
		'label'              => __( 'Featured Image', 'tvlr' ),
		'get_value_callback' => __NAMESPACE__ . '\get_featured_image_url',
		'uses_context'       => [ 'postId' ]
	) );

	register_block_bindings_source( __NAMESPACE__ . '/copyright', array(
		'label'              => __( 'Copyright', 'tvlr' ),
		'get_value_callback' => __NAMESPACE__ . '\get_copyright',
	) );
}
add_action( 'init', __NAMESPACE__ . '\register_block_bindings' );

/**
 * Callback
 *
 * @param  array $source_args
 * @return mixed
 */
function get_featured_image_url( $source_args ) {
	global $post;
	if( ! $post || ! is_a( $post, '\WP_Post' ) ) {
		return null;
	}
	$post_id = $post->ID;
	$size = ( isset( $source_args['size'] ) ) ? esc_attr( $size ) : 'thumbnail';

	return get_the_post_thumbnail_url( $post_id, $size );
}

/**
 * Return copyright text
 *
 * @return string
 */
function get_copyright() : string {
	return '&copy;' . date( 'Y' );
}