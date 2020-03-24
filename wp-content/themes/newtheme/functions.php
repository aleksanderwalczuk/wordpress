<?php //add here all links to head

$fileUrl = [
	'bootstrap' => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
	'myCss' => '/style.css'
];

function load_stylesheets() {
	$fileUrl = [
		'bootstrap' => "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css",
		'myCss' => '/style.css'
	];
	wp_register_style('bootstrap', $fileUrl['bootstrap']);
	wp_enqueue_style('bootstrap');

	wp_register_style('myStyles', get_template_directory_uri() . $fileUrl['myCss']);
	wp_enqueue_style('myStyles');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js() {
	$fileUrl = [
		'customJS' => "/js/scripts.js",
	];

	wp_register_script('customjs', get_template_directory_uri() . $fileUrl['customJS'] , '', 1, true);
	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

register_nav_menus(
	[
//		those are visible in WP admin panel -> Appearance
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Bot_Menu', 'theme')
	]
);