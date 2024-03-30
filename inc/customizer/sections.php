<?php
/**
 * Customizer sections.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'tvlr_additional_scripts_section',
		array(
			'title'    => esc_html__( 'Additional Scripts', 'tvlr' ),
			'priority' => 10,
			'panel'    => 'site-options',
		)
	);

	// Register a footer section.
	$wp_customize->add_section(
		'tvlr_footer_section',
		array(
			'title'    => esc_html__( 'Footer Customizations', 'tvlr' ),
			'priority' => 90,
			'panel'    => 'site-options',
		)
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
