<?php

// Add scripts and stylesheets
function blogtheme_scripts() {
    wp_enqueue_style( 'tammekannu_stylesheet', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'tammekannu_gfonts', 'https://fonts.googleapis.com/css?family=PT+Sans' );
}

add_action( 'wp_enqueue_style', 'blogtheme_scripts' );

// Add Google Fonts
function blogtheme_google_fonts() {
    wp_register_style('PT Sans', 'https://fonts.googleapis.com/css?family=PT+Sans');
    wp_enqueue_style( 'PT Sans');
    wp_register_style('Uncial Antiqua', 'https://fonts.googleapis.com/css?family=Uncial+Antiqua');
    wp_enqueue_style( 'Uncial Antiqua');
}

add_action( 'wp_register_styles', 'blogtheme_google_fonts' );

?>