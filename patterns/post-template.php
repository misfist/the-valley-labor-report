<?php
/**
 * Title: Post Template
 * Slug: tvlr/post-template
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
			<!-- wp:post-title {"className":"entry-title card-title","isLink":true} /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"className":"entry-content","layout":{"type":"default"},"metadata":{"name":"Post Content"}} -->
		<div class="wp-block-group entry-content">
			<!-- wp:post-excerpt /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"entry-meta entry-footer card-actions","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"metadata":{"name":"Post Meta"}} -->
		<div class="wp-block-group entry-meta card-actions">
			<!-- wp:post-date /-->

			<!-- wp:post-author {"avatarSize":24,"showAvatar":false} /-->

			<!-- wp:post-terms {"term":"category"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->