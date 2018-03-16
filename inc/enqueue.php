<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ), false );
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'scrolling-nav', get_template_directory_uri() . '/js/scrolling-nav.js', array(), true);
		wp_enqueue_script( 'mailchimp-signup', get_template_directory_uri() . '/js/mailchimp-signup.js', array(), true);
		wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.min.js', array(), true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


add_action('wp_enqueue_scripts', 'fonts'); // Add Theme Stylesheet
function fonts() {
	wp_register_style('josefin-sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,700', array(), '1.0', 'all');
	wp_enqueue_style('josefin-sans'); // Enqueue it!

	wp_register_style('maitree', 'https://fonts.googleapis.com/css?family=Maitree', array(), '1.0', 'all');
	wp_enqueue_style('maitree'); // Enqueue it!

	wp_register_style('nunito-sans', 'https://fonts.googleapis.com/css?family=Nunito+Sans', array(), '1.0', 'all');
	wp_enqueue_style('nunito-sans'); // Enqueue it!
}


// FONT AWESOME
// Enqueue Font Awesome.
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );
function custom_load_font_awesome() {
    wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/fonts/fontawesome-all.js', array(), null );
}

add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );
/**
 * Filter the HTML script tag of `font-awesome` script to add `defer` attribute.
 *
 * @param string $tag    The <script> tag for the enqueued script.
 * @param string $handle The script's registered handle.
 *
 * @return   Filtered HTML script tag.
 */
function add_defer_attribute( $tag, $handle ) {
    if ( 'font-awesome' === $handle ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}