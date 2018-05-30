<!-- Start Team -->
<?php if(get_theme_mod('business_portfolio_team_section_enable')): ?>
<section id="team" class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 wow fadeIn">
				<div class="section-title center">
					<?php
						$team_title = get_theme_mod('business_portfolio_team_page_title');
						$queried_post = get_post($team_title);
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
			for($k=1;$k<5;$k++){
                  $team[$i] = get_theme_mod('business_portfolio_team_page_'.$k);    
                  $teamposition[$i] = get_theme_mod('business_portfolio_team_position_'.$k);
                  $i=$i+1;
      			}
	           $args = array (
	              'post_type' => 'page',
	              'posts_per_page' => $i,
	              'post__in'      => $team,
	              'orderby'        =>'post__in'
	            );
	          $teamloop = new WP_Query($args); $k=1;
          	if ($teamloop->have_posts()) :  while ($teamloop->have_posts()) : $teamloop->the_post(); ?>
			<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
				<!-- Single Team -->
				<div class="single-team">
					<div class="team-head">
						<?php if(has_post_thumbnail()): ?>
						<?php the_post_thumbnail('business_portfolio_common_image_thumb'); ?> 
						<?php endif; ?>
					</div>
					<div class="team-info">
						<div class="name">
							<h4><?php the_title(); ?><span><?php echo esc_html($teamposition[$k]); ?></span></h4>
						</div>
						<?php the_content(); ?>
					</div>
				</div>
				<!--/ End Single Team -->
			</div>
			<?php  $k=$k+1; endwhile;
              wp_reset_postdata();  
            endif; ?>
		</div>
    </div>
</section>	 
		<!--/ End Team -->		
<?php endif; ?>