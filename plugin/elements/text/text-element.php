<?php

    /**
     * Works as a filter and registers the Vanilla elements text element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function text_element_register ( $element_fields ) {

        $element_fields[] = array(
            'default_value' => '',
            'new_lines' => 'wpautop',
            'maxlength' => '',
            'placeholder' => '',
            'rows' => '',
            'key' => 'field_589b7802c355d',
            'label' => 'Text content',
            'name' => 'text',
            'type' => 'textarea',
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

    // Adds the filter which registers the Vanilla elements text element.
    add_filter( 'vanilla/elements/register-elements', 'text_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements text column layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function text_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589b7a8200dc9',
            'name' => 'text',
            'label' => 'Text',
            'display' => 'table',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_589b7802c355d'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589b7a8200dca',
                    'label' => 'Text clone',
                    'name' => 'text_clone',
                    'type' => 'clone',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    )
                )
            ),
            'min' => '',
            'max' => ''
        );

        return $column_layouts;

    }

    // Adds the filter which registers the Vanilla elements text layout.
    add_filter( 'vanilla/elements/register-layouts', 'text_layout_register' );

?>