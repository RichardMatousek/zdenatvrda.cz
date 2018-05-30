<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package business-portfolio
 */

get_header();?>
	<!-- Start Breadcrumbs -->
	<?php get_template_part( 'template-parts/content','breadcrumb');?>
	<!-- End Breadcrumbs -->
	<!-- Start Blog -->
	<section id="blog" class="single section page">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<?php
					while ( have_posts() ) : the_post();
				 	get_template_part( 'template-parts/content', 'single' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				 ?>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- Blog Sidebar -->
					<?php get_sidebar();?>
					<!--/ End Blog Sidebar -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog section -->
	<!-- Client start -->
	<?php get_template_part( 'template-parts/content', 'client' );?>
	<!-- Client End -->
<?php
get_footer();
