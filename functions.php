<?php

function coatsi_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'coatsi_theme_support');

function coatsi_menus(){
    $locations = array(
        'primary' => "Desktop Primary Menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'coatsi_menus');


function coatsi_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('coatsi-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('coatsi-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css", array(), '1.0', 'all');
    wp_enqueue_style('coatsi-fontawesome', "https://use.fontawesome.com/releases/v5.15.2/css/all.css", array(), '1.0', 'all');

};

add_action('wp_enqueue_scripts', 'coatsi_register_styles');

function coatsi_register_scripts(){

    wp_enqueue_script('coatsi-bootstrap', "https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js", array(), '3.6.0', 'all');

}

add_action('wp_enqueue_scripts', 'coatsi_register_scripts');

?>