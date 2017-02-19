<?php

    /**
     * Vanilla elements columns functions.
     */
    


    /**
     * Registers the third batch of the Vanilla elements fields, that is the
     * columns field group, which contains fields used for creating the contents
     * of visual grid layouts. Generic columns are registered here, as well as
     * all the ACF layouts which will be available inside each column. 
     * 
     * This code is copied from the ACF > Tools > Generate export code function.
     * 
     * @return void
     */
    function vanilla_elements_columns_register () {

        $column_layouts = array();

        $column_layouts = apply_filters( 'vanilla/elements/register-layouts', $column_layouts );

        acf_add_local_field_group( array(
            'key' => 'group_5899b218a4323',
            'title' => '[Vanilla] 3. Columns',
            'fields' => array(
                // Generic column contents.
                array(
                    'layouts' => $column_layouts,
                    'min' => 0,
                    'max' => 0,
                    'button_label' => 'Add column content',
                    'key' => 'field_5899b26a8ac68',
                    'label' => 'Column contents',
                    'name' => 'column',
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

                // Column 1, a clone of the generic column contents.
                array(
                    'clone' => array(
                        0 => 'field_5899b26a8ac68',
                    ),
                    'prefix_label' => 1,
                    'prefix_name' => 1,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589bc7a447fbd',
                    'label' => 'Column 1',
                    'name' => 'column_1',
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
                // Column 2, a clone of the generic column contents.
                array(
                    'clone' => array(
                        0 => 'field_5899b26a8ac68',
                    ),
                    'prefix_label' => 1,
                    'prefix_name' => 1,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589bcb1e47fbe',
                    'label' => 'Column 2',
                    'name' => 'column_2',
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
                // Column 3, a clone of the generic column contents.
                array(
                    'clone' => array(
                        0 => 'field_5899b26a8ac68',
                    ),
                    'prefix_label' => 1,
                    'prefix_name' => 1,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589bcb4047fbf',
                    'label' => 'Column 3',
                    'name' => 'column_3',
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
                // Column 4, a clone of the generic column contents.
                array(
                    'clone' => array(
                        0 => 'field_5899b26a8ac68',
                    ),
                    'prefix_label' => 1,
                    'prefix_name' => 1,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589bcbba47fc1',
                    'label' => 'Column 4',
                    'name' => 'column_4',
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
                // Column 5, a clone of the generic column contents.
                array(
                    'clone' => array(
                        0 => 'field_5899b26a8ac68',
                    ),
                    'prefix_label' => 1,
                    'prefix_name' => 1,
                    'display' => 'seamless',
                    'layout' => 'block',
                    'key' => 'field_589bcb6647fc0',
                    'label' => 'Column 5',
                    'name' => 'column_5',
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

                // Single column contents, a clone of just column 1.
                array(
                    'clone' => array(
                        0 => 'field_589bc7a447fbd',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589bcdba896be',
                    'label' => 'Single column contents',
                    'name' => 'single_column',
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
                // Two columns contents, a clone of columns 1, 2.
                array(
                    'clone' => array(
                        0 => 'field_589bc7a447fbd',
                        1 => 'field_589bcb1e47fbe',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589bcdf7896bf',
                    'label' => 'Two column contents',
                    'name' => 'two_columns',
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
                // Three columns contents, a clone of columns 1, 2,3.
                array(
                    'clone' => array(
                        0 => 'field_589bc7a447fbd',
                        1 => 'field_589bcb1e47fbe',
                        2 => 'field_589bcb4047fbf',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589bce52896c0',
                    'label' => 'Three columns contents',
                    'name' => 'three_columns',
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
                // Four columns contents, a clone of columns 1, 2, 3, 4.
                array(
                    'clone' => array(
                        0 => 'field_589bc7a447fbd',
                        1 => 'field_589bcb1e47fbe',
                        2 => 'field_589bcb4047fbf',
                        3 => 'field_589bcbba47fc1',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589bcee4896c1',
                    'label' => 'Four columns contents',
                    'name' => 'four_columns',
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
                // Five columns contents, a clone of columns 1, 2, 3, 4, 5.
                array(
                    'clone' => array(
                        0 => 'field_589bc7a447fbd',
                        1 => 'field_589bcb1e47fbe',
                        2 => 'field_589bcb4047fbf',
                        3 => 'field_589bcbba47fc1',
                        4 => 'field_589bcb6647fc0',
                    ),
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                    'display' => 'group',
                    'layout' => 'table',
                    'key' => 'field_589bcf08896c3',
                    'label' => 'Five columns contents',
                    'name' => 'five_columns',
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
            'location' => array(
                array(
                    array(
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



    /**
     * Outputs the HTML contents of a Vanilla elements column.
     * 
     * @param  array $column_options The options that configure the appearance
     *                               of the column.
     * @param  array $layouts        The layouts of the column.
     * 
     * @return void
     */
    function vanilla_elements_columns_get_content ( $column_options, $layouts ) {

        // Open the column.
        echo '<div class = "column vanilla-elements-column column-' . $column_options['column_width'] . '">';

        global $layout;

        // Output column contents layout by layout.
        foreach ( $layouts as $layout ) {
            
            echo '<div class = "vanilla-elements-layout-' . $layout['acf_fc_layout'] . '">';
            include( $layout['acf_fc_layout'] . '/' . $layout['acf_fc_layout'] . '-template.php' );
            echo '</div><!-- .vanilla-elements-layout-' . $layout['acf_fc_layout'] . ' -->';
        }

        // Close the column.
        echo '</div><!-- .vanilla-elements-column -->';

    }

?>