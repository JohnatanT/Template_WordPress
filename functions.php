<?php
add_theme_support('post-thumbnails');

register_nav_menu("menu-principal","Menu Pricipal");

register_nav_menu("menu-footer","Menu Footer");

add_action('init','post_galeria');

function post_galeria(){
	$labels = array(
		'name' => 'Galeria',
		'singular_name' => 'Galeria'
	);

	$args = array(
		'labels' => $labels,
		'description' => 'Galeria de Imagens',
		'menu_icon' => 'dashicons-images-alt2',
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'galeria'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','author','thumbnail')
	);

	register_post_type('galeria',$args);
}