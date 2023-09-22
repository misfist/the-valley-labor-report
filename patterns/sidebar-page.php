<?php
/**
 * Title: sidebar-page
 * Slug: thevalleylaborreport/sidebar-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":140,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#" target="_blank" rel="noreferrer noopener"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/300x250.png" alt="" class="wp-image-140"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><strong>Follow Us</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"social-links-w-labels"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><strong>Recent Posts</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:1.5em"><!-- wp:query {"queryId":13,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"featured-left post-list"} -->
<div class="wp-block-query featured-left post-list"><!-- wp:post-template {"layout":{"type":"default","columnCount":2},"fontSize":"extra-small"} -->
<!-- wp:post-featured-image {"isLink":true,"width":"90px","height":"90px","align":"left","style":{"spacing":{"margin":{"right":"15px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"11px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"10px","bottom":"0px"}}},"fontSize":"extra-small"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-header","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-header"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="text-transform:uppercase"><strong>Tags</strong></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:tag-cloud {"numberOfTags":30,"smallestFontSize":"12px","largestFontSize":"12px","className":"is-style-default"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
