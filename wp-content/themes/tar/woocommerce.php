<?php
/**
 * The template for displaying all pages.
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
		<main id="main" class="site-main" role="main">

			<?php woocommerce_content(); ?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

			<!-- sidebar widget -->
			<section class="right-sidebar-widget">

				<?php
		            if ( ! dynamic_sidebar( 'woocommerce' ) ) {
		                // default content goes here\
		                the_widget( 'WP_Widget_Recent_Posts' );
		                the_widget( 'WP_Widget_Meta' );
		                the_widget( 'WP_Widget_Calendar' );
		            }
	            ?>
				<div class="clearfix"></div>
			</section>
			<!-- sidebar widget -->

	<div class="clearfix"></div>

	<!-- Footer widget -->
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>
	<!-- Footer widget -->
<?php get_footer(); ?>