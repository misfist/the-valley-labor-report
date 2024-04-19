<?php
/**
 * Title: Content Header - Blog
 * Slug: tvlr/content-header-home
 * Categories: hidden
 * Inserter: no
 */
$blog_id = get_option( 'page_for_posts' );
$title = ( $blog_id ) ? get_post_field( 'post_title', (int) $blog_id ) : __( 'Archive', 'tvlr' );
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Archive Header"},"className":"post-header entry-header archive-header","layout":{"type":"default"}} -->
<header class="wp-block-group post-header entry-header archive-header">

    <!-- wp:heading {
        "level": 1,
        "className": "post-title archive-title entry-title",
        "metadata":{
			"bindings":{
				"content":{
					"source":"TVLR/blog-title"
				}
			}
		}
    } -->
    <h1 class="wp-block-heading post-title archive-title entry-title"><?php echo esc_attr( $title ); ?></h1>
    <!-- /wp:heading -->
    
</header>
<!-- /wp:group -->