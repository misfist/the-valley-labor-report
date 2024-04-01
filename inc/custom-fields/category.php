<?php
/**
 * Set up custom fields.
 *
 * @package tvlr
 */

namespace TVLR;

function register_fields() {

	$fields = array(
		array(
			'key'               => 'field_prepend_title',
			'label'             => __( 'Prepend to Title', 'tvlr' ),
			'name'              => 'prepend_title',
			'aria-label'        => '',
			'type'              => 'true_false',
			'instructions'      => __( 'Select \'Yes\' to prepend category to article title when displaying on site. (e.g. Boss Watch: {Title})', 'tvlr' ),
			'required'          => 0,
			'conditional_logic' => 0,
			'wrapper'           => array(
				'width' => '',
				'class' => '',
				'id'    => '',
			),
			'message'           => __( 'Prepend category to post title.', 'tvlr' ),
			'default_value'     => 0,
			'ui_on_text'        => '',
			'ui_off_text'       => '',
			'ui'                => 1,
		),
	);
    $args = array(
        'key'                   => 'group_taxonomy_fields',
        'title'                 => __( 'Category Options', 'tvlr' ),
        'fields'                => $fields,
        'location'              => array(
            array(
                array(
                    'param'    => 'taxonomy',
                    'operator' => '==',
                    'value'    => 'category',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'seamless',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',
        'show_in_rest'          => 1,
    );
    
	acf_add_local_field_group( $args );
}
add_action( 'acf/include_fields', __NAMESPACE__ . '\register_fields' );

