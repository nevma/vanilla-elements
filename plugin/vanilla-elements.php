<?php

    /*
       Plugin Name: Vanilla Elements 
       Plugin URI: http://www.nevma.gr
       Description: Visual editor elements for the Vanilla WordPress framework based on ACF. 
       Version: 0.1.0
       Author: Nevma
       Author URI: http://www.nevma.gr
       License: GPLv2 or later
       License URI: https://www.gnu.org/licenses/gpl-2.0.html
    */



    /**
     * Copyright 2017 Nevma (nevma.gr, info@nevma.gr)
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General 
     * Public License, version 2, as published by the Free Software Foundation. This program is distributed in the hope
     * that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or 
     * FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write to the 
     * Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA.
     * 
     * GPL: http://www.gnu.org/copyleft/gpl.html
     */


    
    // Exit, if file is accessed directly.
    if ( ! defined( 'ABSPATH' ) ) {
        exit; 
    }



    // Setup plugin, its includes, actions and filters.
    require_once( 'vanilla-elements-init.php' );

?>