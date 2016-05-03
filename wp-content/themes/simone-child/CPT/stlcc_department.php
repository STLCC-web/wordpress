<?php
/**
 * Simone-child Department Custom Post Type 
 *
 * @package Simone
 */

/**
 * Custom Post Type support for this theme.
 */
function stlcc_department_post_type() {
    $lables = array(
        'name' => 'Department',
        'singular_name' => 'Department',
        'add_new' => 'Add Department',
        'all_items' => 'All Departments',
        'add_new_item' => 'Add Department',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Department',
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
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revision'
            ),
         'taxonomies' => array (
             'menu_position' => 5,
             'exclude_from_search' => false         
         )
    );
    
    register_post_type('department', $args);
}

add_action('init', 'stlcc_department_post_type');



?>