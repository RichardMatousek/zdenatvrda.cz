<!-- Why Choose Us -->
<?php if(get_theme_mod('business_portfolio_why_choose_section_enable')==1):?>
		<div id="why-choose" class="section">
			
			<div class="why-image">
				<?php if(get_theme_mod('business_portfolio_why_choose_youtube_link')):?>
				<div class="video">
					<a href="<?php echo esc_url(get_theme_mod('business_portfolio_why_choose_youtube_link'));?>" class="video-play mfp-iframe wow zoomIn"><i class="fa fa-play"></i></a>
				</div>
				<?php endif;?>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 pull-right">
						<?php
						$why_choose_title = get_theme_mod('business_portfolio_why_choose_page_title');
						$queried_post = get_post($why_choose_title);
						?>
						<h2><?php echo esc_html($queried_post->post_title); ?></h2>
						<p><?php echo esc_html($queried_post->post_content); ?></p>
						<?php wp_reset_postdata(); ?>
						<div class="row">
							<!-- Single Choose -->
							<?php 
							for($i=1;$i<5;$i++) {
							$why_choose_numb[$i]=get_theme_mod('business_portfolio_why_choose_count_'.$i);
							$why_choose_field[$i]=get_theme_mod('business_portfolio_why_choose_icon_'.$i);
							}
							 ?>
						 	<?php for($i=1;$i<=4; $i++) {  ?>
							<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
								<div class="single-choose">
									<i class="<?php echo esc_attr($why_choose_field[$i]);?>"></i>
									<h4><?php echo esc_html($why_choose_numb[$i]); ?></h4>
								</div>
							</div>
							<!-- End Single Choose -->	
							<?php } ?>
						</div>
					</div>					
				</div>
			</div>
		</div>	
		<!--/ End Why Choose Us -->
<?php endif; ?>