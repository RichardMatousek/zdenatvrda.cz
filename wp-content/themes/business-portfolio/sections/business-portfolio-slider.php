<!-- Start Slider -->
<?php if(get_theme_mod('business_portfolio_slider_section_enable')) : ?>

<section id="j-slider">
	<div class="slide-main">
		<?php $k=1; 
		for($i=1;$i<3;$i++){
				$slider_page[$k]=get_theme_mod('business_portfolio_slider_page_'.$i);
				$slider_button_1_title[$k]=get_theme_mod('business_portfolio_slider_button_1_title_'.$i);
				$slider_button_1_url[$k]=get_theme_mod('business_portfolio_slider_button_1_url_'.$i);
				$slider_button_2_title[$k]=get_theme_mod('business_portfolio_slider_button_2_title_'.$i);
				$slider_button_2_url[$k]=get_theme_mod('business_portfolio_slider_button_2_url_'.$i);
				$slider_text_position[$k]=get_theme_mod('business_portfolio_slider_text_position'.$i);
				$k=$k+1;
		}

		$args = array (
           			'post_type' => 'page',
                  	'post_per_page' => $k,
                  	'posts_per_page'=>10,
                  	'post__in'         => ($slider_page) ? ($slider_page) : '',
                  	'orderby'           =>'post__in',
                );

		$sliderloop = new WP_Query($args);
		$j=1;

  		if ($sliderloop->have_posts()) :  while ($sliderloop->have_posts()) : $sliderloop->the_post();?>
			<!-- Single Slider -->
			<?php if(has_post_thumbnail()): ?>
			<?php $slider_img_url = get_the_post_thumbnail_url(get_the_ID($i),'business_portfolio_slider_thumb'); ?>

			<div class="single-slider" style="background-image:url(<?php echo esc_url($slider_img_url); ?>)">
			<?php else: ?>
			<div class="single-slider" style="background-image:url('<?php echo esc_url(get_template_directory_uri());?>/assets/images/header-background.jpg');">
			<?php endif; ?>
			<?php //print_r($slider_page);die();?>
			<div class="container">
				<div class="row">
					 <?php
			                if( $slider_text_position[$j] == 'right') :
			                $class = 'col-md-8 col-md-offset-4 col-sm-12 col-xs-12';
			            	endif;
			                if( $slider_text_position[$j] == 'center') :
			                    $class = 'col-md-12 col-sm-12 col-xs-12';
			               	endif;
			                if( $slider_text_position[$j] == 'left' ) :
			                   	$class = 'col-md-8 col-sm-12 col-xs-12';
			                endif;
			            ?>
					<div class="<?php echo esc_attr($class); ?>">
						<!-- Slider Text -->
						<div class="slide-text <?php echo esc_attr($slider_text_position[$j]); ?>">
							<div class="slider-inner">
								<h1><?php the_title(); ?></h1>
								<?php the_excerpt(); ?>
								<div class="slide-button">
									<?php if($slider_button_1_title[$j]): ?>
									<a href="<?php echo esc_url($slider_button_1_url[$j]); ?>" class="button"><?php echo esc_attr($slider_button_1_title[$j]); ?></a>
									<?php endif; ?>
									<?php if($slider_button_2_title[$j]): ?>
									<a href="<?php echo esc_url($slider_button_2_url[$j]); ?>" class="button primary"><?php echo esc_attr($slider_button_2_title[$j]); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<!--/ End Slider Text -->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	  	<?php $j=$j+1; endwhile;
      	wp_reset_postdata();  
        endif; ?>
	</div>
</section>
<?php endif;?>
<!--/ End Slider -->
