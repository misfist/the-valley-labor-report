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
        <!-- wp:column {"verticalAlignment":"center","width":"25%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:site-logo {"width":250,"shouldSyncIcon":false} /-->

                <!-- wp:site-title {"className":"screen-reader-text sr-only"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"75%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
            <!-- wp:navigation {"ref":4,"icon":"menu","layout":{"type":"flex","justifyContent":"right"}} /--></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"site-subheader","metadata":{"name":"Site Subheader"}} -->
<div class="wp-block-group site-subheader">
    <!-- wp:columns {"verticalAlignment":"center","className":"site-subheader__inner"} -->
    <div class="wp-block-columns are-vertically-aligned-center site-subheader__inner">
        <!-- wp:column {"verticalAlignment":"center","width":"25%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
            <!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#252525","openInNewTab":true,"className":"is-style-logos-only"} -->
            <ul class="wp-block-social-links has-icon-color is-style-logos-only">
                <!-- wp:social-link {"url":"https://www.youtube.com/@TheValleyLaborReport","service":"youtube"} /-->

                <!-- wp:social-link {"url":"https://www.facebook.com/TheValleyLaborReport","service":"facebook"} /-->

                <!-- wp:social-link {"url":"https://twitter.com/LaborReporters","service":"twitter"} /-->
            </ul>
            <!-- /wp:social-links -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"75%","layout":{"type":"default"}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%">
            <!-- wp:navigation {"ref":171,"overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"}} /-->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->