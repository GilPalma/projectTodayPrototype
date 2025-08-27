<?php

// Enqueues style.css on the front.
if ( ! function_exists( 'today_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function today_enqueue_styles() {
		wp_enqueue_style( 
			'today', 
			get_stylesheet_uri()
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'today_enqueue_styles' );


// function custom_footer(){
// 	echo '<span>123</span>';
// }
// add_action('wp_footer', 'custom_footer');