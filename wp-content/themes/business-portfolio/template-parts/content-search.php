<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business-portfolio
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-blog">
    <div class="blog-head">
         <?php if(has_post_thumbnail()){ $arg=array( 'class'=> 'img-responsive' ); the_post_thumbnail('business-portfolio-list-thumb',$arg); } ?>
    </div>
    <div class="blog-content">
        <h2><a href="<?php esc_url(the_permalink());?>"> <?php esc_html(the_title());?></a></h2>
        <div class="meta">
            <span><i class="fa fa-user"></i>     <?php business_portfolio_posted_by(); ?></span>
            <span><i class="fa fa-calender"></i><?php echo get_the_date('j'); ?>  <?php echo get_the_date( 'M'); ?></span>
            <span><i class="fa fa-comments"></i><?php comments_number(); ?></span>
        </div>
        <?php   the_content(); 
            wp_link_pages( array( 'before'=> '
                                <div class="page-links">' . esc_html( 'Pages:'), 
                                 'after' => '</div>', ) ); 
        ?>
    </div>
</div>
<!-- #post-<?php the_ID(); ?> -->