<!-- Newslatter -->
<?php if(get_theme_mod('business_portfolio_news_letter_section_enable')): ?>
<div id="newslatter" class="wow fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<?php
					$news_letter_title_id = get_theme_mod('business_portfolio_news_letter_page_title');
					$queried_post = get_post($news_letter_title_id);
					?>
					<h2><?php echo esc_html($queried_post->post_title); ?></h2>
					<p><?php echo esc_html($queried_post->post_content); ?></p>
					<?php wp_reset_postdata(); ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="newslatter">
					<form>
						<?php if (get_theme_mod('business_portfolio_news_letter_form_code')):
					  echo do_shortcode(get_theme_mod('business_portfolio_news_letter_form_code')); 
					endif; ?>		
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<!--/ End Newslatter -->