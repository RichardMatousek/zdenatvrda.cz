<?php get_header(); ?>

    <div class="author-section" class="narrowcolumn">

        <div class="author-short-bio">
        <?php
        if(isset($_GET['author_name'])) :

        $curauth = get_userdatabylogin($author_name);
        else :
        $curauth = get_userdata(intval($author));
        endif;
        ?>
        <?php echo get_avatar( get_the_author_meta('ID'), 150); ?>

        <h2><?php _e('About:', 'tar'); ?> <?php echo $curauth->nickname; ?></h2>
        <dl>
        <dt><?php _e( 'Website', 'tar'); ?></dt>
        <dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
        <dt><?php _e('Profile', 'tar'); ?></dt>

        <dd><?php echo $curauth->user_description; ?></dd>
        </dl>
        </div>
        <h2><?php _e('Posts by', 'tar'); ?> <?php echo $curauth->nickname; ?>:</h2>

        <ul>
      

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>

            <!-- author meta wrap-->
            <div class="author-postmeta-wrap">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
                <?php the_title(); ?></a>
                <?php the_date(); ?> <?php _e('in', 'tar'); ?> <?php the_category(', ');?>
            </div>
            <!-- author meta wrap-->
    
            <?php if ( has_post_thumbnail() ) { ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a> 
                <?php } else { ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no-image.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
            <p><?php echo substr(get_the_excerpt(), 0,400); ?>...</p>
            <div class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Read More' , 'tar'); ?></a></div>

        </li>

        <?php endwhile; else: ?>
        
         <p><?php _e('No posts by this author.' , 'tar'); ?></p>

        <?php endif; ?>

       

        </ul>
    </div>

    <div class="right-sidebar-widget">
            
            <?php
            if ( ! dynamic_sidebar( 'sidebar-1' ) ) {
                // default content goes here\
                the_widget( 'WP_Widget_Recent_Posts' );
                the_widget( 'WP_Widget_Meta' );
                the_widget( 'WP_Widget_Calendar' );
            }
            ?>
    </div>

    <div class="clearfix"></div>

    <section class="footer-widget">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) :   endif; ?>
        <div class="clearfix"></div>
    </section>
<?php get_footer(); ?>