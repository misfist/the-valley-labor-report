<?php
/**
 * Title: Default Query
 * Slug: tvlr/query
 * Description: Query of posts in grid.
 * Categories: hidden
 * Inserter: false
 *
 * @package tvlr
 */

?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":1},"displayLayout":{"type":"div"},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"className":"post-container card","layout":{"type":"default"},"metadata":{"name":"Post Container"}} -->
		<div class="wp-block-group post-container card">
			<!-- wp:post-featured-image {"className":"entry-thumbnail","isLink":true} /-->

			<!-- wp:group {"className":"entry-body card-body","layout":{"type":"default"},"metadata":{"name":"Post Body"}} -->
			<div class="wp-block-group entry-body card-body">
				<!-- wp:group {"tagName":"header","className":"entry-header","layout":{"type":"default"},"metadata":{"name":"Post Header"}} -->
				<header class="wp-block-group entry-header">
					<!-- wp:post-title {"className":"entry-title card-title","isLink":true} /-->
				</header>
				<!-- /wp:group -->

				<!-- wp:group {"className":"entry-content","layout":{"type":"default"},"metadata":{"name":"Post Content"}} -->
				<div class="wp-block-group entry-content">
					<!-- wp:post-excerpt /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"entry-meta entry-footer card-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"metadata":{"name":"Post Meta"}} -->
				<div class="wp-block-group entry-meta">
					<!-- wp:post-date /-->

					<!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->

					<!-- wp:post-terms {"term":"category"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
