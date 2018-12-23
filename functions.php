<?php 

function wpstartit_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'css/bootstrap.css' );
	wp_enqueue_style( 'menu', get_template_directory_uri() .'css/menu.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() .'css/animate.css');
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() .'css/jquery.fancybox.css' );

}

add_action( 'wp_enqueue_scripts', 'wpstartit_scripts' );

