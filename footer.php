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

use function TVLR\print_footer_block;

?>
	<footer class="wp-block-template-part site-footer">
		<?php block_footer_area(); ?>
	</footer>

	<?php wp_footer(); ?>

</body>

</html>
