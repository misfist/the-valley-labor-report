<?php
/**
 * Customizer settings.
 *
 * @package tvlr
 */

namespace TVLR;

/**
 * Register additional scripts.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function customize_additional_scripts( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'tvlr_header_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'tvlr_header_scripts',
		array(
			'label'       => esc_attr__( 'Header Scripts', 'tvlr' ),
			'description' => esc_attr__( 'Additional scripts to add to the header. Basic HTML tags are allowed.', 'tvlr' ),
			'section'     => 'tvlr_additional_scripts_section',
			'type'        => 'textarea',
		)
	);

	// Register a setting.
	$wp_customize->add_setting(
		'tvlr_footer_scripts',
		array(
			'default'           => '',
			'sanitize_callback' => 'force_balance_tags',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'tvlr_footer_scripts',
		array(
			'label'       => esc_attr__( 'Footer Scripts', 'tvlr' ),
			'description' => esc_attr__( 'Additional scripts to add to the footer. Basic HTML tags are allowed.', 'tvlr' ),
			'section'     => 'tvlr_additional_scripts_section',
			'type'        => 'textarea',
		)
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\customize_additional_scripts' );


/**
 * Register copyright text setting.
 *
 * @author WebDevStudios
 *
 * @param WP_Customize_Manager $wp_customize Instance of WP_Customize_Manager.
 */
function customize_copyright_text( $wp_customize ) {
	// Register a setting.
	$wp_customize->add_setting(
		'tvlr_copyright_text',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);

	// Create the setting field.
	$wp_customize->add_control(
		'tvlr_copyright_text',
		array(
			'label'       => esc_attr__( 'Copyright Text', 'tvlr' ),
			'description' => esc_attr__( 'The copyright text will be displayed in the footer. Basic HTML tags allowed.', 'tvlr' ),
			'section'     => 'tvlr_footer_section',
			'type'        => 'textarea',
		)
	);
}

add_action( 'customize_register', __NAMESPACE__ . '\customize_copyright_text' );
