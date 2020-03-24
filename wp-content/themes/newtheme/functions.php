<?php //add here all links to head
function load_stylesheets() {
	$url = ['bootstrap' => "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"];
	wp_register_style('bootstrap', $url['bootstrap'], array(), false, 'all');
	wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');