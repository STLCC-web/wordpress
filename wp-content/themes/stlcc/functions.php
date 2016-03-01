<?php
/**
 * STLCC functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package STLCC
 */

if ( ! function_exists( 'stlcc_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function stlcc_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on STLCC, use a find and replace
	 * to change 'stlcc' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'stlcc', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'stlcc' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'stlcc_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'stlcc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stlcc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stlcc_content_width', 640 );
}
add_action( 'after_setup_theme', 'stlcc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stlcc_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'stlcc' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'stlcc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stlcc_scripts() {
	wp_enqueue_style( 'stlcc-style', get_stylesheet_uri() );

	wp_enqueue_script( 'stlcc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'stlcc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stlcc_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

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

/**
 *
 * Removing Element from Dashboard Menu
 */
 
 function stlcc_menu_page_removing() {
 
     remove_menu_page( 'edit-comments.php' );          //Comments
     
    /*remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'jetpack' );                    //Jetpack 
    remove_menu_page( 'edit.php' );                   //Posts
    remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit.php?post_type=page' );    //Pages
    remove_menu_page( 'themes.php' );                 //Appearance
    remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
    */
}

add_action( 'admin_menu', 'stlcc_menu_page_removing' );
 
 
/**
 * Custom Post Type Archive link support for the menu.
 *
add_filter('wp_list_pages', 'new_nav_menu_items');
add_filter('wp_nav_menu_items', 'new_nav_menu_items');
function new_nav_menu_items($items) {
	global $wp_query;
	$class = 'menu-item menu-item-type-post_type menu-item-object-page';
	foreach ($GLOBALS['posttypelinks'] as $link) {
		$items .= '<li class="' . $classes . ' ' . (isset($wp_query->query_vars['post_type']) && $wp_query->query_vars['post_type'] == $link['post_type'] ? 'current_page_item' : '') . '"><a href="' . site_url() . '/' . $link['slug'] . '">' . $link['title'] . '</a></li>';
	}
	return $items;
}

$GLOBALS['posttypelinks'][] = array(
	'title' => $title,
	'post_type' => $post_type,
	'slug' => $slug
);*/
