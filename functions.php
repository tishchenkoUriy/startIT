<?php 

function wpstartit_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style( 'menu', get_template_directory_uri() . '/css/menu.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() .'/css/jquery.fancybox.css' );
	wp_enqueue_script( 'jquery321', get_template_directory_uri() .'/js/jquery-3.2.1.min.js' );

wp_enqueue_script( 'custom', get_template_directory_uri() .'/js/custom.js' );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/js/bootstrap.min.js' );
wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() .'/js/jquery.mixitup.min.js' );
wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery.mixitup.min.js' );
wp_enqueue_script( 'fancybox', get_template_directory_uri() .'/js/jquery.fancybox.min.js' );
wp_enqueue_script( 'owl', get_template_directory_uri() .'/js/owl.carousel.js' );
wp_enqueue_script( 'typed', get_template_directory_uri() .'/js/typed.min.js' );
wp_enqueue_script( 'menu', get_template_directory_uri() .'/js/menu.js' );
}
add_action( 'wp_enqueue_scripts', 'wpstartit_scripts' );

