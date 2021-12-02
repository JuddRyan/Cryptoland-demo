<?php

function add_support() {
	add_theme_support( 'title-tag' );
	add_theme_support('post-thumbnail');
	add_image_size( 'hero-image', 1980, 300, ['left', 'top'] );
	add_theme_support( 'custom-logo', [
		'height' => 100,
		'widht' => 200,
		'unlink-homepage-logo' => true
	] );
}

add_action( 'after_setup_theme', 'add_support' );