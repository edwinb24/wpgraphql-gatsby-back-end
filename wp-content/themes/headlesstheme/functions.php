<?php
// function trabajando_site_theme_enqueue_styles() {
//     wp_enqueue_style( 'custom_styles', get_stylesheet_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all' );
// }
// function trabajando_site_theme_enqueue_script() {
// 	 wp_enqueue_script( 'custom_script', get_stylesheet_directory_uri() . '/assets/js/libs.js', array(), '1.0', 'all'  );
// }

// add_action( 'wp_enqueue_scripts', 'trabajando_site_theme_enqueue_styles' );
// add_action( 'wp_enqueue_scripts', 'trabajando_site_theme_enqueue_script' );

function trabajando_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary','Primary Header Navigation');
}	

add_action('init','trabajando_theme_setup');

/*
	==============================================
		Custom Post Type
	==============================================
	Create custom post type "Projects"
	Remember this post type is not serchable and this value might need to be change if this WP install is change from a headless one
*/

function my_custom_post_type () {
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'add_new' => 'Add Project',
		'all_items' => 'All Projects',
		'add_new_item' => 'Add Project',
		'edit_item' => 'Edit Item',
		'new_item' =>  'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'show_in_rest' => true,
		'show_in_graphql' => true,
		'graphql_single_name' => 'Project',
		'graphql_plural_name' => 'Projects',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revision'
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position'=> 4,
		'exclude_from_search' => false
	);
	register_post_type('project',$args);
}

add_action( 'init', 'my_custom_post_type' );

