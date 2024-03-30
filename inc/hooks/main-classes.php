<?php
/**
 * Adds custom classes to apply to <main>
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Adds custom classes to apply to <main>
 *
 * @author WebDevStudios
 *
 * @param array $new_classes Classes for the <main> element.
 *
 * @return array main classes.
 */
function main_classes( $new_classes ) {

	$classes = array( 'site-main' );

	if ( ! empty( $new_classes ) ) {
		$classes = array_merge( $classes, $new_classes );
	}

	$classes = apply_filters( 'tvlr_main_classes', $classes );

	return implode( ' ', $classes );
}
