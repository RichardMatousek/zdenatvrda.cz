<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business-portfolio
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Start Header -->
<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-12 col-xs-12">
					<!-- Logo -->
					<div class="logo site-title">
						<?php
						if(has_custom_logo()):?>
							<?php echo esc_html(the_custom_logo());?>
						<?php else: ?>		
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo-title"><?php esc_html(bloginfo('name'));?></a>
						<?php if( get_theme_mod('business_portfolio_sitetag_enable')):?><h5 class="site-description"><?php esc_html(bloginfo('description'));?></h5><?php endif;?>
					<?php endif; ?>
					</div>
					<!--/ End Logo -->
				</div>
				<div class="col-md-10 col-sm-12 col-xs-12">
					<div class="nav-area">
						<!-- Main Menu -->
						<nav class="mainmenu">
							<div class="mobile-nav"></div>
							<div class="collapse navbar-collapse">
							<?php
							if ( has_nav_menu( 'menu-1' ) ) :
								wp_nav_menu( array(
							    'theme_location'    => 'menu-1',
							    'depth'             => 10,
							    'container_class'   => 'collapse navbar-collapse',
							    'container_id'      => 'bs-example-navbar-collapse-1',
							    'menu_class'        => 'nav navbar-nav ml-auto',
							    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		    					'walker'            => new wp_bootstrap_navwalker(),
				            ));
				        ?>
				        <?php else : ?>
                			<ul class="nav navbar-nav menu">
                    			<li class="menu-item">
                   					 <a href="<?php echo esc_url(admin_url( 'nav-menus.php' )); ?> "> <?php esc_html_e('Add a menu','business-portfolio'); ?></a>
                				</li>
            				</ul>

            			<?php endif; ?>
							</div>
						</nav>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
</header>
<!--/ End Header -->
