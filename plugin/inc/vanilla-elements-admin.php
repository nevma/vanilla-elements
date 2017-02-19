<?php

    /**
     * Vanilla elements plugin admin settings.
     */
    


    /**
     * Adds the Vanilla elements activate/deactivate button in the post edit
     * page. 
     * 
     * @return void
     */
    function vanilla_elements_admin_add_media_button () {

        echo '<button type = "button" class = "button vanilla-elements-enable-button">Vanilla elements enable</button>';
        echo '<button type = "button" class = "button vanilla-elements-disable-button">Vanilla elements disable</button>';

    }



    /**
     * Enqueues the Vanilla elements activate/deactivate button css and javascript.
     * 
     * @return void
     */
    function vanilla_elements_admin_add_media_button_css_js () {

        wp_enqueue_style( 'vanilla-elements-media-button-css', vanilla_elements_admin_get_url() . '/' . 'assets/css/vanilla_elements_media_button.css' );
        wp_enqueue_script( 'vanilla-elements-media-button-js', vanilla_elements_admin_get_url() . '/' . 'assets/js/vanilla_elements_media_button.js', array( 'jquery' ) );

    }



    /**
     * Returns the url to the plugin directory.
     * 
     * @return string The url to the plugin directory.
     */
    function vanilla_elements_admin_get_url () {

        return plugin_dir_url( dirname( __FILE__ ) . '/../vanilla-elements.php' );

    }

?>