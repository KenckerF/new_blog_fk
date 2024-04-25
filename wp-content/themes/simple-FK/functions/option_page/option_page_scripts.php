<?php

function loader() {

    if ( ! did_action( 'wp_enqueue_media' ) ) {
        wp_enqueue_media();
    }

    wp_enqueue_script( 'custom-media-uploader',
        get_stylesheet_directory_uri() .
        '/assets/js/loader.js', array( 'jquery' ) );
}

add_action( 'admin_enqueue_scripts', 'loader' );