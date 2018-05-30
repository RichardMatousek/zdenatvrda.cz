<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package business-portfolio
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-md-4 col-sm-4 col-xs-12">
  <div class="row">
    <!-- Single blog -->
    <div class="single-blog">
        <div class="blog-head">
         <?php if(has_post_thumbnail()){ $arg=array( 'class'=> 'img-responsive' ); the_post_thumbnail('business-portfolio-client-thumb',$arg); } else{the_title();}?>
        </div>
        <div class="blog-content">
               <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
            <div class="meta">
                <span><i class="fa fa-user"></i><?php business_portfolio_posted_by();?></span>
                <span><i class="fa fa-calender"></i><?php echo get_the_date( 'd'); ?> <?php echo get_the_date( 'F'); ?> </span>
                <span><i class="fa fa-comments"></i><?php echo esc_html(get_comments_number());?></span>
            </div>
              <?php the_excerpt();?>
                <a href="<?php esc_url(the_permalink()); ?>" class="btn"><?php esc_html_e('Read More','business-portfolio'); ?><i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
    <!--/ End Single blog -->
  </div>
</div>
</article>
