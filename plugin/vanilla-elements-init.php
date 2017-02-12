<?php

    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    // Include the plugin PHP files in the correct order.
    require_once( 'vanilla-elements-acf.php' );
    require_once( 'vanilla-elements-acf-export-customisation.php' );
    require_once( 'vanilla-elements-acf-export-elements.php' );
    require_once( 'vanilla-elements-acf-export-columns.php' );
    require_once( 'vanilla-elements-acf-export-rows.php' );

?>