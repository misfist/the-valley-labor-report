<?php
/**
 * Title: Default Query
 * Slug: tvlr/query
 * Description: Query of posts in grid.
 * Categories: query
 * Block Types: core/query
 *
 * @package tvlr
 */

?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","type":"constrained","inherit":true,"perPage":12},"displayLayout":{"type":"div"},"layout":{"type":"default"},"tagName":"section","enhancedPagination":true} -->
<section class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:pattern {"slug":"tvlr/post-template"} /-->
		
	<!-- /wp:post-template -->
	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</section>
<!-- /wp:query -->
