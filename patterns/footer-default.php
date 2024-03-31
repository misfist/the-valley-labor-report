<?php
/**
 * Title: Default Footer
 * Slug: tvlr/footer-default
 * Description: Footer with site logo and menus.
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package tvlr
 */
$copyright_info = esc_html__( ' Copyright &copy; ', 'tvlr' ) . esc_attr( gmdate( 'Y' ) ) . esc_html__( '. All Rights Reserved.', 'tvlr' );

?>
<!-- wp:group {"tagName":"div","className":"site-footer__inner","layout":{"type":"default","wideSize":"100vw"},"metadata":{"name":"Site Footer"}} -->
<div class="wp-block-group site-footer__inner">
    <!-- wp:site-logo {"width":250,"shouldSyncIcon":true} /-->

	<!-- wp:paragraph -->
	<p>
	<?php echo $copyright_info; ?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
