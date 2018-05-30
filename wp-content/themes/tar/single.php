<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="post-main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="right-sidebar-widget">
				<?php
		            if ( ! dynamic_sidebar( 'sidebar-1' ) ) {
		                the_widget( 'WP_Widget_Recent_Posts' );
		                the_widget( 'WP_Widget_Meta' );
		                the_widget( 'WP_Widget_Calendar' );
		            } ?>
			</div>
			
			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
</section>
<?php get_footer(); ?>