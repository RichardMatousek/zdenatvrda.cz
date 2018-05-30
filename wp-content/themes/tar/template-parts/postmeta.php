<div class="post-meta-wrapper">   
                
          <div class="postinfo">
                <i class="fa-calendar"></i><a class="comm_date post-date updated"><?php the_time( get_option('date_format') ); ?></a>

                <i class="fa-user"></i><?php global $authordata; $post_author = "<a class='vcard author post-author' href=\"".get_author_posts_url( $authordata->ID, $authordata->user_nicename )."\"><span class='fn'>".get_the_author()."</span></a>\r\n"; echo $post_author; ?>

                <i class="fa-th-list"></i><div class="catag_list"><?php the_category(',') ?></div>
               
                        
          </div>
 </div>