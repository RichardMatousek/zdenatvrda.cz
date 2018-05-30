<?php
/**
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tar
 */
get_header(); ?>

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

	<div id="primary" class="content-area">
		<main id="home-main" class="site-main" role="main">
			
			<div class="home-list-wrapper">
			
				<?php 

			$args = array (
				'post__in'  => '',
				'ignore_sticky_posts' => 'false',
				'posts_per_page' => '10',
				'paged' => $paged
				);
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;


			// the query
			$the_query = new WP_Query( $args ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<section class="home-wrapper">
					<div class="home-post-photo">
						<?php if ( has_post_thumbnail() ) {the_post_thumbnail();
							} else { ?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />
				<?php } ?>

					</div>

					<div class="home-post-others">
						<div class="home-post-title">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3>
						</div>
						<?php get_template_part( 'template-parts/postmeta'); ?>
						<p><?php echo substr(get_the_excerpt(), 0,50); ?>...</p>
						 <div class="continue-reading"><a href="<?php the_permalink(); ?>"><?php _e('Continue' , 'tar'); ?></a> </div>
					</div>
				<div class="clearfix"></div>
                 <!-- </div> -->
                 </section>

				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

			  <div class="clearfix"></div>
			  <div class="blog-pagination">
				  <?php next_posts_link(__('&laquo; Older Entries', 'tar'), $the_query->max_num_pages) ?>
				  <?php previous_posts_link(__('Newer Entries &raquo;', 'tar')) ?>
			  </div> 

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'tar' ); ?></p>
		<?php endif; ?>

			</div>

		
		</main><!-- #main -->
	</div><!-- #primary -->
<div class="clearfix"></div>
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>
<?php get_footer(); ?>