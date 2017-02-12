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

        acf_add_local_field_group( array (
            'key' => 'group_589b60ed5909f',
            'title' => '[Vanilla] 2. Elements',
            'fields' => array (
                array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'default_value' => '',
                    'delay' => 1,
                    'key' => 'field_589b7841c355f',
                    'label' => 'Rich text content',
                    'name' => 'rich_text',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'sub_fields' => array (
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
                            'clone' => array (
                                0 => 'field_589e111b135e1',
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'sub_fields' => array (
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'sub_fields' => array (
                        array (
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
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'post_type' => array (
                    ),
                    'taxonomy' => array (
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
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_589e10c3135e0',
                                'operator' => '==',
                                'value' => 'internal',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'default_value' => '',
                    'placeholder' => '',
                    'key' => 'field_589e10ad135df',
                    'label' => 'Link external',
                    'name' => 'link_external',
                    'type' => 'url',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_589e10c3135e0',
                                'operator' => '==',
                                'value' => 'external',
                            ),
                        ),
                    ),
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'layout' => 'horizontal',
                    'choices' => array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'clone' => array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'layout' => 'horizontal',
                    'choices' => array (
                        'left' => 'Image on left',
                        'right' => 'Image on right',
                        'top' => 'Image on top',
                        'bottom' => 'Image at bottom',
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'clone' => array (
                        0 => 'field_589e111b135e1',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589e1184135e2',
                    'label' => 'Card link',
                    'name' => 'card_link',
                    'type' => 'clone',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
                array (
                    'clone' => array (
                        0 => 'field_589e11be135e3',
                        1 => 'field_589e0eb06987b',
                        2 => 'field_589e0e9169879',
                        3 => 'field_589e0e9d6987a',
                        4 => 'field_589e1184135e2',
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
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'location' => array (
                array (
                    array (
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