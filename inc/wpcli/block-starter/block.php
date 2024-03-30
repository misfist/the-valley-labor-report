<?php
/**
 * Your block render code goes here.
 *
 * @package tvlr
 */

// Add classes to block.
$tvlr_classes = array();
if ( ! empty( $block['className'] ) ) {
	$tvlr_classes[] = $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$tvlr_classes[] = 'align' . $block['align'];
}

// Add anchor to the block.
$tvlr_anchor = ( ! empty( $block['anchor'] ) ) ? 'id="' . esc_attr( $block['anchor'] ) . '" ' : '';
?>
<section <?php echo $tvlr_anchor; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- XSS ?>class="<?php echo esc_attr( implode( ' ', $tvlr_classes ) ); ?>">
	<!-- Your block render code goes here. -->
</section>
