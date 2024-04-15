<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tvlr
 */

?>
	<div class="site-pre-footer">
		<?php block_template_part( 'pre-footer' ); ?>
	</div><!-- .site-pre-footer -->

	<footer class="wp-block-template-part site-footer">
		<?php block_footer_area(); ?>
	</footer>

	<?php wp_footer(); ?>

</body>

</html>
