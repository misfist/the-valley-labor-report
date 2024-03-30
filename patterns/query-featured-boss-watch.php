<?php
/**
 * Title: Featured Post
 * Slug: tvlr/query-featured-boss-watch
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[1]}},"displayLayout":{"type":"div"},"layout":{"type":"default"},"enhancedPagination":true} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"className":"post-container card","layout":{"type":"default"},"metadata":{"name":"Post Container"}} -->
		<div class="wp-block-group post-container card">
			<!-- wp:post-featured-image {"className":"entry-thumbnail"} /-->

			<!-- wp:group {"className":"entry-body card-body","layout":{"type":"default"},"metadata":{"name":"Post Body"}} -->
			<div class="wp-block-group entry-body card-body">
				<!-- wp:group {"tagName":"header","className":"entry-header","layout":{"type":"default"},"metadata":{"name":"Post Header"}} -->
				<header class="wp-block-group entry-header">
					<!-- wp:post-title {"className":"entry-title card-title"} /--></header>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"className":"entry-content"} /-->

				<!-- wp:group {"className":"entry-meta entry-footer card-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"metadata":{"name":"Post Meta"}} -->
				<div class="wp-block-group entry-meta">
					<!-- wp:post-date /-->

					<!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
