/**
 * customizer.js
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'color': to,
					'position': 'relative'
				} );
			}
		} );
	} );



/*--------------------------------------------------------------
## Header Section
--------------------------------------------------------------*/

    //site logo display 
    wp.customize( 'site_logo_display', function( value ) {
    value.bind( function( to ) {
        /*false === to ? $( '.site-logo' ).hide() : $( '.site-logo' ).show();*/
        if ( true === to) {
            $( '.site-logo' ).show();
          } else {
            $( '.site-logo' ).hide();
          }
        } );
    } );



     
    //Site title color picker
     wp.customize( 'header_h1_color', function( value ) {
        value.bind( function( to ) {
            $( '.site-title a' ).css( 'color', to );
        } );
    });


     //Site title font size picker
     wp.customize( 'header_h1_font_size_setting', function( value ) {
        value.bind( function( to ) {             
            $( '.site-title a' ).css( 'font-size', to + 'px' );            
        } );
    });  


       //Site title font weight
      wp.customize( 'header_h1_font_weight', function( value ) {
        value.bind( function( to ) {            
            $( '.site-title a' ).css( 'font-weight', to  );            
        } );
    });  


      //Site title letter spacing
      wp.customize( 'site_title_letter_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.site-title a' ).css( 'letter-spacing', to + 'px' );            
        } );
    });  


      //Site title Word spacing
      wp.customize( 'site_title_word_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.site-title a' ).css( 'word-spacing', to + 'px' );            
        } );
    });  






	 //Site tagline color picker
	 wp.customize( 'header_tagline_color', function( value ) {
        value.bind( function( to ) {
            $( '.site-name p' ).css( 'color', to );
        } );
    });


	  //Site tagline font size picker
	 wp.customize( 'site_tagline_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.site-branding p' ).css( 'font-size', to + 'px' );            
        } );
    });  


     //Site tagline font weight
      wp.customize( 'header_site_tagline_font_weight', function( value ) {
        value.bind( function( to ) {            
            $( '.site-branding p' ).css( 'font-weight', to  );            
        } );
    });  


      //Site tagline letter spacing
      wp.customize( 'site_tagline_letter_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.site-branding p' ).css( 'letter-spacing', to + 'px' );            
        } );
    });  



      //Site tagline Word spacing
      wp.customize( 'site_tagline_word_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.site-branding p' ).css( 'word-spacing', to + 'px' );            
        } );
    });  







      //header background color picker
     wp.customize( 'header_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.home #masthead' ).css( 'background-color', to );
        } );
    });


     //Navigation text color
     wp.customize( 'nav_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.main-navigation a' ).css( 'color', to );
        } );
    });

    //Navigation text hover color
     wp.customize( 'nav_text_hover_color', function( value ) {
        value.bind( function( to ) {
            $( '.main-navigation a:hover' ).css( 'color', to );
        } );
    });





/*--------------------------------------------------------------
## Call To Action Section
--------------------------------------------------------------*/
    
      //CTA section display toggle
    wp.customize( 'cta_section_display_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.welcome-text' ).show();
          } else {
            $( '.welcome-text' ).hide();
          }
        } );
    } );


     // CTA Background Image 
    wp.customize( 'cta_background_image_setting', function( value ) {
        value.bind( function( to ) {
            $( '.welcome-text' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });



	//welcome text h2
	wp.customize( 'cta_welcome_text', function( value ) {
		value.bind( function( to ) {
			$( '.welcome-text h2' ).text( to );
		} );
	} );

	//welcome text h2 color picker
	 wp.customize( 'tar_h2_color', function( value ) {
        value.bind( function( to ) {
            $( '.welcome-text h2' ).css( 'color', to );
        } );
    });

	 //welcome text h2 font size picker
	 wp.customize( 'tar_htwo_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text h2' ).css( 'font-size', to + 'px' );            
        } );
    });  


	//welcome text h2 position
	 wp.customize( 'cta_h2_position', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text h2' ).css( 'text-align', to  );         
        } );
    }); 


     //welcome text h2 font weight
     wp.customize( 'cta_h2_font_weight', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text h2' ).css( 'font-weight', to  );         
        } );
    }); 



     //welcome text h2 letter spacing
      wp.customize( 'welcome_text_htwo_letter_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text h2' ).css( 'letter-spacing', to + 'px' );            
        } );
    });  



      //welcome text h2 Word spacing
      wp.customize( 'welcome_text_htwo_word_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text h2' ).css( 'word-spacing', to + 'px' );            
        } );
    });  






   //welcome text p
	wp.customize( 'cta_welcome_text_p', function( value ) {
		value.bind( function( to ) {
			$( '.welcome-text p' ).text( to );
		} );
	} );

	//welcome text p color picker
	 wp.customize( 'tar_p_color', function( value ) {
        value.bind( function( to ) {
            $( '.welcome-text p' ).css( 'color', to );
        } );
    });

	 //welcome text p font size picker
	 wp.customize( 'tar_p_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text p' ).css( 'font-size', to + 'px' );            
        } );
    }); 


	//welcome text p position
	 wp.customize( 'cta_p_position', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text p' ).css( 'text-align', to  );         
        } );
    }); 


     //welcome text p letter spacing
      wp.customize( 'cta_p_letter_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text p' ).css( 'letter-spacing', to + 'px' );            
        } );
    });  



      //welcome text p Word spacing
      wp.customize( 'cta_p_word_spacing', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text p' ).css( 'word-spacing', to + 'px' );            
        } );
    });  








	//cta button text 
	wp.customize( 'cta-button-text', function( value ) {
		value.bind( function( to ) {
			$( '.welcome-text button' ).text( to );
		} );
	} );


	  //welcome  button text color
	 wp.customize( 'tar_button_color', function( value ) {
        value.bind( function( to ) {
            $( '.welcome-text button' ).css( 'color', to );
        } );
    });

	 //welcome button font size
	 wp.customize( 'tar_button_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text button' ).css( 'font-size', to + 'px' );            
        } );
    });  


     //CTA button style change
     wp.customize( 'tar_button_style', function( value ) {
        value.bind( function( to ) {            
            $( '.welcome-text button' ).css( 'border-radius', to + 'px' );          
        } );
    });



	 //CTA button background color picker
	 wp.customize( 'tar_button_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.welcome-text button' ).css( 'background', to );
        } );
    });




/*--------------------------------------------------------------
## Feature Section
--------------------------------------------------------------*/

    //Features section display toggle
    wp.customize( 'features_block_section_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.features-list' ).show();
          } else {
            $( '.features-list' ).hide();
          }
        } );
    } );


	//key feature head text
	wp.customize( 'features_head_text_settings', function( value ) {
		value.bind( function( to ) {
			$( '.features-list h4' ).text( to );
		} );
	} );


     //key feature head text color
     wp.customize( 'features_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.features-list h4' ).css( 'color', to );
        } );
    });


      //key feature section background color
     wp.customize( 'features_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.features-list' ).css( 'background', to );
        } );
    });

      // Features blocks header text color
    wp.customize( 'blocks_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.features-list h3' ).css( 'color' , to );
        } );
    } );


      // Features blocks paragraph text color
    wp.customize( 'blocks_para_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.features-list p' ).css( 'color' , to );
        } );
    } );




	//feature block one heading text
	wp.customize( 'features_one_settings', function( value ) {
		value.bind( function( to ) {
			$( '.features-block-one h3' ).text( to );
		} );
	} );

	//feature block one paragraph text
	wp.customize( 'features_one_para_settings', function( value ) {
		value.bind( function( to ) {
			$( '.features-block-one p' ).text( to );
		} );
	} );


   //block one image 
    wp.customize( 'block_one_image', function( value ) {
        value.bind( function( to ) {
            $( '.block-one-photo ' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });   


    //block one toggle
    wp.customize( 'block_one_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.features-block-one' ).show();
          } else {
            $( '.features-block-one' ).hide();
          }
        } );
    } );




        //feature block two heading text
    wp.customize( 'features_two_setting', function( value ) {
        value.bind( function( to ) {
            $( '.features-block-two h3' ).text( to );
        } );
    } );

    //feature block two paragraph text
    wp.customize( 'features_two_para_settings', function( value ) {
        value.bind( function( to ) {
            $( '.features-block-two p' ).text( to );
        } );
    } );

    //block two image 
    wp.customize( 'block_two_image', function( value ) {
        value.bind( function( to ) {
            $( '.block-two-photo ' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });   

    //block two toggle
    wp.customize( 'block_two_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.features-block-two' ).show();
          } else {
            $( '.features-block-two' ).hide();
          }
        } );
    } );




    //feature block three heading text
    wp.customize( 'features_three_setting', function( value ) {
        value.bind( function( to ) {
            $( '.features-block-three h3' ).text( to );
        } );
    } );

    //feature block three paragraph text
    wp.customize( 'features_three_para_settings', function( value ) {
        value.bind( function( to ) {
            $( '.features-block-three p' ).text( to );
        } );
    } );

     //block three image 
    wp.customize( 'block_three_image', function( value ) {
        value.bind( function( to ) {
            $( '.block-three-photo ' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });   


    //block three toggle
    wp.customize( 'block_three_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.features-block-three' ).show();
          } else {
            $( '.features-block-three' ).hide();
          }
        } );
    } );

	 

/*--------------------------------------------------------------
## Portfolio Section
--------------------------------------------------------------*/

  //Portfolio section display toggle
    wp.customize( 'portfolio_section_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.portfolio' ).show();
          } else {
            $( '.portfolio' ).hide();
          }
        } );
    } );


   //Portfolio head text 
    wp.customize( 'porfolio_head_text', function( value ) {
        value.bind( function( to ) {
            $( '.portfolio p' ).text( to );
        } );
    } );

      //Portfolio  text  color
    wp.customize( 'porfolio_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.portfolio p' ).css( 'color', to );
        } );
    } );


      //Portfolio  background color
    wp.customize( 'porfolio_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.portfolio' ).css( 'background', to );
        } );
    } );





/*--------------------------------------------------------------
## Second CTA Section
--------------------------------------------------------------*/


  //2nd section display toggle
    wp.customize( 'second_cta_section_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.bottom-call' ).show();
          } else {
            $( '.bottom-call' ).hide();
          }
        } );
    } );


    //left side head text
    wp.customize( 'second_cta_head_text', function( value ) {
        value.bind( function( to ) {
            $( '.call-section-one p' ).text( to );
        } );
    } );


    //left side head text color
    wp.customize( 'second_cta_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.call-section-one p' ).css( 'color', to );
        } );
    } );


    //button text 
    wp.customize( 'second_cta_button_text', function( value ) {
        value.bind( function( to ) {
            $( '.call-section-two button' ).text( to );
        } );
    } );


    //button text color
     wp.customize( 'second_cta_button_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.call-section-two button' ).css( 'color', to );
        } );
    } );


     //button background color
     wp.customize( 'second_cta_button_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.call-section-two button' ).css( 'background', to );
        } );
    } );

     //Sectio  background color
     wp.customize( 'second_cta_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.bottom-call' ).css( 'background', to );
        } );
    } );



     // Second cta bg  Image 
    wp.customize( 'second_cta_bg_image', function( value ) {
        value.bind( function( to ) {
            $( '.bottom-call' ).css( 'background-image', 'url( ' + to + ')' );
        } );
    });



/*--------------------------------------------------------------
## Blog Section
--------------------------------------------------------------*/

    //Blog section display toggle
    wp.customize( 'blog_section_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.frontpage-post-blog' ).show();
          } else {
            $( '.frontpage-post-blog' ).hide();
          }
        } );
    } );

     //head text
    wp.customize( 'blog_head_text', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-post-blog h4' ).text( to );
        } );
    } );


     //head text color
    wp.customize( 'blog_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-post-blog h4' ).css( 'color', to );
        } );
    } );


    //background color
    wp.customize( 'blog_bg_color', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-post-blog' ).css( 'background', to );
        } );
    } );




/*--------------------------------------------------------------
## Text Section
--------------------------------------------------------------*/

     //Text section display toggle
    wp.customize( 'text_section_toggle', function( value ) {
    value.bind( function( to ) {
        if ( true === to) {
            $( '.frontpage-signup' ).show();
          } else {
            $( '.frontpage-signup' ).hide();
          }
        } );
    } );


    //Email subscribe head text
	 wp.customize( 'email_subscribe_header', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup p' ).text( to );          
        } );
    });     

	   //Email subscribe head text color
	 wp.customize( 'email_head_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-signup p' ).css( 'color', to );
        } );
    });

	 //Email subscribe head text font size
	 wp.customize( 'email_head_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup p' ).css( 'font-size', to + 'px' );            
        } );
    });  


	

    //Email subscribe button text
	 wp.customize( 'email_subscribe_button', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup button' ).text( to );          
        } );
    });     


	   //Email subscribe button text color
	 wp.customize( 'email_button_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-signup button' ).css( 'color', to );
        } );
    });

	 //Email subscribe button text font size
	 wp.customize( 'email_button_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup button' ).css( 'font-size', to + 'px' );            
        } );
    });  


	 //Email subscribe buttonstyle change
	 wp.customize( 'optin_button_style', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup button' ).css( 'border-radius', to + 'px' );          
        } );
    }); 




	 //Email section position
	 wp.customize( 'opt_in_position', function( value ) {
        value.bind( function( to ) {            
            $( '.frontpage-signup' ).css( 'text-align', to  );         
        } );
    }); 



	  //Email section background color picker
	 wp.customize( 'optin_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.frontpage-signup ' ).css( 'background', to );
        } );
    });



     
/*--------------------------------------------------------------
## Miscellenious Site settings Section
--------------------------------------------------------------*/
    
    //site font family
     wp.customize( 'body_font_family', function( value ) {
        value.bind( function( to ) {            
            $( 'body' ).css('font-family', to );            
        } );
    });  


    //body text color
     wp.customize( 'site_color', function( value ) {
        value.bind( function( to ) {            
            $( 'body' ).css( 'color', to );            
        } );
    }); 


     //site link color
     wp.customize( 'site_link_color', function( value ) {
        value.bind( function( to ) {            
            $( 'a' ).css( 'color', to );            
        } );
    });

     //site link hover color
      wp.customize( 'site_bg_color', function( value ) {
        value.bind( function( to ) {            
            $( 'body' ).css( 'background-color', to );            
        } );
    });



/*--------------------------------------------------------------
 ## Footer Section
--------------------------------------------------------------*/

     //Footer background color picker
     wp.customize( 'footer_background_color', function( value ) {
        value.bind( function( to ) {
            $( '.footer-widget' ).css( 'background', to );
        } );
    });



     //Footer widget title color picker
     wp.customize( 'footer_widget_title_color', function( value ) {
        value.bind( function( to ) {
            $( '.footer-widget h2' ).css( 'color', to );
        } );
    });


      //Widget title text font size
      wp.customize( 'footer_widget_font_size', function( value ) {
        value.bind( function( to ) {            
            $( '.footer-widget h2' ).css( 'font-size', to + 'px' );            
        } );
    });  


      //Footer widget link color picker
     wp.customize( 'footer_widget_link_color', function( value ) {
        value.bind( function( to ) {
            $( '.footer-widget a' ).css( 'color', to );
        } );
    });

       //Footer widget text color picker
     wp.customize( 'footer_widget_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.footer-widget .widget p' ).css( 'color', to );
        } );
    });




} )( jQuery );