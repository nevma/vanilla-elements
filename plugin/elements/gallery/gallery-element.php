<?php

    /**
     * Works as a filter and registers the Vanilla elements gallery element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function gallery_element_register ( $element_fields ) {

        $element_fields[] = array(
            'sub_fields' => array(
                array(
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
                    'key' => 'field_589b64f927cb8',
                    'label' => 'Image',
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
                )
            ),
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => 'Add images',
            'collapsed' => '',
            'key' => 'field_589b647127cb7',
            'label' => 'Gallery images',
            'name' => 'gallery',
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

    // Adds the filter which registers the Vanilla elements gallery element.
    add_filter( 'vanilla/elements/register-elements', 'gallery_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements gallery column
     * layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function gallery_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589b7346d4486',
            'name' => 'gallery',
            'label' => 'Gallery',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_589b647127cb7'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589b7346d4487',
                    'label' => 'Gallery clone',
                    'name' => 'gallery_clone',
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

    // Adds the filter which registers the Vanilla elements gallery layout.
    add_filter( 'vanilla/elements/register-layouts', 'gallery_layout_register' );

?>