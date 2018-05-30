<!DOCTYPE html>
<?php $options = get_option('basic'); ?>
<!-- BEGIN html -->
<html <?php language_attributes(); ?>>
 
<!-- BEGIN head -->
<head>
 
<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; 
        charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title -->
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
 
  <!-- RSS & Pingbacks -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> 
        RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
 
<?php wp_head(); ?>  
 
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" 
   type="text/css" media="screen" />
 
  <!-- END head -->
</head>
 
<!-- BEGIN body -->
<body <?php body_class(); ?>>
 
<div class="row-fluid">
  <div class="container">
    <div class="header">
      <h1><a href="<?php echo home_url( '/' ); ?>" 
        title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
         <?php bloginfo( 'name' ); ?></a></h1>
    <div id="site-description"><?php bloginfo( 'description' ); ?></div>  
    </div>
 
    <div class="header-menu">
          <?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
            <?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>
          <?php } else { ?>
                  <ul class="sf-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/?page_id=2">Sample Page</a></li>
                    <li><a href="/?p=1">Sample post</a></li>
                  </ul>
          <?php } ?>
    </div>
 
    <div class="row-fluid">