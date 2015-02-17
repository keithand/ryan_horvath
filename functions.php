<?php
/**
 * nerdyowl functions and definitions
 *
 * @package nerdyowl
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'my_simone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_simone_setup() {

	// This theme styles the visual editor to resemble the theme style.
	$font_url = 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic|Open+Sans:700';
	add_editor_style( array( 'inc/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nerdyowl, use a find and replace
	 * to change 'nerdyowl' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nerdyowl', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('large-thumb', 1060, 650, true);
	add_image_size('index-thumb', 780, 250, true);
	add_image_size('popular-link-images', 250, 250, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'nerdyowl' ),
		'social' => __('Social Menu', 'nerdyowl')
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'my_simone_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// add_theme_support('custom-header', array(
	// 	'width'	=> 200,
	// 	'default-image' => get_template_directory_uri() . '/images/logo.png',
	// 	'uploads'	=> true,
	// )) ;

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // my_simone_setup
add_action( 'after_setup_theme', 'my_simone_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function my_simone_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nerdyowl' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widget', 'nerdyowl' ),
		'descrition'    => __('Footer widgets area appears in the footer of the site.', 'nerdyowl'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


}
add_action( 'widgets_init', 'my_simone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function my_simone_scripts() {
	wp_enqueue_style( 'nerdyowl-style', get_stylesheet_uri() );

	if (is_page_template('page-templates/page-nosidebar.php')) {
	wp_enqueue_style( 'my-sinome-layout-style' , get_template_directory_uri() . '/layouts/no-sidebar.css');
	} else {
	wp_enqueue_style( 'my-sinome-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');
	}

	wp_enqueue_style( 'nerdyowl-icons', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'nerdyowl-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:300|Playfair+Display:700');

	wp_enqueue_script( 'nerdyowl-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'nerdyowl-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'nerdyowl-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20150203', true );

	wp_enqueue_script( 'nerdyowl-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('nerdyowl-superfish'), '20150203', true );

	wp_enqueue_script( 'nerdyowl-hide-search', get_template_directory_uri() . '/js/hide-search.js', array('jquery'), '20150203', true );

	wp_enqueue_script( 'nerdyowl-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140401', true );

	wp_enqueue_script( 'nerdyowl-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '20140401', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_simone_scripts' );

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
