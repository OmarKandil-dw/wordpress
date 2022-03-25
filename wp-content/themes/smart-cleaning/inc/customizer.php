<?php
/**
 * Smart Cleaning Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Smart Cleaning
 */

if ( ! defined( 'SMART_CLEANING_URL' ) ) {
    define( 'SMART_CLEANING_URL', esc_url( 'https://www.themagnifico.net/themes/cleaning-wordpress-theme/', 'smart-cleaning') );
}
if ( ! defined( 'SMART_CLEANING_TEXT' ) ) {
    define( 'SMART_CLEANING_TEXT', __( 'Smart Cleaning Pro','smart-cleaning' ));
}

use WPTRT\Customize\Section\Smart_Cleaning_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Smart_Cleaning_Button::class );

    $manager->add_section(
        new Smart_Cleaning_Button( $manager, 'smart_cleaning_pro', [
            'title'       => esc_html( SMART_CLEANING_TEXT,'smart-cleaning' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'smart-cleaning' ),
            'button_url'  => esc_url( SMART_CLEANING_URL )
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'smart-cleaning-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'smart-cleaning-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function smart_cleaning_customize_register($wp_customize){
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    
    // Theme Color
    $wp_customize->add_section('smart_cleaning_color_option',array(
        'title' => esc_html__('Theme Color','smart-cleaning'),
        'description' => esc_html__('Change theme color on one click.','smart-cleaning'),
    ));

    $wp_customize->add_setting( 'smart_cleaning_theme_color_one', array(
        'default' => '#0e53ae',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'smart_cleaning_theme_color_one', array(
        'label' => esc_html__('Color Option One','smart-cleaning'),
        'section' => 'smart_cleaning_color_option',
        'settings' => 'smart_cleaning_theme_color_one' 
    )));

    $wp_customize->add_setting( 'smart_cleaning_theme_color_two', array(
        'default' => '#02feff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'smart_cleaning_theme_color_two', array(
        'label' => esc_html__('Color Option Two','smart-cleaning'),
        'section' => 'smart_cleaning_color_option',
        'settings' => 'smart_cleaning_theme_color_two' 
    )));

    // Header
    $wp_customize->add_section('smart_cleaning_header_top',array(
        'title' => esc_html__('Header','smart-cleaning'),
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_email',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email'
    ));
    $wp_customize->add_control('smart_cleaning_topbar_email',array(
        'label' => esc_html__('Email Address','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_email',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_text1',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_text1',array(
        'label' => esc_html__('Text 1','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_text1',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_link1',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_link1',array(
        'label' => esc_html__('Link 1','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_link1',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_text2',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_text2',array(
        'label' => esc_html__('Text 2','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_text2',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_link2',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_link2',array(
        'label' => esc_html__('Link 2','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_link2',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_text3',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_text3',array(
        'label' => esc_html__('Text 3','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_text3',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_topbar_link3',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_topbar_link3',array(
        'label' => esc_html__('Link 3','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_topbar_link3',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_header_location',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_header_location',array(
        'label' => esc_html__('Location','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_header_location',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_header_phone',array(
        'default' => '',
        'sanitize_callback' => 'smart_cleaning_sanitize_phone_number'
    )); 
    $wp_customize->add_control('smart_cleaning_header_phone',array(
        'label' => esc_html__('Phone Number','smart-cleaning'),
        'section' => 'smart_cleaning_header_top',
        'setting' => 'smart_cleaning_header_phone',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'smart_cleaning_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'smart_cleaning_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'smart-cleaning' ),
        'section'        => 'smart_cleaning_header_top',
        'settings'       => 'smart_cleaning_sticky_header',
        'type'           => 'checkbox',
    )));

    // General Settings
     $wp_customize->add_section('smart_cleaning_general_settings',array(
        'title' => esc_html__('General Settings','smart-cleaning'),
        'description' => esc_html__('General settings of our theme.','smart-cleaning'),
        'priority'   => 30,
    ));

    $wp_customize->add_setting('smart_cleaning_preloader_hide', array(
        'default' => '1',
        'sanitize_callback' => 'smart_cleaning_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'smart_cleaning_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'smart-cleaning' ),
        'section'        => 'smart_cleaning_general_settings',
        'settings'       => 'smart_cleaning_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'smart_cleaning_preloader_bg_color', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'smart_cleaning_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','smart-cleaning'),
        'section' => 'smart_cleaning_general_settings',
        'settings' => 'smart_cleaning_preloader_bg_color' 
    )));
    
    $wp_customize->add_setting( 'smart_cleaning_preloader_dot_1_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'smart_cleaning_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','smart-cleaning'),
        'section' => 'smart_cleaning_general_settings',
        'settings' => 'smart_cleaning_preloader_dot_1_color' 
    )));

    $wp_customize->add_setting( 'smart_cleaning_preloader_dot_2_color', array(
        'default' => '#0e53ae',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'smart_cleaning_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','smart-cleaning'),
        'section' => 'smart_cleaning_general_settings',
        'settings' => 'smart_cleaning_preloader_dot_2_color' 
    )));
    
    // Social Link
    $wp_customize->add_section('smart_cleaning_social_link',array(
        'title' => esc_html__('Social Links','smart-cleaning'),
    ));

    $wp_customize->add_setting('smart_cleaning_facebook_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_facebook_url',array(
        'label' => esc_html__('Facebook Link','smart-cleaning'),
        'section' => 'smart_cleaning_social_link',
        'setting' => 'smart_cleaning_facebook_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_twitter_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_twitter_url',array(
        'label' => esc_html__('Twitter Link','smart-cleaning'),
        'section' => 'smart_cleaning_social_link',
        'setting' => 'smart_cleaning_twitter_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_intagram_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_intagram_url',array(
        'label' => esc_html__('Intagram Link','smart-cleaning'),
        'section' => 'smart_cleaning_social_link',
        'setting' => 'smart_cleaning_intagram_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_linkedin_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_linkedin_url',array(
        'label' => esc_html__('Linkedin Link','smart-cleaning'),
        'section' => 'smart_cleaning_social_link',
        'setting' => 'smart_cleaning_linkedin_url',
        'type'  => 'url'
    ));

    $wp_customize->add_setting('smart_cleaning_pintrest_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    )); 
    $wp_customize->add_control('smart_cleaning_pintrest_url',array(
        'label' => esc_html__('Pinterest Link','smart-cleaning'),
        'section' => 'smart_cleaning_social_link',
        'setting' => 'smart_cleaning_pintrest_url',
        'type'  => 'url'
    ));

    //Slider
    $wp_customize->add_section('smart_cleaning_top_slider',array(
        'title' => esc_html__('Slider Option','smart-cleaning'),        
    ));

    for ( $count = 1; $count <= 3; $count++ ) {
        $wp_customize->add_setting( 'smart_cleaning_top_slider_page' . $count, array(
            'default'           => '',
            'sanitize_callback' => 'smart_cleaning_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'smart_cleaning_top_slider_page' . $count, array(
            'label'    => __( 'Select Slide Page', 'smart-cleaning' ),
            'section'  => 'smart_cleaning_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    $wp_customize->add_setting('smart_cleaning_slide_day',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_slide_day',array(
        'label' => esc_html__('Days','smart-cleaning'),
        'description' => esc_html__('Ex: Friday - Sunday','smart-cleaning'),
        'section' => 'smart_cleaning_top_slider',
        'setting' => 'smart_cleaning_slide_day',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('smart_cleaning_slide_time',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    )); 
    $wp_customize->add_control('smart_cleaning_slide_time',array(
        'label' => esc_html__('Time','smart-cleaning'),
        'description' => esc_html__('Ex: 9:00am to 9:00pm','smart-cleaning'),
        'section' => 'smart_cleaning_top_slider',
        'setting' => 'smart_cleaning_slide_time',
        'type'  => 'text'
    ));

    // Special Services
    $wp_customize->add_section('smart_cleaning_featured_category',array(
        'title' => esc_html__('Our Services','smart-cleaning'),
    ));

    $wp_customize->add_setting('smart_cleaning_featured_category_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('smart_cleaning_featured_category_title', array(
        'label' => __('Section Title', 'smart-cleaning'),
        'section' => 'smart_cleaning_featured_category',
        'priority' => 1,
        'type' => 'text',
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0; 
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('smart_cleaning_featured_category_1',array(
        'default'   => 'select',
        'sanitize_callback' => 'smart_cleaning_sanitize_choices',
    ));
    $wp_customize->add_control('smart_cleaning_featured_category_1',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display box post','smart-cleaning'),
        'section' => 'smart_cleaning_featured_category',
    ));

    // Footer
    $wp_customize->add_section('smart_cleaning_site_footer_section', array(
        'title' => esc_html__('Footer', 'smart-cleaning'),
    ));

    $wp_customize->add_setting('smart_cleaning_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('smart_cleaning_footer_text_setting', array(
        'label' => __('Replace the footer text', 'smart-cleaning'),
        'section' => 'smart_cleaning_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));
}
add_action('customize_register', 'smart_cleaning_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function smart_cleaning_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function smart_cleaning_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function smart_cleaning_customize_preview_js(){
    wp_enqueue_script('smart-cleaning-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'smart_cleaning_customize_preview_js');