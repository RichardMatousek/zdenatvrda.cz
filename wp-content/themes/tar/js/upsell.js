/**
 * Upsell notice for theme
 */
 jQuery(window).bind("load", function() {

 // Add Upgrade Message
 if ('undefined' !== typeof tarL10n) {
 upsell = jQuery('<a class="tar-upsell-link"></a>')
 .attr('href', tarL10n.tarURL)
 .attr('target', '_blank')
 .text(tarL10n.tarLabel)
 .css({
 'display' : 'inline-block',
 'background-color' : 'rgb(222, 49, 21)',
 'color' : '#fff',
 'text-transform' : 'uppercase',
 'margin-top' : '6px',
 'padding' : '8px 15px',
 'font-size': '11px',
 'letter-spacing': '1px',
 'line-height': '1.5',
 'clear' : 'both',
 'font-weight' : 'bold',
 'text-decoration' : 'none',
 }) ;

 //appending upgrade to PRO fields
 jQuery('#accordion-section-themes h3').append(upsell);

//Second CTA background
 //remove fields
jQuery('#customize-control-second_cta_bg_image_upgrade input').css( 'display' , 'none');

 //Upgrade append
 jQuery('#customize-control-second_cta_bg_image_upgrade').append(upsell);


//Front page text section
 //remove fields
 jQuery('#customize-control-optin_background_image_control input').css( 'display' , 'none');

 //Upgrade append
 jQuery('#customize-control-optin_background_image_control').append(upsell);


//Blog more option
 //remove fields
 jQuery('#customize-control-blog_more_option_control input').css( 'display' , 'none');
 
 jQuery('#customize-control-header_textcolor').css( 'display' , 'none');


 //Upgrade append
 jQuery('#customize-control-blog_more_option_control input').append(upsell);



//Footer background image
 //remove fields
 jQuery('#customize-control-footer_bg_image_control input').css( 'display' , 'none');
 
 //Upgrade append
 jQuery('#customize-control-footer_bg_image_control .description').append(upsell);

//Page & Post Section
 //remove fields
 jQuery('#customize-control-error_head_text_color_control input').css( 'display' , 'none');

 //Upgrade append
 jQuery('#accordion-section-error_page h3').append(upsell);


// Remove accordion click event
 jQuery('.tar-upsell-link').on('click', function(e) {
	 e.stopPropagation();
});
 }
});