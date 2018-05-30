jQuery(document).ready(function() {
    var spicepress_aboutpage = spicepressLiteWelcomeScreenCustomizerObject.aboutpage;
    var spicepress_nr_actions_required = spicepressLiteWelcomeScreenCustomizerObject.nr_actions_required;

    /* Number of required actions */
    if ((typeof spicepress_aboutpage !== 'undefined') && (typeof spicepress_nr_actions_required !== 'undefined') && (spicepress_nr_actions_required != '0')) {
        jQuery('#accordion-section-themes .accordion-section-title').append('<a href="' + spicepress_aboutpage + '"><span class="spicepress-actions-count">' + spicepress_nr_actions_required + '</span></a>');
    }

    /* Upsell in Customizer (Link to Welcome page) */
    if ( !jQuery( ".spicepress-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('<li class="accordion-section spicepress-upsells">');
    }
    if (typeof spicepress_aboutpage !== 'undefined') {
        jQuery('.spicepress-upsells').append('<a style="width: 80%; margin: 5px auto 15px auto; display: block; text-align: center;" href="' + spicepress_aboutpage + '" class="button" target="_blank">{themeinfo}</a>'.replace('{themeinfo}', spicepressLiteWelcomeScreenCustomizerObject.themeinfo));
    }
    if ( !jQuery( ".spicepress-upsells" ).length ) {
        jQuery('#customize-theme-controls > ul').prepend('</li>');
    }
});