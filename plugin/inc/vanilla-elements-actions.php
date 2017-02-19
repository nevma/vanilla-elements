<?php
    
    /**
     * Vanilla elements plugin actions functions.
     */
    


    /**
     * Runs on post save and saves the Vanilla elements contents output of the
     * given post into its content, so that it is stored there for future
     * purposes and for being searchable.
     * 
     * @param  int $post_ID The ID of the post that has just been saved.
     * 
     * @return void
     */
    function vanilla_elements_actions_save_post ( $post_ID ) {

        // Remove current function action to avoid infinite loops.
        remove_action( 'save_post', 'vanilla_elements_actions_save_post' );



        // Get Vanilla elements output for this post.
        global $post;
        $post = get_post( $post_ID );
        setup_postdata( $post );

        ob_start();
        vanilla_elements_get_content();
        $post_content = ob_get_contents();
        ob_end_clean();

        // Save in the post contents.
        $result = wp_update_post( array(
            'ID' => $post_ID,
            'post_content' => $post_content
        ), true );

        wp_reset_postdata();



        // Re-hook this function action to restore its usage.
        add_action( 'save_post', 'vanilla_elements_actions_save_post' );

    }

?>