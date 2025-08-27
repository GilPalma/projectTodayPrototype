<?php

// Enqueues style.css on the front.
if ( ! function_exists( 'today_enqueue_styles' ) ) {
	function today_enqueue_styles() {
		wp_enqueue_style(
			'today',
			get_stylesheet_uri()
		);
	}
}
add_action( 'wp_enqueue_scripts', 'today_enqueue_styles' );

if ( ! function_exists( 'today_enqueue_scripts' ) ) {
	function today_enqueue_scripts() {
		wp_enqueue_script(
			'todayCustom-navigation',
			get_parent_theme_file_uri( 'assets/js/navigation.js' ),
			array(),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'today_enqueue_scripts' );
