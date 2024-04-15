<?php
/**
 * Custom template part areas
 *
 * @package tvlr
 */

 namespace TVLR;

/**
 * Add template part areas
 *
 * @link https://developer.wordpress.org/reference/hooks/default_wp_template_part_areas/
 *
 * @param  array $areas
 * @return array
 */
function template_part_areas( array $areas ) : array {
	$areas[] = array(
		'area'        => 'pre-footer',
		'area_tag'    => 'footer',
		'label'       => __( 'Pre-footer', 'tvlr' ),
		'description' => __( 'The Pre-footer template defines a page area directly above the site footer.', 'tvlr' ),
		'icon'        => 'footer',
		'area_tag'    => 'pre-footer',
	);
	$areas[] = array(
		'area'        => 'post-share',
		'area_tag'    => 'div',
		'label'       => __( 'Post Stare', 'tvlr' ),
		'description' => __( 'The Post Share template defines a page area that typically contains share features.', 'tvlr' ),
		'icon'        => 'share',
	);
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'aside',
		'label'       => __( 'Sidebar', 'tvlr' ),
		'description' => __( 'Template part area description', 'tvlr' ),
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );
