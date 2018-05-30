<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tar
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<!-- unique body class -->
<body <?php body_class(); ?>>


<!-- Accessibility -->
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tar' ); ?></a>

<div class="clearfix"></div>
	<header id="masthead" class="site-header" role="banner">

		<!-- Site Name & Logo -->
		<div class="site-branding">

			    <div class="site-logo">
			    
					<?php the_custom_logo(); ?>
			    	 
				</div>
		
				<div class="site-name">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name', 'tar' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description', 'tar' ); ?></p>
				</div>
				
		</div><!-- .site-branding -->

		<!-- Site Navigation -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
		
			<button href="#sidr" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'tar' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

		</nav><!-- #site-navigation -->
	
	</header><!-- #masthead -->
<div class="fixed-nav-hack"></div>
<div id="content" class="site-content">