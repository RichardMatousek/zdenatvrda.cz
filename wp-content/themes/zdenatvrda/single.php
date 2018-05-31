<?php get_header(); ?>
<div style="height: 75px;"></div>
<div class="row-fluid">
  <div class="col-xs-12 col-sm-6 col-md-8">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <?php get_template_part( 'content', get_post_format() ); ?>
    <!--BEGIN .hentry -->

<!--BEGIN .entry-content -->

      <!--END .hentry-->  
</div>
	  <?php endwhile; else: ?>
<div id="post-0" <?php post_class() ?>>
<h1 class="entry-title">
<?php _e('Error 404 - Not Found', 'theme') ?>
                        </h1>
<!--BEGIN .entry-content-->
<div class="entry-content">
<p><?php _e("Sorry, but you are looking for 
something that isn't here.", "theme") ?></p>
</div>
</div>
<?php endif; ?>
</div>
  <div class="col-xs-12 col-sm-6 col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>