<?php
/**
 * Register custom block category(ies).
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register_tvlr_category
 *
 * @param array $categories block categories.
 * @return array $categories block categories.
 * @author Inna Gutnik <inna.Gutnik@webdevstudios.com>
 * @since  2023-05-30
 */
function register_tvlr_category( $categories ) {
	$custom_block_category = array(
		'slug'  => __( 'tvlr-blocks-category', 'tvlr' ),
		'title' => __( 'WDS Blocks', 'tvlr' ),
	);

	$categories_sorted    = array();
	$categories_sorted[0] = $custom_block_category;

	foreach ( $categories as $category ) {
		$categories_sorted[] = $category;
	}

	return $categories_sorted;
}

add_filter( 'block_categories_all', __NAMESPACE__ . '\register_tvlr_category', 10, 1 );
