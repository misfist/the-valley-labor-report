<?php
/**
 * Customize the [...] on the_excerpt();
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Customize the [...] on the_excerpt();
 *
 * @author WebDevStudios
 *
 * @return string Read more link.
 */
function excerpt_more() {
	return sprintf( ' <a class="more-link" href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), esc_html__( 'Read more...', 'tvlr' ) );
}

add_filter( 'excerpt_more', __NAMESPACE__ . '\excerpt_more' );
