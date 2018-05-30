<!-- Start Portfolio -->
<?php if(get_theme_mod('business_portfolio_portfolio_section_enable')): ?>
<section id="portfolio" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
				<div class="section-title center">
					<?php
						$portfolio_title = get_theme_mod('business_portfolio_portfolio_page_title');
						$queried_post = get_post($portfolio_title);
					?>
					<h2><?php echo esc_html($queried_post->post_title); ?></h2>
					<p><?php echo esc_html($queried_post->post_content); ?></p>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="portfolio-carousel">
					<?php
                    $portfolio_catId = esc_attr(get_theme_mod( 'business_portfolio_portfolio_category_id'));
                    $portfolio_catLink = get_category_link($portfolio_catId);
                    $portfolio_CatName = get_category($portfolio_catId);
                    $portfolio_number = get_theme_mod('business_portfolio_portfolio_number');
                    $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $portfolio_number,
                    'post_status' => 'publish',
                    'cat' => $portfolio_catId,
                	);
                	$portfolioloop = new WP_Query($args);
                
                    while ($portfolioloop->have_posts()) : 
                    	$portfolioloop->the_post(); 
                    	?>
					<!-- Single Portfolio -->
					<div class="portfolio-single">
						<?php if(has_post_thumbnail()): ?>
						<?php 	$portfolio_img_url = get_the_post_thumbnail_url($post->ID, 'business_portfolio_common_thumb');  ?>
						<a href="<?php echo esc_url($portfolio_img_url); ?>" class="zoom">
							<div class="portfolio-head">
								<img src="<?php echo esc_url($portfolio_img_url); ?>" alt=""/>
								<i class="fa fa-search"></i>
							</div>
						</a>
						<?php endif; ?> 
						<div class="text">
							<h4><a href="<?php esc_url(the_permalink());?>"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
						</div>
					</div>
					<!--/ End Portfolio -->
					<?php endwhile;
                            wp_reset_postdata();
                            ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ End Portfolio -->
<?php endif; ?>