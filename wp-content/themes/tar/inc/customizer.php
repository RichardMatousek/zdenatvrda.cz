<?php
/**
 * tar Theme Customizer.
 *
 * @package tar
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tar_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';



//Assigning sections to panels
 $wp_customize->get_section('title_tagline')->panel = 'Header'; 
 $wp_customize->get_section('title_tagline')->priority = 10; 
 $wp_customize->get_section('header_image')->panel = 'Header';   
 $wp_customize->get_section('header_image')->priority = 30;   
 $wp_customize->get_section('colors')->panel = 'Miscellaneous';
 $wp_customize->get_section('colors')->priority = 50; 
 $wp_customize->get_section('background_image')->panel = 'Miscellaneous'; 
 $wp_customize->get_section('background_image')->priority = 40;   
 $wp_customize->get_section('static_front_page')->panel = 'Frontpage';
 $wp_customize->get_section('static_front_page')->priority = 1;  
 //$wp_customize->get_section('static_front_page')->panel = 'Miscellaneous'; 


//Move color section settings to respective sections
$wp_customize->get_control('background_color')->section = 'basic_site_settings';
$wp_customize->get_setting('background_color')->section = 'basic_site_settings';

$wp_customize->get_control('header_textcolor')->section = 'header_tagline_color_section';
$wp_customize->get_setting('header_textcolor')->section = 'header_tagline_color_section';
$wp_customize->get_control('header_textcolor')->label   = __('Site Tagline Color', 'tar');



/*--------------------------------------------------------------
## Panels
--------------------------------------------------------------*/

 	     //Header panel
		  $wp_customize->add_panel( 'Header', array(
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Header', 'tar' ),
            'description' => __( 'Customize your header', 'tar' ),
        ) );


	     // Frontpage panel
		 $wp_customize->add_panel( 'Frontpage', array(
            'priority' => 20,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Frontpage', 'tar' ),
            'description' => __( 'This panel allows you to customize entire frontpage', 'tar' ),
        ) );


		 // Miscellanious panel
		 $wp_customize->add_panel( 'Miscellaneous', array(
            'priority' => 40,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Miscellaneous', 'tar' ),
            'description' => __( 'Miscellaneous Settings', 'tar' ),
        ) );


	     // basic_set_panel
		$wp_customize->add_panel( 'basic_set_panel', array(
            'priority' => 9,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Basic Settings', 'tar' ),
            'description' => __( 'Basic Site Settings for the site', 'tar' ),
        ) );

	
	     //footer panel
		  $wp_customize->add_panel( 'Footer', array(
            'priority' => 50,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => __( 'Footer', 'tar' ),
            'description' => __( 'Footer Editing', 'tar' ),
        ) );


  if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'tar_Custom_Content' ) ) :
			class tar_Custom_Content extends WP_Customize_Control {
				 // Whitelist content parameter
				 public $content = '';
				 /**
				 * Render the control's content.
				 *
				 * Allows the content to be overriden without having to rewrite the wrapper.
				 *
				 * @since   1.0.0
				 * @return  void
				 */
				 public function render_content() {
				 if ( isset( $this->label ) ) {
					 echo '<span class="customize-control-title">' . $this->label . '</span>';
				 }
				 if ( isset( $this->content ) ) {
					 echo $this->content;
				 }
				 if ( isset( $this->description ) ) {
				 	 echo '<span class="description customize-control-description">' . $this->description . '</span>';
				 }
			   }
			}
		endif;


/*--------------------------------------------------------------
## Header
--------------------------------------------------------------*/

		  //Site title h1 color picker
		  $wp_customize->add_section( 'header_h1_color_section' , array(
		    'title'      => __('Site Title','tar'), 
		    'panel'      => 'Header',
		    'priority'   => 20   
		  ) );  

		  
		  $wp_customize->add_setting(
		      'header_h1_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'header_h1_color_control',
		           array(
		               'label'      => __( 'Color', 'tar' ),
		               'section'    => 'header_h1_color_section',
		               'settings'   => 'header_h1_color' 
		           )
		       )
		   ); 


		     //Site title h1 font size picker
		    $wp_customize->add_setting(
		      'header_h1_font_size_setting',
		      array(
		          'default'         => '16px',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


			$wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'header_h1_font_size',
		            array(
		                'label'          => __( 'font size', 'tar' ),
		                'section'        => 'header_h1_color_section',
		                'settings'       => 'header_h1_font_size_setting',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '10',
					    'max' => '30',
					    'step' => '1',
					  )
		            )
		        )       
		   );



			//Site title h1 font thickness
		    $wp_customize->add_setting(
		      'header_h1_font_weight',
		      array(
		          'default'         => '400',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'header_h1_font_weight_control',
		            array(
		                'label'          => __( 'Font Thickness', 'tar' ),
		                'section'        => 'header_h1_color_section',
		                'settings'       => 'header_h1_font_weight',
		                'type'           => 'select',
		                'choices'        => array(
		                  '300'   => 'Extra Thin',
		                  '400'   => 'Thin',
		                  '700'   => 'Normal',
		                )
		            )
		        )       
		   );


		  //Site title letter spacing
				$wp_customize->add_setting(
		      'site_title_letter_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'site_title_letter_spacing_control',
		            array(
		                'label'          => __( 'Letter Spacing', 'tar' ),
		                'section'        => 'header_h1_color_section',
		                'settings'       => 'site_title_letter_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-5',
					    'max' => '5',
					    'step' => '1',
					  )
		            )
		        )       
		   );


		  //Site title Word spacing
		   $wp_customize->add_setting(
		      'site_title_word_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'site_title_word_spacing_control',
		            array(
		                'label'          => __( 'Word Spacing', 'tar' ),
		                'section'        => 'header_h1_color_section',
		                'settings'       => 'site_title_word_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-5',
					    'max' => '5',
					    'step' => '1',
					  )
		            )
		        )       
		   );





	      //Site tagline color picker
		  $wp_customize->add_section( 'header_tagline_color_section' , array(
		    'title'      => __('Site Tagline','tar'), 
		    'panel'      => 'Header',
		    'priority'   => 20    
		  ) );  

		  $wp_customize->add_setting(
		      'header_tagline_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'header_tagline_color_control',
		           array(
		               'label'      => __( 'Site Tagline Color', 'tar' ),
		               'section'    => 'header_tagline_color_section',
		               'settings'   => 'header_tagline_color' 
		           )
		       )
		   ); 




		     //Site tagline font size picker
			$wp_customize->add_setting(
		      'site_tagline_font_size',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'site_tagline_font_size_control',
		            array(
		                'label'          => __( 'Font Size', 'tar' ),
		                'section'        => 'header_tagline_color_section',
		                'settings'       => 'site_tagline_font_size',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '10',
					    'max' => '30',
					    'step' => '1',
					  )
		            )
		        )       
		   );


		  //Site tagline font thickness
		    $wp_customize->add_setting(
		      'header_site_tagline_font_weight',
		      array(
		          'default'         => '400',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'header_site_tagline_font_weight_control',
		            array(
		                'label'          => __( 'Font Thickness', 'tar' ),
		                'section'        => 'header_tagline_color_section',
		                'settings'       => 'header_site_tagline_font_weight',
		                'type'           => 'select',
		                'choices'        => array(
		                  '300'   => 'Extra Thin',
		                  '400'   => 'Thin',
		                  '700'   => 'Normal',
		                )
		            )
		        )       
		   );



		  //Site tagline letter spacing
		  $wp_customize->add_setting(
		      'site_tagline_letter_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'site_tagline_letter_spacing_control',
		            array(
		                'label'          => __( 'Letter Spacing', 'tar' ),
		                'section'        => 'header_tagline_color_section',
		                'settings'       => 'site_tagline_letter_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-5',
					    'max' => '5',
					    'step' => '1',
					  )
		            )
		        )       
		   );




		  //Site title Word spacing
		    $wp_customize->add_setting(
		      'site_tagline_word_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'site_tagline_word_spacing_control',
		            array(
		                'label'          => __( 'Word Spacing', 'tar' ),
		                'section'        => 'header_tagline_color_section',
		                'settings'       => 'site_tagline_word_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-5',
					    'max' => '5',
					    'step' => '1',
					  )
		            )
		        )       
		   );




	
		   //Header Background color picker
		  $wp_customize->add_section( 'header_background_color_section' , array(
		    'title'      => __('Header Background Color','tar'), 
		    'panel'      => 'Header',
		    'priority'   => 25    
		  ) );  
		  $wp_customize->add_setting(
		      'header_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'header_background_color',
		           array(
		               'label'      => __( 'Color', 'tar' ),
		               'section'    => 'header_background_color_section',
		               'settings'   => 'header_background_color' 
		           )
		       )
		   ); 





		  //Header Navigation
		  $wp_customize->add_section( 'nav_settings' , array(
		    'title'      => __('Navigation','tar'), 
		    'description' => __('Live preview is not available for these settings, You need to save and refresh the page to see the applied changes' , 'tar'),
		    'panel'      => 'Header',
		    'priority'   => 45    
		  ) );  


		  //Nav text color 
		  $wp_customize->add_setting(
		      'nav_text_color',
		      array(
		          'default'         => '#fff',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'nav_text_color_control',
		           array(
		               'label'      => __( 'Navigation Text Color', 'tar' ),
		               'section'    => 'nav_settings',
		               'settings'   => 'nav_text_color' 
		           )
		       )
		   ); 



		  //Nav hover text color 
		  $wp_customize->add_setting(
		      'nav_text_hover_color',
		      array(
		          'default'         => '#5b9cb1',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'nav_text_hover_color_control',
		           array(
		               'label'      => __( 'Navigation Text Hover Color', 'tar' ),
		               'section'    => 'nav_settings',
		               'settings'   => 'nav_text_hover_color' 
		           )
		       )
		   ); 

		  //Nav ul bg color 
		  $wp_customize->add_setting(
		      'nav_ul_bg_color',
		      array(
		          'default'         => '#2a606f',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'nav_ul_bg_color_control',
		           array(
		               'label'      => __( 'Second level Nav background Color', 'tar' ),
		               'section'    => 'nav_settings',
		               'settings'   => 'nav_ul_bg_color' 
		           )
		       )
		   ); 

		  //Nav li bottom border color 
		  $wp_customize->add_setting(
		      'nav_li_bottom_border_color',
		      array(
		          'default'         => '#2f6d8a',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'nav_li_bottom_border_color_control',
		           array(
		               'label'      => __( 'Bottom border Color', 'tar' ),
		               'section'    => 'nav_settings',
		               'settings'   => 'nav_li_bottom_border_color' 
		           )
		       )
		);

		//More options for pro
		  $wp_customize->add_setting( 'nav_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'nav_sec_upsell', array(
			 'section' => 'nav_settings',
			 'content' => __( '<b>You are missing out on</b> <i><p>Sticky Navigation Option<p></i> <i><p>Center Navigation Option<p></i> <i><p>Top Social Bar<p></i><a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'nav_sec_upsell',
		) ) );   


/*--------------------------------------------------------------
## Call To Action(CTA) Section
--------------------------------------------------------------*/
		 $wp_customize->add_section(
            'cta-section',
            array(
                'title' => __('Call To Action (CTA) Section', 'tar'),
                'description' => '',
                'priority' => 9,
                'panel' => 'Frontpage'
            )
        );

		   //CTA section display toggle
		  $wp_customize->add_setting(
		      'cta_section_display_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'cta_section_display_toggle_control',
		            array(
		                'label'          => __( 'Display CTA Section', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_section_display_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );


        //CTA welcome h2 text
        $wp_customize->add_setting(
	        'cta_welcome_text',
	        array(
	            'default' => __('Advance. Strong. Reliable', 'tar'),
	            'transport' => 'postMessage',
	            'type'     => 'option',
	            'sanitize_callback' => 'tar_sanitize_text',
	            'type'		        => 'option'
            )
        );
        $wp_customize->add_control(
	        'CTA-control',
	        array(
	        'label' => __('H2 Text' , 'tar'),
	        'section' => 'cta-section',
	        'type' => 'text',
	        'settings' => 'cta_welcome_text'
            )
        );




        //welcome text h2 color picker
		  $wp_customize->add_setting(
		      'tar_h2_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'custom_h1_color',
		           array(
		               'label'      => __( 'Text Color', 'tar' ),
		               'section'    => 'cta-section',
		               'settings'   => 'tar_h2_color' 
		           )
		       )
		   ); 


		    //welcome text h2 font size picker
		    $wp_customize->add_setting(
		      'tar_htwo_font_size',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'custom_htwo_font_size',
		            array(
		                'label'          => __( 'Font Size', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'tar_htwo_font_size',
		                'type'           => 'select',
		                'choices'        => array(
		                  '22'   => '22px',
		                  '28'   => '28px',
		                  '36'   => '36px',
		                  '42'   => '42px',
		                  '48'   => '48px',
		                  '54'   => '54px',
		                  '60'   => '60px',
		                  '70'   => '70px',
		                  '76'   => '76px'
		                )
		            )
		        )       
		   );   



		   //welcome text h2 position
		    $wp_customize->add_setting(
		      'cta_h2_position',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'h2_position',
		            array(
		                'label'          => __( 'Text Position', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_h2_position',
		                'type'           => 'select',
		                'choices'        => array(
		                  'left'    => 'Left',
		                  'right'   => 'Right',
		                  'center'  => 'Center'
		                )
		            )
		        )       
		   );  



		  //welcome text h2 font weight
		    $wp_customize->add_setting(
		      'cta_h2_font_weight',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'h1_position',
		            array(
		                'label'          => __( 'Font Thickness', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_h2_font_weight',
		                'type'           => 'select',
		                'choices'        => array(
		                  '300'    => 'Extra Thin',
		                  '400'   => 'Thin',
		                  '700'  => 'Normal'
		                )
		            )
		        )       
		   );  





		   //welcome text h2 letter spacing
		    $wp_customize->add_setting(
		      'welcome_text_htwo_letter_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'welcome_text_htwo_letter_spacing_control',
		            array(
		                'label'          => __( 'Letter Spacing', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'welcome_text_htwo_letter_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-5',
					    'max' => '10',
					    'step' => '1',
					  )
		            )
		        )       
		   );


 
		  //Welcome text h2 word spacing
		    $wp_customize->add_setting(
		      'welcome_text_htwo_word_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'welcome_text_htwo_word_spacing_control',
		            array(
		                'label'          => __( 'Word Spacing Range', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'welcome_text_htwo_word_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-10',
					    'max' => '10',
					    'step' => '1',
					  )
		            )
		        )       
		   );





		   // CTA background image Settings
		  $wp_customize->add_setting(
		      'cta_background_image_setting',
		      array(
		          'default'         => get_template_directory_uri() . '/assets/images/banner.jpg',
		          'sanitize_callback' => 'esc_url_raw',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Image_Control(
		           $wp_customize,
		           'cta_background_image_control',
		           array(
		               'label'      => __( 'Change CTA Background Image', 'tar' ),
		               'section'    => 'cta-section',
		               'settings'   => 'cta_background_image_setting',
		               /*'context'    => 'tar-custom-logo'*/ 
		           )
		       )
		   ); 


        
        $wp_customize->add_setting(
	        'cta_welcome_text_p',
	        array(
	            'default' => __('A clean bloat free WordPress theme for your site', 'tar'),
	            'transport' => 'postMessage',
	            'type'     => 'option',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );


        $wp_customize->add_control(
	        'CTA-control-p',
	        array(
	        'label' => __('Tagline Text' , 'tar'),
	        'section' => 'cta-section',
	        'type' => 'text',
	        'settings' => 'cta_welcome_text_p'
            )
        );



        //welcome text p color picker
		  $wp_customize->add_setting(
		      'tar_p_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'custom_p_color',
		           array(
		               'label'      => __( ' Color ', 'tar' ),
		               'section'    => 'cta-section',
		               'settings'   => 'tar_p_color' 
		           )
		       )
		   ); 

		    //welcome text p font size picker
		    $wp_customize->add_setting(
		      'tar_p_font_size',
		      array(
		          'default'         => '24px',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'custom_p_font_size',
		            array(
		                'label'          => __( 'Font Size', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'tar_p_font_size',
		                'type'           => 'select',
		                'choices'        => array(
		                  '22'   => '22px',
		                  '28'   => '28px',
		                  '36'   => '36px',
		                  '42'   => '42px',
		                  '48'   => '48px',
		                  '54'   => '54px'
		                )
		            )
		        )       
		   );   



		   //welcome text p position
		    $wp_customize->add_setting(
		      'cta_p_position',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'p_position',
		            array(
		                'label'          => __( 'Text Position', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_p_position',
		                'type'           => 'select',
		                'choices'        => array(
		                  'left'    => 'Left',
		                  'right'   => 'Right',
		                  'center'  => 'Center'
		                )
		            )
		        )       
		   );  





		   //welcome text p letter spacing
		    $wp_customize->add_setting(
		      'cta_p_letter_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'cta_p_letter_spacing_control',
		            array(
		                'label'          => __( 'Letter Spacing', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_p_letter_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-10',
					    'max' => '10',
					    'step' => '1',
					  )
		            )
		        )       
		   );


 
		  //Welcome text p word spacing
		    $wp_customize->add_setting(
		      'cta_p_word_spacing',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );


		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'cta_p_word_spacing_control',
		            array(
		                'label'          => __( 'Word Spacing Range', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'cta_p_word_spacing',
		                'type'           => 'range',
		                'input_attrs' => array(
					    'min' => '-10',
					    'max' => '15',
					    'step' => '1',
					  )
		            )
		        )       
		   );
		
      $wp_customize->add_setting(
	        'cta-button-text',
	        array(
	            'default' => __('Learn More', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'    => 'option'

            )
        );


        $wp_customize->add_control(
	        'cta-text-control',
	        array(
	        'label' => __('Button Text', 'tar'),
	        'section' => 'cta-section',
	        'type' => 'text',
	        'settings' => 'cta-button-text'
            )
        );


        //CTA button href value
          $wp_customize->add_setting(
	        'cta_button_href',
	        array(
	            'default' => '##',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'esc_url_raw',
	            'type'    => 'option'

            )
        );


        $wp_customize->add_control(
	        'cta_button_href',
	        array(
	        'label' => __('Button Link', 'tar'),
	        'section' => 'cta-section',
	        'type' => 'text',
	        'settings' => 'cta_button_href'
            )
        );

		  //CTA button TEXT color picker
		  $wp_customize->add_setting(
		      'tar_button_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'          => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'custom_button_color',
		           array(
		               'label'      => __( 'Text Color', 'tar' ),
		               'section'    => 'cta-section',
		               'settings'   => 'tar_button_color' 
		           )
		       )
		   ); 

		    //welcome text button font size picker
		    $wp_customize->add_setting(
		      'tar_button_font_size',
		      array(
		          'default'         => '24px',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'custom_button_font_size',
		            array(
		                'label'          => __( 'Font Size', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'tar_button_font_size',
		                'type'           => 'select',
		                'choices'        => array(
		                  '12'   => '12px',
		                  '14'   => '14px',
		                  '16'   => '16px',
		                  '18'   => '18px',
		                  '20'   => '20px',
		                  '22'   => '22px',
		                  '28'   => '28px',
		                  '32'   => '32px',
		                  '42'   => '42px'
		                )
		            )
		        )       
		   );   

		    //CTA button background color picker
		  $wp_customize->add_setting(
		      'tar_button_background_color',
		      array(
		          'default'         => '#f44',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'custom_button_background_color',
		           array(
		               'label'      => __( 'Button Background Color', 'tar' ),
		               'section'    => 'cta-section',
		               'settings'   => 'tar_button_background_color' 
		           )
		       )
		   ); 


			//welcome text button style
		    $wp_customize->add_setting(
		      'tar_button_style',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'tar_button_style_control',
		            array(
		                'label'          => __( 'Button Border', 'tar' ),
		                'section'        => 'cta-section',
		                'settings'       => 'tar_button_style',
		                'type'           => 'select',
		                'choices'        => array(
		                  '0'    => 'sharp border',
		                  '10'   => 'semi-curved border', 
		                  '20'   => 'curved border',
		                  '35'   => 'rounded border'  
		                )
		            )
		        )       
		   );

		//More options for pro
		  $wp_customize->add_setting( 'cta_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'cta_sec_upsell', array(
			 'section' => 'cta-section',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more CTA Section layout<p></i> <i><p>More Customization Settings<p></i> <i><p>More Frontpage Sections<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'cta_sec_upsell',
		) ) );  
		


/*--------------------------------------------------------------
## Feature Section
--------------------------------------------------------------*/
			

	/*SECTION HEAD TEXT */
		//Key Feature BLock
		 $wp_customize->add_section(
            'key_features_block',
            array(
                'title' => __('Features Block Section', 'tar'),
                'description' => '',
                'priority' => 69,
                'panel' => 'Frontpage'
            )
        );

		    //Key Feature BLock section display toggle
		  $wp_customize->add_setting(
		      'features_block_section_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'features_block_section_toggle_control',
		            array(
		                'label'          => __( 'Display Features Section', 'tar' ),
		                'section'        => 'key_features_block',
		                'settings'       => 'features_block_section_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );


          //Feature Section Head Text settings
           $wp_customize->add_setting(
	        'features_head_text_settings',
	        array(
	            'default' => __('Use this block to show six key features', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'			    => 'option'
            )
        );
        $wp_customize->add_control(
	        'features_head_text_control',
	        array(
	        'label' => __('Section Head Text' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'features_head_text_settings'
            )
        );


        //Feature Section Head Text color picker
		  $wp_customize->add_setting(
		      'features_head_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'          => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'features_head_text_color_control',
		           array(
		               'label'      => __( 'Text Color', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'features_head_text_color' 
		           )
		       )
		   ); 



		  //Feature Section background color picker
		  $wp_customize->add_setting(
		      'features_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'          => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'features_background_color_control',
		           array(
		               'label'      => __( 'Section Background Color', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'features_background_color' 
		           )
		       )
		   ); 


		//feature blocks h3 head text color
        $wp_customize->add_setting(
		      'blocks_head_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'          => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'blocks_head_text_color_control',
		           array(
		               'label'      => __( 'Features Block Head Text Color', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'blocks_head_text_color' 
		           )
		       )
		   ); 



		//feature blocks para text color
        $wp_customize->add_setting(
		      'blocks_para_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'          => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'blocks_para_text_color_control',
		           array(
		               'label'      => __( 'Features Block Paragraph Text Color', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'blocks_para_text_color' 
		           )
		       )
		   ); 




		  /*******Feature Block One********/

		//feature block one head text
         $wp_customize->add_setting(
	        'features_one_settings',
	        array(
	            'default' => __('Dolore Libero', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'features_one_settings_control',
	        array(
	        'label' => __('Feature One Head Text' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'features_one_settings'
            )
        );

 
		  //block one para 
	       $wp_customize->add_setting(
		        'features_one_para_settings',
		        array(
		            'default' => __('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar'),
		            'transport' => 'postMessage',
		            'sanitize_callback' => 'wp_kses',
		            'type'				=> 'option'
	            )
	        );
	       
	        $wp_customize->add_control(
		        'features_one_para_control',
		        array(
		        'label' => __('Block one Paragraph' , 'tar'),
		        'section' => 'key_features_block',
		        'type' => 'textarea',
		        'settings' => 'features_one_para_settings'
	            )
	        );


	          //block one href link
		  $wp_customize->add_setting(
	        'block_one_href',
	        array(
	            'default' => 'http://asphaltthemes.com/',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'esc_url_raw',
	            'type'    => 'option'

            )
        );


        $wp_customize->add_control(
	        'block_one_href_control',
	        array(
	        'label' => __('Image Link', 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'block_one_href'
            )
        );



		  //block one image
        $wp_customize->add_setting(
		      'block_one_image',
		      array(
		          'default'         => get_template_directory_uri() . '/assets/images/block1.jpg',
		          'sanitize_callback' => 'esc_url_raw',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Image_Control(
		           $wp_customize,
		           'block_one_image_control',
		           array(
		               'label'      => __( 'Feature One Image', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'block_one_image',
		           )
		       )
		   ); 


		   //block one toggle button
		  $wp_customize->add_setting(
		      'block_one_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'block_one_toggle_control',
		            array(
		                'label'          => __( 'Display block One', 'tar' ),
		                'section'        => 'key_features_block',
		                'settings'       => 'block_one_toggle',
		                'type'           => 'checkbox',
		                
		            )
		        )       
		   );


          //feature block two head 
        $wp_customize->add_setting(
	        'features_two_setting',
	        array(
	            'default' => __('Dolore Libero', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'features_two_control',
	        array(
	        'label' => __('Block Two Head Text' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'features_two_setting'
            )
        );



		  //block two para 
        $wp_customize->add_setting(
	        'features_two_para_settings',
	        array(
	            'default' => __('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'wp_kses',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'features_two_para_control',
	        array(
	        'label' => __('Block Two Paragraph' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'textarea',
	        'settings' => 'features_two_para_settings'
            )
        );


        //block two href link
		  $wp_customize->add_setting(
	        'block_two_href',
	        array(
	            'default' => 'http://asphaltthemes.com',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'esc_url_raw',
	            'type'    => 'option'

            )
        );


        $wp_customize->add_control(
	        'block_two_href_control',
	        array(
	        'label' => __('Image Link', 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'block_two_href'
            )
        );



        //block two image
       $wp_customize->add_setting(
		      'block_two_image',
		      array(
		          'default'         => get_template_directory_uri() . '/assets/images/block2.jpg',
		          'sanitize_callback' => 'esc_url_raw',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Image_Control(
		           $wp_customize,
		           'block_two_image_control',
		           array(
		               'label'      => __( 'Feature Two Image', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'block_two_image',
		           )
		       )
		   ); 


		   //block one toggle button
		  $wp_customize->add_setting(
		      'block_two_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'block_two_toggle_control',
		            array(
		                'label'          => __( 'Display block Two', 'tar' ),
		                'section'        => 'key_features_block',
		                'settings'       => 'block_two_toggle',
		                'type'           => 'checkbox',
		                
		            )
		        )       
		   );

      



          //feature block three head 
        $wp_customize->add_setting(
	        'features_three_setting',
	        array(
	            'default' => __('Dolore Libero', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'features_three_control',
	        array(
	        'label' => __('Block Three Head Text' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'features_three_setting'
            )
        );


		  //block three para 
        $wp_customize->add_setting(
	        'features_three_para_settings',
	        array(
	            'default' => __('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'wp_kses',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'features_three_para_control',
	        array(
	        'label' => __('Block Three Paragraph' , 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'textarea',
	        'settings' => 'features_three_para_settings'
            )
        );


        //block three href link
		  $wp_customize->add_setting(
	        'block_three_href',
	        array(
	            'default' => 'http://asphaltthemes.com',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'esc_url_raw',
	            'type'    => 'option',

            )
        );


        $wp_customize->add_control(
	        'block_three_href_control',
	        array(
	        'label' => __('Image Link', 'tar'),
	        'section' => 'key_features_block',
	        'type' => 'text',
	        'settings' => 'block_three_href'
            )
        );
      

         //block three image
        $wp_customize->add_setting(
		      'block_three_image',
		      array(
		          'default'         => get_template_directory_uri() . '/assets/images/block3.jpg',
		          'sanitize_callback' => 'esc_url_raw',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Image_Control(
		           $wp_customize,
		           'block_three_image_control',
		           array(
		               'label'      => __( 'Feature Three Image', 'tar' ),
		               'section'    => 'key_features_block',
		               'settings'   => 'block_three_image',
		           )
		       )
		   ); 


		    //block three toggle button
		  $wp_customize->add_setting(
		      'block_three_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'block_three_toggle_control',
		            array(
		                'label'          => __( 'Display block Three', 'tar' ),
		                'section'        => 'key_features_block',
		                'settings'       => 'block_three_toggle',
		                'type'           => 'checkbox',
		                
		            )
		        )       
		   );

		//More options for pro
		  $wp_customize->add_setting( 'feature_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'feature_sec_upsell', array(
			 'section' => 'key_features_block',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more Feature Section layout<p></i> <i><p>More Customization Settings<p></i> <i><p>More Frontpage Sections<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'feature_sec_upsell',
		) ) );



/*--------------------------------------------------------------
## Portfolio Section
--------------------------------------------------------------*/
		     	
         //Portfolio Category Dropdown
          $wp_customize->add_section(
            'category_dropdown_section',
            array(
                'title' => __('Portfolio Section', 'tar'),
                'description' => __('Select Portfolio category' , 'tar'),
                'priority' => 80,
                'panel' => 'Frontpage'
            )
        );

        	
			$cats = array();
			foreach ( get_categories() as $categories => $category ){
			    $cats[$category->term_id] = $category->name;
			}
			$wp_customize->add_setting( 'cats_elect', array(
			    'default' => 1,
			    'sanitize_callback' => 'absint',
			    'type'				=> 'option'
			) );
			$wp_customize->add_control( 'cat_contlr', array(
			    'settings' => 'cats_elect',
			    'type' => 'select',
			    'choices' => $cats,
			    'section' => 'category_dropdown_section',  // depending on where you want it to be
			) );

			 //Portfolio section display toggle
		  $wp_customize->add_setting(
		      'portfolio_section_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'portfolio_section_toggle_control',
		            array(
		                'label'          => __( 'Display Portfolio Section', 'tar' ),
		                'section'        => 'category_dropdown_section',
		                'settings'       => 'portfolio_section_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );



	      //head text 
          $wp_customize->add_setting(
	        'porfolio_head_text',
	        array(
	            'default' => __('See our Portfolio', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'porfolio_head_text_control',
	        array(
	        'label' => __('Customize Head Text' , 'tar'),
	        'section' => 'category_dropdown_section',
	        'type' => 'text',
	        'settings' => 'porfolio_head_text'
            )
        );



        //head text color
		  $wp_customize->add_setting(
		      'porfolio_head_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'porfolio_head_text_color_control',
		           array(
		               'label'      => __( 'Head Text Color', 'tar' ),
		               'section'    => 'category_dropdown_section',
		               'settings'   => 'porfolio_head_text_color' 
		           )
		       )
		   ); 




		  //Portfolio Background Color
		  $wp_customize->add_setting(
		      'porfolio_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'porfolio_background_color_control',
		           array(
		               'label'      => __( 'Background Color', 'tar' ),
		               'section'    => 'category_dropdown_section',
		               'settings'   => 'porfolio_background_color' 
		           )
		       )
		   );

		//More options for pro
		  $wp_customize->add_setting( 'porfolio_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'porfolio_sec_upsell', array(
			 'section' => 'category_dropdown_section',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more Portfolio Section layout<p></i> <i><p>More Frontpage Sections<p></i> <i><p>More Customization Settings<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'porfolio_sec_upsell',
		) ) );


/*--------------------------------------------------------------
## Second CTA Section
--------------------------------------------------------------*/
		    
         //2nd cta section
          $wp_customize->add_section(
            'second_cta_section',
            array(
                'title' => __('Second CTA Section', 'tar'),
                'description' => '',
                'priority' => 81,
                'panel' => 'Frontpage'
            )
        );

          //2nd section display toggle
		  $wp_customize->add_setting(
		      'second_cta_section_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'second_cta_section_toggle_control',
		            array(
		                'label'          => __( 'Display Second CTA Section', 'tar' ),
		                'section'        => 'second_cta_section',
		                'settings'       => 'second_cta_section_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );


          //head text
          $wp_customize->add_setting(
	        'second_cta_head_text',
	        array(
	            'default' => __('Ultrices ante sagittis nunc senectus libero netus', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'second_cta_head_text_control',
	        array(
	        'label' => __('Customize Head Text' , 'tar'),
	        'section' => 'second_cta_section',
	        'type' => 'text',
	        'settings' => 'second_cta_head_text'
            )
        );


        //head text color
		  $wp_customize->add_setting(
		      'second_cta_head_text_color',
		      array(
		          'default'         => '#fff',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'second_cta_head_text_color_control',
		           array(
		               'label'      => __( ' Head Text Color', 'tar' ),
		               'section'    => 'second_cta_section',
		               'settings'   => 'second_cta_head_text_color' 
		           )
		       )
		   ); 


        //second cta button text 
          $wp_customize->add_setting(
	        'second_cta_button_text',
	        array(
	            'default' => __('SEE MORE', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'second_cta_button_text_control',
	        array(
	        'label' => __('Customize Button Text' , 'tar'),
	        'section' => 'second_cta_section',
	        'type' => 'text',
	        'settings' => 'second_cta_button_text'
            )
        );



        //second cta button text color
		  $wp_customize->add_setting(
		      'second_cta_button_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'second_cta_button_text_color_control',
		           array(
		               'label'      => __( 'Button Text Color', 'tar' ),
		               'section'    => 'second_cta_section',
		               'settings'   => 'second_cta_button_text_color' 
		           )
		       )
		   ); 


		   //2nd CTA button href value
          $wp_customize->add_setting(
	        'second_cta_button_href',
	        array(
	            'default' => '',
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'esc_url_raw',
	            'type'    => 'option'

            )
        );


        $wp_customize->add_control(
	        'second_cta_button_href_control',
	        array(
	        'label' => __('Button Link', 'tar'),
	        'section' => 'second_cta_section',
	        'type' => 'text',
	        'settings' => 'second_cta_button_href'
            )
        );


		  //second cta button background color
		  $wp_customize->add_setting(
		      'second_cta_button_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'second_cta_button_background_color_control',
		           array(
		               'label'      => __( 'Button Background Color', 'tar' ),
		               'section'    => 'second_cta_section',
		               'settings'   => 'second_cta_button_background_color' 
		           )
		       )
		   ); 



		  //second cta section background color
		  $wp_customize->add_setting(
		      'second_cta_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'second_cta_background_color_control',
		           array(
		               'label'      => __( 'Section Background Color', 'tar' ),
		               'section'    => 'second_cta_section',
		               'settings'   => 'second_cta_background_color' 
		           )
		       )
		   ); 
     

		


		$wp_customize->add_setting( 'second_cta_upsell', array(
			    'default' => 1,
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'second_cta_upsell', array(
			 'section' => 'second_cta_section',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more Second CTA Section layout<p></i> <i><p>More Frontpage Sections<p></i> <i><p>More Customization Settings<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'second_cta_upsell',
		) ) );


/*--------------------------------------------------------------
## Blog Section
--------------------------------------------------------------*/

		  //Blog Category Dropdown
          $wp_customize->add_section(
            'blog_dropdown_section',
            array(
                'title' => __('Blog Section', 'tar'),
                'description' => __('Select Blog category' , 'tar'),
                'priority' => 83,
                'panel' => 'Frontpage'
            )
        );
        	//blog category
			$cats = array();
			foreach ( get_categories() as $categories => $category ){
			    $cats[$category->term_id] = $category->name;
			}
			$wp_customize->add_setting( 'blog_cats', array(
			    'default' => 1,
			    'sanitize_callback' => 'absint',
			    'type'				=> 'option'
			) );
			$wp_customize->add_control( 'blog_cats_control', array(
			    'settings' => 'blog_cats',
			    'type' => 'select',
			    'choices' => $cats,
			    'section' => 'blog_dropdown_section',  // depending on where you want it to be
			) );


		//Blog section display toggle
		  $wp_customize->add_setting(
		      'blog_section_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'blog_section_toggle_control',
		            array(
		                'label'          => __( 'Display Blog Section', 'tar' ),
		                'section'        => 'blog_dropdown_section',
		                'settings'       => 'blog_section_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );


	      //head text 
          $wp_customize->add_setting(
	        'blog_head_text',
	        array(
	            'default' => __('Check out blog', 'tar'),
	            'transport' => 'postMessage',
	            'sanitize_callback' => 'sanitize_text_field',
	            'type'				=> 'option'
            )
        );
        $wp_customize->add_control(
	        'blog_head_text_control',
	        array(
	        'label' => __('Customize Blog Section Head Text' , 'tar'),
	        'section' => 'blog_dropdown_section',
	        'type' => 'text',
	        'settings' => 'blog_head_text'
            )
        );



        //head text color
		  $wp_customize->add_setting(
		      'blog_head_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'blog_head_text_color_control',
		           array(
		               'label'      => __( 'Blog Head Text Color', 'tar' ),
		               'section'    => 'blog_dropdown_section',
		               'settings'   => 'blog_head_text_color' 
		           )
		       )
		   ); 



		  //section background color
		  $wp_customize->add_setting(
		      'blog_bg_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'blog_bg_color_control',
		           array(
		               'label'      => __( 'Section Background Color', 'tar' ),
		               'section'    => 'blog_dropdown_section',
		               'settings'   => 'blog_bg_color' 
		           )
		       )
		   ); 

		//More options for pro
		$wp_customize->add_setting( 'example-control-blog', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text',
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'example-blog-control', array(
			 'section' => 'blog_dropdown_section',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more blog layouts<p></i> <i><p>More Frontpage Sections<p></i> <i><p>More Customization Settings<p></i>  <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>  ', 'tar' ) . '</p>',
			 'settings' =>  'example-control-blog',
		) ) );




/*--------------------------------------------------------------
## Email Opt In Section
--------------------------------------------------------------*/

		//Opt in Header text Message
          $wp_customize->add_section(
            'email_subscribe_section',
            array(
                'title' => __('Text Section', 'tar'),
                'description' => '',
                'priority' => 90,
                'panel' => 'Frontpage'
            )
        );

           //Text section display toggle
		  $wp_customize->add_setting(
		      'text_section_toggle',
		      array(
		          'default'         => 'true',
		          'sanitize_callback' => 'tar_checkbox_sanitize',
		          'transport'       => 'postMessage',
		          'type'            => 'option'
		      )
		  );

		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'text_section_toggle_control',
		            array(
		                'label'          => __( 'Display Text Section', 'tar' ),
		                'section'        => 'email_subscribe_section',
		                'settings'       => 'text_section_toggle',
		                'type'           => 'checkbox',
		            )
		        )       
		   );

        $wp_customize->add_setting(
	        'email_subscribe_header',
	        array(
	            'default' => __('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan ', 'tar'),
	            'transport' => 'postMessage',
	            'type'     => 'option',
	            'sanitize_callback' => 'sanitize_text_field',
            )
        );

        $wp_customize->add_control(
	        'email_subscribe',
	        array(
	        'label' => __('Section Head Text' , 'tar'),
	        'section' => 'email_subscribe_section',
	        'type' => 'textarea',
	        'settings' => 'email_subscribe_header'
            )
        );



		  //Header TEXT color picker
		  $wp_customize->add_setting(
		      'email_head_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'		    => 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'head_text_color',
		           array(
		               'label'      => __( ' Head Text Color', 'tar' ),
		               'section'    => 'email_subscribe_section',
		               'settings'   => 'email_head_text_color' 
		           )
		       )
		   ); 

		    //Email head text font size picker
		    $wp_customize->add_setting(
		      'email_head_font_size',
		      array(
		          'default'         => '24px',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'email_header_font_size',
		            array(
		                'label'          => __( 'Head Text Font Size', 'tar' ),
		                'section'        => 'email_subscribe_section',
		                'settings'       => 'email_head_font_size',
		                'type'           => 'select',
		                'choices'        => array(
		                  '14'   => '14px',
		                  '16'   => '16px',
		                  '18'   => '18px',
		                  '20'   => '20px',
		                  '22'   => '22px',
		                  '28'   => '28px',
		                  '32'   => '32px',
		                  '42'   => '42px'
		                )
		            )
		        )       
		   );   


		 

		  	//Opt In section text position
		    $wp_customize->add_setting(
		      'opt_in_position',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_key',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'optin_position',
		            array(
		                'label'          => __( 'Section Text Alignment', 'tar' ),
		                'section'        => 'email_subscribe_section',
		                'settings'       => 'opt_in_position',
		                'type'           => 'select',
		                'choices'        => array(
		                  'left'    => 'Left',
		                  'center'  => 'center',
		                  'right'   => 'Right',
		                )
		            )
		        )       
		   );  



		    //Email section Background color picker
		  $wp_customize->add_setting(
		      'optin_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'optin_background_color_control',
		           array(
		               'label'      => __( 'Section Background Color', 'tar' ),
		               'section'    => 'email_subscribe_section',
		               'settings'   => 'optin_background_color' 
		           )
		       )
		   ); 


		  //More options for pro
		  $wp_customize->add_setting( 'text_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'text_sec_upsell', array(
			 'section' => 'email_subscribe_section',
			 'content' => __( '<b>You are missing out on</b> <i><p>2 more Text Section layout<p></i> <i><p>More Frontpage Sections<p></i> <i><p>More Customization Settings<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'text_sec_upsell',
		) ) );




/*--------------------------------------------------------------
## Static Front Page Section
--------------------------------------------------------------*/
 
       $wp_customize->add_setting( 'fp_instruction', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text',
			    'type'   => 'option'
			) );

		$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'fp_instruction', array(
			 'section' => 'static_front_page',
			 'content' => sprintf( __( '<h2>To Setup frontpage, Go to:</h2></br>
		<ul>
		<li><b>Dashboard -> Pages -> Add New</b></li>
		<li>On the right, you will find a box titled <b>Page Attributes</b></li>
		<li>Select <b>Front Page Template</b> from the dropdown <b>Template</b> options</li>
		<li>Type Page title & click on <b>Publish</b></li>
		<li>Go to <b>Dashboard -> Settings -> Reading -> Front page displays </b></li>
		<li>Select <b>A static page(select below)</b> </li>
		<li>Then select the page with <b>"Front Page Template"</b> as <b>Front Page</b></li>
		<li>Click on <b>Save & Publish</b> and you are done.</li>
		<li>Still struggling? Follow the documentation <a target="_blank" href="%s">Front Page Setup Documentation</a>
		</ul></br>', 'tar' ), esc_url( 'https://asphaltthemes.com/docs/front-page/how-to-setup-front-page/' )),
			 'settings' =>  'fp_instruction',
		) ) );




/*--------------------------------------------------------------
## Basic Site Settings
--------------------------------------------------------------*/

		$wp_customize->add_section( 'basic_set_sec' , array(
		    'title'      => __('Basic Settings','tar'), 
		    'panel'      => 'basic_set_panel',
		  ) ); 


		   // Basic site settings
		  $wp_customize->add_section( 'basic_site_settings' , array(
		    'title'      => __('Site Settings','tar'), 
		    'panel'      => 'basic_set_panel',
		    'description' => __('Basic site settings that will reflect styles (ex: font-family, color etc) throughout the site', 'tar'),
		    //'priority'   => 10    
		  ) ); 


		//site font family 
		$wp_customize->add_setting('body_font_family',array(
		          'default'         => '',
		          'sanitize_callback' => 'wp_kses_post',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		);

		$wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'body_font_family_control',
		            array(
		                'label'          => __( 'Font-Family', 'tar' ),
		                'section'        => 'basic_site_settings',
		                'settings'       => 'body_font_family',
		                'type'           => 'select',
		                'choices'        => tar_fonts()
		            )
		        )       
		   );


		  //text color
		   $wp_customize->add_setting(
		      'site_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'site_color_control',
		           array(
		               'label'      => __( 'Text Color', 'tar' ),
		               'section'    => 'basic_site_settings',
		               'settings'   => 'site_color' 
		           )
		       )
		   ); 


		   //link color
		   $wp_customize->add_setting(
		      'site_Link_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'site_Link_color_control',
		           array(
		               'label'      => __( 'Link Color', 'tar' ),
		               'section'    => 'basic_site_settings',
		               'settings'   => 'site_Link_color' 
		           )
		       )
		   ); 



		  //link hover color
		   $wp_customize->add_setting(
		      'site_Link_hover_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'site_Link_hover_color_control',
		           array(
		               'label'      => __( 'Link hover Color', 'tar' ),
		               'section'    => 'basic_site_settings',
		               'settings'   => 'site_Link_hover_color' 
		           )
		       )
		   ); 





/*--------------------------------------------------------------
## Miscellaneous
--------------------------------------------------------------*/
			

		/*if ( function_exists( 'wp_update_custom_css_post' ) ) {
    // Migrate any existing theme CSS to the core option added in WordPress 4.7.
    $css = get_option( 'custom_css_field' );
    if ( $css ) {
        $core_css = wp_get_custom_css(); // Preserve any CSS already added to the core option.
        $return = wp_update_custom_css_post( $core_css . $css );
        if ( ! is_wp_error( $return ) ) {
            // Remove the old theme_mod, so that the CSS is stored in only one place moving forward.
            remove_get_option( 'custom_css_field' );
        }
    }
} else {	*/
		  // Add Custom CSS Textfield
		  $wp_customize->add_section( 'custom_css_field' , array(
		    'title'      => __('Custom CSS','tar'), 
		    'panel'      => 'Miscellaneous',
		    'description' => __('<b>Note: </b>With WP 4.7, WordPress implemented Custom CSS by default. Copy all these CSS codes to <i>Additional CSS</i> field to prevent loosing styling changes. In future this field will be removed.' , 'tar'),  
		  ) );  
		  $wp_customize->add_setting(
		      'tar_custom_css',
		      array(        
		          'sanitize_callback' => 'wp_filter_nohtml_kses',
		          'type'			  => 'option'               
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'custom_css',
		            array(
		                'label'          => __( 'Add custom CSS here', 'tar' ),
		                'section'        => 'custom_css_field',
		                'settings'       => 'tar_custom_css',
		                'type'           => 'textarea'
		            )
		        )
		   );

		

		//More options for pro
		  $wp_customize->add_setting( 'cus_css_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'cus_css_sec_upsell', array(
			 'section' => 'custom_css_field',
			 'content' => __( '<b>You are missing out on</b>
			 	<i><p>28 Frontpage Section<p></i> 
			 	<i><p>Drag & Drop Frontpage Sections<p></i>
			 	<i><p>Header & Footer Social Bar & Social section<p></i>
			 	<i><p>Plugin Compatibility<p></i>
			 	<i><p>More Widget Areas<p></i>
			 	<i><p>Shortcodes & Widget<p></i>
			 	<i><p>Schema Markup Integration<p></i>
			 	<i><p>More Page & Post layouts<p></i>
			 	<a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'cus_css_sec_upsell',
		) ) );    



/*--------------------------------------------------------------
## Footer
--------------------------------------------------------------*/
		
		  $wp_customize->add_section( 'footer_background_color_section' , array(
		    'title'      => __('Footer Customization','tar'), 
		    'panel'      => 'Footer',
		    'priority'   => 25    
		  ) );  


          //Footer Background color picker
		  $wp_customize->add_setting(
		      'footer_background_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'footer_background_color',
		           array(
		               'label'      => __( 'Background Color', 'tar' ),
		               'section'    => 'footer_background_color_section',
		               'settings'   => 'footer_background_color' 
		           )
		       )
		   ); 


		  //footer background image
		   $wp_customize->add_setting( 'example-control-footer', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'example-control-footer', array(
			 'section' => 'footer_background_color_section',
			 'content' => __( 'For <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">PRO</a> users only', 'tar' ) . '</p>',
			 'settings' =>  'example-control-footer',
			 'label'    => __( 'Background Image', 'tar' ),
		) ) );




		  //Footer widget h2 color picker  
		   $wp_customize->add_setting(
		      'footer_widget_title_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'footer_widget_title_color_control',
		           array(
		               'label'      => __( 'Widget H2 Color', 'tar' ),
		               'section'    => 'footer_background_color_section',
		               'settings'   => 'footer_widget_title_color' 
		           )
		       )
		   ); 




		    //widget title font size picker
		    $wp_customize->add_setting(
		      'footer_widget_font_size',
		      array(
		          'default'         => '24px',
		          'sanitize_callback' => 'absint',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		        new WP_Customize_Control(
		            $wp_customize,
		            'footer_widget_font_size_control',
		            array(
		                'label'          => __( 'Widget H2 Font Size', 'tar' ),
		                'section'        => 'footer_background_color_section',
		                'settings'       => 'footer_widget_font_size',
		                'type'           => 'select',
		                'choices'        => array(
		                  '14'   => '14px',
		                  '22'   => '22px',
		                  '28'   => '28px',
		                  '32'   => '32px',
		                  '42'   => '42px'
		                )
		            )
		        )       
		   );  

		  //widget link color
		  $wp_customize->add_setting(
		      'footer_widget_link_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'footer_widget_link_color_control',
		           array(
		               'label'      => __( 'Widget Link Color', 'tar' ),
		               'section'    => 'footer_background_color_section',
		               'settings'   => 'footer_widget_link_color' 
		           )
		       )
		   ); 



		   //widget Text color
		  $wp_customize->add_setting(
		      'footer_widget_text_color',
		      array(
		          'default'         => '',
		          'sanitize_callback' => 'sanitize_hex_color',
		          'transport'       => 'postMessage',
		          'type'			=> 'option'
		      )
		  );
		  $wp_customize->add_control(
		       new WP_Customize_Color_Control(
		           $wp_customize,
		           'footer_widget_text_color_control',
		           array(
		               'label'      => __( 'Widget Text Color', 'tar' ),
		               'section'    => 'footer_background_color_section',
		               'settings'   => 'footer_widget_text_color' 
		           )
		       )
		   );

		//More options for pro
		  $wp_customize->add_setting( 'footer_sec_upsell', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text'
			) );
			$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'footer_sec_upsell', array(
			 'section' => 'footer_background_color_section',
			 'content' => __( '<b>You are missing out on</b> <i><p>Footer Social Bar<p></i> <a class="pro" target="_blank" href="http://asphaltthemes.com/#buy_pro">Upgrade to PRO</a>', 'tar' ) . '</p>',
			 'settings' =>  'footer_sec_upsell',
		) ) );    


	    
/********************************
Go Premium
********************************/

		$wp_customize->add_section( 'go_pro', array(
			'priority' 		=> 999,
			'title'   	 	=> __( 'Go Premium', 'tar' ),
		) );

		$wp_customize->add_setting( 'go_pro_sec', array(
			    'default' => '',
			    'sanitize_callback' => 'sanitize_text',
			    'type'   => 'option'
		) ); 

		$wp_customize->add_control( new tar_Custom_Content( $wp_customize, 'go_pro_sec', array(
			 'section' => 'go_pro',
			 'content' => sprintf( __( '<h2>Upgrade To PRO Version For</h2></br>
		<ol class="go_pro_customizer">
		<li>28 Front Page Section</li>
		<li>Drag & Drop Front Page Sections</li>
		<li>Schema Markup Integration</li>
		<li>Popular Plugins Compatibility</li>
		<li>6 Widget Area</li>
		<li>3 Blog Page Layout</li>
		<li>4 Posts Layout</li>
		<li>7 Page Layout</li>
		<li>Extended Customization</li>
		<li>Shortcodes & Widget</li>
		<li>Fast Support</li>
		<p> <a target="_blank" href="%s">Upgrade To Pro</a> to unlock all features</p>
		</ol></br>', 'tar' ), esc_url( 'https://asphaltthemes.com/#buy_pro' )),
			 'settings' =>  'go_pro_sec',
		) ) );


	
		
		


		
}
add_action( 'customize_register', 'tar_customize_register' );




function tar_fonts(){
    
    $font_family_array = array(
        'Arial, Helvetica, sans-serif'          => 'Arial',
        'Arial Black, Gadget, sans-serif'       => 'Arial Black',
        'Courier New', 'monospace'              => 'Courier New',
        'Lobster Two, cursive'                  => 'Lobster - Cursive',
        'Georgia, serif'                        => 'Georgia',
        'Impact, Charcoal, sans-serif'          => 'Impact',
        'Lucida Console, Monaco, monospace'     => 'Lucida Console',
        'Lucida Sans Unicode sans-serif'	    => 'Lucida Sans Unicode',
        'MS Sans Serif, Geneva, sans-serif'     => 'MS Sans Serif',
        'MS Serif, New York, serif'             => 'MS Serif',
        'Open Sans, sans-serif'                 => 'Open Sans',
        'Source Sans Pro, sans-serif'           => 'Source Sans Pro',
        'Lato, sans-serif'                      => 'Lato',
        'Tahoma, Geneva, sans-serif'            => 'Tahoma',
        'Times New Roman, Times, serif'         => 'Times New Roman',
        'Trebuchet MS, sans-serif'              => 'Trebuchet MS',
        'Verdana, Geneva, sans-serif'           => 'Verdana',
        'Raleway, sans-serif'                   => 'Raleway',
        'Roboto Condensed, sans-serif'          => 'Robot Condensed',
        'PT Sans, sans-serif'                   => 'PT Sans',
        'Open Sans Condensed, sans-serif'       => 'Open Sans Condensed',
        'Roboto Slab, sans-serif'               => 'Roboto Slab',
        'Droid Sans, sans-serif'                => 'Droid Sans',
        'Ubuntu, sans-serif'  					=> 'Ubuntu',
        'Tangerine, serif'						=> 'Tangerine serif',
        'Josefin Slab, sans-serif'				=> 'Josefin Slab',
        'Arvo, sans-serif'						=> 'Arvo',
        'Vollkorn, sans-serif'					=> 'Vollkorn',
        'Abril Fatface, cursive'				=> 'Abril Fatface',
        'Old Standard TT, serif'			=> 'Old Standard TT',
        'Anivers, sans-serif'					=> 'Anivers',
        'Junction, sans-serif'					=> 'Junction',
        'Fertigo, sans-serif'					=> 'Fertigo',
        'Aller, sans-serif'						=> 'Aller',
        'Audimat, sans-serif'					=> 'Audimat',
        'Delicious, sans-serif'					=> 'Delicious',
        'Prociono, sans-serif'					=> 'Prociono',
        'Fontin, sans-serif'					=> 'Fontin',
        'Fontin-Sans, sans-serif'				=> 'Fontin-Sans',
        'Playfair Display, sans-serif'			=> 'Playfair Display',
        'Work Sans, sans-serif'					=> 'Work Sans',
        'Alegreya, sans-serif'					=> 'Alegreya',
        'Alegreya Sans, sans-serif'				=> 'Alegreya Sans',
        'Fira Sans, sans-serif'					=> 'Fira Sans',
        'Inconsolata, sans-serif'				=> 'Inconsolata',
        'Source Serif Pro, sans-serif'			=> 'Source Serif Pro',
        'Lora, sans-serif'						=> 'Lora',
        'Karla, sans-serif'						=> 'Karla',
        'Cardo, sans-serif'						=> 'Cardo',
        'Bitter, sans-serif'					=> 'Bitter',
        'Domine, sans-serif'					=> 'Domine',
        'Varela Round, sans-serif'				=> 'Varela Round',
        'Chivo, sans-serif'						=> 'Chivo',
        'Montserrat, sans-serif'				=> 'Montserrat',
        'Crimson Text, sans-serif'				=> 'Crimson Text',
        'Libre Baskerville, sans-serif'			=> 'Libre Baskerville',
        'Archivo Narrow, sans-serif'			=> 'Archivo Narrow',
        'Anonymous Pro, sans-serif'				=> 'Anonymous Pro',
        'Merriweather, sans-serif'				=> 'Merriweather',
        'Neuton, sans-serif'					=> 'Neuton',
        'Poppins, sans-serif'					=> 'Poppins',
        'Noto Sans, sans-serif'					=> 'Noto Sans',
    );
    
    return $font_family_array;
}




// Sanitize text 
function tar_sanitize_text( $text ) {

    return wp_kses_post( force_balance_tags( $text ) );
}

// Sanitize textarea 
function tar_sanitize_css( $input ) {
	return wp_filter_nohtml_kses( $input );
}


// checkbox sanitization
   function tar_checkbox_sanitize($input) {
      if ( $input == 1 ) {
         return 1;
      } else {
         return '';
      }
   }

function athena_icon_sanitize( $input ) {
    
    $valid_keys = athena_icons();
    
    if (array_key_exists($input, $valid_keys)) {
        return $input;
    } else {
        return '';
    }
    
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tar_customize_preview_js() {
	wp_enqueue_script( 'tar_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );



}
add_action( 'customize_preview_init', 'tar_customize_preview_js' );




function tar_customizer_style() {
    wp_add_inline_style( 'customize-controls', '#customize-control-example-blog-control { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-text_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-second_cta_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-porfolio_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-feature_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-cta_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-nav_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#customize-control-footer_sec_upsell { background: #fff;
    padding: 19px 20px;border-left: 5px solid #F44336; }');
    wp_add_inline_style( 'customize-controls', '#accordion-section-go_pro .accordion-section-title { background: rgba(139, 195, 74, 0.23);}');
    wp_add_inline_style( 'customize-controls', '#customize-control-go_pro_sec {background: #fff;padding: 6% 5%;border-left: 5px solid #ec4545;}');
    wp_add_inline_style( 'customize-controls', '.go_pro_customizer { list-style-type: initial;}');
    wp_add_inline_style( 'customize-controls', '#customize-control-cus_css_sec_upsell { background: #fff;padding: 6% 5%;border-left: 5px solid #ec4545;}');


}

add_action( 'customize_controls_enqueue_scripts', 'tar_customizer_style');