<?php

    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    // Include the plugin PHP files in the correct order.
    require_once( 'elements/columns.php' );
    require_once( 'elements/rows.php' );
    require_once( 'elements/customisation.php' );



    /**
     * Registers all the necessary ACF field groups and fields, so that the 
     * Vanilla elements are available in the posts edit screen. 
     * 
     * @return void
     */
    function vanilla_elements_init_register_fields () {

        if ( function_exists( 'acf_add_local_field_group' ) ) {

            customisation_register();
            vanilla_elements_init_register_elements();
            columns_register();
            rows_register();

        }

    }



    /**
     * Registers the second batch of the Vanilla elements fields, that is the
     * elements field group, which contains fields used for being combined in 
     * order to become layouts later on.
     * 
     * This code is copied from the ACF > Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_init_register_elements () {

        // Default Vanilla elements.
        $elements = array( 
            'link',
            'text',
            'rich-text',
            'image',
            'slideshow',
            'accordion',
            'gallery',
            'card'
        );

        // Include their files to be registered.
        foreach ( $elements as $element ) {
            require_once( 'elements/' . $element . '/' . $element . '-element.php' );
        }

        $element_fields = array();
        $element_fields = apply_filters( 'vanilla/elements/register-elements', $element_fields );

        // Register Vanilla elements Elements field group.
        acf_add_local_field_group( array(
            'key' => 'group_589b60ed5909f',
            'title' => '[Vanilla] 2. Elements',
            'fields' => $element_fields,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post'
                    )
                )
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 0,
            'description' => ''
        ));

    }

?>