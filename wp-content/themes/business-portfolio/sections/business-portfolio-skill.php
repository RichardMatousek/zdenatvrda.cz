<!-- Our Skill -->
<?php if(get_theme_mod('business_portfolio_skill_section_enable')): ?>
		<section id="our-skill" class="section">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn">
						<!-- Info Main -->
						<?php
						$someinfo_title = get_theme_mod('business_portfolio_someinfo_page_title');
						$queried_post = get_post($someinfo_title);
					?>
						<div class="info-main">
							<div class="section-title left">
								<h2><?php echo esc_html($queried_post->post_title); ?></h2>
							</div>
							<?php echo esc_html( $queried_post->post_content ); ?>
						</div>
						<!--/ End Info Main -->
					</div>				
					<div class="col-md-6 col-sm-12 col-xs-12">
						<!-- Skill Main -->
						<div class="skill-main">
							<div class="section-title left">
								<h2><?php echo esc_html( get_theme_mod( 'business_portfolio_skill_heading' ) );?></h2>
							</div>
							<!-- Single Skill -->
							<?php
							for($k=1;$k<5;$k++):?>
							<div class="single-skill">
								<div class="skill-info">
									<?php if(get_theme_mod('business_portfolio_skill_title_'.$k)):?>
									<h4><?php echo esc_html(get_theme_mod('business_portfolio_skill_title_'.$k)); ?></h4>
									<?php endif;?>
								</div>
								<div class="progress">
									<?php if(get_theme_mod('business_portfolio_skill_percentage_'.$k)):?>
									<div class="progress-bar" data-percent="<?php echo esc_attr(get_theme_mod('business_portfolio_skill_percentage_'.$k)); ?>"><span><?php echo esc_html(get_theme_mod('business_portfolio_skill_percentage_'.$k)); ?>%</span></div>
								<?php endif;?>
								</div>
							</div>	
							<?php  endfor;?>
							<!--/ End Single Skill -->
						</div>
						<!--/ End Skill Main -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Our Skill -->
<?php endif; ?>