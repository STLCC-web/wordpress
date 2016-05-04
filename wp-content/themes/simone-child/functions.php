<?php
/**
 * Simone-child functions and definitions
 *
 * @package Simone
 */

/**
 * For child theme authors: To disable the styles and layouts from Simone properly,
 * add the following code to your child theme functions.php file:
 *
 * <?php
 * add_action( 'wp_enqueue_scripts', 'dequeue_parent_theme_styles', 11 );
 * function dequeue_parent_theme_styles() {
 *     wp_dequeue_style( 'simone-parent-style' );
 *     wp_dequeue_style( 'simone-layout' );
 * }
 *
 */


/* 
	Custom Element In Menu 
*/
add_action( 'after_setup_theme', 'stlcc_custom_menu_element' );
function stlcc_custom_menu_element () {
	$run_once = get_option('menu_check');
	if (!$run_once){
	    //the name of your menu
	    $name = 'menu_test';
	    //find the menu
	    $term = get_term_by('name', $name, 'nav_menu');
		
		//if menu does not exist create it and in both cases get the id
		if($term != false)
		{
			$menu_id = $term->term_id;
		}
		else
		{
			//create the menu
		    $menu_id = wp_create_nav_menu($name);
		    //then get the menu object by its name
		    $menu = get_term_by( 'name', $name, 'nav_menu' );
	
		}
		
	    //then add the actuall link/ menu item and you do this for each item you want to add
	    wp_update_nav_menu_item($menu->term_id, 0, array(
	        'menu-item-title' =>  __('Home2'),
	        'menu-item-classes' => 'home2',
	        'menu-item-url' => home_url( '/' ), 
	        'menu-item-status' => 'publish'));
	
	    //then you set the wanted theme  location
	    $locations = get_theme_mod('nav_menu_locations');
	    $locations['main-menu'] = $menu->term_id;
	    set_theme_mod( 'nav_menu_locations', $locations );
	
	    // then update the menu_check option to make sure this code only runs once
	    update_option('menu_check', true);
	}
}
/*
//create the top level menu item (home)
$top_menu = wp_update_nav_menu_item($menu->term_id, 0, array( 
    'menu-item-title' =>  __('Home'),
    'menu-item-classes' => 'home',
    'menu-item-url' => home_url( '/' ), 
    'menu-item-status' => 'publish'
    'menu-item-parent-id' => 0,
    ));
//Sub menu item (first child)
$first_child = wp_update_nav_menu_item($menu->term_id, 0, array( 
    'menu-item-title' =>  __('First_Child'),
    'menu-item-classes' => 'home',
    'menu-item-url' => home_url( '/' ), 
    'menu-item-status' => 'publish'
    'menu-item-parent-id' => $top_menu,
    ));
//Sub Sub menu item (first child)
$Second_child = wp_update_nav_menu_item($menu->term_id, 0, array( 
    'menu-item-title' =>  __('Second_Child'),
    'menu-item-classes' => 'home',
    'menu-item-url' => home_url( '/' ), 
    'menu-item-status' => 'publish'
    'menu-item-parent-id' => $first_child,
    ));*/
    
/*
	Custom JS
	
*/
add_action( 'wp_enqueue_scripts', 'add_stlcc_script' );
function add_stlcc_script() {
    wp_enqueue_script(
        'stlcc_js', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/stlcc.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}


/* 
	Custom Thumb sizes 
	
*/
add_action( 'after_setup_theme', 'stlcc_set_custom_thumb_size' );
function stlcc_set_custom_thumb_size() {
	
	/* As Seen On Faculty-Archive */
	add_image_size( 'stlcc-custom-size', 160, 160, true ); // 160 pixels wide by 160 pixels tall, hard crop mode
	
	/* As Seen On Single-Faculty */
	add_image_size( 'stlcc-custom-size-single', 200, 200, true ); // 160 pixels wide by 160 pixels tall, hard crop mode

}


/**
 * Implement the News CPT feature.
 */
require get_stylesheet_directory() . '/CPT/stlcc_news.php';

/**
 * Implement the Faculty CPT feature.
 */
require get_stylesheet_directory() . '/CPT/stlcc_faculty.php';

/**
 * Implement the Gallery Image CPT feature.
 */
require get_stylesheet_directory() . '/CPT/stlcc_gallery_image.php';

/**
 * Implement the Department CPT feature.
 */
require get_stylesheet_directory() . '/CPT/stlcc_department.php';


/**
 * Implement the Faculty CPT feature.
 */
//require get_stylesheet_directory() . '/cpt-events.php';

?>