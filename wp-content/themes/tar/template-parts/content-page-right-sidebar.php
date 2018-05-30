<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tar
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<footer class="entry-footer">
				<?php edit_post_link( esc_html__( 'Edit', 'tar' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->

		</header><!-- .entry-header -->

	<div class="right-sidebar-entry-content">
		<div class="right-sidebar-featured-image">
			<?php	if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<div class="hide-featured-image"></div>';
			} ?>
		</div>
	</div>

		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tar' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->