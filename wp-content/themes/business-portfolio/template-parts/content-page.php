<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business-portfolio
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- Single Blog -->
<div class="single-blog">
    <div class="blog-head">
        <?php if(has_post_thumbnail()){ $arg=array( 'class'=> 'img-responsive' ); the_post_thumbnail(); } ?>

    </div>
    <div class="blog-info">
        <?php the_title(); ?>
        <?php the_content(); wp_link_pages( array( 'before'=> '
        <div class="page-links">' . esc_html( 'Pages:'), 'after' => '</div>', ) ); ?>
        
    </div>
</div>
<!--/ End Single Blog -->
</article>
<!-- #post-<?php the_ID(); ?> -->