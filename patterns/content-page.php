<?php
/**
 * Title: Content - Page
 * Slug: tvlr/content-page
 * Categories: hidden
 * Inserter: no
 */
$classes = get_post_class( array( 'post-container', 'container' ) );
$className = ( ! empty( $classes ) ) ? ' ' . implode( ' ', $classes ) : '';
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Site Content"},"className":"site-main","id":"main","layout":{"type":"constrained"}} -->
<main id="main" class="wp-block-group site-main">

	<!-- wp:group {"tagName":"article","metadata":{"name":"Post"},"className":"<?php echo $className; ?>","layout":{"type":"default"}} -->
	<article class="wp-block-group<?php echo $className; ?>">
		<!-- wp:post-featured-image {"aspectRatio":"auto","sizeSlug":"full-width","metadata":{"name":""},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"featured-image"} /-->
		<!-- wp:group {"tagName":"header","metadata":{"name":"Post Header"},"className":"entry-header","layout":{"type":"default"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:post-title {"level":1,"metadata":{"name":""},"className":"entry-title"} /-->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Post Content"},"className":"entry-content","layout":{"type":"default"}} -->
		<div class="wp-block-group entry-content">
			<!-- wp:post-content /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"footer","metadata":{"name":"Post Footer"},"className":"entry-footer","layout":{"type":"default"}} -->
		<footer class="wp-block-group entry-footer">
		</footer>
		<!-- /wp:group -->

	</article>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->