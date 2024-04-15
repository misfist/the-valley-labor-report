<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

use function TVLR\print_numeric_pagination;
use function TVLR\main_classes;

get_header(); ?>

<main id="main" class="<?php echo esc_attr( main_classes( array() ) ); ?>">

	<?php if ( have_posts() ) : ?>

	<header class="page-header archive-header">
		<?php
			the_archive_title( '<h1 class="page-title archive-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

	<div class="grid post-list">
		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			if ( is_single() ) {
				get_template_part( 'template-parts/content', get_post_type() );
			} else {
				get_template_part( 'template-parts/loops/content', get_post_type() );
			}

		endwhile;
		?>

	</div>
	<!-- post-list -->

		<?php
		print_numeric_pagination();

	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>

</main><!-- #main -->

<?php get_footer();
?>
