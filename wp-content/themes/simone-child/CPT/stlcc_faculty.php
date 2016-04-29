<?php
/**
 * Simone-child Faculty Custom Post Type 
 *
 * @package Simone
 */

/**
 * Custom Post Type support for this theme.
 */
function stlcc_faculty_post_type() {
    $lables = array(
        'name' => 'Faculty',
        'singular_name' => 'Faculty Member',
        'add_new' => 'Add Faculty Member',
        'all_items' => 'All Faculty Members',
        'add_new_item' => 'Add Faculty Member',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Faculty',
        'not_found' => 'No Items Found',
        'not_found_in_trash' => 'No Items Found in Trash',
        'parent_item_colon' => 'Parent Item'
    );
    
    $args = array(
        'labels' => $lables,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revision'
            ),
         'taxonomies' => array (
             'menu_position' => 5,
             'exclude_from_search' => false         
         )
    );
    
    register_post_type('faculty', $args);
}

add_action('init', 'stlcc_faculty_post_type');



?>