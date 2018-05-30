<?php	
add_action( 'widgets_init', 'spicepress_widgets_init');
function spicepress_widgets_init() {
	
	/*sidebar*/
	
	register_sidebar( array(
		'name' => __('Sidebar widget area','spicepress'),
		'id' => 'sidebar_primary',
		'description' => __('Sidebar widget area','spicepress'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	) );
		
	register_sidebar( array(
		'name' => __( 'Footer widget left area', 'spicepress' ),
		'id' => 'footer_widget_area_left',
		'description' => __( 'Footer widget left area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer widget central area', 'spicepress' ),
		'id' => 'footer_widget_area_center',
		'description' => __( 'Footer widget central area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer widget right area', 'spicepress' ),
		'id' => 'footer_widget_area_right',
		'description' => __( 'Footer widget right area', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header"><h3 class="widget-title">',
		'after_title' => '</h3><span></span></div>',
	) );
	
	
	
	register_sidebar( array(
	'name' => __('WooCommerce sidebar widget area', 'spicepress' ),
	'id' => 'woocommerce',
	'description' => __( 'WooCommerce sidebar widget area', 'spicepress' ),
	'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
	'after_widget' => '</aside>',
	'before_title' => '<div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">',
	'after_title' => '</h3></div>',
	) );
	
		// contact template page sidebar
	register_sidebar( array(
		'name' => __( 'Contact template sidebar', 'spicepress' ),
		'id' => 'wdl_contact_page_sidebar',
		'description' => __('Contact template sidebar', 'spicepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInDown animated" data-wow-delay="0.4s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">',
		'after_title' => '</h3></div>',
	));
}	                     
?>