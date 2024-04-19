<?php
/**
 * Block Bindings.
 *
 * @package tvlr
 */

namespace TVLR;


function register_block_bindings() {
	register_block_bindings_source( __NAMESPACE__ . '/featured-image', array(
		'label'              => __( 'Featured Image', 'tvlr' ),
		'get_value_callback' => __NAMESPACE__ . '\get_featured_image_url',
		'uses_context'       => [ 'postId' ]
	) );
}
add_action( 'init', __NAMESPACE__ . '\register_block_bindings' );


function get_featured_image_url( $source_args ) {
	global $post;
	if( ! $post || ! is_a( $post, '\WP_Post' ) ) {
		return null;
	}
	$post_id = $post->ID;
	$size = ( isset( $source_args['size'] ) ) ? esc_attr( $size ) : 'thumbnail';

	return get_the_post_thumbnail_url( $post_id, $size );
}