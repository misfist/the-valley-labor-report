<?php
/**
 * Title: Featured Content Hero - 2 Columns
 * Slug: tvlr/featured-hero-2-col
 * Categories: posts
 */
?>

<!-- wp:group {"tagName":"section","className":"section featured-posts","layout":{"type":"default"},"metadata":{"name":"Featured Posts"}} -->
<section class="wp-block-group section featured-posts">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			
			<!-- wp:group {"tagName":"header","metadata":{"name":"Section Header"},"className":"section-header","layout":{"type":"default"}} -->
			<header class="wp-block-group section-header">
				<!-- wp:heading {"className":"section-heading","placeholder":"<?php esc_attr_e( 'Add Header...', 'tvlr' ); ?>"} -->
				<h2 class="wp-block-heading"></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"view-all"} -->
				<p class="view-all"><a href=""><?php esc_attr_e( 'View All', 'tvlr' ); ?></a></p>
				<!-- /wp:paragraph -->
			</header>
			<!-- /wp:group -->

			<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"default","inherit":false,"perPage":1},"displayLayout":{"type":"div"},"layout":{"type":"default"},"tagName":"div"} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"className":"featured-post"} -->

					<!-- wp:pattern {"slug":"tvlr/post-template"} /-->
					
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:group {"tagName":"header","metadata":{"name":"Section Header"},"className":"section-header","layout":{"type":"default"}} -->
			<header class="wp-block-group section-header">
				<!-- wp:heading {"className":"section-heading","placeholder":"<?php esc_attr_e( 'Add Header...', 'tvlr' ); ?>"} -->
				<h2 class="wp-block-heading"></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"view-all"} -->
				<p class="view-all"><a href=""><?php esc_attr_e( 'View All', 'tvlr' ); ?></a></p>
				<!-- /wp:paragraph -->
			</header>
			<!-- /wp:group -->
			
			<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"default","inherit":false,"perPage":1},"displayLayout":{"type":"div"},"layout":{"type":"default"},"tagName":"div"} -->
			<div class="wp-block-query">
				<!-- wp:post-template {"className":"featured-post"} -->

					<!-- wp:pattern {"slug":"tvlr/post-template"} /-->
					
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->

		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->