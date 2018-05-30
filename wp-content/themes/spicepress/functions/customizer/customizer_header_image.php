<?php
function spicepress_header_image_customizer( $wp_customize )
{
$wp_customize->remove_control('header_textcolor');

$wp_customize->add_section( 'header_image' , array(
		'title'      => __('Custom header settings','spicepress'),
		'priority'   => 125,
   	) );
	$wp_customize->add_setting(
	'header_one_name', array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_one_name', array(
        'label'   => __('Header Headline','spicepress'),
        'section' => 'header_image',
        'type'    => 'text',
		'priority'   => 140,
    ));
	$wp_customize->add_setting('header_one_text'
		, array(
        'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field',
		
    ));
    $wp_customize->add_control( 'header_one_text', array(
        'label'   => __('Header Text','spicepress'),
        'section' => 'header_image',
        'type'    => 'text',
		'priority'   => 140,
    ));
}
add_action( 'customize_register', 'spicepress_header_image_customizer' );	
?>