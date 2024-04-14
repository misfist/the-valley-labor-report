<?php
/**
 * Title: Featured Post
 * Slug: tvlr/query-featured-last-week-in-labor
 * Categories: hidden
 * Inserter: false
 */
$category = get_category_by_slug( 'last-week-in-southern-labor' );
$id       = ( $category ) ? $category->term_id : 3;
$name     = ( $category ) ? $category->name : __( 'Last Week in Southern Labor', 'tvlr' );
?>

<!-- wp:group {"tagName":"header","metadata":{"name":"Section Header"},"className":"section-header","layout":{"type":"default"}} -->
<header class="wp-block-group section-header">
	<!-- wp:heading {"className":"section-heading"} -->
	<h2 class="wp-block-heading is-style-section-heading"><?php echo $name; ?></h2>
	<!-- /wp:heading -->
</header>
<!-- /wp:group -->

<!-- wp:query {"queryId":6,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[<?php echo intval( $id ); ?>]}},"displayLayout":{"type":"div"},"enhancedPagination":true} -->
<div class="wp-block-query">
	<!-- wp:post-template -->

		<!-- wp:pattern {"slug":"tvlr/post-template-featured"} /-->

	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
