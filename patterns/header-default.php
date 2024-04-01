<?php
/**
 * Title: Default Header
 * Slug: tvlr/header-default
 * Description: Header with site logo and navigation.
 * Categories: header
 * Block Types: core/template-part/header
 *
 * @package tvlr
 */

?>
<!-- wp:group {"className":"site-branding","layout":{"type":"default"},"metadata":{"name":"Site Branding"}} -->
<div class="wp-block-group site-branding">
    <!-- wp:columns {"verticalAlignment":"center","className":"site-branding__inner"} -->
    <div class="wp-block-columns are-vertically-aligned-center site-branding__inner">
        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:site-logo /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:navigation {"ref":4,"icon":"menu","className":"primary-navigation","layout":{"type":"flex","justifyContent":"right"}} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"site-subheader"} -->
<div class="wp-block-group site-subheader">
    <!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"className":"site-subheader__inner"} -->
    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile site-subheader__inner">
        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:pattern {"slug":"tvlr/social-links"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:navigation {"ref":171,"overlayMenu":"never","className":"secondary-navigation"} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->