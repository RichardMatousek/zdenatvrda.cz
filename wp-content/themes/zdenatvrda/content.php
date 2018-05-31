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
<!-- Post meta -->
    <div class="entry-meta">
      <span class="entry-author">
        <span class="glyphicon glyphicon-user"></span>
            <?php the_author_posts_link(); ?>
      </span>
      
      <span class="entry-date">
        <span class="glyphicon glyphicon-calendar"></span>
            <?php the_time( 'j.n. Y' ); ?>
      </span>
        
      <span class="entry-comments">
        <?php comments_popup_link(__('No Comments', 'theme'), 
        __('1 Comment', 'theme'), 
        __('% Comments', 'theme')); ?>
      </span>
        
      <span class="entry-category">
        <?php 
        $categories = get_the_category();
        $separator = ', ';
        $output = '';
        if($categories){
        foreach($categories as $category) {
        $output .= '<a href="'.get_category_link($category->term_id ).'" 
        title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.
        $category->cat_name.'</a>'.$separator;
        }
        echo trim($output, $separator);
        }
        ?>
      </span>
    </div>

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