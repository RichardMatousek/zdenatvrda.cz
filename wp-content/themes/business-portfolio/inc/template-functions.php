<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package business-portfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function business_portfolio_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'business_portfolio_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function business_portfolio_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'business_portfolio_pingback_header' );

if ( ! function_exists( 'business_portfolio_simple_breadcrumb' ) ) :

    /**
     * Simple breadcrumb.
     *
     * @since 1.0.0
     */
    function business_portfolio_simple_breadcrumb() {

        // Load Breadcrumb.
        if ( ! function_exists( 'breadcrumb_trail' ) ) {
            require_once get_template_directory() . '/inc/breadcrumb.php';
        }

        $breadcrumb_args = array(
            'container'   => 'div',
            'show_browse' => false,
        );
        breadcrumb_trail( $breadcrumb_args );

    }

endif;

add_action( 'business_portfolio_breadcrumb', 'business_portfolio_simple_breadcrumb', 10 );