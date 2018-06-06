<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <?php 
  if ( is_search()|| is_home() || is_archive()
   || is_tag() || is_category() ) :
  ?>
    
  <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
<div class="entry-thumbnail">
<?php the_post_thumbnail(); ?>
</div>
<?php endif; ?>
 
  <h2 class="title">
    <a href="<?php the_permalink() ?>" 
      title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
  </h2>
    
    
    <div class="post-content">
     <?php echo the_excerpt();?>
   </div>
 
  <?php else: ?>
 
  <h1 class="entry-title"><?php the_title(); ?></h1>
  <div class="post-content">
<?php the_content(__('Read more...', 'theme')); ?>
  </div>
 
  <?php endif; ?>
</div>