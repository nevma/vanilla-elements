<?php

    /**
     * Vanilla elements base elements functions.
     */
    


    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    /**
     * Registers the mzin batch of the Vanilla elements fields, that is the
     * elements field group, which contains fields used for being combined in 
     * order to become layouts later on.
     * 
     * This code is copied from the ACF > Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_base_register_elements () {

        // Default Vanilla elements.
        $elements = array( 
            'text',
            'rich_text',
            'image',
            'slideshow',
            'accordion',
            'gallery',
            'card'
        );

        // Include their files to be registered.
        foreach ( $elements as $element ) {
            require_once( $element . '/' . $element . '-element.php' );
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