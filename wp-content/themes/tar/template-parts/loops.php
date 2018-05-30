<?php  if ( $wp_query->have_posts()) : while ( $wp_query->have_posts()) : the_post(); ?>

                <div class="frontpage-post">
                <div class="frontpage-post-image">
                    <?php if ( has_post_thumbnail() ) {the_post_thumbnail();
                        } else { ?>
                         <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blank_img.png" alt="<?php the_title(); ?>" />
                    <?php } ?>
                </div>
                 
	            <h3><a class="frontpage-blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	             <p><?php echo substr(get_the_excerpt(), 0,190); ?>...</p>
                 <div class="continue-reading"><a href="<?php the_permalink(); ?>"><?php esc_attr_e('CONTINUE', 'tar'); ?></a></div> 
                 </div>
            <?php endwhile; ?>

                <div class="clearfix"></div>
    
            <?php else :
                echo esc_attr_e('No content found', 'tar');
             endif;  ?>