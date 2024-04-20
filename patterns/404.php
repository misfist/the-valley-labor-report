<?php
/**
 * Title: 404 Content
 * Slug: tvlr/404-content
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Site Content"},"className":"site-main","id":"main","layout":{"type":"constrained"}} -->
<main id="main" class="wp-block-group site-main">

	<!-- wp:group {"tagName":"article","metadata":{"name":"Post"},"className":"not-posts","layout":{"type":"default"}} -->
	<article class="wp-block-group no-posts">
		<!-- wp:group {"tagName":"header","metadata":{"name":"Post Header"},"className":"entry-header","layout":{"type":"default"}} -->
		<header class="wp-block-group entry-header">
			<!-- wp:heading {"level":1,"className":"entry-title","id":"page-not-found"} -->
			<h1 class="wp-block-heading entry-title" id="page-not-found"><?php echo esc_html_x( 'Page Not Found', 'Heading for a webpage that is not found', 'tvlr' ); ?></h1>
			<!-- /wp:heading -->
		</header>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Post Content"},"className":"entry-content","layout":{"type":"default"}} -->
		<div class="wp-block-group entry-content">
			<!-- wp:paragraph -->
			<p>
				<?php echo esc_html_x( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'Message to convey that a webpage could not be found', 'tvlr' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:pattern {"slug":"tvlr/search"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"tagName":"footer","metadata":{"name":"Post Footer"},"className":"entry-footer","layout":{"type":"default"}} -->
		<footer class="wp-block-group entry-footer"></footer>
		<!-- /wp:group -->

	</article>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->