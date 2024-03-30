<?php
/**
 * Returns true if a blog has more than 1 category, else false.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Returns true if a blog has more than 1 category, else false.
 *
 * @author WebDevStudios
 *
 * @return bool Whether the blog has more than one category.
 */
function get_categorized_blog() {
	$category_count = get_transient( 'tvlr_categories' );

	if ( false === $category_count ) {
		$category_count_query = get_categories( array( 'fields' => 'count' ) );

		$category_count = isset( $category_count_query[0] ) ? (int) $category_count_query[0] : 0;

		set_transient( 'tvlr_categories', $category_count );
	}

	return $category_count > 1;
}
