<?php

add_action('wp_enqueue_scripts', function() {

    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.min.css');
    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.min.css');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-leapis', 'https://fonts.googleapis.com');


    
    wp_deregister_script( 'jquery');
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js');

	wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

 ?>