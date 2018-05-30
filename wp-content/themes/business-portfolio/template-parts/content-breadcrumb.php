<section id="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<?php if(is_home() && is_front_page()):?>
				<h2><?php esc_html_e( 'Blog Archive','business-portfolio' ) ?></h2>
				<ul>
					<li><a href="<?php esc_url(home_url());?>"><?php esc_html_e( 'Home','business-portfolio' ) ?></a></li>
					<li class="active"><a href="<?php esc_url(home_url());?>"><?php esc_html_e( 'Blog Archive','business-portfolio' ) ?></a></li>
				</ul>
				<?php else:
				if ( is_archive() ) {
				the_archive_title( '<h2>', '</h2>' );
				}
				else{
					echo '<h2>';
				echo esc_html( get_the_title() );
				echo '</h2>';
				}
				do_action( 'business_portfolio_breadcrumb' );		
				endif;?>
			</div>
		</div>
	</div>
</section>