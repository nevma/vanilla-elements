<?php

    /**
     * Works as a filter and registers the Vanilla elements rich text element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function rich_text_element_register ( $element_fields ) {

        $element_fields[] = array(
            'tabs' => 'all',
            'toolbar' => 'full',
            'rich media_upload' => 1,
            'default_value' => '',
            'delay' => 1,
            'key' => 'field_589b7841c355f',
            'label' => 'Rich text content',
            'name' => 'rich_text',
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

        return $element_fields;

    }

    // Adds the filter which registers the Vanilla elements rich text element.
    add_filter( 'vanilla/elements/register-elements', 'rich_text_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements rich text column
     * layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function rich_text_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '589b7a2300dc7',
            'name' => 'rich_text',
            'label' => 'Rich text',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_589b7841c355f'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589b7a2300dc8',
                    'label' => 'Rich text clone',
                    'name' => 'rich_text_clone',
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

    // Adds the filter which registers the Vanilla elements rich text layout.
    add_filter( 'vanilla/elements/register-layouts', 'rich_text_layout_register' );

?>