<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

use function TVLR\print_post_date;
use function TVLR\print_post_author;
use function TVLR\print_entry_footer;
use function TVLR\print_post_taxonomies;
?>

<article <?php post_class( 'post-container' ); ?>>

	<?php 
	if( has_post_thumbnail() ) :
		?>
		<figure class="featured-image alignfull">
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
		<?php
		the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php print_post_date(); ?>
			<?php print_post_author(); ?>

			<div class="post-terms">
				<?php
				echo get_the_term_list( $post->ID, 'category', '<div class="term">', '</div><div class="term">', '</div>' );
				?>
			</div><!-- .post-terms -->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content has-global-padding">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. */
					esc_html__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tvlr' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links has-global-padding">' . esc_attr__( 'Pages:', 'tvlr' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer has-global-padding">
		<?php print_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
