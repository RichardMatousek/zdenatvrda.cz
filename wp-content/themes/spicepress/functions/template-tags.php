<?php
if ( ! function_exists( 'spicepress_blog_meta_content' ) ) :
function spicepress_blog_meta_content()
{ 
	$blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
	
	if( $blog_meta_section_enable == true ) { ?>
	<div class="entry-meta">
		<span class="entry-date">
			<a href="<?php echo get_month_link(get_post_time('Y'),get_post_time('m')); ?>"><time datetime=""><?php echo get_the_date('M j, Y'); ?></time></a>
		</span>
	</div>
<?php } 
}
endif;

if ( ! function_exists( 'spicepress_blog_category_content' ) ) :
function spicepress_blog_category_content()
{
	$blog_meta_section_enable = get_theme_mod('blog_meta_section_enable',true);
	
	if( $blog_meta_section_enable == true ) {

?>
<div class="entry-meta">
	<span class="author"><?php _e('By','spicepress');?> <a rel="tag" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php echo get_the_author();?></a>
	
	</span>
	<?php 	
	$cat_list = get_the_category_list();
		if(!empty($cat_list)) { ?>
	<span class="cat-links"><?php _e('in','spicepress');?><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></span>
	<?php } 
	    $tag_list = get_the_tag_list();
		if(!empty($tag_list)) { ?>
				<span class="tag-links"><?php _e('Tag','spicepress');?> <?php the_tags('', ', ', ''); ?></span>
				<?php } ?>

</div>	 
<?php } } endif;
// avator class
function spicepress_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='img-responsive img-circle", $class);
    return $class;
}
add_filter('get_avatar','spicepress_gravatar_class');


// spicepress author meta
function spicepress_author_meta()
{ ?>
<article class="blog-author wow fadeInDown animated" data-wow-delay="0.4s">
	<div class="media">
		<div class="pull-left">
			<?php echo get_avatar( get_the_author_meta('ID'), 200); ?>
		</div>
		<div class="media-body">
			<h6><?php the_author_link(); ?></h6>
			<p><?php the_author_meta( 'description' ); ?></p>
			<ul class="blog-author-social">
			    <?php $facebook_profile = get_the_author_meta( 'facebook_profile' ); if ( $facebook_profile && $facebook_profile != '' ): ?>
				<li class="facebook"><a href="<?php echo esc_url($facebook_profile); ?>"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php $linkedin_profile = get_the_author_meta( 'linkedin_profile' ); if ( $linkedin_profile && $linkedin_profile != '' ): ?>
				<li class="linkedin"><a href="<?php echo esc_url($linkedin_profile); ?>"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php $twitter_profile = get_the_author_meta( 'twitter_profile' ); if ( $twitter_profile && $twitter_profile != '' ): ?>
				<li class="twitter"><a href="<?php echo esc_url($twitter_profile); ?>"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				<?php $google_profile = get_the_author_meta( 'google_profile' ); if ( $google_profile && $google_profile != '' ): ?>
				<li class="googleplus"><a href="<?php echo esc_url($google_profile); ?>"><i class="fa fa-google-plus"></i></a></li>
				<?php endif; ?>
		   </ul>
		</div>
	</div>	
</article>
<?php }

// author profile data
function spicepress_author_social_icons( $contactmethods ) {
		$contactmethods['facebook_profile'] = 'Facebook Profile URL';
		$contactmethods['twitter_profile'] = 'Twitter Profile URL';
		$contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
		$contactmethods['google_profile'] = 'Google Profile URL';
		return $contactmethods;
	}
add_filter( 'user_contactmethods', 'spicepress_author_social_icons', 10, 1);

// blogs,pages and archive page title
function spicepress_archive_page_title(){
	if( is_archive() )
	{
		$archive_text = get_theme_mod('archive_prefix','Archive');
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		if ( is_day() ) :
		
		  printf( __( '%1$s %2$s', 'spicepress' ), $archive_text, get_the_date() );
		  
        elseif ( is_month() ) :
		
		  printf( __( '%1$s %2$s', 'spicepress' ), $archive_text, get_the_date( 'F Y' ) );
		  
        elseif ( is_year() ) :
		
		  printf( __( '%1$s %2$s', 'spicepress' ), $archive_text, get_the_date( 'Y' ) );
		  
        elseif( is_category() ):
		
			$category_text = get_theme_mod('category_prefix',__('Category','spicepress'));
			
			printf( __( '%1$s %2$s', 'spicepress' ), $category_text, single_cat_title( '', false ) );
			
		elseif( is_author() ):
			
			$author_text = get_theme_mod('author_prefix',__('All posts by','spicepress'));
		
			printf( __( '%1$s %2$s', 'spicepress' ), $author_text, get_the_author() );
			
		elseif( is_tag() ):
			
			$tag_text = get_theme_mod('tag_prefix',__('Tag','spicepress'));
			
			printf( __( '%1$s %2$s', 'spicepress' ), $tag_text, single_tag_title( '', false ) );
			
		 elseif( is_shop() ):
			
		$shop_text = get_theme_mod('shop_prefix',__('Shop','spicepress'));
			
		printf( __( '%1$s %2$s', 'spicepress' ), $shop_text, single_tag_title( '', false ));
			
        elseif( is_archive() ): 
		the_archive_title( '<h1>', '</h1>' ); 
		
		endif;
		

		echo '</h1></div>';
	}
	elseif( is_search() )
	{
		$search_text = get_theme_mod('search_prefix',__('Search results for','spicepress'));
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		printf( __( '%1$s %2$s', 'spicepress' ), $search_text, get_search_query() );
		
		echo '</h1></div>';
	}
	elseif( is_404() )
	{
		$breadcrumbs_text = get_theme_mod('404_prefix',__('404','spicepress'));
		
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>';
		
		printf( __( '%1$s ', 'spicepress' ) , $breadcrumbs_text );
		
		echo '</h1></div>';
	}
	else
	{
		echo '<div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>'.get_the_title().'</h1></div>';
	}
}

function spicepress_excerpt_more( $more ) {
	return '</div><div class="blog-btn"><a href="' . esc_url(get_permalink()) . '" class="home-blog-btn">'.__('Read More','spicepress').'</a>';
}
add_filter( 'excerpt_more', 'spicepress_excerpt_more' );

// spicepress post navigation
function spicepress_post_nav()
{
	global $post;
	echo '<div style="text-align:center;">';
	posts_nav_link( ' &#183; ', __('previous page','spicepress'), __('next page','spicepress') );
	echo '</div>';
}

add_filter( 'widget_text', 'do_shortcode' );



//Hide Title of woocommerce shop page
add_filter( 'woocommerce_show_page_title' , 'spicepress_woo_hide_page_title' );
function spicepress_woo_hide_page_title() {
	
	return false;
	
}

if(!function_exists( 'spicepress_image_thumbnail')) : 					
		function spicepress_image_thumbnail($preset,$class){
		if(has_post_thumbnail()){  $defalt_arg =array('class' => $class);
	the_post_thumbnail($preset, $defalt_arg); } } 
endif;

// Custom header function
if ( ! function_exists( 'spicepress_header_style' ) ) :

function spicepress_header_style() {
    $text_color = get_header_textcolor();

    // If no custom color for text is set, let's bail.
    if ( display_header_text() && $text_color === get_theme_support( 'custom-header', 'default-text-color' ) )
        return;
    ?>
    <style type="text/css" id="spicepress-header-css">
        <?php
        // Has the text been hidden?
        if ( ! display_header_text() ) :
    ?>
        .site-title,
        .site-description {
            clip: rect(1px 1px 1px 1px); /* IE7 */
            clip: rect(1px, 1px, 1px, 1px);
            position: absolute;
        }
    <?php
        // If the user has set a custom color for the text, use that.
        elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
    ?>
        .site-title a {
            color: #<?php echo esc_attr( $text_color ); ?>;
        }
    <?php endif; ?>
    </style>
    <?php
}
endif;