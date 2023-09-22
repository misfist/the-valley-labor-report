<?php
/**
 * Hooks
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Remove parentheses from categories widget
 *
 * @param  string $output
 * @return string $output
 */
function categories_post_count_filter( $output ): string {
	$output = str_replace( '(', '<span class="post-count"> ', $output );
	$output = str_replace( ')', ' </span>', $output );
	return $output;
}
add_filter( 'wp_list_categories', __NAMESPACE__ . '\categories_post_count_filter' );
