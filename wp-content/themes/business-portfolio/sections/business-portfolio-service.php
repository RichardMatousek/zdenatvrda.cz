<?php if(get_theme_mod('business_portfolio_service_section_enable')): ?>		
		<!-- Start Service -->
		<section id="service" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 fadeIn">
						<div class="section-title center">
							<?php
								$service_title = get_theme_mod('business_portfolio_service_page_title');
								$service_icon = get_theme_mod('business_portfolio_service_icon_title');
								$queried_post = get_post($service_title);
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
  						
		                  $service[1] = get_theme_mod('business_portfolio_service_page_1');
		                  $service[2] = get_theme_mod('business_portfolio_service_page_2');
		                  $service[3] = get_theme_mod('business_portfolio_service_page_3');
		                  $service[4] = get_theme_mod('business_portfolio_service_page_4');
		                  $serviceicon[1] = get_theme_mod('business_portfolio_service_icon_1');
		                  $serviceicon[2] = get_theme_mod('business_portfolio_service_icon_2');
		                  $serviceicon[3] = get_theme_mod('business_portfolio_service_icon_3');
		                  $serviceicon[4] = get_theme_mod('business_portfolio_service_icon_4');


	                      $args = array (
	                          'post_type' => 'page',
	                          'post_per_page' => 4,
	                          'post__in'         => $service,
	                          'orderby'           =>'post__in',
	                        );

	                      $serviceloop = new WP_Query($args);

	                      
	                      if ($serviceloop->have_posts()) :  while ($serviceloop->have_posts()) : $serviceloop->the_post(); ?>
							<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
								<!-- Single Service -->
								<div class="single-service active">
									<i class="<?php echo esc_attr($serviceicon[$i]); ?>"></i>
									<h2><?php the_title(); ?></h2>
									<?php the_excerpt(); ?>
								</div>
								<!-- End Single Service -->
							</div>
					<?php $i=$i+1;?> 
			          <?php  endwhile; 
			          	wp_reset_postdata();
					endif; ?>
				</div>
			</div>
		</section>
		<!--/ End Service -->
<?php endif; ?>
		