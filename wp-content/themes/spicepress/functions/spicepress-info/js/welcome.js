jQuery(document).ready(function() {

	/* If there are required actions, add an icon with the number of required actions in the About spicepress page -> Actions required tab */
    var spicepress_nr_actions_required = spicepressLiteWelcomeScreenObject.nr_actions_required;

    if ( (typeof spicepress_nr_actions_required !== 'undefined') && (spicepress_nr_actions_required != '0') ) {
        jQuery('li.spicepress-w-red-tab a').append('<span class="spicepress-actions-count">' + spicepress_nr_actions_required + '</span>');
    }

    /* Dismiss required actions */
    jQuery(".spicepress-dismiss-required-action").click(function(){

        var id= jQuery(this).attr('id');
        console.log(id);
        jQuery.ajax({
            type       : "GET",
            data       : { action: 'spicepress_dismiss_required_action',dismiss_id : id },
            dataType   : "html",
            url        : spicepressLiteWelcomeScreenObject.ajaxurl,
            beforeSend : function(data,settings){
				jQuery('.spicepress-tab-pane h1').append('<div id="temp_load" style="text-align:center"><img src="' + spicepressLiteWelcomeScreenObject.template_directory + '/inc/spicepress-info/img/ajax-loader.gif" /></div>');
            },
            success    : function(data){
				jQuery("#temp_load").remove(); /* Remove loading gif */
                jQuery('#'+ data).parent().remove(); /* Remove required action box */

                var spicepress_lite_actions_count = jQuery('.spicepress-actions-count').text(); /* Decrease or remove the counter for required actions */
                if( typeof spicepress_lite_actions_count !== 'undefined' ) {
                    if( spicepress_lite_actions_count == '1' ) {
                        jQuery('.spicepress-actions-count').remove();
                        jQuery('.spicepress-tab-pane').append('<p>' + spicepressLiteWelcomeScreenObject.no_required_actions_text + '</p>');
                    }
                    else {
                        jQuery('.spicepress-actions-count').text(parseInt(spicepress_lite_actions_count) - 1);
                    }
                }
            },
            error     : function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    });

	/* Tabs in welcome page */
	function spicepress_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".spicepress-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}

	var spicepress_actions_anchor = location.hash;

	if( (typeof spicepress_actions_anchor !== 'undefined') && (spicepress_actions_anchor != '') ) {
		spicepress_welcome_page_tabs('a[href="'+ spicepress_actions_anchor +'"]');
	}

    jQuery(".spicepress-nav-tabs a").click(function(event) {
        event.preventDefault();
		spicepress_welcome_page_tabs(this);
    });

		/* Tab Content height matches admin menu height for scrolling purpouses */
	 $tab = jQuery('.spicepress-tab-content > div');
	 $admin_menu_height = jQuery('#adminmenu').height();
	 if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
	 {
		 $newheight = $admin_menu_height - 180;
		 $tab.css('min-height',$newheight);
	 }

});
