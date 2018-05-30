<?php get_header(); ?>
<div class="row-fluid">
  <div class="span8">
  
<?php if (have_posts()) :  
  while (have_posts()) : the_post();  ?>
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
  <div class="span4">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>