<?php
/**
 * Title: Post Template - Featured
 * Slug: tvlr/post-template-featured
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"className":"post-container card","layout":{"type":"default"},"metadata":{"name":"Post Container"}} -->
<div class="wp-block-group post-container card">
	<!-- wp:post-featured-image {"className":"entry-thumbnail","isLink":true} /-->

	<!-- wp:group {"className":"entry-body card-body","layout":{"type":"default"},"metadata":{"name":"Post Body"}} -->
	<div class="wp-block-group entry-body card-body">
		<!-- wp:group {"tagName":"header","className":"entry-header","layout":{"type":"default"},"metadata":{"name":"Post Header"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:post-title {"level":3,"isLink":true,"className":"entry-title card-title"} /-->

			<!-- wp:group {"className":"entry-meta","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"metadata":{"name":"Post Meta"}} -->
			<div class="wp-block-group entry-meta">
				<!-- wp:post-date /-->

				<!-- wp:post-author {"avatarSize":24,"showAvatar":false,"isLink":true} /-->
			</div>
			<!-- /wp:group -->
		</header>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"className":"entry-content"} /-->

		<!-- wp:group {"tagName":"footer","className":"entry-meta entry-footer card-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"},"metadata":{"name":"Post Footer"}} -->
		<footer class="wp-block-group entry-footer card-actions">
			<!-- wp:post-terms {"term":"category"} /-->
		</footer>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
