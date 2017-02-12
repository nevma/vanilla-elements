<?php

    /**
     * Registers the second batch of the Vanilla elements fields, that is the
     * elements field group, which contains fields used for being combined in 
     * order to become layouts later on.
     * 
     * This code is copied from the ACF > Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_acf_export_elements_register () {

        // Default Vanilla elements.
        $elements = array( 
            'text',
            'rich-text',
            'image',
            'slideshow',
            'accordion',
            'gallery',
            'card'
        );

        // Include them to be registered.
        foreach ( $elements as $element ) {
            require_once( 'elements/' . $element . '/' . $element . '-element.php' );
        }



        $element_fields = array(
            array(
                'post_type' => array(
                ),
                'taxonomy' => array(
                ),
                'allow_null' => 0,
                'multiple' => 0,
                'return_format' => 'id',
                'ui' => 1,
                'key' => 'field_589e1072135de',
                'label' => 'Link internal',
                'name' => 'link_internal',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_589e10c3135e0',
                            'operator' => '==',
                            'value' => 'internal',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'default_value' => '',
                'placeholder' => '',
                'key' => 'field_589e10ad135df',
                'label' => 'Link external',
                'name' => 'link_external',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_589e10c3135e0',
                            'operator' => '==',
                            'value' => 'external',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'layout' => 'horizontal',
                'choices' => array(
                    'internal' => 'Internal',
                    'external' => 'External',
                ),
                'default_value' => '',
                'other_choice' => 0,
                'save_other_choice' => 0,
                'allow_null' => 0,
                'return_format' => 'value',
                'key' => 'field_589e10c3135e0',
                'label' => 'Link type',
                'name' => 'link_type',
                'type' => 'radio',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
            array(
                'clone' => array(
                    0 => 'field_589e10c3135e0',
                    1 => 'field_589e10ad135df',
                    2 => 'field_589e1072135de',
                ),
                'prefix_label' => 0,
                'prefix_name' => 0,
                'display' => 'group',
                'layout' => 'table',
                'key' => 'field_589e111b135e1',
                'label' => 'Link',
                'name' => 'link',
                'type' => 'clone',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
            ),
        );



        $element_fields = apply_filters( 'vanilla/elements/register-elements', $element_fields );
        


        acf_add_local_field_group( array(
            'key' => 'group_589b60ed5909f',
            'title' => '[Vanilla] 2. Elements',
            'fields' => $element_fields,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 0,
            'description' => '',
        ));

    }

?>