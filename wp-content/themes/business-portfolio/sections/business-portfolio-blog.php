<!-- Start blog -->
<?php if(get_theme_mod('business_portfolio_blog_section_enable')): ?>

		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12  wow fadeIn">
						<div class="section-title center">
							<?php
								$blog_title = get_theme_mod('business_portfolio_blog_page_title');
								$blog_icon = get_theme_mod('business_portfolio_blog_icon_title');
								$queried_post = get_post($blog_title);
							?>
							<h2><?php echo esc_html($queried_post->post_title); ?></h2>
							<p><?php echo esc_html($queried_post->post_content); ?></p>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="blog">
							<?php
	                                $blog_catId = esc_attr(get_theme_mod( 'business_portfolio_blog_category_id'));
	                                $blog_catLink = get_category_link($blog_catId);
	                                $blog_CatName = get_category($blog_catId);
	                                $blog_number = get_theme_mod('business_portfolio_blog_number');
	                                $args = array(
	                                'post_type' => 'post',
	                                'posts_per_page' => $blog_number,
	                                'post_status' => 'publish',
	                                'cat' => $blog_catId,
	                               
	                            					);

	                            $blogloop = new WP_Query($args);
	                            
	                                while ($blogloop->have_posts()) : 
	                                	$blogloop->the_post(); 
	                                	?>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<!-- Single blog -->
								<div class="single-blog">
									<div class="blog-head">
										<?php if(has_post_thumbnail()): ?>
										<?php 	$blog_img_url = get_the_post_thumbnail_url($post->ID, 'business_portfolio_common_thumb');  ?>
										<img src="<?php echo esc_url($blog_img_url); ?>" class='img-responsive'/>
										<?php endif; ?> 
										<a href="<?php esc_url(the_permalink()); ?>" class="link"><i class="fa fa-link"></i></a>
									</div>
									<div class="blog-content">
										<h2><a href="<?php esc_url(the_permalink()); ?>"><?php esc_html(the_title()); ?></a></h2>
										<div class="meta">
											 <span><i class="fa fa-user"></i><?php business_portfolio_posted_by();?></span>
							                <span><i class="fa fa-calender"></i><?php echo get_the_date( 'd'); ?> <?php echo get_the_date( 'F'); ?> </span>
							                <span><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?></span>
												
										</div>
										<?php the_excerpt(); ?>
										<a href="<?php esc_url(the_permalink()); ?>" class="btn"><?php esc_html_e('Read More','business-portfolio'); ?><i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>	
								<!--/ End Single blog -->
									
							</div>
							<?php endwhile;
                            wp_reset_postdata();
                            ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End blog -->
<?php endif; ?>
