<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tvlr
 */

use function TVLR\print_numeric_pagination;
use function TVLR\main_classes;

get_header(); ?>
	<div class="wp-site-blocks">
		<main id="main" class="<?php echo esc_attr( main_classes( array() ) ); ?>">

			<?php
			if ( have_posts() ) :
				?>
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
	</div><!-- .wp-site-blocks -->

<?php get_footer(); ?>
