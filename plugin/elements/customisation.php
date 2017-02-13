<?php

    /**
     * Registers the first batch of the Vanilla elements fields, that is the
     * customisation field group, which contains fields used for customising the
     * behaviour of other, more complex, fields which will be declared later on.
     * 
     * This code is copied from the ACF > Tools > Generate export code function.
     * 
     * @return void
     */
    function customisation_register () {

        acf_add_local_field_group( array (
            'key' => 'group_589b5ff7042ef',
            'title' => '[Vanilla] 1. Customisation',
            'fields' => array (
                array (
                    'layout' => 'horizontal',
                    'choices' => array (
                        'small' => 'small',
                        'mobile' => 'mobile',
                        'tablet' => 'tablet',
                        'laptop' => 'laptop',
                        'desktop' => 'desktop',
                        'large' => 'large',
                        'xlarge' => 'xlarge',
                    ),
                    'default_value' => array (
                        0 => 'laptop',
                        1 => 'desktop',
                        2 => 'large',
                        3 => 'xlarge',
                    ),
                    'allow_custom' => 0,
                    'save_custom' => 0,
                    'toggle' => 0,
                    'return_format' => 'value',
                    'key' => 'field_5899b2388ac66',
                    'label' => 'Breakpoints where element is active',
                    'name' => 'breakpoints',
                    'type' => 'checkbox',
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
                    'key' => 'field_5899b2518ac67',
                    'label' => 'Classes for extra row styling',
                    'name' => 'classes',
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
                    'maxlength' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_589a0c2bb40d2',
                    'label' => 'Code name for content row',
                    'name' => 'code_name',
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
                    'default_value' => 0,
                    'message' => 'Make this element span full page width',
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                    'key' => 'field_589a07cfd467a',
                    'label' => 'Full width content row',
                    'name' => 'full_width',
                    'type' => 'true_false',
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
                        0 => 'field_5899b2518ac67',
                        1 => 'field_589a0c2bb40d2',
                        2 => 'field_589a07cfd467a',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589b5c4c88183',
                    'label' => 'Row options',
                    'name' => 'row_options',
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
                        'left' => 'Left',
                        'right' => 'Right',
                    ),
                    'default_value' => '',
                    'other_choice' => 0,
                    'save_other_choice' => 0,
                    'allow_null' => 0,
                    'return_format' => 'value',
                    'key' => 'field_589cdb4e95640',
                    'label' => 'Left right selector',
                    'name' => 'left_right_selector',
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