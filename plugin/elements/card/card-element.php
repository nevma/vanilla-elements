<?php

    /**
     * Works as a filter and registers the Vanilla elements card element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function card_element_register ( $element_fields ) {

        $element_fields[] = array(
            'layout' => 'horizontal',
            'choices' => array(
                'left' => 'Image on left',
                'right' => 'Image on right',
                'top' => 'Image on top',
                'bottom' => 'Image at bottom'
            ),
            'default_value' => '',
            'other_choice' => 0,
            'save_other_choice' => 0,
            'allow_null' => 0,
            'return_format' => 'value',
            'key' => 'field_589e11be135e3',
            'label' => 'Card type',
            'name' => 'card_type',
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

        $element_fields[] = array(
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'key' => 'field_589e0e9169879',
            'label' => 'Card title',
            'name' => 'card_title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            )
        );

        $element_fields[] = array(
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'default_value' => '',
            'delay' => 0,
            'key' => 'field_589e0e9d6987a',
            'label' => 'Card text',
            'name' => 'card_text',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => ''
            )
        );
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
            'key' => 'field_589e0eb06987b',
            'label' => 'Card image',
            'name' => 'card_image',
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

        $element_fields[] = array(
            'clone' => array(
                0 => 'field_589e11be135e3',
                1 => 'field_589e0eb06987b',
                2 => 'field_589e0e9169879',
                3 => 'field_589e0e9d6987a',
                4 => 'field_589e111b135e1'
            ),
            'prefix_label' => 0,
            'prefix_name' => 0,
            'display' => 'seamless',
            'layout' => 'block',
            'key' => 'field_589e1224135e4',
            'label' => 'Card contents',
            'name' => 'card',
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

    // Adds the filter which registers the Vanilla elements card element.
    add_filter( 'vanilla/elements/register-elements', 'card_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements card column layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function card_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589e146988b62',
            'name' => 'card',
            'label' => 'Card',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_589e1224135e4'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589e146988b63',
                    'label' => 'Card clone',
                    'name' => 'card_clone',
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

    // Adds the filter which registers the Vanilla elements card layout.
    add_filter( 'vanilla/elements/register-layouts', 'card_layout_register' );

?>