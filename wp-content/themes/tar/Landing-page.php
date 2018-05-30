<?php get_header();
/**
 * Template Name: Front-Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tar
 */
?>
<?php $cta_display = get_option( 'cta_section_display_toggle' , '1'); 
	if( !empty($cta_display)  ) { ?>

<!-- start welcome text -->
<?php if( get_option( 'cta_background_image_setting' != "" ,  get_template_directory_uri(). '/assets/images/banner.jpg')): ?>		

<section class="welcome-text" >
	<h2><?php echo do_shortcode(esc_attr( get_option('cta_welcome_text' , esc_html__( 'Advance. Strong. Reliable', 'tar') )) ); ?></h2>
	<p><?php echo do_shortcode(esc_attr( get_option('cta_welcome_text_p' , esc_html__('A clean bloat free WordPress theme for your site', 'tar') ) )); ?></p>
	<a class="test" href="<?php echo do_shortcode(esc_url(get_option('cta_button_href', '##'))); ?>"> <button><?php echo do_shortcode(esc_attr(get_option( 'cta-button-text' , esc_html__('Learn More', 'tar')))); ?></button></a>
</section>

<?php endif; ?>
<!-- end welcome text -->
<?php  } ?>



<?php $features_display = get_option( 'features_block_section_toggle' , '1'); 
	if( !empty($features_display)  ) { ?>
<!-- start feature-list -->
<section class="features-list">
	<h4><?php echo do_shortcode(esc_attr(get_option( 'features_head_text_settings' , __('Use this block to show three key features', 'tar')))); ?></h4>
	
	<div class="features-block-wrap">


		<!-- Feature block one -->
			<?php $block1_header = esc_attr(get_option( 'features_one_settings' , esc_html__('Dolore Libero', 'tar'))); 
			      $block1_para   = esc_attr(get_option( 'features_one_para_settings' , esc_html__('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar')));
			      $block1_image = get_option('block_one_image' , get_template_directory_uri(). '/assets/images/block1.jpg');
				$block1_display = get_option( 'block_one_toggle' , '1'); 

			if( !empty($block1_display)  ) { ?>

				<div class="features-block-one features-block">
		                <a href="<?php echo do_shortcode(esc_url(get_option('block_one_href', 'http://asphaltthemes.com'))); ?>">
							<?php if( get_option( 'block_one_image' != "" , get_template_directory_uri(). '/assets/images/block1.jpg')): ?>
							    <div class="block-one-photo"></div>
						<?php endif; ?>
						</a>
		        
		                <h3><?php echo do_shortcode($block1_header); ?></h3>
		                <p><?php echo do_shortcode($block1_para); ?></p>
		            </div>
			<?php } ?>
			
		<!-- Feature block one END-->

		<!-- Feature block two -->
			<?php $block2_header = esc_attr(get_option( 'features_two_setting' , esc_html__('Dolore Libero', 'tar'))); 
			      $block2_para   = esc_attr(get_option( 'features_two_para_settings' , esc_html__('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar')));
			      $block2_image = get_option('block_two_image' , get_template_directory_uri(). '/assets/images/block2.jpg');
				  $block2_display = get_option( 'block_two_toggle' , '1');

			if( !empty($block2_display)  ) { ?>

				<div class="features-block-two features-block">
		                <a href="<?php echo do_shortcode(esc_url(get_option('block_two_href', 'http://asphaltthemes.com'))); ?>">
							<?php if( get_option( 'block_two_image' != "" , get_template_directory_uri(). '/assets/images/block2.jpg')): ?>
							    <div class="block-two-photo"></div>
						<?php endif; ?>
						</a>
		        
		                <h3><?php echo do_shortcode($block2_header); ?></h3>
		                <p><?php echo do_shortcode($block2_para); ?></p>
		            </div>
			<?php } ?>
			
		<!-- Feature block two END-->


		<!-- Feature block three -->
			<?php $block3_header = esc_attr(get_option( 'features_three_setting' , esc_html__('Dolore Libero', 'tar'))); 
			      $block3_para   = esc_attr(get_option( 'features_three_para_settings' , esc_html__('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan.', 'tar')));
			      $block3_image = get_option('block_three_image' , get_template_directory_uri(). '/assets/images/block3.jpg');
				  $block3_display = get_option( 'block_three_toggle' , '1');

			if( !empty($block3_display)  ) { ?>

				<div class="features-block-three features-block">
		                <a href="<?php echo do_shortcode(esc_url(get_option('block_three_href', 'http://asphaltthemes.com'))); ?>">
							<?php if( get_option( 'block_three_image' != "" , get_template_directory_uri(). '/assets/images/block3.jpg')): ?>
							    <div class="block-three-photo"></div>
						<?php endif; ?>
						</a>
		        
		                <h3><?php echo do_shortcode($block3_header); ?></h3>
		                <p><?php echo do_shortcode($block3_para); ?></p>
		            </div>
			<?php } ?>
			
		<!-- Feature block three END-->

	</div>
	<!-- Feature block wrap END-->
	<div class="clearfix"></div>
</section>
<!-- end feature-list -->
<?php  } ?>


<?php $portfolio_display = get_option( 'portfolio_section_toggle' , '1'); 
	if( !empty($portfolio_display)  ) { ?>
<!-- start portfolio -->
<section class="portfolio">
 <div class="portfolio-wrap">
	      <p><?php echo do_shortcode(esc_attr(get_option( 'porfolio_head_text', esc_html__('See our Portfolio', 'tar')))); ?></p>
	      <?php $cat_id = intval( get_option( 'cats_elect', 1 ) ); ?>
	      		
			       <?php $tarPosts = new WP_Query('cat='.$cat_id.'&posts_per_page=6&orderby=title&order=ASC'); ?>
			        <?php ?>
				       <?php while($tarPosts->have_posts()) : $tarPosts->the_post(); ?> 
				          <div class="portfolio-image">
				          		<?php if ( has_post_thumbnail() ) {the_post_thumbnail();
									} else { ?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank_img.png" alt="<?php the_title(); ?>" />
								<?php } ?>
				          	  <a href="<?php the_permalink(); ?>" class="image-section"> <?php the_title(); ?></a>

				          </div>
				       <?php endwhile; ?>
				       
			       <?php wp_reset_postdata(); ?>

<div class="clearfix"></div>
 </div>
</section>
<!-- end portfolio -->
<?php  } ?>



<?php $second_cta_display = get_option( 'second_cta_section_toggle' , '1'); 
	if( !empty($second_cta_display)  ) { ?>
<!-- start bottom call to action -->
<section class="bottom-call"> 

	<div class="call-section-one">
		<p><?php echo do_shortcode(esc_attr(get_option( 'second_cta_head_text', esc_html__('Ultrices ante sagittis nunc senectus libero netus', 'tar')))); ?></p>
		
	</div>
	<!-- <div class="clearfix"></div> -->
	<div class="call-section-two">
		<a href="<?php echo do_shortcode(esc_url(get_option('second_cta_button_href', '##'))); ?>"><button><?php echo do_shortcode(esc_attr(get_option( 'second_cta_button_text', esc_html__('See more', 'tar')))); ?></button></a>
	</div>
	
</section>
<!-- end bottom call to action -->
<?php  } ?>



<?php $blog_display = get_option( 'blog_section_toggle' , '1'); 
	if( !empty($blog_display)  ) { ?>
<!-- start blog post -->
<section class="frontpage-post-blog">
		<h4><?php echo do_shortcode(esc_attr(get_option( 'blog_head_text', esc_html__('Check out blog', 'tar')))); ?></h4>

		<?php $cat_id = intval( get_option( 'blog_cats', 1 ) ); ?>

	<div class="frontpage-post-wrapper">
		<?php 
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged'); 
			} elseif ( get_query_var('page') ) { 
				$paged = get_query_var('page'); 
			} else { 
				$paged = 1; 
			}
		$args = array(
			'cat'        => $cat_id,
			'ignore_sticky_posts' => 1,
			'post_type' => 'post',  
			'paged' => $paged,
		);
		 $wp_query = new WP_Query( $args ); ?>
			<?php get_template_part( 'template-parts/loops' ); ?> 
			<div class="front-page-pagination">
          	  <?php echo tar_home_pagination( $wp_query ); ?>
            </div>
        <?php wp_reset_postdata(); ?>
	</div>
	
</section>
<!-- end blog post -->
<?php  } ?>


<?php $text_display = get_option( 'text_section_toggle' , '1'); 
	if( !empty($text_display)  ) { ?>
<!-- start text section section -->
<section class="frontpage-signup" >
	<p><?php echo do_shortcode(esc_attr(get_option( 'email_subscribe_header', esc_html__('Aenean vel justo nulla, at gravida elit. In hac habitasse platea dictumst. Quisque gravida commodo volutpat. Vivamus blandit risus in urna venenatis accumsan ', 'tar')))); ?></p>
</section>
<!-- end text section -->
<?php  } ?>



</main><!-- #main -->
	</div><!-- #primary -->
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>
<?php get_footer(); ?>