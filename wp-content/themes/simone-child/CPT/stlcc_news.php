<?php
/**
 * Simone-child News Custom Post Type 
 *
 * @package Simone
 */

/**
 * Implement the News CPT feature.
 */

/**
 * Custom Post Type support for this theme.
 */
function stlcc_news_post_type() {
    $lables = array(
        'name' => 'News',
        'singular_name' => 'News Item',
        'add_new' => 'Add New',
        'all_items' => 'All News',
        'add_new_item' => 'Add News Item',
        'edit_item' => 'Edit News Item',
        'new_item' => 'New News Item',
        'view_item' => 'View News Item',
        'search_item' => 'Search News',
        'not_found' => 'No News Items Found',
        'not_found_in_trash' => 'No News Items Found in Trash',
        'parent_item_colon' => 'Parent News Item'
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
        'menu_icon' => 'dashicons-megaphone',
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
    
    register_post_type('News', $args);
}

add_action('init', 'stlcc_news_post_type');

/**
 * Custom Taxonomy
 */

function stlcc_custom_taxonomies() {
	$labels = array(
		'name' => 'Campus',
		'singular_name' => 'Campus',
		'search_items' => 'Search Campus',
		'parent_item' => 'Parent Campus',
		'menu_name' => 'Campus'		
	);
	
	$args = array (
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'campus')
	);
	
	register_taxonomy('campus', array('faculty'), $args);
    }
add_action ('init', 'stlcc_custom_taxonomies');

/*
add_filter ("manage_edit-news_columns", "news_edit_columns");
add_action ("manage_posts_custom_column", "news_custom_columns");

function news_edit_columns($columns) {

    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "tf_col_ev_cat" => "Category",
        "tf_col_ev_date" => "Dates",
        "tf_col_ev_times" => "Times",
        "tf_col_ev_thumb" => "Thumbnail",
        "title" => "Event",
        "tf_col_ev_desc" => "Description",
        );

    return $columns;

}

function news_custom_columns($column) {

    global $post;
    $custom = get_post_custom();
    switch ($column)

        {
            case "tf_col_ev_cat":
                // - show taxonomy terms -
                $eventcats = get_the_terms($post->ID, "tf_eventcategory");
                $eventcats_html = array();
                if ($eventcats) {
                    foreach ($eventcats as $eventcat)
                    array_push($eventcats_html, $eventcat->name);
                    echo implode($eventcats_html, ", ");
                } else {
                _e('None', 'themeforce');;
                }
            break;
            case "tf_col_ev_date":
                // - show dates -
                $startd = $custom["tf_events_startdate"][0];
                $endd = $custom["tf_events_enddate"][0];
                $startdate = date("F j, Y", $startd);
                $enddate = date("F j, Y", $endd);
                echo $startdate . '<br /><em>' . $enddate . '</em>';
            break;
            case "tf_col_ev_times":
                // - show times -
                $startt = $custom["tf_events_startdate"][0];
                $endt = $custom["tf_events_enddate"][0];
                $time_format = get_option('time_format');
                $starttime = date($time_format, $startt);
                $endtime = date($time_format, $endt);
                echo $starttime . ' - ' .$endtime;
            break;
            case "tf_col_ev_thumb":
                // - show thumb -
                $post_image_id = get_post_thumbnail_id(get_the_ID());
                if ($post_image_id) {
                    $thumbnail = wp_get_attachment_image_src( $post_image_id, 'post-thumbnail', false);
                    if ($thumbnail) (string)$thumbnail = $thumbnail[0];
                    echo '<img src="';
                    echo bloginfo('template_url');
                    echo '/timthumb/timthumb.php?src=';
                    echo $thumbnail;
                    echo '&h=60&w=60&zc=1" alt="" />';
                }
            break;
            case "tf_col_ev_desc";
                the_excerpt();
            break;

        }
}*/
?>