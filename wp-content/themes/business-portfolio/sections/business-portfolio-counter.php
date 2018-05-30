<!-- Start Statics -->
<?php if(get_theme_mod('business_portfolio_counter_section_enable')==1): ?>
<section id="statics" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="row">
					<div class="statics">	
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php
							$counter_title = get_theme_mod('business_portfolio_counter_page_title');
							$queried_post = get_post($counter_title);
							?>
							<h2><?php echo esc_html($queried_post->post_title); ?></h2>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
						<?php 
						for($i=1;$i<5;$i++) {
						$counter_numb[$i]=get_theme_mod('business_portfolio_counter_count_'.$i);
						$counter_field[$i]=get_theme_mod('business_portfolio_counter_field_'.$i);
						}
						 ?>
					 	<?php for($i=1;$i<=4; $i++) {  ?>
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
							<!-- Static Single -->
							<div class="static-single">
								<div class="number"><span class="counter"><?php echo esc_attr($counter_numb[$i]); ?></span></div>
								<p><?php echo esc_attr($counter_field[$i]);?></p>
							</div>
						</div>
						<!-- End Single -->	
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $counter_img_url = get_the_post_thumbnail_url($counter_title,'business_portfolio_counter_image_thumb');?>
	<div class="static-image wow fadeIn" style="background: url(<?php echo esc_url($counter_img_url);?>) no-repeat scroll center center / cover"></div>
</section>	
<?php endif; ?>
<!--/ End Statics -->
