<?php

function register_my_session(){
    if( ! session_id() ) {
        session_start();
    }
}

add_action('init', 'register_my_session');

function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('styles');

    wp_enqueue_style('fontawsome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    wp_localize_script( 'some-handle', 'someUniqueName', array( 'myPermalink' => get_permalink(), ) );


}

    add_action('wp_enqueue_scripts', 'load_stylesheets');

function addjs(){
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), false, true );
}

add_action('wp_enqueue_scripts', 'addjs');

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/*
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
*/