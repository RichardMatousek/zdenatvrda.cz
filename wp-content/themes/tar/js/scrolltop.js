jQuery(document).ready(function(){

/******************************
Match Heights
*****************************/
    //match height item front page portfolio
    jQuery(function() {
        jQuery('.portfolio-image').matchHeight();
    });

    //front page blog post image div
     jQuery(function() {
        jQuery('.frontpage-post').matchHeight();
    });

     //front page blog post image div
     jQuery(function() {
        jQuery('.nosidebar-featured-image img').matchHeight();
    });


       //Mobile Menu
        var padmenu = jQuery(".menu-toggle").html();
        jQuery('.menu-toggle').sidr({
         name: 'sidr-main',
         source: '#site-navigation',
         side: 'right'
        });
        jQuery(".sidr").prepend("<div class='pad_menutitle'>"+padmenu+"<span><i class='fa fa-times'></i></span></div>");
        
        jQuery(".pad_menutitle span").click(function() {
            jQuery.sidr('close', 'sidr-main')
            preventDefaultEvents: false;
        });


      //Make sure the footer always stays to the bottom of the page when the page is short
      var docHeight = jQuery(window).height();
      var footerHeight = jQuery('#colophon').height();
      var footerTop = jQuery('#colophon').position().top + footerHeight;
       
      if (footerTop < docHeight) {  jQuery('#colophon').css('margin-top', 1 + (docHeight - footerTop) + 'px');  }


/******************************
Scroll to top
*****************************/
    //Check to see if the window is top if not then display button
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 600) {
            jQuery('i.fa.fa-chevron-up').fadeIn();
        } else {
            jQuery('i.fa.fa-chevron-up').fadeOut();
        }
    });
    
    //Click event to scroll to top
    jQuery('i.fa.fa-chevron-up').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });
  });


/*jQuery(function(){
  jQuery('.test').on('click', function(e){
    e.preventDefault();
    var scroll = jQuery('<?php echo get_option('smooth_scroll'); ?>').offset().top;
    jQuery('html, body').animate({scrollTop:scroll}, 'slow');
  });
});*/

// When the Document Object Model is ready
/*jQuery(document).ready(function(){
  // 'scroll' is the amount of pixels destination
  // is from the top of the document
  var scroll = jQuery('<?php echo get_option('smooth_scroll'); ?>').offset().top;
  
  // When button is clicked
  jQuery('.test').click(function(){
    // Scroll down to 'scroll'
    jQuery('html, body').animate({scrollTop:scroll}, 'slow');
    // Stop the link from acting like a normal anchor link
    return false;
  });
});*/