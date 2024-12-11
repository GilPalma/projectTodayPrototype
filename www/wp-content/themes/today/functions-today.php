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
			get_parent_theme_file_uri( 'style-today.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'today_enqueue_styles' );