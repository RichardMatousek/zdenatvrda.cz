<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package business-portfolio
 */

get_header(); ?>
<!-- Start Breadcrumbs -->
	<?php get_template_part( 'template-parts/content','breadcrumb');?>
	<!-- End Breadcrumbs -->
	<!-- Start Blog -->
	<section id="blog" class="single section page">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							wp_bs_pagination();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>
			
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
<?php
get_footer();

