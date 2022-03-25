<?php
/**
 * Smart Cleaning Services functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smart Cleaning Services
 */

if ( ! defined( 'SMART_CLEANING_URL' ) ) {
    define( 'SMART_CLEANING_URL', esc_url( 'https://www.themagnifico.net/themes/cleaning-services-wordpress-theme/', 'smart-cleaning-services') );
}
if ( ! defined( 'SMART_CLEANING_TEXT' ) ) {
    define( 'SMART_CLEANING_TEXT', __( 'Cleaning Services Pro','smart-cleaning-services' ));
}

function smart_cleaning_services_enqueue_styles() {
    wp_enqueue_style('smart-cleaning-services-font', smart_cleaning_font_url(), array());
    wp_enqueue_style( 'flatly-css', esc_url(get_template_directory_uri()) . '/assets/css/flatly.css');
    $parentcss = 'smart-cleaning-style';
    $theme = wp_get_theme(); wp_enqueue_style( $parentcss, get_template_directory_uri() . '/style.css', array(), $theme->parent()->get('Version'));
    wp_enqueue_style( 'smart-cleaning-services-style', get_stylesheet_uri(), array( $parentcss ), $theme->get('Version'));

    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );  
}

add_action( 'wp_enqueue_scripts', 'smart_cleaning_services_enqueue_styles' );

function smart_cleaning_services_admin_scripts() {
    // demo CSS
    wp_enqueue_style( 'smart-cleaning-services-demo-css', get_theme_file_uri( 'assets/css/demo.css' ) );
}
add_action( 'admin_enqueue_scripts', 'smart_cleaning_services_admin_scripts' );

function smart_cleaning_services_customize_register($wp_customize){
    //What we do Section
    $wp_customize->add_section('smart_cleaning_services_serivces',array(
        'title' => esc_html__('What we do Section','smart-cleaning-services'),
        'description' => esc_html__('Here you have to select category which will display perticular latest blogs in the home page.','smart-cleaning-services'),
        'priority' => 5,
    ));
    
    $wp_customize->add_setting('smart_cleaning_services_services_category_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('smart_cleaning_services_services_category_title', array(
        'label' => __('Section Title', 'smart-cleaning-services'),
        'section' => 'smart_cleaning_services_serivces',
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

    $wp_customize->add_setting('smart_cleaning_services_menu_items',array(
        'default'   => 'select',
        'sanitize_callback' => 'smart_cleaning_services_sanitize_select',
    ));
    $wp_customize->add_control('smart_cleaning_services_menu_items',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select Category to display Services','smart-cleaning-services'),
        'section' => 'smart_cleaning_services_serivces',
    ));
}
add_action('customize_register', 'smart_cleaning_services_customize_register');

if ( ! function_exists( 'smart_cleaning_services_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function smart_cleaning_services_setup() {

        add_theme_support( 'responsive-embeds' );

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

        add_image_size('smart-cleaning-services-featured-header-image', 2000, 660, true);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'smart_cleaning_custom_background_args', array(
            'default-color' => '',
            'default-image' => '',
        ) ) );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 50,
            'width'       => 50,
            'flex-width'  => true,
        ) );

        add_editor_style( array( '/editor-style.css' ) );

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'smart_cleaning_services_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smart_cleaning_services_widgets_init() {
        register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'smart-cleaning-services' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'smart-cleaning-services' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h5 class="widget-title">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'smart_cleaning_services_widgets_init' );

function smart_cleaning_services_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'smart_cleaning_color_option' );
    $wp_customize->remove_section( 'smart_cleaning_general_settings' );

 
}
add_action( 'customize_register', 'smart_cleaning_services_remove_customize_register', 11 );

function smart_cleaning_services_sanitize_select( $input, $setting ){
    $input = sanitize_key($input);
    $choices = $setting->manager->get_control( $setting->id )->choices;
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

if ( ! defined( 'SMART_CLEANING_CONTACT_SUPPORT' ) ) {
define('SMART_CLEANING_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/smart-cleaning-services','smart-cleaning-services'));
}
if ( ! defined( 'SMART_CLEANING_REVIEW' ) ) {
define('SMART_CLEANING_REVIEW',__('https://wordpress.org/support/theme/smart-cleaning-services/reviews/#new-post','smart-cleaning-services'));
}
if ( ! defined( 'SMART_CLEANING_LIVE_DEMO' ) ) {
define('SMART_CLEANING_LIVE_DEMO',__('https://www.themagnifico.net/eard/cleaning-services/','smart-cleaning-services'));
}
if ( ! defined( 'SMART_CLEANING_GET_PREMIUM_PRO' ) ) {
define('SMART_CLEANING_GET_PREMIUM_PRO',__('https://www.themagnifico.net/themes/cleaning-services-wordpress-theme/','smart-cleaning-services'));
}
if ( ! defined( 'SMART_CLEANING_PRO_DOC' ) ) {
define('SMART_CLEANING_PRO_DOC',__('https://www.themagnifico.net/eard/wathiqa/smart-cleaning-services-pro-doc/','smart-cleaning-services'));
}