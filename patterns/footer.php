<?php
/**
 * Title: Footer
 * Slug: tvlr/footer
 * Categories: hidden
 * Inserter: no
 */
$copyright_info = esc_html__( ' Copyright &copy; ', 'tvlr' ) . esc_attr( gmdate( 'Y' ) ) . esc_html__( '. All Rights Reserved.', 'tvlr' );
?>
<!-- wp:group {"tagName":"div","className":"site-footer__inner","layout":{"type":"default","wideSize":"100vw"},"metadata":{"name":"Site Footer"}} -->
<div class="wp-block-group site-footer__inner">
	<!-- wp:site-logo {"width":250,"shouldSyncIcon":true} /-->

	<!-- wp:paragraph {
		"metadata":{
			"bindings":{
				"content":{
					"source":"TVLR/copyright"
				}
			}
		},
		"className": "copyright-info bound"
	} -->
	<p class="copyright-info"><?php echo $copyright_info; ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
