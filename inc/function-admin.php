<?php
/*
*
* @package Inspirational_By_Marie
*
*    ============================
*        ADMIN PAGE
*    ============================
*/
function marie_add_admin_page(){
    //Init Admin Page
    add_menu_page( 'Marie Theme Options', 'Marie', 'manage_options', 'marie_options', 'marie_admin_page', 'dashicons-admin-generic', 66 );

    // Generate Admin Sub Pages
    add_submenu_page( 'marie_options', 'Customize various sections on the site', 'General', 'manage_options', 'marie_options', 'marie_admin_page');

    // Activate custom settings
    add_action( 'admin_init', 'marie_custom_settings');
}
add_action( 'admin_menu', 'marie_add_admin_page' );
// Custom settings
function marie_custom_settings(){
    
}
// Template Functions
function marie_admin_page(){
    require_once( get_template_directory() . '/inc/templates/marie-admin.php' );
}