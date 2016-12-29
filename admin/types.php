<?php 	
//--------------------------  S E R V I C E   P O S T   ------------------------------
	function service_post_type() {

		$labels = array(
			'name'                  => _x( 'שירותי החברה', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'שירות', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'שירות', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל השירותים', 'text_domain' ),
			'add_new_item'          => __( 'שירות חדש', 'text_domain' ),
			'add_new'               => __( 'שירות חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Service', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array('service_cat'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'service ', $args );

	}
	add_action( 'init', 'service_post_type', 0 );

//--------------------------  E V E N T    P O S T   ------------------------------

	function eventpost_type() {

		$labels = array(
			'name'                  => _x( 'אירוע', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'אירוע', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'אירוע', 'text_domain' ),
			'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
			'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
			'all_items'             => __( 'כל האירועים', 'text_domain' ),
			'add_new_item'          => __( 'אירוע חדש', 'text_domain' ),
			'add_new'               => __( 'אירוע חדש', 'text_domain' ),
			'new_item'              => __( 'New Item', 'text_domain' ),
			'edit_item'             => __( 'Edit Item', 'text_domain' ),
			'update_item'           => __( 'Update Item', 'text_domain' ),
			'view_item'             => __( 'View Item', 'text_domain' ),
			'search_items'          => __( 'Search Item', 'text_domain' ),
			'not_found'             => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$args = array(
			'label'                 => __( 'Event', 'text_domain' ),
			'description'           => __( 'Post Type Description', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'event ', $args );
	}
	add_action( 'init', 'eventpost_type', 0 );