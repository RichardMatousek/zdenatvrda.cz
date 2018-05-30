<?php
/**
 * Template Name: Right Sidebar Page
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
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="right-sidebar-main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page-right-sidebar' ); ?>
					<div class="right-sidebar-widget">
						<?php
			            if ( ! dynamic_sidebar( 'sidebar-1' ) ) {
			                // default content goes here\
			                the_widget( 'WP_Widget_Recent_Posts' );
			                the_widget( 'WP_Widget_Meta' );
			                the_widget( 'WP_Widget_Calendar' );
			            }?>
					</div>
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="clearfix"></div>
	
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>
	
<?php get_footer(); ?>