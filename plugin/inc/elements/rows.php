<?php

    /**
     * Vanilla elements rows functions.
     */
    


    /**
     * Registers the second batch of the Vanilla elements fields, that is the
     * elements field group, which contains fields used for being combined in 
     * order to become layouts later on. This code is copied from the ACF >
     * Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_rows_register () {

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
            'title' => 'Vanilla elements',
            'fields' => array(
                array(
                    'layouts' => array(
                        // Single column row, a clone of row options and a single column contents.
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
                                    'prefix_name' => 0,
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
                        // Two columns row, a clone of row options and a two column contents.
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
                                    'prefix_name' => 0,
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
                        // Three columns row, a clone of row options and a three column contents.
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
                                    'prefix_name' => 0,
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
                        // Four columns row, a clone of row options and a four column contents.
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
                                    'prefix_name' => 0,
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
                        // Five columns row, a clone of row options and a five column contents.
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
                                    'prefix_name' => 0,
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
            'style' => '',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));

    }



    /**
     * Outputs the HTML contents of a Vanilla elements row.
     * 
     * @param  array $row_options The options that configure the appearance of 
     *                            the row.
     * @param  array $columns     The columns of the row.
     * 
     * @return void
     */
    function vanilla_elements_rows_get_content ( $row_options, $columns ) {

        // Default full row open HTML snippet.
        add_filter( 'vanilla/elements/row-full-width-open', function ( $html ) {
            return '
                    </article>
                </div><!-- .panel -->
                </section><!-- .content -->
                <section class = "content row">';
        });

        // Default full row close HTML snippet.
        add_filter( 'vanilla/elements/row-full-width-close', function ( $html ) {
            return '
                </section><!-- .content -->
                <section class = "content row">
                <div class = "panel">
                    <article>';
        });



        // Open a full width row.
        if ( $row_options['full_width'] ) {
            echo apply_filters( 'vanilla/elements/row-full-width-open', '[vanilla-elements-full-row]' );
        }

        // Open the row.
        echo '<div class = "row vanilla-elements-row ' . ( $row_options['full_width'] ? 'vanilla-elemenets-row-full-width' : '' ) . ' ' . $row_options['classes'] . ' ' . $row_options['code_name'] . '">';

        $column_width = floor( 100/count( $columns ) );

        // Output row contents column by column.
        foreach ( $columns as $column ) {
            vanilla_elements_columns_get_content( array( 'column_width' => $column_width ), $column );
        }

        // Close the row.
        echo '</div><!-- .vanilla-elements-row -->';

        // Close the full width row.
        if ( $row_options['full_width'] ) {
            echo apply_filters( 'vanilla/elements/row-full-width-close', '[/vanilla-elements-full-row]' );
        }

    }

?>