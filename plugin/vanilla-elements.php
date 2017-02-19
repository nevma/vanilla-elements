<?php

    /**
     * Vanilla elements plugin.
     */
    
    

    /*
       Plugin Name: Vanilla Elements 
       Plugin URI: http://www.nevma.gr
       Description: Visual editor elements for the Vanilla WordPress framework, based on ACF. 
       Version: 0.1.0
       Author: Nevma
       Author URI: http://www.nevma.gr
       Copyright: 2017 Nevma (nevma.gr, info@nevma.gr)
       License: GPLv3 or later
       License URI: https://www.gnu.org/licenses/gpl-3.0.html
    */


    
    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    // Initialise the plugin.
    require_once( 'vanilla-elements-init.php' );

    // Include the rest of the plugin files.
    require_once( 'inc/vanilla-elements-actions.php' );
    require_once( 'inc/vanilla-elements-admin.php' );

    // Include the elements' files.
    require_once( 'inc/elements/custom.php' );
    require_once( 'inc/elements/base.php' );
    require_once( 'inc/elements/link.php' );
    require_once( 'inc/elements/columns.php' );
    require_once( 'inc/elements/rows.php' );



    /**
     * Retrieves and echoes the HTML contents of the Vanilla elements for the 
     * current post. Replaces the WordPress core function `get_content()`.
     * 
     * @return void
     */
    function vanilla_elements_get_content () {

        if ( have_rows( 'rows' ) ) {

            $columns = array();

            // Read the ACF rows layouts.
            while ( have_rows( 'rows' ) ) {

                the_row();

                // Decide how many columns are given in each row and output their contents.
                $layout = get_row_layout();
                
                $row_options = get_sub_field( 'row_options' );

                if ( $layout == 'single_column_row' ) {

                    // One column row.
                    $columns = get_sub_field( 'single_column' );
                    $column_1 = $columns['column_1']['column'];

                    vanilla_elements_rows_get_content( $row_options, array( $column_1 ) );

                } else if ( $layout == 'two_columns_row' ) {

                    // Two columns row.
                    $columns = get_sub_field( 'two_columns' );
                    $column_1 = $columns['column_1']['column'];
                    $column_2 = $columns['column_2']['column'];
                    
                    vanilla_elements_rows_get_content( $row_options, array( $column_1, $column_2 ) );

                } else if ( $layout == 'three_columns_row' ) {

                    // Three columns row.
                    $columns = get_sub_field( 'three_columns' );
                    $column_1 = $columns['column_1']['column'];
                    $column_2 = $columns['column_2']['column'];
                    $column_3 = $columns['column_3']['column'];

                    vanilla_elements_rows_get_content( $row_options, array( $column_1, $column_2, $column_3 ) );

                } else if ( $layout == 'four_columns_row' ) {

                    // Four columns row.
                    $columns = get_sub_field( 'four_columns' );
                    $column_1 = $columns['column_1']['column'];
                    $column_2 = $columns['column_2']['column'];
                    $column_3 = $columns['column_3']['column'];
                    $column_4 = $columns['column_4']['column'];

                    vanilla_elements_rows_get_content( $row_options, array( $column_1, $column_2, $column_3, $column_4 ) );

                } else if ( $layout == 'five_columns_row' ) {

                    // Five columns row.
                    $columns = get_sub_field( 'five_columns' );
                    $column_1 = $columns['column_1']['column'];
                    $column_2 = $columns['column_2']['column'];
                    $column_3 = $columns['column_3']['column'];
                    $column_4 = $columns['column_4']['column'];
                    $column_5 = $columns['column_5']['column'];

                    vanilla_elements_rows_get_content( $row_options, array( $column_1, $column_2, $column_3, $column_4, $column_5 ) );

                }

            }

        }

    }

?>