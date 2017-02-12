<?php

    /**
     * Registers the second batch of the Vanilla elements fields, that is the
     * elements field group, which contains fields used for being combined in 
     * order to become layouts later on. This code is copied from the ACF >
     * Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_acf_export_rows_register () {

        // The post types where the Vanilla elements are available.
        $post_types = array( 'page' );

        // Allow the developer to filter the post types.
        $post_types = apply_filters( 'vanilla/elements/post-types', $post_types );

        // The array of post types as required by ACF.
        $vanilla_elements_rows_locations = array();
        foreach ( $post_types as $post_type ) {

            $vanilla_elements_rows_locations[] = array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => $post_type
                )
            );

        }

        acf_add_local_field_group( array(
            'key' => 'group_5899b21a2a5b4',
            'title' => '[Vanilla] 4. Rows',
            'fields' => array(
                array(
                    'layouts' => array(
                        array(
                            'key' => '5899efef8c1b0',
                            'name' => 'single_column_row',
                            'label' => 'Single column row',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'clone' => array(
                                        0 => 'field_589b5c4c88183',
                                        1 => 'field_589bcdba896be',
                                    ),
                                    'prefix_label' => 0,
                                    'prefix_name' => 1,
                                    'display' => 'seamless',
                                    'layout' => 'block',
                                    'key' => 'field_5899f00079f70',
                                    'label' => 'Row content',
                                    'name' => 'row_content',
                                    'type' => 'clone',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        array(
                            'key' => '589b81182bb59',
                            'name' => 'two_columns_row',
                            'label' => 'Two columns row',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'clone' => array(
                                        0 => 'field_589b5c4c88183',
                                        1 => 'field_589bcdf7896bf',
                                    ),
                                    'prefix_label' => 0,
                                    'prefix_name' => 1,
                                    'display' => 'seamless',
                                    'layout' => 'block',
                                    'key' => 'field_589b81182bb5a',
                                    'label' => 'Row content',
                                    'name' => 'row_content',
                                    'type' => 'clone',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        array(
                            'key' => '589b81c92bb5c',
                            'name' => 'three_columns_row',
                            'label' => 'Three columns row',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'clone' => array(
                                        0 => 'field_589b5c4c88183',
                                        1 => 'field_589bce52896c0',
                                    ),
                                    'prefix_label' => 0,
                                    'prefix_name' => 1,
                                    'display' => 'seamless',
                                    'layout' => 'block',
                                    'key' => 'field_589b81c92bb5d',
                                    'label' => 'Row',
                                    'name' => 'row',
                                    'type' => 'clone',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        array(
                            'key' => '589bd37c2d8d5',
                            'name' => 'four_columns_row',
                            'label' => 'Four columns row',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'clone' => array(
                                        0 => 'field_589b5c4c88183',
                                        1 => 'field_589bcee4896c1',
                                    ),
                                    'prefix_label' => 0,
                                    'prefix_name' => 1,
                                    'display' => 'seamless',
                                    'layout' => 'block',
                                    'key' => 'field_589bd37c2d8d6',
                                    'label' => 'Row content',
                                    'name' => 'row_content',
                                    'type' => 'clone',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        array(
                            'key' => '589bd39a2d8d7',
                            'name' => 'five_columns_row',
                            'label' => 'Five columns row',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'clone' => array(
                                        0 => 'field_589b5c4c88183',
                                        1 => 'field_589bcf08896c3',
                                    ),
                                    'prefix_label' => 0,
                                    'prefix_name' => 1,
                                    'display' => 'seamless',
                                    'layout' => 'block',
                                    'key' => 'field_589bd39a2d8d8',
                                    'label' => 'Row content',
                                    'name' => 'row_content',
                                    'type' => 'clone',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                    'button_label' => 'Add row of content',
                    'key' => 'field_5899efbf79f6f',
                    'label' => 'Rows of content',
                    'name' => 'rows',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'location' => $vanilla_elements_rows_locations,
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));

    }

?>