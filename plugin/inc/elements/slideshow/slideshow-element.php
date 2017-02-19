<?php
    
    /**
     * Vanilla elements slideshow element functions.
     */
    


    /**
     * Works as a filter and registers the Vanilla elements slideshow element.
     * 
     * @param array $element_fields The existing Vanilla elements ACF fields
     *                              array, which is provided for filtering.
     * 
     * @return array The Vanilla elements ACF fields enhanced.
     */
    function slideshow_element_register ( $element_fields ) {

        $element_fields[] = array(
            'sub_fields' => array(
                array(
                    'default_value' => '',
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_5899fadc1ef81',
                    'label' => 'Slide title',
                    'name' => 'slide_title',
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
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'default_value' => '',
                    'delay' => 1,
                    'key' => 'field_5899faef1ef82',
                    'label' => 'Slide content',
                    'name' => 'slide_content',
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
                    'return_format' => 'id',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                    'key' => 'field_5899fafe1ef83',
                    'label' => 'Slide image',
                    'name' => 'slide_image',
                    'type' => 'image',
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
                    'clone' => array(
                        0 => 'field_589e111b135e1'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589e575fd75e7',
                    'label' => 'Slide target',
                    'name' => 'slide_target',
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
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Add slide',
            'collapsed' => 'field_5899fadc1ef81',
            'key' => 'field_5899b4618ac74',
            'label' => 'Slideshow contents',
            'name' => 'slideshow',
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

    // Adds the filter which registers the Vanilla elements slideshow element.
    add_filter( 'vanilla/elements/register-elements', 'slideshow_element_register' );



    /**
     * Works as a filter and registers the Vanilla elements slideshow column
     * layout.
     * 
     * @param array $column_layouts The existing Vanilla elements column layouts
     *                              ACF fields array, which is provided for
     *                              filtering.
     * 
     * @return array The Vanilla elements column layouts ACF fields enhanced.
     */
    function slideshow_layout_register ( $column_layouts ) {

        $column_layouts[] = array(
            'key' => '5899b2c58ac6a',
            'name' => 'slideshow',
            'label' => 'Slideshow',
            'display' => 'block',
            'sub_fields' => array(
                array(
                    'clone' => array(
                        0 => 'field_5899b2388ac66',
                        1 => 'field_5899b4618ac74'
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589b7b77242e5',
                    'label' => 'Slideshow clone',
                    'name' => 'slideshow_clone',
                    'type' => 'clone',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => ''
                    ),
                ),
            ),
            'min' => '',
            'max' => ''
        );

        return $column_layouts;

    }

    // Adds the filter which registers the Vanilla elements slideshow layout.
    add_filter( 'vanilla/elements/register-layouts', 'slideshow_layout_register' );

?>