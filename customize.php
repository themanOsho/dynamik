<?php
/**
 * Theme Customizer for Dynamik Theme
 *
 * @package Dynamik
 */

function dynamik_customize_register( $wp_customize ) {
    // Add a new panel for Dynamik theme options
    $wp_customize->add_panel( 'dynamik_panel', array(
        'title'       => __( 'Dynamik Theme Settings', 'dynamik' ),
        'priority'    => 160,
    ));

    // Add a section for Site Logo
    $wp_customize->add_section( 'dynamik_site_logo', array(
        'title'       => __( 'Site Logo', 'dynamik' ),
        'priority'    => 10,
        'panel'       => 'dynamik_panel',
    ));

    // Add setting for the logo
    $wp_customize->add_setting( 'dynamik_logo', array(
        'default'   => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add control for the logo upload
    $wp_customize->add_control( new WP_Customize_Image_Control(
        $wp_customize,
        'dynamik_logo_control',
        array(
            'label'    => __( 'Upload Logo', 'dynamik' ),
            'section'  => 'dynamik_site_logo',
            'settings' => 'dynamik_logo',
        )
    ));
}
add_action( 'customize_register', 'dynamik_customize_register' );
