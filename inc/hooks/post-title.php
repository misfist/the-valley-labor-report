<?php
/**
 * Filters title with `the_title` filter.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Prepend Term
 * If term is set to prepend term, render term name in front for title
 * 
 * @see https://developer.wordpress.org/reference/hooks/the_title/
 *
 * @param  string $post_title
 * @param  int $post_id
 * @return string
 */
function prepend_term( $post_title, $post_id, $taxonomy = 'category' ) : string {
	if( is_admin() ) {
		return $post_title;
	}
	$term = get_post_term_object( $post_id, $taxonomy );
	if( ! empty( $term ) ) {
		$is_prepended = get_term_meta( $term->term_id, 'prepend_title', true );
		if( $is_prepended ) {
			$term_text = sprintf( '<span class="post-term prepend">%s</span><!-- .post-term -->', $term->name );
			return $term_text . $post_title;
		}
	}
	return $post_title;
}
// \add_filter( 'the_title', __NAMESPACE__ . '\prepend_term', null, 2 );
