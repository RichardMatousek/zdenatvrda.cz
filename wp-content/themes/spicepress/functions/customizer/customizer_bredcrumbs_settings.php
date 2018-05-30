<?php function spicepress_breadcrumbs_customizer( $wp_customize ) {
$wp_customize->add_section(
        'breadcrumbs_setting',
        array(
            'title' => __('Archive page title','spicepress'),
            'description' =>'',
			'priority' => 130,
			)
    );

	$wp_customize->add_setting(
    'archive_prefix',
    array(
        'default' => __('Archive','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'archive_prefix',array(
    'label'   => __('Archive','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));	
	
	$wp_customize->add_setting(
    'category_prefix',
    array(
        'default' => __('Category','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'category_prefix',array(
    'label'   => __('Category','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));

	$wp_customize->add_setting(
    'author_prefix',
    array(
        'default' => __('All posts by','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'author_prefix',array(
    'label'   => __('Author','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));
	
	$wp_customize->add_setting(
    'tag_prefix',
    array(
        'default' => __('Tag','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'tag_prefix',array(
    'label'   => __('Tag','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));
	
	
	$wp_customize->add_setting(
    'search_prefix',
    array(
        'default' => __('Search results for','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'search_prefix',array(
    'label'   => __('Search','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));
	
	$wp_customize->add_setting(
    '404_prefix',
    array(
        'default' => __('404','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( '404_prefix',array(
    'label'   => __('404','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));
	
	
	$wp_customize->add_setting(
    'shop_prefix',
    array(
        'default' => __('Shop','spicepress'),
		'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'spicepress_template_page_sanitize_text',
		)
	);	
	$wp_customize->add_control( 'shop_prefix',array(
    'label'   => __('Shop','spicepress'),
    'section' => 'breadcrumbs_setting',
	 'type' => 'text'
	));
}

add_action( 'customize_register', 'spicepress_breadcrumbs_customizer' ); 


function spicepress_template_page_sanitize_text( $input ) {

			return wp_kses_post( force_balance_tags( $input ) );

			}
?>