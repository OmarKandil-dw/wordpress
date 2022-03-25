<?php
/**
 * Smart Cleaning functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Smart Cleaning
 */

include get_theme_file_path( 'vendor/wptrt/autoload/src/Smart_Cleaning_Loader.php' );

$smart_cleaning_loader = new \WPTRT\Autoload\Smart_Cleaning_Loader();

$smart_cleaning_loader->smart_cleaning_add( 'WPTRT\\Customize\\Section', get_theme_file_path( 'vendor/wptrt/customize-section-button/src' ) );

$smart_cleaning_loader->smart_cleaning_register();

if ( ! function_exists( 'smart_cleaning_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function smart_cleaning_setup() {

		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'woocommerce' );
		
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

        add_image_size('smart-cleaning-featured-header-image', 2000, 660, true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary','smart-cleaning' ),
	        'footer'=> esc_html__( 'Footer Menu','smart-cleaning' ),
        ) );

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
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'smart_cleaning_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smart_cleaning_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smart_cleaning_content_width', 1170 );
}
add_action( 'after_setup_theme', 'smart_cleaning_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smart_cleaning_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'smart-cleaning' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'smart-cleaning' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'smart-cleaning' ),
		'id'            => 'smart-cleaning-footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'smart-cleaning' ),
		'id'            => 'smart-cleaning-footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'smart-cleaning' ),
		'id'            => 'smart-cleaning-footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="footer-column-widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'smart_cleaning_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smart_cleaning_scripts() {

	wp_enqueue_style('smart-cleaning-font', smart_cleaning_font_url(), array());

	wp_enqueue_style( 'smart-cleaning-block-editor-style', get_theme_file_uri('/assets/css/block-editor-style.css') );

	// load bootstrap css
    wp_enqueue_style( 'flatly-css', esc_url(get_template_directory_uri()) . '/assets/css/flatly.css');

	wp_enqueue_style( 'smart-cleaning-style', get_stylesheet_uri() );

	wp_style_add_data('smart-cleaning-style', 'rtl', 'replace');

	// fontawesome
	wp_enqueue_style( 'fontawesome-style', esc_url(get_template_directory_uri()).'/assets/css/fontawesome/css/all.css' );

	wp_enqueue_style( 'owl.carousel-style', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.css' );

    wp_enqueue_script('owl.carousel-js', esc_url(get_template_directory_uri()) . '/assets/js/owl.carousel.js', array('jquery'), '', true );

    wp_enqueue_script('smart-cleaning-theme-js', esc_url(get_template_directory_uri()) . '/assets/js/theme-script.js', array('jquery'), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smart_cleaning_scripts' );

/**
 * Enqueue theme color style.
 */
function smart_cleaning_theme_color() {

    $theme_color_css = '';
    $smart_cleaning_theme_color_one = get_theme_mod('smart_cleaning_theme_color_one');
    $smart_cleaning_theme_color_two = get_theme_mod('smart_cleaning_theme_color_two');
    $smart_cleaning_preloader_bg_color = get_theme_mod('smart_cleaning_preloader_bg_color');
    $smart_cleaning_preloader_dot_1_color = get_theme_mod('smart_cleaning_preloader_dot_1_color');
    $smart_cleaning_preloader_dot_2_color = get_theme_mod('smart_cleaning_preloader_dot_2_color');

    if(get_theme_mod('smart_cleaning_preloader_bg_color') == '') {
			$smart_cleaning_preloader_bg_color = '#000';
	}
	if(get_theme_mod('smart_cleaning_preloader_dot_1_color') == '') {
		$smart_cleaning_preloader_dot_1_color = '#fff';
	}
	if(get_theme_mod('smart_cleaning_preloader_dot_2_color') == '') {
		$smart_cleaning_preloader_dot_2_color = '#0e53ae';
	}

	$theme_color_css = '
		.socialmedia .main_header,.sidebar h5,.comment-respond input#submit,#button,#colophon,.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.sticky .entry-title::before,.main-navigation .sub-menu,.sidebar input[type="submit"], .sidebar button[type="submit"],.wp-block-button__link,.pro-button a, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce .woocommerce-ordering select,.woocommerce-account .woocommerce-MyAccount-navigation ul li,.btn-primary,.slide-btn a:hover, .servbtn a,.timebox,.toggle-nav i{
			background: '.esc_attr($smart_cleaning_theme_color_one).';
		}
		a,h1, h2, h3, h4, h5, h6,.sidebar ul li a:hover,.widget a:hover, .widget a:focus,.top-info i,.article-box a,p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce-message::before, .woocommerce-info::before,.featured-imagebox h4 a,.main-navigation .menu > li > a,.top-info p, .top-info span,#featured-topic h3,.main-navigation .sub-menu > li > a:hover, .main-navigation .sub-menu > li > a:focus,.featured-imagebox h4 a,.slide-btn a,.servbtn a:hover{
			color: '.esc_attr($smart_cleaning_theme_color_one).';
		}
		.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,.wp-block-pullquote,.wp-block-quote, .wp-block-quote:not(.is-large):not(.is-style-large), .wp-block-pullquote,.woocommerce-message, .woocommerce-info,.btn-primary{
			border-color: '.esc_attr($smart_cleaning_theme_color_one).';
		}


		.pro-button a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.main-navigation .sub-menu > li > a:hover, .main-navigation .sub-menu > li > a:focus,.slide-btn a,.servbtn a:hover,#button:hover{
			background: '.esc_attr($smart_cleaning_theme_color_two).';
		}
		.main_header i,,#colophon a:hover, #colophon a:focus{
			color: '.esc_attr($smart_cleaning_theme_color_two).';
		}
		.main-navigation .menu > li > a:hover{
			border-color: '.esc_attr($smart_cleaning_theme_color_two).';
		}
		.loading{
			background-color: '.esc_attr($smart_cleaning_preloader_bg_color).';
		 }
		 @keyframes loading {
		  0%,
		  100% {
		  	transform: translatey(-2.5rem);
		    background-color: '.esc_attr($smart_cleaning_preloader_dot_1_color).';
		  }
		  50% {
		  	transform: translatey(2.5rem);
		    background-color: '.esc_attr($smart_cleaning_preloader_dot_2_color).';
		  }
		}
	';
    wp_add_inline_style( 'smart-cleaning-style',$theme_color_css );	

}
add_action( 'wp_enqueue_scripts', 'smart_cleaning_theme_color' );

/**
 * Enqueue S Header.
 */
function smart_cleaning_sticky_header() {

  $smart_cleaning_sticky_header = get_theme_mod('smart_cleaning_sticky_header');

  $smart_cleaning_custom_style= "";

  if($smart_cleaning_sticky_header != true){

    $smart_cleaning_custom_style .='.stick_header{';

      $smart_cleaning_custom_style .='position: static;';
      
    $smart_cleaning_custom_style .='}';
  } 

  wp_add_inline_style( 'smart-cleaning-style',$smart_cleaning_custom_style );

}
add_action( 'wp_enqueue_scripts', 'smart_cleaning_sticky_header' );

function smart_cleaning_font_url(){
	$font_url = '';
	$Raleway = _x('on','Raleway:on or off','smart-cleaning');
	$Montserrat = _x('on','Montserrat:on or off','smart-cleaning');
	
	if('off' !== $Raleway ){
		$font_family = array();
		if('off' !== $Raleway){
			$font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
		}
		$font_family = array();
		if('off' !== $Montserrat){
			$font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
		}
		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	}
	return $font_url;
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*dropdown page sanitization*/
function smart_cleaning_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function smart_cleaning_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/*radio button sanitization*/
function smart_cleaning_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function smart_cleaning_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function smart_cleaning_sanitize_checkbox( $input ) {
  // Boolean check 
  return ( ( isset( $input ) && true == $input ) ? true : false );
}

/**
 * Get CSS
 */

function smart_cleaning_getpage_css($hook) {
	if ( 'appearance_page_smart-cleaning-info' != $hook ) {
		return;
	}
	wp_enqueue_style( 'smart-cleaning-demo-style', get_template_directory_uri() . '/assets/css/demo.css' );
}
add_action( 'admin_enqueue_scripts', 'smart_cleaning_getpage_css' );

add_action('after_switch_theme', 'smart_cleaning_setup_options');

function smart_cleaning_setup_options () {
	wp_redirect( admin_url() . 'themes.php?page=smart-cleaning-info.php' );
}

if ( ! defined( 'SMART_CLEANING_CONTACT_SUPPORT' ) ) {
define('SMART_CLEANING_CONTACT_SUPPORT',__('https://wordpress.org/support/theme/smart-cleaning','smart-cleaning'));
}
if ( ! defined( 'SMART_CLEANING_REVIEW' ) ) {
define('SMART_CLEANING_REVIEW',__('https://wordpress.org/support/theme/smart-cleaning/reviews/#new-post','smart-cleaning'));
}
if ( ! defined( 'SMART_CLEANING_LIVE_DEMO' ) ) {
define('SMART_CLEANING_LIVE_DEMO',__('https://themagnifico.net/eard/smart-cleaning/','smart-cleaning'));
}
if ( ! defined( 'SMART_CLEANING_GET_PREMIUM_PRO' ) ) {
define('SMART_CLEANING_GET_PREMIUM_PRO',__('https://www.themagnifico.net/themes/cleaning-wordpress-theme/','smart-cleaning'));
}
if ( ! defined( 'SMART_CLEANING_PRO_DOC' ) ) {
define('SMART_CLEANING_PRO_DOC',__('https://www.themagnifico.net/eard/wathiqa/smart-cleaning-pro-doc/','smart-cleaning'));
}

add_action('admin_menu', 'smart_cleaning_themepage');
function smart_cleaning_themepage(){
	$theme_info = add_theme_page( __('Theme Options','smart-cleaning'), __('Theme Options','smart-cleaning'), 'manage_options', 'smart-cleaning-info.php', 'smart_cleaning_info_page' );
}

function smart_cleaning_info_page() {
	$user = wp_get_current_user();
	$theme = wp_get_theme();
	?>
	<div class="wrap about-wrap smart-cleaning-add-css">
		<div>
			<h1>
				<?php esc_html_e('Welcome To ','smart-cleaning'); ?><?php echo esc_html( $theme ); ?>
			</h1>
			<div class="feature-section three-col">
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Contact Support", "smart-cleaning"); ?></h3>
						<p><?php esc_html_e("Thank you for trying Smart Cleaning , feel free to contact us for any support regarding our theme.", "smart-cleaning"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( SMART_CLEANING_CONTACT_SUPPORT ); ?>" class="button button-primary get">
							<?php esc_html_e("Contact Support", "smart-cleaning"); ?>
						</a></p>
					</div>
				</div>
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Checkout Premium", "smart-cleaning"); ?></h3>
						<p><?php esc_html_e("Our premium theme comes with extended features like demo content import , responsive layouts etc.", "smart-cleaning"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( SMART_CLEANING_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
							<?php esc_html_e("Get Premium", "smart-cleaning"); ?>
						</a></p>
					</div>
				</div>  
				<div class="col">
					<div class="widgets-holder-wrap">
						<h3><?php esc_html_e("Review", "smart-cleaning"); ?></h3>
						<p><?php esc_html_e("If You love Smart Cleaning theme then we would appreciate your review about our theme.", "smart-cleaning"); ?></p>
						<p><a target="_blank" href="<?php echo esc_url( SMART_CLEANING_REVIEW ); ?>" class="button button-primary get">
							<?php esc_html_e("Review", "smart-cleaning"); ?>
						</a></p>
					</div>
				</div>
			</div>
		</div>
		<hr>

		<h2><?php esc_html_e("Free Vs Premium","smart-cleaning"); ?></h2>
		<div class="smart-cleaning-button-container">
			<a target="_blank" href="<?php echo esc_url( SMART_CLEANING_PRO_DOC ); ?>" class="button button-primary get">
				<?php esc_html_e("Checkout Documentation", "smart-cleaning"); ?>
			</a>
			<a target="_blank" href="<?php echo esc_url( SMART_CLEANING_LIVE_DEMO ); ?>" class="button button-primary get">
				<?php esc_html_e("View Theme Demo", "smart-cleaning"); ?>
			</a>
		</div>


		<table class="wp-list-table widefat">
			<thead class="table-book">
				<tr>
					<th><strong><?php esc_html_e("Theme Feature", "smart-cleaning"); ?></strong></th>
					<th><strong><?php esc_html_e("Basic Version", "smart-cleaning"); ?></strong></th>
					<th><strong><?php esc_html_e("Premium Version", "smart-cleaning"); ?></strong></th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><?php esc_html_e("Header Background Color", "smart-cleaning"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Navigation Logo Or Text", "smart-cleaning"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Hide Logo Text", "smart-cleaning"); ?></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Premium Support", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Fully SEO Optimized", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Recent Posts Widget", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>

				<tr>
					<td><?php esc_html_e("Easy Google Fonts", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Pagespeed Plugin", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Header Image On Front Page", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Show Header Everywhere", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Custom Text On Header Image", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Full Width (Hide Sidebar)", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Only Show Upper Widgets On Front Page", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Replace Copyright Text", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Upper Widgets Colors", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Navigation Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Post/Page Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Blog Feed Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Footer Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Sidebar Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Customize Background Color", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
				<tr>
					<td><?php esc_html_e("Importable Demo Content	", "smart-cleaning"); ?></td>
					<td><span class="cross"><span class="dashicons dashicons-dismiss"></span></span></td>
					<td><span class="tick"><span class="dashicons dashicons-yes-alt"></span></span></td>
				</tr>
			</tbody>
		</table>
		<div class="smart-cleaning-button-container">
			<a target="_blank" href="<?php echo esc_url( SMART_CLEANING_GET_PREMIUM_PRO ); ?>" class="button button-primary get">
				<?php esc_html_e("Go Premium", "smart-cleaning"); ?>
			</a>
		</div>
	</div>
	<?php
}