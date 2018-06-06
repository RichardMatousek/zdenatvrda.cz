<?php
function register_menu() {
register_nav_menu('primary-menu', __('Primary Menu','theme'));
}
add_action('init', 'register_menu');
 
 
function my_eneque() {
 
    // Register style
    wp_register_style( 'bootstrap', get_template_directory_uri() 
    . '/bootstrap/css/bootstrap.min.css' );
    wp_register_style( 'bootstrap-responsive', get_template_directory_uri() 
    . '/bootstrap/css/bootstrap-responsive.css' );
 
    // Enqueue style
wp_enqueue_style( 'bootstrap' );
wp_enqueue_style( 'bootstrap-responsive' );
 
    // Register script
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://code.jquery.com/jquery-1.8.0.min.js', null, null);
    wp_register_script( 'bootstrap', get_template_directory_uri() 
    . '/bootstrap/js/bootstrap.min.js', null, null );
 
    // Enqueue script
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'bootstrap' );
}
 
add_action('wp_enqueue_scripts', 'my_eneque');
 
 
 
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'name' => 'Main Sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
));
}

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 56, 56, true ); // Normal post thumbnails
add_image_size( 'sidebar', 50, 50, true ); // Sidebar thumbnail
        add_image_size( 'blog', 619, 300, true ); // Blog thumbnail
 
}
?>