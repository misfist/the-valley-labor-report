<?php
/**
 * Preload assets.
 *
 * @package tvlr
 */

namespace The_Valley_Labor_Report;

/**
 * Preload assets.
 *
 * @author Corey Collins
 */
function preload_assets() {
	?>
	<?php if ( has_custom_logo() ) :
		$logo_url = esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );
		?>
		<link rel="preload" href="<?php echo $logo_url; ?>" as="image">
	<?php endif; ?>
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\preload_assets', 1 );
