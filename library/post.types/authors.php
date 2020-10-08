<?php // register author post type

    function authors_post_type() {

    	register_post_type( 'author',

    		array(

    			'labels' => array(

    				'name' 				=> __( 'Authors', 'state' ),
    				'singular_name' 	=> __( 'Author', 'state' ),
    				'all_items' 		=> __( 'All Authors', 'state' ),
    				'add_new' 			=> __( 'Add Author', 'state' ),
    				'add_new_item' 		=> __( 'Add New Author', 'state' ),
    				'edit' 				=> __( 'Edit', 'state' ),
    				'edit_item' 		=> __( 'Edit Author', 'state' ),
    				'new_item' 			=> __( 'New Author', 'state' ),
    				'search_items' 		=> __( 'Search Authors', 'state' ),
    				'not_found' 		=> __( 'Nothing to see here, which is bad, because billboards are meant to be seen.', 'state' ),
    				'parent_item_colon' => ''

    			),

    			'public'				=> true,
    			'publicly_queryable' 	=> true,
    			'exclude_from_search'   => true,
    			'show_ui' 				=> true,
    			'show_in_nav_menus' 	=> false,
    			'show_in_admin_bar' 	=> false,
    			'query_var' 			=> true,
    			'can_export' 			=> true,
    			'rewrite' 				=> array( 'slug' => 'authors', 'with_front' => false ),
    			'has_archive' 			=> true,
    			'capability_type' 		=> 'post',
    			'hierarchical' 			=> false,
    			'menu_position' 		=> 25,
    			'menu_icon' 			=> 'dashicons-groups',
    			'supports' 				=> array( 'title', 'thumbnail' )

    		)

    	);

    }

    add_action( 'init', 'authors_post_type' );
