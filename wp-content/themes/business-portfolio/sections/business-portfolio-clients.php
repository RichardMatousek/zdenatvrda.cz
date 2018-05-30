<?php if(get_theme_mod('business_portfolio_clients_section_enable')): ?>
<!-- Start Clients -->
	<div id="clients" class="section wow fadeIn">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="clients-carousel">
						<?php
	                                $clients_catId = get_theme_mod( 'business_portfolio_clients_category_id','1' );
	                                $client_number = get_theme_mod( 'business_portfolio_client_number','5' );
	                  			
	                                $args = array(
	                                'post_type' => 'post',
	                                'posts_per_page' => $client_number,
	                                'post_status' => 'publish',
	                                'paged' => 1,
	                                'cat' => $clients_catId,
	                               
	                            );
	                            $clientsloop = new WP_Query($args);
	                            if ( $clientsloop->have_posts() ) :
	                                while ($clientsloop->have_posts()) : $clientsloop->the_post(); 
	                                	$clients_img_url = get_the_post_thumbnail_url($post->ID, 'full');?>
	                          <?php if(has_post_thumbnail()): ?>
						<!-- Single Clients -->
						<div class="single-client">
								<a href="<?php esc_url(the_permalink()); ?>" target="_blank"><?php the_post_thumbnail('business_portfolio_client_thumb'); ?></a>
							</div>
						<?php endif; ?>
							<!--/ End Single Clients -->
							<?php endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--/ End Clients -->
<?php endif; ?>
