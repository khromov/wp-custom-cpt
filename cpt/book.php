<?php
add_action('init', 'cptui_register_my_cpt_book');
function cptui_register_my_cpt_book() {
	register_post_type('book', array(
		'label' => 'Books',
		'description' => 'A database of books.',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'book', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			'name' => 'Books',
			'singular_name' => 'Book',
			'menu_name' => 'Books',
			'add_new' => 'Add Book',
			'add_new_item' => 'Add New Book',
			'edit' => 'Edit',
			'edit_item' => 'Edit Book',
			'new_item' => 'New Book',
			'view' => 'View Book',
			'view_item' => 'View Book',
			'search_items' => 'Search Books',
			'not_found' => 'No Books Found',
			'not_found_in_trash' => 'No Books Found in Trash',
			'parent' => 'Parent Book',
		)
	) ); }