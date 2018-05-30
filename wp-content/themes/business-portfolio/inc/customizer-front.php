<?php

// Panel: Front Page Options.
$wp_customize->add_panel( 'business_portfolio_front_option', array(
	'priority' => 20,
	'title'          => __( 'Front Page Options', 'business-portfolio' ),
	'description'    => __( 'Front Page Options.', 'business-portfolio' ),
	'capability'     => 'edit_theme_options',
	'active_callback'=> '', // is_front_page
	'theme_supports' => '',
) );

/*==============================================================================
============================Service Customizer Start============================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_service_section', array(
    'capability'            => 'edit_theme_options',
     'title'                 => __( 'Front Service Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Service section, you can also change the icon per page', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//service section enable disable

$wp_customize->add_setting( 'business_portfolio_service_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_service_section_enable', array(
    'label'                 =>  __( 'Enable Service Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_service_section_enable',
) );

//service Title
$wp_customize->add_setting( 'business_portfolio_service_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_service_page_title', array(
    'label'                 =>  __( 'Select Page for Service Title and Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_service_page_title',
) );


// service Us page 1 and Icon 1

$wp_customize->add_setting( 'business_portfolio_service_page_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_service_page_1', array(
    'label'                 =>  __( 'Select First Page for Service Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_service_page_1',
) );

$wp_customize->add_setting( 'business_portfolio_service_icon_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_service_icon_1', array(
    'label'                 =>  __( 'Icon For Service 1', 'business-portfolio' ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-check','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>'),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_service_icon_1',
) );

//service us Second 
$wp_customize->add_setting( 'business_portfolio_service_page_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_service_page_2', array(
    'label'                 =>  __( 'Select Second Page for Service Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_service_page_2',
) );

$wp_customize->add_setting( 'business_portfolio_service_icon_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_service_icon_2', array(
    'label'                 =>  __( 'Icon For Service 2', 'business-portfolio' ),
    /* translators: %s: Description */ 
   'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-edit','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>'),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_service_icon_2',
) );

//service us Third 
$wp_customize->add_setting( 'business_portfolio_service_page_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_service_page_3', array(
    'label'                 =>  __( 'Select Third Page for Service Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_service_page_3',
) );

$wp_customize->add_setting( 'business_portfolio_service_icon_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_service_icon_3', array(
    'label'                 =>  __( 'Icon For Service 3', 'business-portfolio' ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-send','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>'),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_service_icon_3',
) );

//service us Forth
$wp_customize->add_setting( 'business_portfolio_service_page_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_service_page_4', array(
    'label'                 =>  __( 'Select Fourth Page for Service Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_service_page_4',
) );

$wp_customize->add_setting( 'business_portfolio_service_icon_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_service_icon_4', array(
    'label'                 =>  __( 'Icon For Service 4', 'business-portfolio' ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-code','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>'),
    'section'               => 'business_portfolio_service_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_service_icon_4',
) );

/*==============================================================================
============================Service Customizer End==============================
===============================================================================*/


/*==============================================================================
============================About Us Customizer Start===========================
===============================================================================*/
//About section enable disable

$wp_customize->add_section( 'business_portfolio_about_us_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front About Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for About section, you can also change the icon per page', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

$wp_customize->add_setting( 'business_portfolio_about_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_about_section_enable', array(
    'label'                 =>  __( 'Enable About Us', 'business-portfolio' ),
    'section'               => 'business_portfolio_about_us_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_about_section_enable',
) );

//About Us Page Heading ,Description and Description
$wp_customize->add_setting( 'business_portfolio_about_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_about_page_title', array(
    'label'                 =>  __( 'Select Page for About Title & Short Description with Featured Image', 'business-portfolio' ),
    'description'           =>  __('This section need to enable first!!', 'business-portfolio'),
    'section'               => 'business_portfolio_about_us_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_about_page_title',
) );

// About Us page 1
for($i=1;$i<=3;$i++)
{
    $wp_customize->add_setting( 'business_portfolio_about_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
    ) );

    $wp_customize->add_control( 'business_portfolio_about_page_'.$i, array(
        /* translators: %s: Label */ 
        'label'                 =>  sprintf( __( 'Select Page for About Tab  %s', 'business-portfolio' ), $i ),
        'section'               => 'business_portfolio_about_us_section',
        'type'                  => 'dropdown-pages',
        'settings'              => 'business_portfolio_about_page_'.$i,
    ) );

}



/*==============================================================================
============================About Us Customizer End=============================
===============================================================================*/


/*==============================================================================
============================Our Skill Customizer Start==========================
===============================================================================*/

$wp_customize->add_section( 'business_portfolio_skill_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Skill Section', 'business-portfolio' ),
    'description'           => __( 'Fill the Value for skill Section', 'business-portfolio' ),
    'panel'				=> 'business_portfolio_front_option'
) );

//Our Skill section enable disable
$wp_customize->add_setting( 'business_portfolio_skill_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_skill_section_enable', array(
    'label'                 =>  __( 'Enable Skill Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_skill_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_skill_section_enable',
) );

$wp_customize->add_setting( 'business_portfolio_skill_heading', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_skill_heading', array(
    
    'label'                 =>  __( 'Skill Heading', 'business-portfolio' ),
    'section'               => 'business_portfolio_skill_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_skill_heading',
) );
//Some Info Title
$wp_customize->add_setting( 'business_portfolio_someinfo_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_someinfo_page_title', array(
    'label'                 =>  __( 'Select Page for Some info Heading and description', 'business-portfolio' ),
    'section'               => 'business_portfolio_skill_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_someinfo_page_title',
) );


// Our Skill Categories and skill percentage in progress bar
for($i=1;$i<=4;$i++){
    $wp_customize->add_setting( 'business_portfolio_skill_title_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_skill_title_'.$i, array(
    /* translators: %s: Description */ 
    'label'                 =>  sprintf( __( 'Skill Title  %s', 'business-portfolio' ), $i ),
    'section'               => 'business_portfolio_skill_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_skill_title_'.$i,
) );

 $wp_customize->add_setting( 'business_portfolio_skill_percentage_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_skill_percentage_'.$i, array(
     /* translators: %s: Description */ 
    'label'                 =>  sprintf( __( 'Skill Percentage  %s', 'business-portfolio' ), $i ),
    'section'               => 'business_portfolio_skill_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_skill_percentage_'.$i,
) );
}
/*==============================================================================
============================Our Skill Customizer End=============================
===============================================================================*/


/*==============================================================================
===========================Why Choose Customizer Start==========================
===============================================================================*/
//Why Choose Domination
$wp_customize->add_section( 'business_portfolio_why_choose_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Why Choose Section', 'business-portfolio' ),
    'description'           => __( 'Fill the Value for Why Choose Section', 'business-portfolio' ),
    'panel'				=> 'business_portfolio_front_option'
) );

//Why Choose section enable disable
$wp_customize->add_setting( 'business_portfolio_why_choose_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_section_enable', array(
    'label'                 =>  __( 'Enable Why choose us Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_why_choose_section_enable',
) );
// Why choose us Youtube link
//Why choose 1
$wp_customize->add_setting( 'business_portfolio_why_choose_youtube_link', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_youtube_link', array(
    'label'                 =>  __( 'Why Choose Us Youtube Link', 'business-portfolio' ),
    'description'           =>  __( 'Input the youtube Link(Eg:-https://www.youtube.com/watch?v=wZWiRoktNWA)', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'url',
    'settings' => 'business_portfolio_why_choose_youtube_link',
) );
//Why choose Title and destricption
$wp_customize->add_setting( 'business_portfolio_why_choose_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_page_title', array(
    'label'                 =>  __( 'Select Page for Why Choose Us Title & Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_why_choose_page_title',
) );
//Why choose 1
$wp_customize->add_setting( 'business_portfolio_why_choose_count_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_count_1', array(
    'label'                 =>  __( 'Why Choose Us title 1', 'business-portfolio' ),
    'description'           =>  __( 'Input the title', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_count_1',
) );

$wp_customize->add_setting( 'business_portfolio_why_choose_icon_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_icon_1', array(
    'label'                 =>  __( 'Icon For Why Choose us Count 1', 'business-portfolio' ),
     /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-user','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_icon_1',
) );

//Couter 2
$wp_customize->add_setting( 'business_portfolio_why_choose_count_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_count_2', array(
    'label'                 =>  __( 'Why Choose us title 2', 'business-portfolio' ),
    'description'           =>  __( 'Input the title', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_count_2',
) );

$wp_customize->add_setting( 'business_portfolio_why_choose_icon_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_icon_2', array(
    'label'                 =>  __( 'Icon For Why Choose us Count 2', 'business-portfolio' ),
     /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-user','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_icon_2',
) );

//Couter 3
$wp_customize->add_setting( 'business_portfolio_why_choose_count_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_count_3', array(
    'label'                 =>  __( 'Why Choose us title 3', 'business-portfolio' ),
    'description'           =>  __( 'Input the title', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_count_3',
) );

$wp_customize->add_setting( 'business_portfolio_why_choose_icon_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_icon_3', array(
   'label'                 =>  __( 'Icon For Why Choose us Count 3', 'business-portfolio' ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-user','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_icon_3',
) );

//Counter 4

$wp_customize->add_setting( 'business_portfolio_why_choose_count_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_count_4', array(
    'label'                 =>  __( 'Why Choose us title 4', 'business-portfolio' ),
    'description'           =>  __( 'Input the title', 'business-portfolio' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_count_4',
) );

$wp_customize->add_setting( 'business_portfolio_why_choose_icon_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_why_choose_icon_4', array(
  'label'                 =>  __( 'Icon For Why Choose us Count 4', 'business-portfolio' ),
   /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-user','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_why_choose_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_why_choose_icon_4',
) );
/*==============================================================================
============================Why Choose Customizer End===========================
===============================================================================*/

/*==============================================================================
============================Love Team Customizer Start==========================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_team_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Lovely Team Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Lovely Team section', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//Lovely Team section enable disable

$wp_customize->add_setting( 'business_portfolio_team_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_team_section_enable', array(
    'label'                 =>  __( 'Enable Lovely Team Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_team_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_team_section_enable',
) );

//Lovely Team Title
$wp_customize->add_setting( 'business_portfolio_team_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_team_page_title', array(
    'label'                 =>  __( 'Select Page for Lovely Team Title & Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_team_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_team_page_title',
) );

// Lovely Team Us pages

for ($i=1;$i<5;$i++) {

$wp_customize->add_setting( 'business_portfolio_team_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_team_page_'.$i, array(
     /* translators: %s: Description */ 
    'label'                 => sprintf( __( 'Select Lovely Team Page %s with Featured Image', 'business-portfolio' ), $i ),
    'section'               => 'business_portfolio_team_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_team_page_'.$i,
) );

$wp_customize->add_setting( 'business_portfolio_team_position_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_team_position_'.$i, array(
    /* translators: %s: label */ 
    'label'                 =>  sprintf( __( 'Select Designation', 'business-portfolio' ), $i ),
    'description'           =>  __( 'Designation like Creative Director,Web Developer,Server Administor,UI/UX Design', 'business-portfolio' ),
    'section'               => 'business_portfolio_team_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_team_position_'.$i,
) );
}
/*==============================================================================
============================Lovely Team Customizer End==========================
===============================================================================*/


/*==============================================================================
============================Testimonials Customizer Start=======================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_testimonial_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Testimonial Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Testimonial section', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//Testimonial section enable disable

$wp_customize->add_setting( 'business_portfolio_testimonial_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_testimonial_section_enable', array(
    'label'                 =>  __( 'Enable Testimonial Us', 'business-portfolio' ),
    'section'               => 'business_portfolio_testimonial_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_testimonial_section_enable',
) );

//
$wp_customize->add_setting( 'business_portfolio_testimonial_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );


$wp_customize->add_control( 'business_portfolio_testimonial_title', array(
    'label'                 => __( 'Type Testimonial Title', 'business-portfolio' ),
    'section'               => 'business_portfolio_testimonial_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_testimonial_title',
) );
// Testimonial Us page 1 and Icon 1

for ($i=1;$i<5;$i++) {
//print_r('business_portfolio_testimonial_page_'.$i);
$wp_customize->add_setting( 'business_portfolio_testimonial_page_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

 
$wp_customize->add_control( 'business_portfolio_testimonial_page_'.$i, array(
    /* translators: %s: Label */ 
    'label'                 => sprintf( __( 'Select Testimonial Page %s', 'business-portfolio' ), $i ),
    'section'               => 'business_portfolio_testimonial_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_testimonial_page_'.$i,
) );

$wp_customize->add_setting( 'business_portfolio_testimonial_position_'.$i, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );


$wp_customize->add_control( 'business_portfolio_testimonial_position_'.$i, array(
     /* translators: %s: Description */ 
    'label'                 =>  sprintf( __( 'Select Designation or Company Name %s', 'business-portfolio' ), $i ),
    'description'           =>  __( 'Position like Developer, CEO MD', 'business-portfolio' ),
    'section'               => 'business_portfolio_testimonial_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_testimonial_position_'.$i,
) );

}
/*==============================================================================
============================Testimonials Customizer End=========================
===============================================================================*/


/*==============================================================================
============================Protfolio Customizer Start===========================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_portfolio_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Portfolio Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Portfolio section, you can also change the icon per page', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//portfolio section enable disable

$wp_customize->add_setting( 'business_portfolio_portfolio_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_portfolio_section_enable', array(
    'label'                 =>  __( 'Enable Portfolio Us', 'business-portfolio' ),
    'section'               => 'business_portfolio_portfolio_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_portfolio_section_enable',
) );

//portfolio Title
$wp_customize->add_setting( 'business_portfolio_portfolio_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_portfolio_page_title', array(
    'label'                 =>  __( 'Select Page for Portfolio Heading & Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_portfolio_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_portfolio_page_title',
) );

$wp_customize->add_setting('business_portfolio_portfolio_category_id',array(
                            'sanitize_callback' => 'business_portfolio_sanitize_category',
                            'default' =>  '1',
                               )
                           );
    
$wp_customize->add_control(new business_portfolio_Customize_Dropdown_Taxonomies_Control($wp_customize,'business_portfolio_portfolio_category_id',
    array(
               'label' => __('Select Category for Portfolio','business-portfolio'),
                'section' => 'business_portfolio_portfolio_section',
                'settings' => 'business_portfolio_portfolio_category_id',
                'type'=> 'dropdown-taxonomies',
        )
));
$wp_customize->add_setting( 'business_portfolio_portfolio_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'business_portfolio_sanitize_number_absint'
) );

$wp_customize->add_control( 'business_portfolio_portfolio_number', array(
    'label'                 =>  __( 'Number of portfolio to Show in front Page', 'business-portfolio' ),
    'description'           =>  __( 'input 3,4,5,6,7,8,9', 'business-portfolio' ),
    'section'               => 'business_portfolio_portfolio_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_portfolio_number',
) );
/*==============================================================================
============================Protfolio Customizer End=============================
===============================================================================*/


/*==============================================================================
============================World Domination Customizer Start===================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_counter_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Counter Section', 'business-portfolio' ),
    'description'           => __( 'Fill the Value for Counter Section', 'business-portfolio' ),
    'panel'				=> 'business_portfolio_front_option'
) );

//counter section enable disable
$wp_customize->add_setting( 'business_portfolio_counter_section_enable', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_counter_section_enable', array(
    'label'                 =>  __( 'Enable Counter Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_counter_section_enable',
) );
//World Domination Title and destricption
$wp_customize->add_setting( 'business_portfolio_counter_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_counter_page_title', array(
    'label'                 =>  __( 'Select Page for Counter Title & Description with Featured Image', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_counter_page_title',
) );
//Counter 1
$wp_customize->add_setting( 'business_portfolio_counter_count_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => 999,
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_count_1', array(
    'label'                 =>  __( 'Counter count 1', 'business-portfolio' ),
    'description'           =>  __( 'Input the Number', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_count_1',
) );

$wp_customize->add_setting( 'business_portfolio_counter_field_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_field_1', array(
    'label'                 =>  __( 'Counter Field 1', 'business-portfolio' ),
    'description'           =>  __( 'Input Value', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_field_1',
) );

//Couter 2
$wp_customize->add_setting( 'business_portfolio_counter_count_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => 999,
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_count_2', array(
    'label'                 =>  __( 'Counter count 2', 'business-portfolio' ),
    'description'           =>  __( 'Input the Number', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_count_2',
) );

$wp_customize->add_setting( 'business_portfolio_counter_field_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_field_2', array(
    'label'                 =>  __( 'Counter Field 2', 'business-portfolio' ),
    'description'           =>  __( 'Input Value', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_field_2',
) );

//Couter 3
$wp_customize->add_setting( 'business_portfolio_counter_count_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => 999,
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_count_3', array(
    'label'                 =>  __( 'Counter count 3', 'business-portfolio' ),
    'description'           =>  __( 'Input the Number', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_count_3',
) );

$wp_customize->add_setting( 'business_portfolio_counter_field_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_field_3', array(
    'label'                 =>  __( 'Counter Field 3', 'business-portfolio' ),
    'description'           =>  __( 'Input Value', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_field_3',
) );

//Counter 4

$wp_customize->add_setting( 'business_portfolio_counter_count_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => 999,
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_count_4', array(
    'label'                 =>  __( 'Counter count 4', 'business-portfolio' ),
    'description'           =>  __( 'Input the Number', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_count_4',
) );

$wp_customize->add_setting( 'business_portfolio_counter_field_4', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_counter_field_4', array(
    'label'                 =>  __( 'Counter Field 4', 'business-portfolio' ),
    'description'           =>  __( 'Input Value', 'business-portfolio' ),
    'section'               => 'business_portfolio_counter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_counter_field_4',
) );
/*==============================================================================
============================World Domination Customizer End=====================
===============================================================================*/


/*==============================================================================
============================Blog Customizer Start===============================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_blog_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Blog Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Blog section, you can also change the icon per page', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//blog section enable disable

$wp_customize->add_setting( 'business_portfolio_blog_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_blog_section_enable', array(
    'label'                 =>  __( 'Enable Blog Us', 'business-portfolio' ),
    'section'               => 'business_portfolio_blog_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_blog_section_enable',
) );

//blog Title
$wp_customize->add_setting( 'business_portfolio_blog_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_blog_page_title', array(
    'label'                 =>  __( 'Select Page for Blog Heading & Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_blog_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_blog_page_title',
) );

$wp_customize->add_setting('business_portfolio_blog_category_id',array(
                            'sanitize_callback' => 'business_portfolio_sanitize_category',
                            'default' =>  '1',
                               )
                           );
    
$wp_customize->add_control(new business_portfolio_Customize_Dropdown_Taxonomies_Control($wp_customize,'business_portfolio_blog_category_id',
    array(
               'label' => __('Select Category for Blog','business-portfolio'),
                'section' => 'business_portfolio_blog_section',
                'settings' => 'business_portfolio_blog_category_id',
                'type'=> 'dropdown-taxonomies',
        )
    ));
$wp_customize->add_setting( 'business_portfolio_blog_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'business_portfolio_sanitize_number_absint'
) );

$wp_customize->add_control( 'business_portfolio_blog_number', array(
    'label'                 =>  __( 'Number of blog to Show in front Page', 'business-portfolio' ),
    'description'           =>  __( 'input 3,4,5,6,7,8,9', 'business-portfolio' ),
    'section'               => 'business_portfolio_blog_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_blog_number',
) );
/*==============================================================================
============================Blog Customizer End=================================
===============================================================================*/


/*==============================================================================
============================Conatact Customizer Start===========================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_contact_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Contact Section', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//Contact section enable disable

$wp_customize->add_setting( 'business_portfolio_contact_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_contact_section_enable', array(
    'label'                 =>  __( 'Enable Contact Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_contact_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_contact_section_enable',
) );

// Contact Page Title and Description

$wp_customize->add_setting( 'business_portfolio_contact_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_contact_page_title', array(
    'label'                 =>  __( 'Select First Page for Call to Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_contact_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_contact_page_title',
) );

$wp_customize->add_setting( 'business_portfolio_contact_form_code', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_contact_form_code', array(
    'label'                 =>  __( 'Contact Section Use Shortcode', 'business-portfolio' ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use Contact Form 7 plugins shortcode: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), '[contact-form-7 id="108" title="Contact form 1"]','<a href="'.esc_url('https://wordpress.org/plugins/contact-form-7/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_contact_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_contact_form_code',
) );
/*==============================================================================
============================Conatact Customizer End=============================
===============================================================================*/


/*==============================================================================
============================Location Customizer Start===========================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_location_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Location Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for Location section, you can also change the icon per page', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//location section enable disable

$wp_customize->add_setting( 'business_portfolio_location_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_location_section_enable', array(
    'label'                 =>  __( 'Enable Location Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_location_section_enable',
) );

//location Title
$wp_customize->add_setting( 'business_portfolio_location_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_location_page_title', array(
    'label'                 =>  __( 'Select Page for Location Title and Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_location_page_title',
) );


// location Us page 1 and Icon 1

$wp_customize->add_setting( 'business_portfolio_location_page_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_location_page_1', array(
    'label'                 =>  __( 'Select First Page for Location Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_location_page_1',
) );

$wp_customize->add_setting( 'business_portfolio_location_icon_1', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_location_icon_1', array(
    'label'                 =>  __( 'Icon For Location 1', 'business-portfolio' ),
     /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-phone','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_location_icon_1',
) );

//location us Second 
$wp_customize->add_setting( 'business_portfolio_location_page_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_location_page_2', array(
    'label'                 =>  __( 'Select Second Page for Location Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_location_page_2',
) );

$wp_customize->add_setting( 'business_portfolio_location_icon_2', array(
    'capability'            => 'edit_theme_options',
    'default'               => 'fa-rocket',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_location_icon_2', array(
    'label'                 =>  __( 'Icon For Location 2', 'business-portfolio' ),
      /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-phone','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_location_icon_2',
) );

//location us Third 
$wp_customize->add_setting( 'business_portfolio_location_page_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_location_page_3', array(
    'label'                 =>  __( 'Select Third Page for Location Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_location_page_3',
) );

$wp_customize->add_setting( 'business_portfolio_location_icon_3', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_location_icon_3', array(
    'label'                 =>  __( 'Icon For Location 3', 'business-portfolio' ),
      /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), 'fa fa-phone','<a href="'.esc_url('http://fontawesome.io/icons/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_location_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_location_icon_3',
) );
/*==============================================================================
============================Location Customizer End=============================
===============================================================================*/


/*==============================================================================
============================Newsletter Customizer Start=========================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_news_letter_section', array(
    'capability'            => 'edit_theme_options',
     'title'                 => __( 'Front News Letter Section', 'business-portfolio' ),
    'description'           => __( 'Select pages for News Letter section', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//News Letter section enable disable

$wp_customize->add_setting( 'business_portfolio_news_letter_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_news_letter_section_enable', array(
    'label'                 =>  __( 'Enable News Letter Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_news_letter_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_news_letter_section_enable',
) );

//News Letter Title
$wp_customize->add_setting( 'business_portfolio_news_letter_page_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'business_portfolio_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'business_portfolio_news_letter_page_title', array(
    'label'                 =>  __( 'Select Page for News Letter Title and Description', 'business-portfolio' ),
    'section'               => 'business_portfolio_news_letter_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'business_portfolio_news_letter_page_title',
) );

$wp_customize->add_setting( 'business_portfolio_news_letter_form_code', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'business_portfolio_news_letter_form_code', array(
    'label'                 =>  __( 'News Letter Section Use Shortcode', 'business-portfolio' ),
      /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use Newsletter Plugins shortcode: Eg: %1$s. %2$s See more here %3$s', 'business-portfolio' ), '[newsletter_form]','<a href="'.esc_url('https://wordpress.org/plugins/newsletter/').'" target="_blank">','</a>' ),
    'section'               => 'business_portfolio_news_letter_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_news_letter_form_code',
) );
/*==============================================================================
============================Newsletter Customizer End===========================
===============================================================================*/


/*==============================================================================
============================Client Customizer Start=============================
===============================================================================*/
$wp_customize->add_section( 'business_portfolio_clients_section', array(
    'capability'            => 'edit_theme_options',
    'title'                 => __( 'Front Client Section', 'business-portfolio' ),
    'description'           => __( 'Select Category for Client Section', 'business-portfolio' ),
    'panel'             => 'business_portfolio_front_option'
) );

//blog section enable disable

$wp_customize->add_setting( 'business_portfolio_clients_section_enable', array(
    'capability'            => 'edit_theme_options',
    'default'               => 0,
    'sanitize_callback'     => 'business_portfolio_sanitize_checkbox'
) );

$wp_customize->add_control( 'business_portfolio_clients_section_enable', array(
    'label'                 =>  __('Enable Client Section', 'business-portfolio' ),
    'section'               => 'business_portfolio_clients_section',
    'type'                  => 'checkbox',
    'settings'              => 'business_portfolio_clients_section_enable',
) );

$wp_customize->add_setting('business_portfolio_clients_category_id',array(
                            'capability'        => 'edit_theme_options',
                            'sanitize_callback' => 'business_portfolio_sanitize_category',
                            'default' =>  '1',
                               )
                           );
    
$wp_customize->add_control(new business_portfolio_Customize_Dropdown_Taxonomies_Control($wp_customize,'business_portfolio_clients_category_id',
    array(
               'label' => __('Select Category for Clients','business-portfolio'),
                'section' => 'business_portfolio_clients_section',
                'settings' => 'business_portfolio_clients_category_id',
                'type'=> 'dropdown-taxonomies',
        )
));
$wp_customize->add_setting( 'business_portfolio_client_number', array(
    'capability'            => 'edit_theme_options',
    'default'               => '3',
    'sanitize_callback'     => 'business_portfolio_sanitize_number_absint'
));

$wp_customize->add_control( 'business_portfolio_client_number', array(
    'label'                 =>  __( 'Number of Recent Clients to Show in Front Page', 'business-portfolio' ),
    'description'           =>  __( 'input 3,4,5,6,7,8,9,10', 'business-portfolio' ),
    'section'               => 'business_portfolio_clients_section',
    'type'                  => 'text',
    'settings' => 'business_portfolio_client_number',
) );
/*==============================================================================
============================Client Customizer End===============================
===============================================================================*/