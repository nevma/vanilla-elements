<?php

    /**
     * Vanilla elements link element functions.
     */
    


    /**
     * Works as a filter and registers the Vanilla elements link sub-element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function link_element_register ( $element_fields ) {

        // The internal link field.
        $element_fields[] = array(
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
                        'value' => 'internal'
                    )
                )
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            )
        );

        // The external link field.
        $element_fields[] = array(
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
                        'value' => 'external'
                    )
                )
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            )
        );

        // The link type choice.
        $element_fields[] = array(
            'layout' => 'horizontal',
            'choices' => array(
                'internal' => 'Internal',
                'external' => 'External'
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
                'id' => ''
            )
        );
        
        // The composite link field.
        $element_fields[] = array(
            'clone' => array(
                0 => 'field_589e10c3135e0',
                1 => 'field_589e10ad135df',
                2 => 'field_589e1072135de'
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
                'id' => ''
            )
        );

        return $element_fields;

    }

    // Adds the filter which registers the Vanilla elements link sub-element.
    add_filter( 'vanilla/elements/register-elements', 'link_element_register' );

?>