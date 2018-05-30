<?php
/**
 * business-portfolio Theme Customizer
 *
 * @package business-portfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_portfolio_customize_register( $wp_customize ) {
	$wp_customize->get_control('header_textcolor')->label = __('Site Tagline Color', 'business-portfolio');
	$wp_customize->get_control('header_textcolor')->priority = 1;
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'business_portfolio_header_color', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#ffffff',
        'sanitize_callback' => 'business_portfolio_sanitize_hex_color'
    ) );

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'business_portfolio_header_color',array(
	          'label'                 =>  __( 'Site title and menu colors', 'business-portfolio' ),
	          'section'               => 'colors',
	          'type'                  => 'color',
	          'priority'              => 1,
	          'settings' => 'business_portfolio_header_color',
	      ) )
	);
	
	// Setting: Slider option enable or disable.
	$wp_customize->add_setting( 'business_portfolio_sitetag_enable', array(
		 'capability'		    => 'edit_theme_options',
    	'default'			    => 0,
    	'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
	) );
	
	$wp_customize->add_control( 'business_portfolio_sitetag_enable', array(
    'label'                 =>  __( 'Enable Site Tagline', 'business-portfolio' ),
    'section'               => 'colors',
    'type'                  => 'checkbox',
    'priority'              => 0,
    'settings'              => 'business_portfolio_sitetag_enable',
	) );

	// Sanitization Callback
	require_once trailingslashit( get_template_directory() ) . '/inc/sanitize.php'; 

	//Customizer Home Page Options
	require_once trailingslashit( get_template_directory() ) . '/inc/customizer-front.php';

	//Customizer Home Page Options
	require_once trailingslashit( get_template_directory() ) . '/inc/upgrade-to-pro/control.php';

	//Upgrade to Pro
	// Register custom section types.
	$wp_customize->register_section_type( 'business_portfolio_Customize_Section_Upsell' );

	// Register sections.
	$wp_customize->add_section(
		new business_portfolio_Customize_Section_Upsell(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__( 'Go Pro', 'business-portfolio' ),
				'pro_text' => esc_html__( 'Buy Business Portfolio Pro', 'business-portfolio' ),
				'pro_url'  => 'https://justwpthemes.com/downloads/business-portfolio-pro/',
				'priority' => 1,
			)
		)
	);
	
	/*=============================================================================
	==============================Panel: Header Slider Option.============================
	================================================================================
	*/
	$wp_customize->add_panel( 'business_portfolio_main_option', array(
		'priority'       => 10,
		'title'          => __( 'Header Options', 'business-portfolio' ),
		'description'    => __( 'Header Option Customizer', 'business-portfolio' ),
		'capability'     => 'edit_theme_options',
		'active_callback'=> '', // is_front_page
		'theme_supports' => '',
	) );
	

	// Section: Header Slider Option.
	$wp_customize->add_section( 'business_portfolio_main_slider', array(
		'priority'       => 60,
		'panel'          => 'business_portfolio_main_option',
		'title'          => __( 'Slider Option', 'business-portfolio' ),
		'description'    => __( 'This will disable the Main Banner Options.', 'business-portfolio' ),
		'capability'     => 'edit_theme_options',
		'active_callback'=> '', // is_front_page
		'theme_supports' => '',
	) );
	
	// Setting: Slider option enable or disable.
	$wp_customize->add_setting( 'business_portfolio_slider_section_enable', array(
		 'capability'		    => 'edit_theme_options',
    	'default'			    => 0,
    	'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
	) );
	
	$wp_customize->add_control( 'business_portfolio_slider_section_enable', array(
    'label'                 =>  __( 'Enable Slider for Header', 'business-portfolio' ),
    'section'               => 'business_portfolio_main_slider',
    'type'                  => 'checkbox',
    'priority'              => 10,
    'settings'              => 'business_portfolio_slider_section_enable',
	) );

	for ($i=1;$i<=3;$i++) {
	$wp_customize->add_setting( 'business_portfolio_slider_page_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
	) );


	$wp_customize->add_control( 'business_portfolio_slider_page_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Select Page for Slider %s', 'business-portfolio' ), $i ),
	    'section'               => 'business_portfolio_main_slider',
	    'type'                  => 'dropdown-pages',
	    'settings'              => 'business_portfolio_slider_page_'.$i,
	) );

	$wp_customize->add_setting('business_portfolio_slider_text_position'.$i, 
		array(
			'sanitize_callback'	=> 'business_portfolio_sanitize_select',
			'default'			=> 'right'
		)
	);

	$wp_customize->add_control('business_portfolio_slider_text_position'.$i, 
		array(
			/* translators: %s: Description */ 
	    	'label'                 =>  sprintf( __( 'Slider %s Text Position', 'business-portfolio' ), $i ),
			'description'		=> esc_html__( 'Select Slider Text Postion right, left and center', 'business-portfolio' ),
			'section'    		=> 'business_portfolio_main_slider',
			'type'       		=> 'radio',
			'choices'    		=> array(
				'right'   		=> esc_html__('right','business-portfolio'),
				'center'  		=> esc_html__('center','business-portfolio'),
				'left'	 		=> esc_html__('left','business-portfolio'),
			),
		) 
	);

	$wp_customize->add_setting( 'business_portfolio_slider_button_1_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'business_portfolio_slider_button_1_title_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'First Button Title For Slider %s', 'business-portfolio' ), $i ),
	    'description'           =>  __( 'Hire Me', 'business-portfolio' ),
	    'section'               => 'business_portfolio_main_slider',
	    'type'                  => 'text',
	    'settings' => 'business_portfolio_slider_button_1_title_'.$i,
	) );

	$wp_customize->add_setting( 'business_portfolio_slider_button_1_url_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( 'business_portfolio_slider_button_1_url_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Select URL For button Title 1 of slider  %s', 'business-portfolio' ), $i ),
	    'description'           =>  __( '#', 'business-portfolio' ),
	    'section'               => 'business_portfolio_main_slider',
	    'type'                  => 'url',
	    'settings' => 'business_portfolio_slider_button_1_url_'.$i,
	) );

	$wp_customize->add_setting( 'business_portfolio_slider_button_2_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'business_portfolio_slider_button_2_title_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Second Button Title For Slider %s', 'business-portfolio' ), $i ),
	    'description'           =>  __( 'Contact Us', 'business-portfolio' ),
	    'section'               => 'business_portfolio_main_slider',
	    'type'                  => 'text',
	    'settings' => 'business_portfolio_slider_button_2_title_'.$i,
	) );

	$wp_customize->add_setting( 'business_portfolio_slider_button_2_url_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( 'business_portfolio_slider_button_2_url_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Select URL For button Title 2 of slider %s', 'business-portfolio' ), $i ),
	    'description'           =>  __( '#', 'business-portfolio' ),
	    'section'               => 'business_portfolio_main_slider',
	    'type'                  => 'url',
	    'settings' => 'business_portfolio_slider_button_2_url_'.$i,
	) );
	}

	/*=============================================================================
	==============================Panel: Header Option End.============================
	================================================================================
	*/
	/*Footer Social Customizer Start*/
	$wp_customize->add_panel( 'business_portfolio_footer_option', array(
			'priority' => 40,
            'capability'     => 'edit_theme_options',
			'title' => __( 'Footer Options', 'business-portfolio' ),
			'description' => __( 'Footer Options', 'business-portfolio' ),
		)
	);	
    
    //Social Links
    $wp_customize->add_section('footer_social_option',array(
			'priority' => 20,
            'capability'     => 'edit_theme_options',
			'title' => __('Social Links','business-portfolio'),
			'description' => __('Social Links','business-portfolio'),
			'panel' => 'business_portfolio_footer_option',
		)
	);
    
    	$wp_customize->add_setting('business_portfolio_facebook_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default' =>  __( '#', 'business-portfolio' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'business_portfolio_facebook_url',array(
			'label' => __('Facebook URL','business-portfolio'),
			'type' => 'url',
			'section' => 'footer_social_option',
			'settings' => 'business_portfolio_facebook_url',
		)
	));
    
    	$wp_customize->add_setting('business_portfolio_twitter_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default' =>  __( '#', 'business-portfolio' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'business_portfolio_twitter_url',array(
			'label' => __('Twitter URL','business-portfolio'),
			'type' => 'url',
			'section' => 'footer_social_option',
			'settings' => 'business_portfolio_twitter_url',
		)
	));
    
    	$wp_customize->add_setting('business_portfolio_linkedin_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default' =>  __( '#', 'business-portfolio' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'business_portfolio_linkedin_url',array(
			'label' => __('Linkedin URL','business-portfolio'),
			'type' => 'url',
			'section' => 'footer_social_option',
			'settings' => 'business_portfolio_linkedin_url',
		)
	));
    
    $wp_customize->add_setting('business_portfolio_pinterest_url',array(
            'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
			'default' =>  __( '#', 'business-portfolio' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'business_portfolio_pinterest_url',array(
			'label' => __('Pinterest URL','business-portfolio'),
			'type' => 'url',
			'section' => 'footer_social_option',
			'settings' => 'business_portfolio_pinterest_url',
		)
	));
     $wp_customize->add_setting('business_portfolio_youtube_url',array(
            'capability'     => 'edit_theme_options',  
			'sanitize_callback' => 'esc_url_raw',
			'default' =>  __( '#', 'business-portfolio' )
		)
	);

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'business_portfolio_youtube_url',array(
			'label' => __('Youtube URL','business-portfolio'),
			'type' => 'url',
			'section' => 'footer_social_option',
			'settings' => 'business_portfolio_youtube_url',
		)
	));
	/*Footer Social Customiaer End*/
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'business_portfolio_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'business_portfolio_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'business_portfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function business_portfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function business_portfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function business_portfolio_customize_preview_js() {
	wp_enqueue_script( 'business-portfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'business_portfolio_customize_preview_js' );


function business_portfolio_customizer_control_scripts() {

	wp_enqueue_script( 'business-portfolio-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'business-portfolio-customize-controls', get_template_directory_uri() . '/inc/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'business_portfolio_customizer_control_scripts', 0 );