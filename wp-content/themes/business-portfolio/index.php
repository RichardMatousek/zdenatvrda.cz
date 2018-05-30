<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business-portfolio
 */

get_header(); 
	?>
<!-- Start Breadcrumbs -->
<?php get_template_part( 'template-parts/content','breadcrumb');?>
<!-- End Breadcrumbs -->

<!-- Start blog -->
<section id="blog" class="archive section page">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
				endwhile; ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				
					<?php if (function_exists("business_portfolio_bs_pagination"))
					    {
					        business_portfolio_bs_pagination();
					}  ?>
        	 	
				<!--/ End Pagination -->
				<?php	else:
				get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</div>
		</div>
	</div>
	<div class="gmap">
		<div class="map"></div>
	</div>
</section>
	<!--/ End blog -->
	<?php get_template_part( 'template-parts/content', 'client' );?>
<?php
get_footer();
