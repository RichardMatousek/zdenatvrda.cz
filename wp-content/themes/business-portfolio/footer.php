<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package business-portfolio
 */

?>
<!-- Start Footer -->
<footer id="footer" class="wow fadeIn">
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 ">
					<!-- Logo -->
					<div class="logo">
						<a href="<?php echo esc_url(home_url());?>"><?php bloginfo('name');?></a>
					</div>	
					<!--/ End Logo -->
					<!-- Social -->
					<ul class="social">
			            <?php if(get_theme_mod('business_portfolio_facebook_url')): ?>
						<li><a href="<?php echo esc_url(get_theme_mod('business_portfolio_facebook_url')); ?>"><i class="fa fa-facebook"></i></a></li>
	                    <?php endif; ?>
						<?php if(get_theme_mod('business_portfolio_twitter_url')): ?>
						<li><a href="<?php echo esc_url(get_theme_mod('business_portfolio_twitter_url')); ?>"><i class="fa fa-twitter"></i></a></li>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('business_portfolio_linkedin_url')): ?>
						<li><a href="<?php echo esc_url(get_theme_mod('business_portfolio_linkedin_url')); ?>"><i class="fa fa-linkedin"></i></a></li>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('business_portfolio_youtube_url')): ?>
						<li><a href="<?php echo esc_url(get_theme_mod('business_portfolio_youtube_url')); ?>"><i class="fa fa-youtube"></i></a></li>
	                    <?php endif; ?>
	                    <?php if(get_theme_mod('business_portfolio_pinterest_url')): ?>
						<li><a href="<?php echo esc_url(get_theme_mod('business_portfolio_pinterest_url')); ?>"><i class="fa fa-pinterest"></i></a></li>
	                    <?php endif; ?>
					</ul>
				<!--/ End Social -->
				<!-- Menu -->
				<?php
					if ( has_nav_menu( 'menu-2' ) ) :
							wp_nav_menu( array(
						    'theme_location'    => 'menu-2',
						    'depth'             => 1,
						    'menu_class'        => 'nav',
			            ));
					endif;
				?>	
				<!--/ End Menu -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Footer Top -->
	
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="text">
						<p>
						<?php esc_html_e('Copyright','business-portfolio');  echo  esc_html(date('Y'));?><span><i class="fa fa-heart"></i></span>  <?php esc_html(bloginfo('name')); ?>
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ End Copyright -->
</footer>
<!--/ End Footer -->
<?php wp_footer(); ?>

</body>
</html>
