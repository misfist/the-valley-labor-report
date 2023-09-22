<?php
/**
 * Display post taxonomies template function.
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report\tvlr;

/**
 * Prints HTML with taxonomies for the current post.
 *
 * @author WebDevStudios
 *
 * @param array $args Configuration args.
 */
function print_post_taxonomies( $args = [] ) {

	// Set defaults.
	$defaults = [
		'tax_name' => '',
		'post_id'  => get_the_ID(),
		'linked'   => true,
		'in_list'  => true,
	];

	// Parse args.
	$args = wp_parse_args( $args, $defaults );

	// Bail early if we have no post id or taxonomy name.
	if ( empty( $args['post_id'] ) || empty( $args['tax_name'] ) ) :
		return;
	endif;

	// Get the terms.
	$tvlr_terms = get_the_terms( $args['post_id'], $args['tax_name'] );

	// Set up the display.
	$tvlr_tagname = $args['in_list'] ? 'ul' : 'span';
	?>

	<<?php echo $tvlr_tagname; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?> class="post-taxonomies">
		<?php
		foreach ( $tvlr_terms as $tvlr_term ) :
			echo wp_kses_post( $args['in_list'] ? '<li class="taxonomy-item">' : '<span class="taxonomy-item">' );
			if ( $args['linked'] ) :
				print_element(
					'anchor',
					[
						'text' => $tvlr_term->name,
						'href' => get_term_link( $tvlr_term->term_id, $args['tax_name'] ),
					]
				);
			else :
				echo esc_html( $tvlr_term->name );
			endif;
			echo $args['in_list'] ? '</li>' : '</span>';
		endforeach;
		?>
	</<?php echo $tvlr_tagname; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>

	<?php
}
