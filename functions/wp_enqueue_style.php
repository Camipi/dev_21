<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'bootstrap', get_theme_file_uri( '/node_modules/bootstrap/scss/bootstrap'), null, $theme_data->get( '4.1' ), 'screen' );
	wp_register_style( 'fontawesomne', get_theme_file_uri( '/node_modules/@fortawesome/fontawesome-free/scss/fontawesome'), null, $theme_data->get( '5.3.1' ), 'screen' );
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/app.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );

	wp_register_style( 'fancybox', get_theme_file_uri( '/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );

	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'fancybox' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
