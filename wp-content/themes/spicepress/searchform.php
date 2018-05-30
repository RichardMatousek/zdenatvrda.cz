<form method="get" id="searchform" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	
		<label><input type="search" class="search-field" placeholder="<?php echo esc_attr_e( 'Search here', 'spicepress' ); ?>" value="<?php echo get_search_query(); ?>" name="s" id="s"/></label>
		<label><input type="submit" class="search-submit" value="Search"></label>
	
</form>