<!-- Start Testimonials -->
<?php if(get_theme_mod('business_portfolio_testimonial_section_enable')): ?>
		<section id="testimonial" class="section wow fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
						<div class="section-title center">
							<h2><?php echo esc_html(get_theme_mod( 'business_portfolio_testimonial_title' ) );?></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="testimonial-carousel">	
						<!-- Single Testimonial -->
						<?php
  						$i=1;
  						for($k=1;$k<11;$k++){
			                  $testimonial[$i] = get_theme_mod('business_portfolio_testimonial_page_'.$k);    
			                  $testimonialposition[$i] = get_theme_mod('business_portfolio_testimonial_position_'.$k);
			                  $i=$i+1;     
		              		}
	                      $args = array (
	                          'post_type' => 'page',
	                          'posts_per_page' => $i,
	                          'post__in'      => $testimonial,
	                          'orderby'        =>'post__in',
	                        );
	                      $testimonialloop = new WP_Query($args);
	                      if ($testimonialloop->have_posts()) :  while ($testimonialloop->have_posts()) : $testimonialloop->the_post(); $k=1; //echo "test";die();?>
							<div class="single-testimonial">
								<div class="testimonial-content">
									<?php the_content(); ?>
								</div>
								<div class="testimonial-info">
									<div class="img">
										<span class="arrow"></span>
										<?php if(has_post_thumbnail()): ?>
										<?php the_post_thumbnail('business-portfolio-testimonial-thumb', array('class' => 'img-circle')); ?> 
										<?php endif; ?>
									</div>
									<h6><?php the_title(); ?><span><?php echo esc_html($testimonialposition[$k]); ?></span></h6>
								</div>			
							</div>
							 
							<!--/ End Single Testimonial -->
							<?php  $k=$k+1; endwhile;
						              wp_reset_postdata();  
						            endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php endif; ?>
<!--/ End Testimonial -->
