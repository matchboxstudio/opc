<?php
/* Bones Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

Developed by: Eddie Machado
URL: http://themble.com/bones/
*/


// let's create the function for the custom type
function custom_post_example() { 
	// creating (registering) the custom type 
	register_post_type( 'suite', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Available Suites', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Suite', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Suites', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Suite', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Suites', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Suite', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Suite', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Suite', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the list of available suites.', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/blueprint-horizontal.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'suite', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'suite', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'custom_type');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'custom_type');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'property', 
    	array('suite'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Property', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Property', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Properties', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Properties', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Property', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Property:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Property', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Property', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Property', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Property Name', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'property' ),
    	)
    );   
    
	

?>
