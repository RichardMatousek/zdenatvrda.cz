<?php if(get_theme_mod('business_portfolio_about_section_enable')): ?>

<!-- Start About Me -->
		<section id="about-us" class="section">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title center">
							<?php
								$about_title = get_theme_mod('business_portfolio_about_page_title');
								
								$queried_post = get_post($about_title);
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
					$j=1;
	                  $about[1] = get_theme_mod('business_portfolio_about_page_1');
	                  $about[2] = get_theme_mod('business_portfolio_about_page_2');
	                  $about[3] = get_theme_mod('business_portfolio_about_page_3');
	                
                      $args = array (
                          'post_type' => 'page',
                          'post_per_page' => 4,
                          'post__in'         => $about,
                          'orderby'           =>'post__in',
                        );

                      $aboutloop = new WP_Query($args);
                      ?>

					<!-- About Image -->
					
					<div class="col-md-5 col-sm-12 col-xs-12 wow slideInLeft">
						<div class="about-main">
							<div class="about-image">
							<?php echo get_the_post_thumbnail($about_title,'business_portfolio_about_us_thumb');?>
							</div>
						</div>
					</div>
				
					<!-- /End About Image -->
					<div class="col-md-7 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1s">
						<!-- About tab-->
						<div class="tabs-main">
							<!-- Tab Menu -->
							<ul class="nav nav-tabs" role="tablist">
								<?php if ($aboutloop->have_posts()) :  while ($aboutloop->have_posts()) : $aboutloop->the_post(); ?>
								<li role="presentation" <?php if($i==1): echo 'class="active"'; ?><?php endif; ?>><a href="#tab_<?php echo esc_attr($i); ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a></li>
								<?php $i=$i+1;?> 
						          <?php  endwhile; 
						            endif; ?>
							</ul>
							<!--/ End Tab Menu -->
							<!-- Tab Content -->
							<div class="tab-content">
								<?php if($aboutloop->have_posts()) :  while ($aboutloop->have_posts()) : $aboutloop->the_post(); ?>
									<div role="tabpanel" class="tab-pane fade in <?php if($j==1): echo 'active'; ?><?php endif; ?>" id="tab_<?php echo esc_attr($j); ?>">
									<?php the_content();?>
									
									
								</div>
									<?php $j=$j+1;?> 
						          <?php  endwhile;
						              wp_reset_postdata();  
						            endif; ?>
							</div>
							<!--/ End Tab Content -->
						<!--/ End About Tab -->
					</div>
				</div>
			</div>
		</section>		
		<!--/ End About Me -->	


<?php endif; ?>
		

