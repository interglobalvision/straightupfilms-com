<?php
add_action( 'init', 'register_cpt_film' );

function register_cpt_film() {

    $labels = array( 
        'name' => _x( 'Films', 'film' ),
        'singular_name' => _x( 'film', 'film' ),
        'add_new' => _x( 'Add New', 'film' ),
        'add_new_item' => _x( 'Add New film', 'film' ),
        'edit_item' => _x( 'Edit film', 'film' ),
        'new_item' => _x( 'New film', 'film' ),
        'view_item' => _x( 'View film', 'film' ),
        'search_items' => _x( 'Search Films', 'film' ),
        'not_found' => _x( 'No films found', 'film' ),
        'not_found_in_trash' => _x( 'No films found in Trash', 'film' ),
        'parent_item_colon' => _x( 'Parent film:', 'film' ),
        'menu_name' => _x( 'Films', 'film' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'film', $args );
}

add_action( 'init', 'register_cpt_team' );

function register_cpt_team() {

    $labels = array( 
        'name' => _x( 'Team', 'team' ),
        'singular_name' => _x( 'Team', 'team' ),
        'add_new' => _x( 'Add New', 'team' ),
        'add_new_item' => _x( 'Add New Team', 'team' ),
        'edit_item' => _x( 'Edit Team', 'team' ),
        'new_item' => _x( 'New Team', 'team' ),
        'view_item' => _x( 'View Team', 'team' ),
        'search_items' => _x( 'Search Team', 'team' ),
        'not_found' => _x( 'No team found', 'team' ),
        'not_found_in_trash' => _x( 'No team found in Trash', 'team' ),
        'parent_item_colon' => _x( 'Parent Team:', 'team' ),
        'menu_name' => _x( 'Team', 'team' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team', $args );
}

add_action( 'init', 'register_cpt_words' );

function register_cpt_words() {

    $labels = array( 
        'name' => _x( 'Word', 'words' ),
        'singular_name' => _x( 'Words', 'words' ),
        'add_new' => _x( 'Add New', 'words' ),
        'add_new_item' => _x( 'Add New Words', 'words' ),
        'edit_item' => _x( 'Edit Words', 'words' ),
        'new_item' => _x( 'New Words', 'words' ),
        'view_item' => _x( 'View Words', 'words' ),
        'search_items' => _x( 'Search Word', 'words' ),
        'not_found' => _x( 'No word found', 'words' ),
        'not_found_in_trash' => _x( 'No word found in Trash', 'words' ),
        'parent_item_colon' => _x( 'Parent Words:', 'words' ),
        'menu_name' => _x( 'Word', 'words' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'words', $args );
}

/*
add_action( 'init', 'register_cpt_press' );

function register_cpt_press() {
$labels = array( 
        'name' => _x( 'Press', 'press' ),
        'singular_name' => _x( 'Press', 'press' ),
        'add_new' => _x( 'Add New', 'press' ),
        'add_new_item' => _x( 'Add New' , 'press' ),
        'edit_item' => _x( 'Edit' , 'press' ),
        'new_item' => _x( 'New' , 'press' ),
        'view_item' => _x( 'View' , 'press' ),
        'search_items' => _x( 'Search ' . 'Press', 'press' ),
        'not_found' => _x( 'None found' , 'press' ),
        'not_found_in_trash' => _x( 'None found in Trash', 'press' ),
        'parent_item_colon' => _x( 'Parent:', 'press' ),
        'menu_name' => _x( 'Press', 'press' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'taxonomies' => array( 'post_tag', 'category '),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'press' , $args );
}
*/
?>