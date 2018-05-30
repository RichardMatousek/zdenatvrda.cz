<?php get_header(); ?>
<div class="row-fluid">
  <div class="span8">
  <?php if (have_posts()) : ?>   
      <h1 class="archive-title"><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'theme' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'theme' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'theme' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'theme' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'theme' ) ) . '</span>' );
					else :
						_e( 'Archives', 'theme' );
					endif;
				?>
      </h1>
    <?php while (have_posts()) : the_post();  ?>
		
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
  <?php endif;  ?>
  </div>
  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>