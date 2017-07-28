<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Alleno
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function alleno_cv_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'alleno_cv_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function alleno_cv_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'alleno_cv_pingback_header' );

if ( ! function_exists( 'sanitize_html_classes' ) && function_exists( 'sanitize_html_class' ) ) {
  /**
	 * sanitize_html_class works just fine for a single class
	 * Some times le wild <span class="navbar-collapse collapse"> appears, which is when you need this function,
	 * to validate both navbar-collapse and collapse,
	 * Because sanitize_html_class doesn't allow spaces.
	 *
	 * @uses   sanitize_html_class
	 * @param  (mixed: string/array) $class   'navbar-collapse collapse' or array(  'navbar-collapse', 'collapse'  )
	 * @param  (mixed) $fallback Anything you want returned in case of a failure
	 * @return (mixed: string / $fallback )
	 */
	function sanitize_html_classes( $class, $fallback = null ) {
		// Explode it, if it's a string
		if ( is_string( $class ) ) {
			$class = explode( " ", $class );
		}
		if ( is_array( $class ) && count( $class ) > 0 ) {
			$class = array_map( "sanitize_html_class", $class );
			return implode( " ", $class );
		}
		else {
			return sanitize_html_class( $class, $fallback );
		}
	}
}
