<?php

/**
 * Redirect to Getting Started page on theme activation
 */
function tar_redirect_on_activation() {
	global $pagenow;

	if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {

		wp_redirect( admin_url( "themes.php?page=tar-getting-started" ) );

	}
}
add_action( 'admin_init', 'tar_redirect_on_activation' );

function tar_start_load_admin_scripts() {

	// Load styles only on our page
	global $pagenow;
	if( 'themes.php' != $pagenow )
		return;

	wp_register_style( 'tar-getting-started', get_template_directory_uri() . '/inc/dashboard/tar-info-dashboard.css', false, '1.0.0' );
	wp_enqueue_style( 'tar-getting-started' );
}

add_action( 'admin_enqueue_scripts', 'tar_start_load_admin_scripts' );


/* Hook a menu under Appearance */
function tar_getting_started_menu() {
	add_theme_page(
		esc_attr__( 'Tar: Get Started', 'tar' ),
		esc_attr__( 'Tar: Get Started', 'tar' ),
		'manage_options',
		'tar-getting-started',
		'tar_getting_started'
	);
}

add_action( 'admin_menu', 'tar_getting_started_menu' );



/**
 * Theme Info Page
 */
function tar_getting_started() {

	// Theme info
	$theme = wp_get_theme( 'tar' );
?>

		<div class="wrap getting-started">
		<div class="getting-started__header">
		<div class="row">
			<div class="col-md-5 intro">
				<h2 class="head"><?php esc_html_e( 'Welcome to Tar', 'tar' ); ?></h2>
				<p class="head">Version: <?php echo $theme['Version'];?></p>
				<p class="intro__version head">
				<?php esc_html_e( 'Thank you for installing Tar! You can now build your own lightweight & blazing fast website within mintues.', 'tar' ); ?> 
				</p>

			<!-- <div class="club-discount"> 
				<p><strong> --><?php //esc_html_e( 'Exclusive 15% Discount!', 'tar' ); ?><!-- </strong></p> -->
				<!-- <p> --><?php
						//$themes_link = '<code><strong>15PERCENT</strong></code>';
						//printf( __( 'Use the code %s to get 15&#37; off when you purchase Tar Pro! For <strong>this month only</strong>', 'tar' ), $themes_link );
					?>
				<!-- </p>
			</div> 
			</div> -->

		<!-- 	<div class="col-md-7">
			<div class="dashboard__block block--pro">
				<h3>Why buy Tar pro</h3>
				<img src="<?php echo get_template_directory_uri() . '/assets/images/front-page-layouts.jpg'; ?>" alt="<?php esc_html_e( 'Why Upgrade To Tar Pro', 'tar' ); ?>" />
			</div>
			</div> -->
			<h3 class="dashboard__why_buy"><?php esc_attr_e('Why Upgrade To Tar Pro', 'tar'); ?></h3>
			<div class="col-md-12 text-block" style="padding-top: 2%;">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/front-page-layouts.jpg'; ?>" alt="<?php esc_html_e( 'Why Upgrade To Tar Pro', 'tar' ); ?>" />
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title"><?php esc_attr_e('Overall 30+ Beautiful Layouts', 'tar'); ?></h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar" target="_blank">Upgrade</a></span>
					<p><?php esc_attr_e('Beautiful layouts to create absolutely stunning websites', 'tar'); ?></p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li><?php esc_attr_e('No hassle! Spend less time building website', 'tar'); ?></li>
						<li>Check out the <a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar'); ?>">Tar Demo Templates</a></li>
					</ul>

					</div>
					</div>
			</div>
			</div>

			<div class="clearfix"></div>
			<div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/template.png'; ?>" alt="<?php esc_html_e( 'Lots of Templates', 'tar' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title"><?php esc_attr_e('Lots of Templates', 'tar'); ?></h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar" target="_blank">Upgrade</a></span>
					<p>Setup your website within mintues</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Say goodbye to complicated site setup</li>
						<li>Lots of templates at your fingertip</li>
					</ul>

					</div>
					</div>
			</div>
			</div>

			<div class="clearfix"></div>
			<div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
			<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/PC1.jpg'; ?>" alt="<?php esc_html_e( 'Plugin Compatibility', 'tar' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title">Popular Plugin Compatibility</h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar" target="_blank">Upgrade</a></span>
					<p>You can install & use plugins without conflict</p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li>Installed popular plugins will add extra functionality</li>
						<li>Say goodbye to plugin conflict</li>
					</ul>

					</div>
					</div>
			</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/customize.jpg'; ?>" alt="<?php esc_html_e( 'Lots of Customization Option', 'tar' ); ?>">
					</div>
					<div class="col-md-5 dashboard-upgrade-right">
					<h2 class="dashboard-upgrade-title"><?php esc_attr_e('Lots of Customization Option', 'tar' ); ?></h2>
					<span class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar" target="_blank">Upgrade</a></span>
					<p><?php esc_attr_e('With Tar Pro you get', 'tar' ); ?></p>
					<div class="dashboard-upgrade-benefit">
					<ul>
						<li><?php esc_attr_e('17 Shortcodes', 'tar' ); ?></li>
						<li><?php esc_attr_e('500+ Font Awesome Icons', 'tar' ); ?></li>
						<li><?php esc_attr_e('300+ Google Fonts', 'tar' ); ?></li>
						<li><?php esc_attr_e('Integrated SEO Schema Markup', 'tar' ); ?></li>
						<li><?php esc_attr_e('30+ overall layout', 'tar' ); ?></li>
						<li><?php esc_attr_e('Drag & Drop Frontpage Sections', 'tar' ); ?></li>
						<li><?php esc_attr_e('TinyMCE Buttons for 3 WP default Shortcode', 'tar' ); ?></li>
						<li><?php esc_attr_e('6 widget areas', 'tar' ); ?></li>
						<li><?php esc_attr_e('10 popular plugin compatibility', 'tar' ); ?></li>
					</ul>

					</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
			<div class="col-md-12 text-block no-bottom-margin">
				<div class="row">
					<div class="col-md-7 dashboard-upgrade-left">
						<h3 style="padding: 0% 5% 2%;text-align: center;font-size: 30px;"><?php esc_attr_e('What Customers Saying About Tar Pro', 'tar' ); ?></h3>
					<img style="width: 100%;" src="<?php echo get_template_directory_uri() . '/assets/images/tar-theme-reviews.jpg'; ?>" alt="<?php esc_html_e( 'Tar Theme Review  ', 'tar' ); ?>">
					</div>
					<div style="text-align: center;float: none;" class="">
					<h4 style="font-size: 20px;text-align: center;" class="dashboard-upgrade-title">*7 day Money back guarantee.</h4>
					<span  class="dashboard-upgrade-button"><a href="https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar" target="_blank">Upgrade</a></span>
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div><div class="dashboard_div_divider"></div>
		</div>
		</div>

			<div class="col-md-12 tar__upgrade-info-box no-top-margin">
			<div class="row flexify--center">
				<div class="col-md-7">
					<h2>Upgrade To Get The Most Out Of Tar</h2>
					<p>Stop paying for features you will never use. Build a beautiful & lightweight Website with Tar Pro. Upgrade now, comes with 7 refund policy.</p>
				</div>

				<div class="col-md-5 dashboard-cta-right">
					<a target="_blank" class="theme__cta--download--pro" href="<?php echo esc_url('https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar'); ?>">Upgrade Now</a>
					
				</div>
			</div>
			</div>



		<div class="dashboard__blocks">
			<div class="col-md-4">
				<h3>Get Support</h3>
				<ol>
					<li>Tar <a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar'); ?>">Documentation</a></li>
					<li>WordPress.org <a target="_blank" href="<?php echo esc_url('https://wordpress.org/support/theme/tar'); ?>">Support Forum</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/tar#buy_pro&utm_source=wporg&utm_medium=upsell&utm_campaign=tar'); ?>">Email Support</a></li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Getting Started</h3>
				<ol>
					<li>Start <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>">Customizing</a> your website</li>
					<li>Upgrade to Pro to unlock all features</li>
				</ol>
			</div>

			<div class="col-md-4">
				<h3>Theme Documentation</h3>
				<ol>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/how-to-setup-front-page/?utm_source=org&utm_medium=tartheme&utm_campaign=upsell_link'); ?>">How To Set up the Front Page</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/upgrading-to-tar-pro/?utm_source=org&utm_medium=tartheme&utm_campaign=upsell_link'); ?>">Upgrading To Tar Pro</a></li>
					<li><a target="_blank" href="<?php echo esc_url('https://asphaltthemes.com/docs/upgrading-to-tar-pro/upgrading-to-tar-pro/basic-site-settings/?utm_source=org&utm_medium=tartheme&utm_campaign=upsell_link'); ?>">Basic Site Settings</a></li>
				</ol>
			</div>
		</div>

		</div><!-- .getting-started -->

	<?php
}