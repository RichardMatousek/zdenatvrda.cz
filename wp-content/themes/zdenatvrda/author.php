<?php get_header(); ?>
<div class="row-fluid">
  <div class="col-xs-12 col-sm-6 col-md-8">
  <?php if (have_posts()) : 
  the_post();
  ?>   
  
  <h1 class="archive-title"><?php printf( __( 'Author Archives: %s', 'theme' ), '&nbsp;<a href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a>' ); ?></h1>
  
    <?php 
    rewind_posts();
    
     while (have_posts()) : the_post();  ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
		
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>             
	  <h2 class="title">
	  <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
    <?php the_title(); ?>
    </a>
	  </h2>
	
    <div class="post-content">
	  <?php echo the_excerpt();?>
	  </div>
    </div>
    
    <?php endwhile;  ?>                        
    	
    <!--BEGIN .navigation -->
			<div class="navigation">
				<?php posts_nav_link('',__('Previous page','theme'),__('Next page','theme')); ?>
			</div> 

  <?php else : ?>

	  <!--BEGIN #post-0-->
	  <div id="post-0" <?php post_class(); ?>>
		  <h1 class="entry-title">
        <?php _e('Error 404 - Not Found', 'theme') ?>
      </h1>
		  <!--BEGIN .entry-content-->
	    <div class="entry-content">
	      <p><?php _e("Sorry, but you are looking for something that isn't here.", "theme") ?></p>
	    <!--END .entry-content-->
	    </div>
		<!--END #post-0-->
	  </div>

  <?php endif; 
  wp_reset_query();
  ?>
	
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>