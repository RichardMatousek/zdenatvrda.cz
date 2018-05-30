<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
			<div class="col-lg-8 col-12">
			
				<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );
					endwhile;?>
				
				<div class="row">
					<div class="col-12">
						<!-- Start Pagination -->
						<div class="pagination-main">
							<ul class="pagination">
								<?php the_posts_navigation();?>
							</ul>
						</div>
						<!--/ End Pagination -->
					</div>
				</div>	
					<?php 
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
					?>	
			</div>
			<div class="col-lg-4 col-12">
			<!-- Blog Sidebar -->
				<aside class="blog-sidebar">
					<?php get_sidebar() ?>
				</aside>
			<!--/ End Blog Sidebar -->
			</div>				
		</div>
	</div>
</section>
<!--/ End Blog -->	
<?php
get_footer();

