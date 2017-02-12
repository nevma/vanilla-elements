<?php

    /**
     * Works as a filter and registers the Vanilla elements image element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function image_element_register ( $element_fields ) {

        $element_fields[] = array(
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'key' => 'field_589cb638b9999',
            'label' => 'Image to show',
            'name' => 'image',
            'type' => 'image',
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

    // Adds the filter which registers the Vanilla elements image element.
    add_filter( 'vanilla/elements/register-elements', 'image_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements image column layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function image_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589cb68c89bd9',
            'name' => 'image',
            'label' => 'Image',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_589cb638b9999'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589cb68c89bda',
                    'label' => 'Image clone',
                    'name' => 'image_clone',
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

    // Adds the filter which registers the Vanilla elements image layout.
    add_filter( 'vanilla/elements/register-layouts', 'image_layout_register' );

?>