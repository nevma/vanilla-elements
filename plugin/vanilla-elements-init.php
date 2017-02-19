<?php

    /**
     * Vanilla elements plugin initialisation functions.
     */
    


    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    // Adds the action which registers all necessary ACF field groups and fields.
    add_action( 'acf/init', 'vanilla_elements_init_register_fields' );

    // Adds the action which saves Vanilla elements contents in post content on post save.
    add_action( 'save_post', 'vanilla_elements_actions_save_post' );

    // Adds the action which adds the Vanilla elements media button in the post edit page.
    add_action( 'media_buttons', 'vanilla_elements_admin_add_media_button', 999 );

    // Adds the action which enqueues the Vanilla elements media button CSS and Javascript.
    add_action( 'admin_enqueue_scripts', 'vanilla_elements_admin_add_media_button_css_js' );



    /**
     * Registers all the necessary ACF field groups and fields, so that the 
     * Vanilla elements are available in the posts edit screen. 
     * 
     * @return void
     */
    function vanilla_elements_init_register_fields () {

        if ( function_exists( 'acf_add_local_field_group' ) ) {

            vanilla_elements_customisation_register();
            vanilla_elements_base_register_elements();
            vanilla_elements_columns_register();
            vanilla_elements_rows_register();

        }

    }

?>