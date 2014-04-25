<?php
add_action('init', 'cptui_register_my_cpt_author');
function cptui_register_my_cpt_author() {
	register_post_type('book-author', array(
		'label' => 'Authors',
		'description' => 'A database of authors.',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'author', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
		'labels' => array (
			'name' => 'Authors',
			'singular_name' => 'Author',
			'menu_name' => 'Authors',
			'add_new' => 'Add Author',
			'add_new_item' => 'Add New Author',
			'edit' => 'Edit',
			'edit_item' => 'Edit Author',
			'new_item' => 'New Author',
			'view' => 'View Author',
			'view_item' => 'View Author',
			'search_items' => 'Search Authors',
			'not_found' => 'No Authors Found',
			'not_found_in_trash' => 'No Authors Found in Trash',
			'parent' => 'Parent Author',
		)
	) ); }