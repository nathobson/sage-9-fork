<?php
/**
 * Custom post types
 */


/*******************************
-> Board        
*******************************/

add_action( 'init', 'register_board', 0 );

function register_board()
{

    $name = 'Board';
    $single = 'Board member';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'revisions' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-groups',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page'
    );
    register_post_type( 'board', $args );
}

/*******************************
-> News
*******************************/

add_action( 'init', 'register_news', 0 );

function register_news()
{

    $name = 'News';
    $single = 'News item';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'revisions', 'author' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-admin-comments',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    // 'rewrite' => array('slug' => 'news-item'),
    );
    register_post_type( 'news', $args );
}
    
/*******************************
-> Reports        
*******************************/

add_action( 'init', 'register_reports', 0 );

function register_reports()
{

    $name = 'Reports';
    $single = 'Report';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'revisions' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-media-spreadsheet',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    );
    register_post_type( 'reports', $args );
}

/*******************************
-> Presentations        
*******************************/

add_action( 'init', 'register_presentations', 0 );

function register_presentations()
{

    $name = 'Presentations';
    $single = 'Presentation';

    $labels = array(
    'name'                => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( $single, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( $name, 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
    'all_items'           => __( "All $name", 'text_domain' ),
    'view_item'           => __( 'View', 'text_domain' ),
    'add_new_item'        => __( 'Add new', 'text_domain' ),
    'add_new'             => __( 'Add new', 'text_domain' ),
    'edit_item'           => __( 'Edit', 'text_domain' ),
    'update_item'         => __( 'Update', 'text_domain' ),
    'search_items'        => __( 'Search', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
    'label'               => __( $name, 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'revisions' ),
    'hierarchical'        => true,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 30,
    'menu_icon'           => 'dashicons-media-interactive',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
    );
    register_post_type( 'presentations', $args );
}