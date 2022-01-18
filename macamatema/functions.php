<?php

function  macamatema_theme_support(){

//titulo dinamico
add_theme_support('title-tag');
//logo dinamico /nao usadado
add_theme_support('custom-logo');
//thumbnail dinamica
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'macamatema_theme_support');

/* menu dinamico */
function macamatema_menus(){
    $locations = array(
        'primary' => "Desktop Primary",
        'small' => "Small Items"
    
    );
    register_nav_menus($locations);
}

add_action('init','macamatema_menus');
   

/* buscar o css */
function macamatema_register_styles(){

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('macama-indexstyle', get_template_directory_uri() . "/assets/css/index.css", array(), $version, 'all');
    wp_enqueue_style('macama-infogeralstyle', get_template_directory_uri() . "/assets/css/infogeral.css", array(), $version, 'all');

   

}

add_action('wp_enqueue_scripts', 'macamatema_register_styles');
?>