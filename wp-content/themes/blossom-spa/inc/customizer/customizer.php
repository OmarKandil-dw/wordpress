<?php
/**
 * Blossom Spa Theme Customizer
 *
 * @package Blossom_Spa
 */

/**
 * Requiring customizer panels & sections
*/
$blossom_spa_panels       = array( 'info', 'site', 'appearance', 'layout', 'home', 'general', 'footer' );

foreach( $blossom_spa_panels as $p ){
   require get_template_directory() . '/inc/customizer/' . $p . '.php';
}

/**
 * Sanitization Functions
*/
require get_template_directory() . '/inc/customizer/sanitization-functions.php';

/**
 * Active Callbacks
*/
require get_template_directory() . '/inc/customizer/active-callback.php';

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function blossom_spa_customize_preview_js() {
	wp_enqueue_script( 'blossom-spa-customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), BLOSSOM_SPA_THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'blossom_spa_customize_preview_js' );

function blossom_spa_customize_script(){
    $array = array(
        'home'    => get_home_url(),
    );
    wp_enqueue_style( 'blossom-spa-customize', get_template_directory_uri() . '/inc/css/customize.css', array(), BLOSSOM_SPA_THEME_VERSION );
    wp_enqueue_script( 'blossom-spa-customize', get_template_directory_uri() . '/inc/js/customize.js', array( 'jquery', 'customize-controls' ), BLOSSOM_SPA_THEME_VERSION, true );
    wp_localize_script( 'blossom-spa-customize', 'blossom_spa_cdata', $array );

    wp_localize_script( 'blossom-spa-repeater', 'blossom_spa_customize',
		array(
			'nonce' => wp_create_nonce( 'blossom_spa_customize_nonce' )
		)
	);
}
add_action( 'customize_controls_enqueue_scripts', 'blossom_spa_customize_script' );