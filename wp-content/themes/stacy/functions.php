<?php
add_action('wp_enqueue_scripts', 'stacy_theme_css', 999);
function stacy_theme_css() {
    wp_enqueue_style( 'stacy-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('stacy-child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
	wp_enqueue_style('bootstrap', ST_TEMPLATE_DIR . '/css/bootstrap.css');
	wp_enqueue_style('default-style-css', get_stylesheet_directory_uri()."/css/default.css" );
	wp_enqueue_style('theme-menu-style', get_stylesheet_directory_uri().'/css/theme-menu.css');
	wp_enqueue_style('media-responsive-css', get_stylesheet_directory_uri()."/css/media-responsive.css" );
	wp_dequeue_style('default-css', get_template_directory_uri() .'/css/default.css');   
}

//Load text domain for translation-ready
load_theme_textdomain('stacy', get_stylesheet_directory() . '/languages');
?>