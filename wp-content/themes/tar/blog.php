<?php
/**
 * Template Name: Blog Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tar
 */
get_header(); ?>

	<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' , 'tar'); ?>
			<footer class="entry-footer">
				<?php edit_post_link( esc_html__( 'Edit', 'tar' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
	</header><!-- .entry-header -->
			
		<div class="blog-list-wrapper">

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

		<div class="nblog-sidebar">

			<?php
            if ( ! dynamic_sidebar( 'sidebar' ) ) {
            the_widget( 'WP_Widget_Recent_Posts' );
            the_widget( 'WP_Widget_Meta' );
            the_widget( 'WP_Widget_Archives' );
            the_widget( 'WP_Widget_Categories' );
                        } ?>
			
		</div>


<div class="clearfix"></div>
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>
<?php get_footer(); ?>



