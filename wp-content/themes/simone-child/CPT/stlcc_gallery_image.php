<?php
/**
 * Simone-child Gallery Image Custom Post Type 
 *
 * @package Simone
 */

/**
 * Custom Post Type support for this theme.
 */
function stlcc_gallery_image_post_type() {
    $lables = array(
        'name' => 'Gallery Image',
        'singular_name' => 'Image',
        'add_new' => 'Add Image',
        'all_items' => 'All Images',
        'add_new_item' => 'Add Image',
        'edit_item' => 'Edit Image',
        'new_item' => 'New Image',
        'view_item' => 'View Image',
        'search_item' => 'Search Images',
        'not_found' => 'No Images Found',
        'not_found_in_trash' => 'No Images Found in Trash',
        'parent_item_colon' => 'Parent Gallery'
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
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array(
            'title',
            //'thumbnail',
            'revision'
            ),
         'taxonomies' => array (
             'menu_position' => 5,
             'exclude_from_search' => false         
         )
    );
    
    register_post_type('gallery_image', $args);
}

add_action('init', 'stlcc_gallery_image_post_type');



?>