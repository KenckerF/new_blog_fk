<?php
function simplefk_theme_setup() {

    // Les fonctions vont dans ce hook
    add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'simplefk_theme_setup' );