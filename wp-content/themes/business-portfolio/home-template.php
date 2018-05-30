<?php
/*
*	Template Name: FrontPage
*
*/	
 get_header();?>
<?php if(get_theme_mod('business_portfolio_slider_section_enable')):?>
	<?php get_template_part( 'sections/business-portfolio', 'slider' ); ?>
<?php endif; ?>
<?php
get_template_part( 'sections/business-portfolio', 'service' );
get_template_part( 'sections/business-portfolio', 'about' );
get_template_part( 'sections/business-portfolio', 'skill' );
get_template_part( 'sections/business-portfolio', 'why-choose-us' );
get_template_part( 'sections/business-portfolio', 'team' );
get_template_part( 'sections/business-portfolio', 'testimonials' );
get_template_part( 'sections/business-portfolio', 'portfolio' );;
get_template_part( 'sections/business-portfolio', 'counter' );
get_template_part( 'sections/business-portfolio', 'blog');
get_template_part('sections/business-portfolio',  'contact');
get_template_part('sections/business-portfolio',  'location');
get_template_part('sections/business-portfolio',  'newsletter');
get_template_part('sections/business-portfolio','clients');
?>
<?php get_footer(); ?>
