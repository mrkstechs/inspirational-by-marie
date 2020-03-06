<?php
/*
*
* @package Inspirational_By_Marie
*
*   ============================
*       ADMIN ENQUEUE FUNCTIONS
*   ============================
*/

function marie_load_admin_scripts( $hook ){

    if ('toplevel_page_inspirational_by_marie' != $hook){
        return;
    }

    wp_register_style( 'marie_admin', get_template_directory_uri(). '/inc/css/marie.admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('marie_admin');

    wp_enqueue_media (); //trigger the use of the wp media uploader

    wp_register_script( 'marie_admin_script', get_template_directory_uri(). '/inc/js/marie.admin.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('marie_admin_script');
}

add_action( 'admin_enqueue_scripts', 'marie_load_admin_scripts' );