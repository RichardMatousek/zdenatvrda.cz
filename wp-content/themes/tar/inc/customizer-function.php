<?php
function tar_customizer_styles() {
  wp_enqueue_style(
    'custom-style',
    get_template_directory_uri() . '/assets/css/custom_script.css'
  );
        $color = get_header_image();  //E.g. #FF0000
        $custom_css = "
                #masthead{
                        background-image: url({$color});
                }";
        
        wp_add_inline_style( 'custom-style', $custom_css );


       
}
add_action( 'wp_enqueue_scripts', 'tar_customizer_styles' );


function tar_customizer_css() {
    ?>
    <style type="text/css">

        /*HEADER*/
        .site-name h1 a { color: <?php echo esc_html(get_option( 'header_h1_color' )); ?>; }
        .site-title a { font-size: <?php echo esc_html(get_option( 'header_h1_font_size_setting' )); ?>px; }
        .site-title a { font-weight: <?php echo esc_html(get_option( 'header_h1_font_weight' )); ?>; }
        .site-title a  { letter-spacing:<?php echo esc_html(get_option('site_title_letter_spacing')); ?>px ;}
        .site-title a  { word-spacing:<?php echo esc_html(get_option('site_title_word_spacing')); ?>px ;}

        .site-name p { color: <?php echo esc_html(get_option( 'header_tagline_color' )); ?>; }
        .site-branding p { font-size: <?php echo esc_html(get_option( 'site_tagline_font_size' )); ?>px; }
        .site-branding p { font-weight: <?php echo esc_html(get_option( 'header_site_tagline_font_weight' )); ?>; }
        .site-branding p  { letter-spacing:<?php echo esc_html(get_option('site_tagline_letter_spacing')); ?>px ;}
        .site-branding p  { word-spacing:<?php echo esc_html(get_option('site_tagline_word_spacing')); ?>px ;}

        #masthead { background-color: <?php echo esc_html(get_option( 'header_background_color' )); ?>; }

        /*Navigation*/
        .main-navigation a { color: <?php echo esc_html(get_option( 'nav_text_color' )); ?>; }
        .main-navigation a:hover{ color: <?php echo esc_html(get_option( 'nav_text_hover_color' )); ?>; }
        #primary-menu li ul li{ background: <?php echo esc_html(get_option( 'nav_ul_bg_color' )); ?>; }
        #primary-menu li ul li{ border-bottom: 1px solid<?php echo esc_html(get_option( 'nav_li_bottom_border_color' )); ?>; }
        




         /*CTA SECTION*/
        .welcome-text h2 { color: <?php echo esc_html(get_option( 'tar_h2_color' )); ?>; }
        .welcome-text h2 { text-align: <?php echo esc_html(get_option( 'cta_h2_position' )); ?>; }
        .welcome-text h2 { font-size: <?php echo esc_html(get_option( 'tar_htwo_font_size' )); ?>px; }
        .welcome-text h2 { font-weight: <?php echo esc_html(get_option( 'cta_h2_font_weight' )); ?>; }
        .welcome-text h2 { letter-spacing: <?php echo esc_html(get_option('welcome_text_htwo_letter_spacing')); ?>px ;}
        .welcome-text h2 { word-spacing: <?php echo esc_html(get_option('welcome_text_htwo_word_spacing')); ?>px ;}
        .welcome-text h2 { font-family: <?php echo esc_html(get_option('base_typography_font_family')); ?>;}

        .welcome-text p { color: <?php echo esc_html(get_option( 'tar_p_color' )); ?>; }
        .welcome-text p { text-align: <?php echo esc_html(get_option( 'cta_p_position' )); ?>; }
        .welcome-text p { font-size: <?php echo esc_html(get_option( 'tar_p_font_size' )); ?>px ;}
        .welcome-text p { letter-spacing: <?php echo esc_html(get_option('cta_p_letter_spacing')); ?>px ;}
        .welcome-text p { word-spacing: <?php echo esc_html(get_option('cta_p_word_spacing')); ?>px ;}


        .welcome-text button { color: <?php echo esc_html(get_option( 'tar_button_color' )); ?>; }
        .welcome-text button { background: <?php echo esc_html(get_option( 'tar_button_background_color' )); ?>; }
        .welcome-text button { font-size: <?php echo esc_html(get_option( 'tar_button_font_size' )); ?>px ;}
        .welcome-text button { border-radius: <?php echo esc_html(get_option('tar_button_style')); ?>px;}
        .welcome-text button { border-radius: <?php echo esc_html(get_option('tar_button_style')); ?>px;}
        



        /*FEATURE SECTION*/
        .features-list h4 {color: <?php echo esc_html(get_option('features_head_text_color')); ?>; }
        .features-list {background: <?php echo esc_html(get_option('features_background_color')); ?>; }
        .features-list h3 {color: <?php echo esc_html(get_option('blocks_head_text_color')); ?>;}
        .features-list p {color: <?php echo esc_html(get_option('blocks_para_text_color')); ?>;}
 


        /*SECOND CTA SECTION*/
        .call-section-one p {color: <?php echo esc_html(get_option('second_cta_head_text_color')); ?>;}
        .call-section-two button {color: <?php echo esc_html(get_option('second_cta_button_text_color')); ?>;}
        .call-section-two button {background: <?php echo esc_html(get_option('second_cta_button_background_color')); ?>;}


        .bottom-call { background-color: <?php echo esc_html(get_option('second_cta_background_color')); ?>;}


        /*Portfolio & Blog SECTION*/
        .portfolio p {color: <?php echo esc_html(get_option('porfolio_head_text_color')); ?>;}
        .portfolio {background: <?php echo esc_html(get_option('porfolio_background_color')); ?>;}

        .frontpage-post-blog h4 {color: <?php echo esc_html(get_option('blog_head_text_color')); ?>;}
        .frontpage-post-blog {background: <?php echo esc_html(get_option('blog_bg_color')); ?>;}



        /*EMAIL SECTION*/
         .frontpage-signup p {color: <?php echo esc_html(get_option('email_head_text_color')); ?>;}
         .frontpage-signup p {font-size: <?php echo esc_html(get_option('email_head_font_size')); ?>px ;}

         .frontpage-signup {text-align: <?php echo esc_html(get_option('opt_in_position')); ?>;}
         .frontpage-signup {background: <?php echo esc_html(get_option('optin_background_color')); ?>;}


          /*FOOTER SECTION*/
           .footer-widget {background: <?php echo esc_html(get_option('footer_background_color')); ?>;}
           .footer-widget h2 {color: <?php echo esc_html(get_option('footer_widget_title_color')); ?>;}
           .footer-widget h2{font-size: <?php echo esc_html(get_option('footer_widget_font_size')); ?>px;}

           .footer-widget .widget a {color: <?php echo esc_html(get_option('footer_widget_link_color')); ?>;}
           .footer-widget .widget p {color: <?php echo esc_html(get_option('footer_widget_text_color')); ?>;}


            <?php if( get_option('tar_custom_css') != '' ) {
              echo get_option('tar_custom_css');
            } ?>

            /*Basic site settings*/
            body {color: <?php echo esc_html(get_option('site_color')); ?>;}
            a {color: <?php echo esc_html(get_option('site_Link_color')); ?>;}
            a:hover {color: <?php echo esc_html(get_option('site_Link_hover_color')); ?>;}
            body {background: <?php echo esc_html(get_option('site_bg_color')); ?>;}
            body {font-family: <?php echo esc_html(get_option('body_font_family')); ?>;}
                  

            <?php if( '' === get_option( 'cta_section_display_toggle' ) ) { ?>
                .welcome-text { display: none; }
           <?php } // end if ?> 

           <?php if( '' === get_option( 'features_block_section_toggle' ) ) { ?>
                .features-list { display: none; }
           <?php } // end if ?> 

            <?php if( '' === get_option( 'portfolio_section_toggle' ) ) { ?>
                .portfolio { display: none; }
           <?php } // end if ?> 

            <?php if( '' === get_option( 'second_cta_section_toggle' ) ) { ?>
                .bottom-call { display: none; }
           <?php } // end if ?> 

            <?php if( '' === get_option( 'blog_section_toggle' ) ) { ?>
                .frontpage-post-blog { display: none; }
           <?php } // end if ?> 

            <?php if( '' === get_option( 'text_section_toggle' ) ) { ?>
                .frontpage-signup { display: none; }
           <?php } // end if ?> 
           

           <?php if( '' === get_option( 'block_one_toggle' ) ) { ?>
                .features-block-one { display: none; }
           <?php } // end if ?> 

            <?php if( '' === get_option( 'block_two_toggle' ) ) { ?>
                .features-block-two { display: none; }
           <?php } // end if ?> 

           <?php if( '' === get_option( 'block_three_toggle' ) ) { ?>
                .features-block-three { display: none; }
           <?php } // end if ?> 


    </style>
    <?php
}
add_action( 'wp_head', 'tar_customizer_css' );





//tar_customizer_function
function tar_customizer_function() {
?>
     <style type="text/css">

        /*cta background image*/
        <?php if ( 0 < count( strlen( ( $home_top_background_image_url = get_option( 'cta_background_image_setting',  get_template_directory_uri(). '/assets/images/banner.jpg' ) ) ) ) ) { ?>
            .welcome-text {
                background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.5)),
                 url( <?php echo esc_url($home_top_background_image_url); ?> );
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        <?php } // end if ?>


         /*feature one image*/
        <?php if ( 0 < count( strlen( ( $block_one_image = get_option( 'block_one_image',  get_template_directory_uri(). '/assets/images/block1.jpg' ) ) ) ) ) { ?>
            .block-one-photo {
                background-image: url( <?php echo esc_url($block_one_image); ?> );
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        <?php } // end if ?>


         /*feature two image*/
        <?php if ( 0 < count( strlen( ( $block_two_image = get_option( 'block_two_image',  get_template_directory_uri(). '/assets/images/block2.jpg' ) ) ) ) ) { ?>
            .block-two-photo {
                background-image: url( <?php echo esc_url($block_two_image); ?> );
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        <?php } // end if ?>


         /*feature three image*/
        <?php if ( 0 < count( strlen( ( $block_three_image = get_option( 'block_three_image',  get_template_directory_uri(). '/assets/images/block3.jpg' ) ) ) ) ) { ?>
            .block-three-photo {
                background-image: url( <?php echo esc_url($block_three_image); ?> );
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        <?php } // end if ?>

     </style>
<?php
} // end tar_customizer_function

add_action( 'wp_head', 'tar_customizer_function');