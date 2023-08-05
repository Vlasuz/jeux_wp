<?php

add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('global', get_template_directory_uri() . '/assets/css/global.min.css');
    wp_enqueue_style('pages', get_template_directory_uri() . '/assets/css/pages.min.css');
    wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.min.css');
    wp_enqueue_style('fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('fonts-leapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

 

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array('jquery'), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true);
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	if( $dosvg ){
		if( current_user_can('manage_options') ){
			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}
	}
	return $data;
};