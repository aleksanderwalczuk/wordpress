<?php //add here all links to head
function load_stylesheets() {
	$url = ['bootstrap' => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"];
	wp_register_style('bootstrap', $url['bootstrap']);
	wp_enqueue_style('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');