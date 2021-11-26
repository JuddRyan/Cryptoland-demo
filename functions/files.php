<?php
function load_styles_and_scripts() {
	wp_enqueue_style( 'main', get_theme_file_uri( '/dist/css/main.css' ), [], '0.1');
	wp_enqueue_script('app', get_theme_file_uri( '/dist/css/app.js' ), [], '0.1');
}

add_action( 'wp_enqueue_scripts', 'load_styles_and_scripts');