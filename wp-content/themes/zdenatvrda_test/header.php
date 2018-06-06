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
<title>Zdena Tvrdá - osobní fitness trenérka</title>
 
  <!-- RSS & Pingbacks -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> 
        RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<meta charset="UTF-8">
<meta name="description" content="Jmenuji se Mgr. Zdenka Tvrdá, vedu profesionální fitness kurzy pro ženy a pracuji jako osobní trenérka v Big One Fitness v Brně.">
<meta name="keywords" content="Zdenka Tvrdá, Zdena Tvrdá, Zdena Gottwaldová, Big One Fitness, Big One Brno, fitness">

<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="fancybox/jquery.fancybox.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="fancybox/jquery.fancybox.css">
 
<?php wp_head(); ?>  
 
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" 
   type="text/css" media="screen" />
 
  <!-- END head -->
</head>
 
<!-- BEGIN body -->
<body <?php body_class(); ?>>
 
<div id="menu">
    <div id="menuobsah">
      <div id="druhe-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu') ); ?>

      </div>
    </div>
</div>