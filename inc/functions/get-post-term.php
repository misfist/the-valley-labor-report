<?php
/**
 * Get post term.
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
function get_post_term( $post_id = 0, $taxonomy = 'category', $field = 'name' ) : string {
	$post_id = ( $post_id ) ? $post_id : get_the_ID();
	$term = get_post_term_object( $post_id, $taxonomy );
	if( ! empty( $term ) && ! \is_wp_error( $term )  ) {
		return $term->{$field};
	}
	return '';
}

/**
 * Get Post Term Object
 * Retrieve a single term.
 *
 * @param  integer $post_id
 * @return mixed object \WP_Term || boolean false
 */
function get_post_term_object( $post_id = 0, $taxonomy = 'category' ) {
	$post_id = ( $post_id ) ? $post_id : get_the_ID();
	if ( function_exists( '\the_seo_framework' ) ) {
		$term = \the_seo_framework()->get_primary_term( $post_id, $taxonomy );
		if( $term ) {
			return $term;
		}
	} else {
		$term = \wp_get_post_terms( $post_id, $taxonomy, array( 'count' => 1 ) );
		if ( ! empty( $term ) && ! \is_wp_error( $term ) ) {
			return $term;
		}		
	}
	return false;
}