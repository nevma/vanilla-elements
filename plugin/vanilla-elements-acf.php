<?php

    /**
     * Registers all the necessary ACF field groups and fields, so that the 
     * Vanilla elements are available in the posts edit screen. 
     * 
     * @return void
     */
    function vanilla_elements_acf_register_fields () {

        if ( function_exists( 'acf_add_local_field_group' ) ) {

            vanilla_elements_acf_export_customisation_register();
            vanilla_elements_acf_export_elements_register();
            vanilla_elements_acf_export_columns_register();
            vanilla_elements_acf_export_rows_register();

        }

    }

?>