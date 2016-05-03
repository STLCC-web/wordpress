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

add_action( 'after_setup_theme', 'stlcc_set_custom_thumb_size' );
function stlcc_set_custom_thumb_size() {
	add_image_size( 'stlcc-custom-size', 160, 160, true ); // 160 pixels wide by 160 pixels tall, hard crop mode
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