<?php
/**
 * Title: Content - Post
 * Slug: tvlr/content-no-title
 * Categories: hidden
 * Inserter: no
 */
$classes = get_post_class( array( 'post-container', 'container', 'no-post-thumbnail' ) );
$className = ( ! empty( $classes ) ) ? ' ' . implode( ' ', $classes ) : '';
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Site Content"},"className":"site-main","id":"main","layout":{"type":"constrained"}} -->
<main id="main" class="wp-block-group site-main">

	<!-- wp:group {"tagName":"article","metadata":{"name":"Post"},"className":"<?php echo $className; ?>","layout":{"type":"default"}} -->
	<article class="wp-block-group<?php echo $className; ?>">

		<!-- wp:group {"metadata":{"name":"Post Content"},"className":"entry-content","layout":{"type":"default"}} -->
		<div class="wp-block-group entry-content">
			<!-- wp:post-content /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"footer","metadata":{"name":"Post Footer"},"className":"entry-footer","layout":{"type":"default"}} -->
		<footer class="wp-block-group entry-footer">
			<!-- wp:post-terms {"term":"category"} /-->
		</footer>
		<!-- /wp:group -->

	</article>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->