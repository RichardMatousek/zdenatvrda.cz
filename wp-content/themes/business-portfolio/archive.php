<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business-portfolio
 */

get_header(); ?>
<!-- Start Breadcrumbs -->
<?php get_template_part( 'template-parts/content','breadcrumb' );?>
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
				<ul class="pagination">
				<?php the_posts_pagination( array(
				    'mid_size' => 2,
				    'prev_text' => __( '<span class="fa fa-angle-left" aria-hidden="true">&laquo;</span>', 'business-portfolio' ),
				    'next_text' => __( '<span class="fa fa-angle-right" aria-hidden="true">&raquo;</span>', 'business-portfolio' ),
				) );  ?>
				</ul>
				<!--/ End Pagination -->
				<?php else :
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
// get_sidebar();
get_footer();	