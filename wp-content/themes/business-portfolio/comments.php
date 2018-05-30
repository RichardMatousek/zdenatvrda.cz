	<?php
	/**
	 * The template for displaying comments.
	 *
	 * The area of the page that contains both current comments
	 * and the comment form.
	 *
	 * @package business-portfolio
	 */

	/*
	 * If the current post is protected by a password and
	 * the visitor has not yet entered the password we will
	 * return early without loading the comments.
	 */
	if ( post_password_required() ) {
		return;
	}
	?>
<div class="blog-comments">
			<?php // You can start editing here -- including this comment! ?>
			<h2>
				Latest Comments
			</h2>
			<?php if ( have_comments() ) : ?>
				
				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'business-portfolio' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments') ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments') ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-above -->
				<?php endif; // Check for comment navigation. ?>

			
				<div class="comments-body">
					<?php
						wp_list_comments( array(
							'type'=>'comment',
							'callback'=>'business_portfolio_comment_list_format'
						) );
					?>
				</div>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'business-portfolio' ); ?></h2>
					<div class="nav-links">

						<div class="nav-previous"><?php previous_comments_link( esc_html( 'Older Comments') ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html( 'Newer Comments') ); ?></div>

					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
				<?php endif; // Check for comment navigation. ?>

			<?php endif; // Check for have_comments(). ?>

			<?php
				// If comments are closed and there are comments, let's leave a little note, shall we?
				if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'business-portfolio' ); ?></p>
			<?php endif; ?>

			<?php comment_form(); ?>
		</div><!-- #comments -->
