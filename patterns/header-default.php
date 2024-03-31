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
    <div class="wp-block-columns are-vertically-aligned-center site-branding__inner" style="flex-wrap: no-wrap;">
        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:site-logo {"width":250,"shouldSyncIcon":false} / -->
            <!-- wp:site-title {"className":"screen-reader-text sr-only"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:navigation {"ref":4,"icon":"menu","className":"primary-navigation","layout":{"type":"flex","justifyContent":"right"}} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"site-subheader","metadata":{"name":"Site Subheader"}} -->
<div class="wp-block-group site-subheader">
    <!-- wp:columns {"verticalAlignment":"center","className":"site-subheader__inner","isStackedOnMobile":false} -->
    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile site-subheader__inner">
        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#252525","openInNewTab":true,"className":"is-style-logos-only"} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"https://www.youtube.com/@TheValleyLaborReport","service":"youtube"} /-->

                <!-- wp:social-link {"url":"https://www.facebook.com/TheValleyLaborReport","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://twitter.com/LaborReporters","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center">
            <!-- wp:navigation {"ref":171,"overlayMenu":"never","className":"secondary-navigation"} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->