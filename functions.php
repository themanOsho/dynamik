<?php
/**
 * Dynamik Theme Functions
 *
 * @package Dynamik
 */

// Prevent direct file access.
defined( 'ABSPATH' ) || exit;

/**
 * Theme Setup Function
 */
function dynamik_theme_setup() {
	// Add support for title tag.
	add_theme_support( 'title-tag' );

	// Enable featured images.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'dynamik' ),
			'footer'  => __( 'Footer Menu', 'dynamik' ),
		)
	);

	// Add support for HTML5 elements.
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// WooCommerce support.
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'dynamik_theme_setup' );

/**
 * Enqueue Styles and Scripts
 */
function dynamik_enqueue_assets() {
	// Theme stylesheet (with cache busting).
	wp_enqueue_style( 'dynamik-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	// Custom script file (with cache busting).
	wp_enqueue_script( 'dynamik-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), filemtime( get_template_directory() . '/assets/js/scripts.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'dynamik_enqueue_assets' );

/**
 * Register Sidebar Widget Area
 */
function dynamik_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Main Sidebar', 'dynamik' ),
			'id'            => 'main-sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 1', 'dynamik' ),
			'id'            => 'footer-widget-1',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 2', 'dynamik' ),
			'id'            => 'footer-widget-2',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'dynamik_widgets_init' );
