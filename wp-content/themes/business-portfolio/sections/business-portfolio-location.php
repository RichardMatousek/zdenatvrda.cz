<?php if(get_theme_mod('business_portfolio_location_section_enable')): ?>	
<!-- Location -->
<section id="location" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
				<div class="section-title center">
					<?php
						$location_title = get_theme_mod('business_portfolio_location_page_title');
						$location_icon = get_theme_mod('business_portfolio_location_icon_title');
						$queried_post = get_post($location_title);
					?>
					<h2><?php echo esc_html($queried_post->post_title); ?></h2>
					<p><?php echo esc_html($queried_post->post_content); ?></p>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
  						$i=1;
  						
		                  $location[1] = get_theme_mod('business_portfolio_location_page_1');
		                  $location[2] = get_theme_mod('business_portfolio_location_page_2');
		                  $location[3] = get_theme_mod('business_portfolio_location_page_3');
		               
		                  $locationicon[1] = get_theme_mod('business_portfolio_location_icon_1');
		                  $locationicon[2] = get_theme_mod('business_portfolio_location_icon_2');
		                  $locationicon[3] = get_theme_mod('business_portfolio_location_icon_3');
		         

	                      $args = array (
	                          'post_type' => 'page',
	                          'post_per_page' => 3,
	                          'post__in'         => $location,
	                          'orderby'           =>'post__in',
	                        );

	                      $locationloop = new WP_Query($args);

	                      
	                      if ($locationloop->have_posts()) :  while ($locationloop->have_posts()) : $locationloop->the_post(); ?>
			<div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
				<!-- Single Address -->
				<div class="single-address">
					<i class="<?php echo esc_attr($locationicon[$i]); ?>"></i>
					<h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
				</div>
				<!--/ End Single Address -->
			</div>
			<?php $i=$i+1;?> 
	        <?php  endwhile; 
	         wp_reset_postdata();
			endif; ?>
		</div>
	</div>
</section>
<!--/ End Location -->
<?php endif; ?>