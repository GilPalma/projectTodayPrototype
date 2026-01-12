<?php

// Enqueues file.css on the front. -- only required for non default files
// if ( ! function_exists( 'today_enqueue_styles' ) ) {
// 	function today_enqueue_styles() {
// 		wp_enqueue_style(
// 			'today',
// 			get_stylesheet_uri(),
// 			[],
// 			'0'
// 		);
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'today_enqueue_styles' );

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
