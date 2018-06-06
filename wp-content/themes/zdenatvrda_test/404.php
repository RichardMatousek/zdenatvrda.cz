<?php
header("HTTP/1.1 404 Not Found");
header("Status: 404 Not Found");
get_header(); 
?>
<div class="span12" >
   <div id="post-0" <?php post_class() ?>>
   <h1 class="title-404"><?php _e('Error 404 - Not Found', 'theme') ?></h1>
   <div class="content-404">
<?php _e('The page you are looking for does not exist, it may have been moved, 
or removed altogether. You might want to try the search function. 
Alternatively, return to the <a href="/">front page</a>.','theme') ?>
  </div>
  </div>
</div>
<?php get_footer(); ?>