<?php

    /**
     * Works as a filter and registers the Vanilla elements accordion element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function accordion_element_register ( $element_fields ) {

        $element_fields[] = array(
            'sub_fields' => array(
                array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_589b62c82ac79',
                    'label' => 'Accordion header',
                    'name' => 'accordion_header',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    )
                ),
                array(
                    'default_value' => '',
                    'new_lines' => 'wpautop',
                    'maxlength' => '',
                    'placeholder' => '',
                    'rows' => '',
                    'key' => 'field_589b62eb2ac7c',
                    'label' => 'Accordion excerpt',
                    'name' => 'accordion_excerpt',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    )
                ),
                array(
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'default_value' => '',
                    'delay' => 1,
                    'key' => 'field_589b62d22ac7a',
                    'label' => 'Accordion content',
                    'name' => 'accordion_content',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    )
                ),
                array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_589b62e22ac7b',
                    'label' => 'Accordion footer',
                    'name' => 'accordion_footer',
                    'type' => 'text',
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
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add panel',
            'collapsed' => 'field_589b62c82ac79',
            'key' => 'field_589b627a2ac78',
            'label' => 'Accordion contents',
            'name' => 'accordion',
            'type' => 'repeater',
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

    // Adds the filter which registers the Vanilla elements accordion element.
    add_filter( 'vanilla/elements/register-elements', 'accordion_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements accordion column
     * layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function accordion_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589b63d6d447f',
            'name' => 'accordion',
            'label' => 'Accordion',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_5899b2388ac66',
                        1 => 'field_589b627a2ac78'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'block',
                    'key' => 'field_589b63e8d4485',
                    'label' => 'Accordion clone',
                    'name' => 'accordion_clone',
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
            'max' => '',
        );

        return $column_layouts;

    }

    // Adds the filter which registers the Vanilla elements accordion layout.
    add_filter( 'vanilla/elements/register-layouts', 'accordion_layout_register' );

?>