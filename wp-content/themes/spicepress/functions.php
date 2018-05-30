<?php
// Global variables define
define('ST_TEMPLATE_DIR_URI',get_template_directory_uri());	
define('ST_TEMPLATE_DIR',get_template_directory());
define('ST_THEME_FUNCTIONS_PATH',ST_TEMPLATE_DIR.'/functions');


// Theme functions file including
require( ST_THEME_FUNCTIONS_PATH . '/scripts/script.php');
require( ST_THEME_FUNCTIONS_PATH . '/menu/default_menu_walker.php');
require( ST_THEME_FUNCTIONS_PATH . '/menu/st_nav_walker.php');
require( ST_THEME_FUNCTIONS_PATH .'/font/font.php');
require( ST_THEME_FUNCTIONS_PATH . '/breadcrumbs/breadcrumbs.php');
require( ST_THEME_FUNCTIONS_PATH . '/template-tags.php');
require( ST_THEME_FUNCTIONS_PATH . '/widgets/sidebars.php');

// Adding customizer files
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_sections_settings.php' );
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_header_image.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_general_settings.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_recommended_plugin.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_import_data.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer_bredcrumbs_settings.php');
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer-pro.php');

//Alpha Color Control
require( ST_THEME_FUNCTIONS_PATH . '/customizer/customizer-alpha-color-picker/class-spicepress-customize-alpha-color-control.php');


// set default content width
if ( ! isset( $content_width ) ) {
	$content_width = 696;
}
// Theme title
if( !function_exists( 'spicepress_head_title' ) ) 
{
	function spicepress_head_title( $title , $sep ) {
		global $paged, $page;
		
		if ( is_feed() )
				return $title;
			
		// Add the site name
		$title .= get_bloginfo( 'name' );
		
		// Add the site description for the home / front page
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
				$title = "$title $sep $site_description";
			
		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
				$title = "$title $sep " . sprintf( __('Page', 'spicepress' ), max( $paged, $page ) );
			
		return $title;
	}
}
add_filter( 'wp_title', 'spicepress_head_title', 10, 2);


if ( ! function_exists( 'spicepress_theme_setup' ) ) :

function spicepress_theme_setup() {
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	
	load_theme_textdomain( 'spicepress', get_template_directory() . '/languages' );

	
	
	
	// Add default posts and comments RSS feed links to head.
	
	add_theme_support( 'automatic-feed-links' );
	
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );

	
	
	/*
	 * Let WordPress manage the document title.
	 */
	 
	add_theme_support( 'title-tag' );
	

	// supports featured image
	
	add_theme_support( 'post-thumbnails' );

	
	
	// This theme uses wp_nav_menu() in two locations.
	
	register_nav_menus( array(
	
		'primary' => __( 'Primary Menu', 'spicepress' ),
		
	) );
	
	
	// woocommerce support
	
	add_theme_support( 'woocommerce' );
	
	
	//Custom Header support
	
	add_theme_support( 'custom-header' );
	
	
	
	//Custom logo
	
	add_theme_support( 'custom-logo', array(
		'height'      => 49,
		'width'       => 210,
		'flex-height' => true,
		'header-text' => array( 'site-title', 'site-description' ),
		
	) );
	
	// Custom-header
    add_theme_support( 'custom-header', apply_filters( 'spicepress_custom_header_args', array(
                'default-text-color'     => '333',
                'width'                  => 1600,
                'height'                 => 200,
                'flex-height'            => true,
                'wp-head-callback'       => 'spicepress_header_style',
            ) ) );
			
	//About Theme		
	if ( is_admin() ) {
		require( ST_THEME_FUNCTIONS_PATH . '/spicepress-info/welcome-screen.php');
	}		
}
endif; 
add_action( 'after_setup_theme', 'spicepress_theme_setup' );


function spicepress_logo_class($html)
{
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	return $html;
}
add_filter('get_custom_logo','spicepress_logo_class');

add_action( 'admin_init', 'spicepress_detect_button' );
	function spicepress_detect_button() {
	wp_enqueue_style( 'spicepress-info-button', get_template_directory_uri() . '/css/import-button.css' );
}

function spicepress_customizer_live_preview() {
	wp_enqueue_script(
		'spicepress-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array(
			'jquery',
			'customize-preview',
		), 999, true
	);
}

add_action( 'customize_preview_init', 'spicepress_customizer_live_preview' );