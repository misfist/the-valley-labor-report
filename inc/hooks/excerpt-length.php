<?php
/**
 * Hooks
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Returns theme mod value saved for option merging with default option if available.
 *
 * @since 1.0
 */
function gtm( $option ) {
	$defaults = apply_filters( 'tvlr_customizer_defaults', true );

	return isset( $defaults[ $option ] ) ? get_theme_mod( $option, $defaults[ $option ] ) : get_theme_mod( $option );
}

/**
 * Sets the post excerpt length to n words.
 *
 * function tied to the excerpt_length filter hook.
 *
 * @uses filter excerpt_length
 *
 * @param  integer $length The maximum word length of excerpt.
 * @return integer $length
 */
function excerpt_length( $length ): int {
	if ( is_admin() ) {
		return $length;
	}

	$length = gtm( 'tvlr_excerpt_length' );

	return absint( $length );
}
add_filter( 'excerpt_length', __NAMESPACE__ . '\excerpt_length', 999 );

/**
 * Customize excerpt more.
 *
 * @param  string $more_string The 'more' string.
 * @return string
 */
function excerpt_more( $more_string ): string {
	if ( is_admin() ) {
		return $more_string;
	} else {
		return '... ';
	}
}
add_filter( 'excerpt_more', __NAMESPACE__ . '\excerpt_more' );
