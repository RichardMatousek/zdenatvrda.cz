<?php
/**
 * business-portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-portfolio
 */

if ( ! function_exists( 'business_portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on business-portfolio, use a find and replace
		 * to change 'business-portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'business-portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('business_portfolio_slider_thumb',1200,800,true);
		add_image_size('business_portfolio_about_us_thumb',363,461,true);
		add_image_size('business_portfolio_common_image_thumb',250,250,true);
		add_image_size('business_portfolio_counter_image_thumb',1600,1000,true);
		add_image_size('business_portfolio_client_thumb',190,32,true);
		add_image_size( 'business-portfolio-client-thumb', 720,  432, true );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => __( 'Primary Menu', 'business-portfolio' ),
			'menu-2' => __( 'Footer Menu', 'business-portfolio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'business_portfolio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'business_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function business_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'business_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'business_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function business_portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'business-portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here.', 'business-portfolio' ),
		'before_widget' => '<div id="%1$s" class="single-sidebar widget %2$s form">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Google map iframe', 'business-portfolio' ),
		'id'            => 'google-map',
		'description'   => __( 'Add widgets here.', 'business-portfolio' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'business_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function business_portfolio_scripts() {

	// Google Font
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900');

	// Load font Awesome css
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri() .'/assets/css/font-awesome.css', array(), '4.7.0' );

	// Load Animate css
	wp_enqueue_style( 'animate-css', get_template_directory_uri() .'/assets/css/animate.css');

	// Load Slick Navigation css
	wp_enqueue_style( 'slicknav-css', get_template_directory_uri() .'/assets/css/slicknav.css', array(), '1.0.10' );
	
	//owl theme
	wp_enqueue_style( 'owl-theme-css', get_template_directory_uri() .'/assets/css/owl.theme.default.css', array(), '2.2.1' );

	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() .'/assets/css/owl.carousel.css', array(), '2.2.1' );

	// Magnific Popup Css
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() .'/assets/css/magnific-popup.css');

	// Load font bootstrap css
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/assets/css/bootstrap.css', array(), '3.3.7' );

	// business-portfolio Style css
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );

	// Deafult css
	wp_enqueue_style( 'default-css', get_template_directory_uri() .'/assets/css/default.css');
	
	// Responsive css
	wp_enqueue_style( 'responsive-css', get_template_directory_uri() .'/assets/css/responsive.css', array(), '1.1.0' );

	// Skil Green css
	wp_enqueue_style( 'skin-green-css', get_template_directory_uri() .'/assets/css/skin/green.css', array(), '1.1.0' );

	// Bootstrap  JS
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '3.3.7', true );

	// Jquery Appear JS
	wp_enqueue_script( 'business-portfolio-jquery-appear-js', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), '', true );

	// Jquery Counterup JS
	wp_enqueue_script( 'jquery-counterup-js', get_template_directory_uri() . '/assets/js/jquery.counterup.js', array('jquery'), '1.0.0', true );

	// Jquery Magnific Popup JS
	wp_enqueue_script( 'jquery-magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific.popup.js', array('jquery'), '1.1.0', true );

	// Nav Js
	wp_enqueue_script( 'nav-js', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '3.0.0', true );

	// Jquery Scroll Up JS
	wp_enqueue_script( 'jquery-scroll-up-js', get_template_directory_uri() . '/assets/js/jquery.scrollUp.js', array('jquery'), '2.4.1', true );

	// Jquery slicknav JS
	wp_enqueue_script( 'slicknav-js', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '1.0.10', true );
	
	// Modernizr JS
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), '2.8.3', true );

	// Owl Carousel JS
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '2.2.1', true );

	// Typed JS
	wp_enqueue_script( 'typed-js', get_template_directory_uri() . '/assets/js/typed.js', array('jquery'), '', true );

	// Waypoint JS
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/js/waypoints.js', array('jquery'), '1.6.2', true );

	// Wow JS
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '1.1.2', true );

	// Jquery ytplayer JS
	wp_enqueue_script( 'yt-player-js', get_template_directory_uri() . '/assets/js/ytplayer.js', array('jquery'), '', true );
	
	// Jquery ytplayer JS
	wp_enqueue_script( 'jquery-match-height', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array('jquery'), '', true );
	
	// Custom JS
	wp_enqueue_script( 'business-portfolio-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'business_portfolio_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
*Bootstrap Navwalker File
*/
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/*
*Breadcrumb function file
*/
require get_template_directory() . '/inc/breadcrumb.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
* Custom Comment template
*/
function business_portfolio_comment_list_format($comment,$args,$depth) {
    ?>
	<div class="single-comments <?php comment_class(); ?>"  id="li-comment-<?php comment_ID() ?>">
		<div class="main">
			<div class="head">
				  <?php echo get_avatar( $comment, 100 ); ?>
				  <?php comment_author(); ?>
			</div>
			<div class="body">
				<p class="meta"><?php  echo get_comment_date();?></p>
				 <?php if ($comment->comment_approved == '0') : ?>
	                <em><?php esc_html_e('Your comment is awaiting moderation.','business-portfolio') ?></em><br />
	            <?php endif; ?>
				<?php comment_text(); ?>
				<a href="#">replay</a>
			</div>
		</div>
	</div>		
<?php } 

/*
* Bootstrap pagination function
*/
 
function business_portfolio_bs_pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2) + 1;  
     $paged = get_query_var( 'paged');
    
     if(empty($paged)) $paged = 1;
     if($pages == '')
     {
         global $wp_query; 
		 $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
    {
       	echo '<ul class="pagination">';
         if($paged > 1 ) echo "<li class='prev'><a href='".esc_url(get_pagenum_link($paged - 1))."'>&lsaquo;<span class='fa fa-angle-left'></span></a></li>";
         for ($i=1; $i <= $pages; $i++)
         {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                echo ($paged == $i)? "<li class=\"active\"><a href='".esc_url(get_pagenum_link($i))."'>".esc_html($i)."</a></li>":"<li><a href='".esc_url(get_pagenum_link($i))."'>".esc_html($i)."</a></li>";
             }
         }
 
         if ($paged < $pages ) echo "<li class='next'><a href=\"".esc_url(get_pagenum_link($paged + 1))."\"><span class='fa fa-angle-right'></span></a></li>";  
         echo "</ul>";
    }
}

add_filter( 'comment_form_default_fields', 'business_portfolio_bootstrap_comment_form_fields' );

function business_portfolio_bootstrap_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name','business-portfolio' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email','business-portfolio' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website','business-portfolio' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );
    
    return $fields;
}
add_filter( 'comment_form_defaults', 'business_portfolio_bootstrap_comment_form' );

function business_portfolio_bootstrap_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . __( 'Comment', 'business-portfolio' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default';
    
    return $args;
}

function business_portfolio_testimonials_backgroud_image(){?>
<style>
#testimonial{
	background-image:url('<?php echo esc_url(get_theme_mod('business_portfolio_testimonial_background')) ?>');
}
</style>
<?php }
add_action('wp_head','business_portfolio_testimonials_backgroud_image');
?>


