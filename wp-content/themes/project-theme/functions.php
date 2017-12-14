<?php

function add_dish_type_taxonomy(){

	//set the name of the taxonomy
	$taxonomy = 'dish_type';
	//set the post types for the taxonomy
	$object_type = 'dish';


	//define arguments to be used
	$args = array(
		'label'             => "Dish types",
		'hierarchical'      => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','add_dish_type_taxonomy');


function add_drink_type_taxonomy(){

	//set the name of the taxonomy
	$taxonomy = 'drink_type';
	//set the post types for the taxonomy
	$object_type = 'drink';


	//define arguments to be used
	$args = array(
		'label'             => "Drink types",
		'hierarchical'      => true
	);

	//call the register_taxonomy function
	register_taxonomy($taxonomy, $object_type, $args);
}
add_action('init','add_drink_type_taxonomy');


/*
 * Here it creates the custom post type "dish".
 */
add_action( 'init', 'dish_post_init' );

function dish_post_init() {

	$labels = array(
		'name'               => ( 'Dishes'),
		'singular_name'      => ( 'Dish'),

	);

	$args = array(

		'labels'             => $labels,
		'public'             => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'dish', $args );
}

add_action( 'init', 'drink_post_init' );

function drink_post_init() {

	$labels = array(
		'name'               => ( 'Drinks'),
		'singular_name'      => ( 'Drink'),

	);

	$args = array(

		'labels'             => $labels,
		'public'             => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'drink', $args );
}

add_action( 'init', 'gallery_post_init' );

function gallery_post_init() {

	$labels = array(
		'name'               => ( 'Gallery'),
		'singular_name'      => ( 'Image'),

	);

	$args = array(

		'labels'             => $labels,
		'public'             => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'gallery', $args );
}



add_action( 'init', 'buffet_post_type' );

function buffet_post_type() {

	$labels = array(
		'name'               => ( 'Buffets'),
		'singular_name'      => ( 'Buffet'),

	);

	$args = array(

		'labels'             => $labels,
		'public'             => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
	);

	register_post_type( 'buffet', $args );
}


/**
 * Add new menu
 */

add_action( 'after_setup_theme', 'register_page_menu' );
function register_page_menu() {
	register_nav_menu( 'header-nav', 'Page menu' );
}





/*
 * Adds the following theme supports
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );



/**
 * Add custom image support
 */

add_image_size( 'grid_thumbnail', 300, 300, true );
add_image_size( 'single_large', 660, 400, false );
add_image_size( 'gallery_post', 500, 400, false );

add_action( 'wp_enqueue_scripts', 'load_stylesheet' );
function load_stylesheet() {
	wp_enqueue_style( 'styles', get_stylesheet_uri() . "/style.css" );
}

?>
