<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tar
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="cat-main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>



				<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
	
		<?php if ( 'post' === get_post_type() ) : ?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="cat-entry-content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if ( has_post_thumbnail() ) { ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
			<?php } else { ?>
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?> /assets/images/no-image.jpg" alt="<?php the_title(); ?>" />
		<?php } ?>
	</div>

			<?php endwhile; ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		<?php the_posts_navigation(); ?>			

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="clearfix"></div>
	<section class="footer-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
		<div class="clearfix"></div>
	</section>

<?php get_footer(); ?>