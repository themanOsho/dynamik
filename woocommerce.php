<?php
/**
 * WooCommerce Compatibility File for Dynamik Theme
 *
 * @package Dynamik
 */

/**
 * Declare WooCommerce support.
 */
function dynamik_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'dynamik_woocommerce_setup' );

/**
 * Enqueue WooCommerce styles.
 */
function dynamik_woocommerce_styles() {
	if ( class_exists( 'WooCommerce' ) ) {
		$css_path = get_template_directory() . '/assets/css/woocommerce.css';
		wp_enqueue_style( 'dynamik-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), filemtime( $css_path ) );
	}
}
add_action( 'wp_enqueue_scripts', 'dynamik_woocommerce_styles' );

/**
 * Modify WooCommerce wrapper structure.
 */
function dynamik_before_woocommerce_wrapper() {
	echo '<div class="container woocommerce-wrapper">';
}
add_action( 'woocommerce_before_main_content', 'dynamik_before_woocommerce_wrapper', 10 );

function dynamik_after_woocommerce_wrapper() {
	echo '</div>'; // Close .woocommerce-wrapper
}
add_action( 'woocommerce_after_main_content', 'dynamik_after_woocommerce_wrapper', 10 );
