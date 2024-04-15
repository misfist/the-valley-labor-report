<?php
/**
 * Display post taxonomies template function.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Get Post Term
 * Retrieve specific term field
 *
 * @param  integer $post_id
 * @param  string  $taxonomy
 * @return string Term {field}
 */
function print_post_term( $post_id = 0, $taxonomy = 'category', $field = 'name' ) : string {
	$post_id = ( $post_id ) ? $post_id : get_the_ID();
	$term    = get_post_term( $post_id, $taxonomy, $field );
	if ( ! empty( $term ) && ! \is_wp_error( $term ) ) {
		printf( '<div class="post-term prepend">%s</div><!-- .post-term -->', $term->{$field} );
	}
}
