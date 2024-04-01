<?php
/**
 * Title: Latest Clips
 * Slug: tvlr/latest-clips
 * Categories: posts
 */
?>

<!-- wp:group {"tagName":"section","className":"section latest-videos","layout":{"type":"constrained"},"metadata":{"name":"Latest Clips"}} -->
<section class="wp-block-group section latest-videos">
    <!-- wp:group {"tagName":"header","className":"section__header","layout":{"type":"constrained"},"metadata":{"name":"Section Header"}} -->
    <header class="wp-block-group section__header">
        <!-- wp:heading {"className":"section__title"} -->
        <h2 class="wp-block-heading section__title">Latest Clips</h2>
        <!-- /wp:heading -->
    </header>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":9,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[18]}},"enhancedPagination":true} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
        <!-- wp:group {"className":"post-container card image-full","layout":{"type":"default"},"metadata":{"name":"Post Container"}} -->
        <div class="wp-block-group post-container card image-full">
            <!-- wp:post-featured-image {"className":"entry-thumbnail","isLink":true} /-->

            <!-- wp:group {"className":"entry-body card-body","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"},"metadata":{"name":"Post Body"}} -->
            <div class="wp-block-group entry-body card-body">
                <!-- wp:post-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-white"}}}},"textColor":"custom-white","className":"entry-title card-title"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</section>
<!-- /wp:group -->