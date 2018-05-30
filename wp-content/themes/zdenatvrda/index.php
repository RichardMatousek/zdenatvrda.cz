<?php get_header(); ?>
 
<div class="span8">
 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
  <?php 
     endwhile; 
     else: 
  ?>
<div id="post-0" class="post error404 not-found">
<h1 class="entry-title"><?php _e( 'Not Found', 'theme' ); ?></h1>
<div class="entry-content">
<p><?php _e( 'Apologies, but no results were 
                        found for the requested archive. Perhaps searching 
                        will help find a related post.', 'theme' ); ?></p>
</div><!-- .entry-content -->
</div><!-- #post-0 -->
 
<?php endif; ?>
 
</div>
<div class="span4">
 
<?php get_sidebar(); ?>
 
</div>
 
<?php get_footer(); ?>