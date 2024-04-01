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
?>

<article <?php post_class( 'post-container card' ); ?>>
	<?php
	if( has_post_thumbnail() ) :
		?>
		<figure class="featured-image">
			<?php
			$size = 'large';
			the_post_thumbnail( $size );
			?>
		</figure>
		<!-- .featured-image -->
		<?php
	endif;
	?>

	<div class="entry-body card-body">
		<header class="entry-header">
			
			<?php the_title( '<h2 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

			<div class="entry-meta">
			<?php print_post_date(); ?>
			<?php print_post_author(); ?>
			</div>

		</header><!-- .entry-header -->

		<footer class="entry-footer card-actions">
			<?php
			echo get_the_term_list( $post->ID, 'category', '<div class="term">', '</div><div class="term">', '</div>' );
			?>
		</footer><!-- .entry-footer -->
	</div>
	<!-- .entry-body -->
</article><!-- #post-## -->
