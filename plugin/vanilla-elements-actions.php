<?php

    function vanilla_elements_actions_save ( $post_ID ) {

        // Remove current function action to avoid infinite loops.
        remove_action( 'save_post', 'vanilla_elements_actions_save' );



        global $post;
        $post = get_post( $post_ID );
        $post_content = $post->post_content . '<br />';
        setup_postdata( $post );

        while ( the_flexible_field( 'rows' ) ) {
            $post_content .= get_row_layout() . '<br />';

            if ( get_row_layout() == 'single_column_row' ) {
                $row_options = get_sub_field( 'row_options' );
                $single_column = get_sub_field( 'single_column' );

                $post_content .= $row_options . '<br />';
                $post_content .= $single_column . '<br />';
                $post_content .= get_sub_field( 'single_column' )['column_1'] . '<br />';
                $post_content .= get_sub_field( 'single_column' )['column_1']['column'] . '<br />';

                while ( the_flexible_field( get_sub_field( 'single_column' )['column_1']['column'] ) ) {
                    $post_content .= get_row_layout() . '<br />';
                }
            }
        }

        wp_reset_postdata();



        $result = wp_update_post( array(
            'ID' => $post_ID,
            'post_content' => $post_content
        ), true );



        // Re-hook this function action to restore its usage.
        add_action( 'save_post', 'vanilla_elements_actions_save' );

    }

?>