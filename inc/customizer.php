<?php
/**
 * colton Theme Customizer
 *
 * @package colton
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function colton_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'colton_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'colton_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'colton_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function colton_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function colton_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function colton_customize_preview_js() {
	wp_enqueue_script( 'colton-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'colton_customize_preview_js' );

add_action( 'wp_enqueue_scripts', 'colton_include_js' );
function colton_include_js(){
    wp_enqueue_script( 'newscript', get_template_directory_uri() . '/dist/js/app.js', [], '1', true, 99999);
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/dist/css/style.css'  );
}

