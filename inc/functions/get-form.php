<?php
/**
 * Get a form.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Get form ID
 *
 * @param  [type] $args
 * @return void
 */
function get_form_id( $args ) {
    $form = get_form( $args );
    if( $form ) {
        return $form->ID;
    }
    return false;
}

/**
 * Get form
 *
 * @param  array $args
 * @return mixed
 */
function get_form( $args ) {

	$defaults = array(
        'post_type' =>'wpforms',
		'posts_per_page' => 1,
	);

	$args = wp_parse_args( $args, $defaults );

	$form_query = new \WP_Query( $args );

	if ( $form_query ->have_posts() ) {
		return $form_query->posts[0];
	}

	return false;
}
