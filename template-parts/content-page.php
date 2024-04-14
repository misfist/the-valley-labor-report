<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	if ( has_post_thumbnail() ) :
		?>
		<figure 
			class="featured-image alignfull">
			<?php
			$size = 'full';
			the_post_thumbnail( $size );
			?>
		</figure>
		<!-- .featured-image -->
		<?php
	endif;
	?>

	<header class="entry-header has-global-padding">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content has-global-padding">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links has-global-padding">' . esc_html__( 'Pages:', 'tvlr' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer has-global-padding">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'tvlr' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<div class="edit-link">',
					'</div>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-## -->
