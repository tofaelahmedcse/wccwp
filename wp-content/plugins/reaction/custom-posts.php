<?php
    /*
    Plugin Name: Custom Post Types & Taxonomies
    Plugin URI:  http://reaction.ca
    Version:     1.0
    Author:      Reaction
    Author URI:  http://reaction.ca
    Description: Post types and taxonomies created by Reaction for the customization of the Private Lender Link website. Simply edit this file and do a find and replace for NICENAME and variable.
    Text Domain: reaction
    Domain Path: /lang
     */



    // Register Custom Taxonomy
    function craft_taxonomies() {

	 //FAQ Categories
    $faq_categories_labels = array(
			'name'                       => _x( 'FAQ Categories', 'Taxonomy General Name', 'reaction' ),
			'singular_name'              => _x( 'FAQ Category', 'Taxonomy Singular Name', 'reaction' ),
			'menu_name'                  => __( 'FAQ Categories', 'reaction' ),
			'all_items'                  => __( 'All FAQ Categories', 'reaction' ),
			'parent_item'                => __( 'Parent Category', 'reaction' ),
			'parent_item_colon'          => __( 'Parent Category:', 'reaction' ),
			'new_item_name'              => __( 'New Category', 'reaction' ),
			'add_new_item'               => __( 'Add Category', 'reaction' ),
			'edit_item'                  => __( 'Edit Category', 'reaction' ),
			'update_item'                => __( 'Update Category', 'reaction' ),
			'view_item'                  => __( 'View Category', 'reaction' ),
			'separate_items_with_commas' => __( 'Separate FAQ Categories with commas', 'reaction' ),
			'add_or_remove_items'        => __( 'Add or remove FAQ Categories', 'reaction' ),
			'choose_from_most_used'      => __( 'Choose from the most used FAQ Categories', 'reaction' ),
			'popular_items'              => __( 'Popular FAQ Categories', 'reaction' ),
			'search_items'               => __( 'Search FAQ Categories', 'reaction' ),
			'not_found'                  => __( 'FAQ Categories Not Found', 'reaction' ),
		);

		$faq_categories_args = array(
			'labels'                     => $faq_categories_labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);

	  //register_taxonomy( 'faq_categories', array( 'faq' ), $faq_categories_args );


    }

    // Hook into the 'init' action
    add_action( 'init', 'craft_taxonomies', 0 );





    // Register Custom Post Type
    function craft_post_types() {


      // Team
      $team_labels = array(
        'name'                => _x( 'Teams', 'Post Type General Name', 'reaction' ),
        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'reaction' ),
        'menu_name'           => __( 'Teams', 'reaction' ),
        'name_admin_bar'      => __( 'Teams', 'reaction' ),
        'parent_item_colon'   => __( 'Parent:', 'reaction' ),
        'all_items'           => __( 'All Teams', 'reaction' ),
        'add_new_item'        => __( 'Add New Team', 'reaction' ),
        'add_new'             => __( 'Add New', 'reaction' ),
        'new_item'            => __( 'New', 'reaction' ),
        'edit_item'           => __( 'Edit', 'reaction' ),
        'update_item'         => __( 'Update', 'reaction' ),
        'view_item'           => __( 'View', 'reaction' ),
        'search_items'        => __( 'Search Teams', 'reaction' ),
        'not_found'           => __( 'No Teams found', 'reaction' ),
        'not_found_in_trash'  => __( 'No Teams found in Trash', 'reaction' ),
      );

      $team_args = array(
        'label'               => __( 'Teams', 'reaction' ),
        'description'         => __( 'Teams', 'reaction' ),
        'labels'              => $team_labels,
        'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 10,
        'menu_icon'           => 'dashicons-id',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'publicly_queryable'  => false,
        'capability_type'     => 'page',
      );


      //register_post_type( 'team', $team_args );


        // Careers
        $career_labels = array(
            'name'                => _x( 'Careers', 'Post Type General Name', 'reaction' ),
            'singular_name'       => _x( 'Career', 'Post Type Singular Name', 'reaction' ),
            'menu_name'           => __( 'Careers', 'reaction' ),
            'name_admin_bar'      => __( 'Careers', 'reaction' ),
            'parent_item_colon'   => __( 'Parent:', 'reaction' ),
            'all_items'           => __( 'All Careers', 'reaction' ),
            'add_new_item'        => __( 'Add New Career', 'reaction' ),
            'add_new'             => __( 'Add New', 'reaction' ),
            'new_item'            => __( 'New', 'reaction' ),
            'edit_item'           => __( 'Edit', 'reaction' ),
            'update_item'         => __( 'Update', 'reaction' ),
            'view_item'           => __( 'View', 'reaction' ),
            'search_items'        => __( 'Search Careers', 'reaction' ),
            'not_found'           => __( 'No Careers found', 'reaction' ),
            'not_found_in_trash'  => __( 'No Careers found in Trash', 'reaction' ),
        );

        $career_args = array(
            'label'               => __( 'Careers', 'reaction' ),
            'description'         => __( 'Careers', 'reaction' ),
            'labels'              => $career_labels,
            'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 11,
            'menu_icon'           => 'dashicons-format-aside',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );


        //register_post_type( 'career', $career_args );


        // FAQs
        $faqs_labels = array(
            'name'                => _x( 'FAQs', 'Post Type General Name', 'reaction' ),
            'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'reaction' ),
            'menu_name'           => __( 'FAQs', 'reaction' ),
            'name_admin_bar'      => __( 'FAQs', 'reaction' ),
            'parent_item_colon'   => __( 'Parent:', 'reaction' ),
            'all_items'           => __( 'All FAQs', 'reaction' ),
            'add_new_item'        => __( 'Add New FAQ', 'reaction' ),
            'add_new'             => __( 'Add New', 'reaction' ),
            'new_item'            => __( 'New', 'reaction' ),
            'edit_item'           => __( 'Edit', 'reaction' ),
            'update_item'         => __( 'Update', 'reaction' ),
            'view_item'           => __( 'View', 'reaction' ),
            'search_items'        => __( 'Search FAQs', 'reaction' ),
            'not_found'           => __( 'No FAQs found', 'reaction' ),
            'not_found_in_trash'  => __( 'No FAQs found in Trash', 'reaction' ),
        );

        $faqs_args = array(
            'label'               => __( 'FAQs', 'reaction' ),
            'description'         => __( 'FAQs', 'reaction' ),
            'labels'              => $faqs_labels,
            'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 12,
            'menu_icon'           => 'dashicons-media-text',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'page',
        );
        //register_post_type( 'faq', $faqs_args );


        // Events
        $events_labels = array(
            'name'                => _x( 'Events', 'Post Type General Name', 'reaction' ),
            'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'reaction' ),
            'menu_name'           => __( 'Events', 'reaction' ),
            'name_admin_bar'      => __( 'Events', 'reaction' ),
            'parent_item_colon'   => __( 'Parent:', 'reaction' ),
            'all_items'           => __( 'All Events', 'reaction' ),
            'add_new_item'        => __( 'Add New Event', 'reaction' ),
            'add_new'             => __( 'Add New', 'reaction' ),
            'new_item'            => __( 'New', 'reaction' ),
            'edit_item'           => __( 'Edit', 'reaction' ),
            'update_item'         => __( 'Update', 'reaction' ),
            'view_item'           => __( 'View', 'reaction' ),
            'search_items'        => __( 'Search Events', 'reaction' ),
            'not_found'           => __( 'No Events found', 'reaction' ),
            'not_found_in_trash'  => __( 'No Events found in Trash', 'reaction' ),
        );

        $events_args = array(
            'label'               => __( 'Events', 'reaction' ),
            'description'         => __( 'Events', 'reaction' ),
            'labels'              => $events_labels,
            'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 13,
            'menu_icon'           => 'dashicons-nametag',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );

        //register_post_type( 'event', $events_args );


        // Testimonials
        $testimonial_labels = array(
            'name'                => _x( 'Testimonials', 'Post Type General Name', 'reaction' ),
            'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'reaction' ),
            'menu_name'           => __( 'Testimonials', 'reaction' ),
            'name_admin_bar'      => __( 'Testimonials', 'reaction' ),
            'parent_item_colon'   => __( 'Parent:', 'reaction' ),
            'all_items'           => __( 'All Testimonials', 'reaction' ),
            'add_new_item'        => __( 'Add New Testimonial', 'reaction' ),
            'add_new'             => __( 'Add New', 'reaction' ),
            'new_item'            => __( 'New', 'reaction' ),
            'edit_item'           => __( 'Edit', 'reaction' ),
            'update_item'         => __( 'Update', 'reaction' ),
            'view_item'           => __( 'View', 'reaction' ),
            'search_items'        => __( 'Search Testimonials', 'reaction' ),
            'not_found'           => __( 'No Testimonials found', 'reaction' ),
            'not_found_in_trash'  => __( 'No Testimonials found in Trash', 'reaction' ),
        );

        $testimonial_args = array(
            'label'               => __( 'Testimonials', 'reaction' ),
            'description'         => __( 'Testimonials', 'reaction' ),
            'labels'              => $testimonial_labels,
            'supports'            => array( 'title','editor', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 14,
            'menu_icon'           => 'dashicons-money',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'page',
        );

        //register_post_type( 'testimonial', $testimonial_args );


        // Testimonials
        $location_labels = array(
            'name'                => _x( 'Locations', 'Post Type General Name', 'reaction' ),
            'singular_name'       => _x( 'Location', 'Post Type Singular Name', 'reaction' ),
            'menu_name'           => __( 'Locations', 'reaction' ),
            'name_admin_bar'      => __( 'Locations', 'reaction' ),
            'parent_item_colon'   => __( 'Parent:', 'reaction' ),
            'all_items'           => __( 'All Locations', 'reaction' ),
            'add_new_item'        => __( 'Add New Location', 'reaction' ),
            'add_new'             => __( 'Add New', 'reaction' ),
            'new_item'            => __( 'New', 'reaction' ),
            'edit_item'           => __( 'Edit', 'reaction' ),
            'update_item'         => __( 'Update', 'reaction' ),
            'view_item'           => __( 'View', 'reaction' ),
            'search_items'        => __( 'Search Locations', 'reaction' ),
            'not_found'           => __( 'No Locations found', 'reaction' ),
            'not_found_in_trash'  => __( 'No Locations found in Trash', 'reaction' ),
        );

        $location_args = array(
            'label'               => __( 'Locations', 'reaction' ),
            'description'         => __( 'Locations', 'reaction' ),
            'labels'              => $location_labels,
            'supports'            => array( 'title', 'author', 'thumbnail', 'revisions', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 15,
            'menu_icon'           => 'dashicons-location',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );

        //register_post_type( 'location', $location_args );

    }
// Hooking up our function to theme setup
add_action( 'init', 'craft_post_types' );