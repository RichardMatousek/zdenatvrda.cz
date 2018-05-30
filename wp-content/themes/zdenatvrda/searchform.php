<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
    <fieldset>
        <input type="text" name="s" id="s" value="<?php _e('search', 'theme') ?>" 
        onfocus="if(this.value=='<?php _e('search', 'theme') ?>')this.value='';"  
        onblur="if(this.value=='')this.value='<?php _e('search', 'theme') ?>';" />
        <input type="submit" name="submit" value="Search" id="s-submit">
    </fieldset>
</form>