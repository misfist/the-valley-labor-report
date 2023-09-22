<?php
 /**
  * Title: Content Block 4
  * Slug: thevalleylaborreport/content-block-4
  * Categories: tvlr
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:3rem"><!-- wp:group {"className":"section-header","layout":{"type":"default"}} -->
<div class="wp-block-group section-header"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textTransform":"uppercase"}},"fontSize":"tiny"} -->
<h2 class="wp-block-heading has-tiny-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;text-transform:uppercase"><a href="#">Category Name</a></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"typography":{"fontSize":"12px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"blockGap":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}},"className":"sub-links","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group sub-links has-link-color" style="font-size:12px;font-style:normal;font-weight:600;text-transform:uppercase"><!-- wp:paragraph -->
<p><a href="#">Sub Cat 1</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Sub Cat 2</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Sub Cat 3</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Sub Cat 4</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5em"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:1.5em"><!-- wp:query {"queryId":41,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
<div class="wp-block-query"><!-- wp:post-template {"fontSize":"medium"} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"11px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
