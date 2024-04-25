<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Déclaration emplacement de menu
register_nav_menus( array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
) );

function simplefk_register_assets() {

    wp_enqueue_script('jquery' );

    wp_enqueue_style(
        'simplefk',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );

    wp_enqueue_style('thickbox');
}
add_action( 'wp_enqueue_scripts', 'simplefk_register_assets' );

@include_once 'functions/theme_support.php';
@include_once 'functions/option_page/option_page.php';

