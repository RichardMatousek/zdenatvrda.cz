<!-- Contact Us -->
<?php if(get_theme_mod('business_portfolio_contact_section_enable')): ?>
<section id="contact" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
				<div class="section-title center">
					<?php
					$contact_title_id = get_theme_mod('business_portfolio_contact_page_title');
					$queried_post = get_post($contact_title_id);
					?>
					<h2><?php echo esc_html($queried_post->post_title); ?></h2>
					<p><?php echo esc_html($queried_post->post_content); ?></p>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		
		<div class="row">
			<!-- Contact Form -->
			<div class="col-md-5 col-sm-5 col-xs-12">
				<form class="form" method="post">
					<?php if (get_theme_mod('business_portfolio_contact_form_code')):
					  echo do_shortcode(get_theme_mod('business_portfolio_contact_form_code')); 
					endif; ?>		
				</form>
			</div>
			<!--/ End Contact Form -->
			<div class="col-md-7 col-sm-7 col-xs-12">
				<?php dynamic_sidebar( 'google-map' );?>
			</div>
	</div>
</section>
<!--/ End Contact Us -->
<?php endif; ?>