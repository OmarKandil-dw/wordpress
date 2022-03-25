<?php
/**
 * Expert Consultant: Customizer
 *
 * @subpackage Expert Consultant
 * @since 1.0
 */

use WPTRT\Customize\Section\Expert_Consultant_Button;

add_action( 'customize_register', function( $manager ) {

	$manager->register_section_type( Expert_Consultant_Button::class );

	$manager->add_section(
		new Expert_Consultant_Button( $manager, 'expert_consultant_pro', [
			'title'      => __( 'Expert Consultant Pro', 'expert-consultant' ),
			'priority'    => 0,
			'button_text' => __( 'Go Pro', 'expert-consultant' ),
			'button_url'  => esc_url( 'https://www.luzuk.com/product/consultant-wordpress-theme/', 'expert-consultant')
		] )
	);

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script(
		'expert-consultant-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
		[ 'customize-controls' ],
		$version,
		true
	);

	wp_enqueue_style(
		'expert-consultant-customize-section-button',
		get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
		[ 'customize-controls' ],
 		$version
	);

} );

function expert_consultant_customize_register( $wp_customize ) {

	$wp_customize->add_setting('expert_consultant_logo_margin',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('expert_consultant_logo_margin',array(
		'label' => __('Logo Margin','expert-consultant'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_consultant_logo_top_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_consultant_sanitize_float'
	));
	$wp_customize->add_control('expert_consultant_logo_top_margin',array(
		'type' => 'number',
		'description' => __('Top','expert-consultant'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_consultant_logo_bottom_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_consultant_sanitize_float'
	));
	$wp_customize->add_control('expert_consultant_logo_bottom_margin',array(
		'type' => 'number',
		'description' => __('Bottom','expert-consultant'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_consultant_logo_left_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_consultant_sanitize_float'
	));
	$wp_customize->add_control('expert_consultant_logo_left_margin',array(
		'type' => 'number',
		'description' => __('Left','expert-consultant'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('expert_consultant_logo_right_margin',array(
		'default' => '',
		'sanitize_callback'	=> 'expert_consultant_sanitize_float'
 	));
 	$wp_customize->add_control('expert_consultant_logo_right_margin',array(
		'type' => 'number',
		'description' => __('Right','expert-consultant'),
		'section' => 'title_tagline',
    ));

	$wp_customize->add_setting('expert_consultant_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_consultant_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_consultant_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','expert-consultant'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('expert_consultant_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'expert_consultant_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_consultant_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','expert-consultant'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_panel( 'expert_consultant_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'expert-consultant' ),
		'description' => __( 'Description of what this panel does.', 'expert-consultant' ),
	) );

	$wp_customize->add_section( 'expert_consultant_theme_options_section', array(
    	'title'      => __( 'General Settings', 'expert-consultant' ),
		'priority'   => 30,
		'panel' => 'expert_consultant_panel_id'
	) );

	$wp_customize->add_setting('expert_consultant_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_consultant_sanitize_choices'
	));
	$wp_customize->add_control('expert_consultant_theme_options',array(
		'type' => 'select',
		'label' => __('Blog Page Sidebar Layout','expert-consultant'),
		'section' => 'expert_consultant_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','expert-consultant'),
		   'Right Sidebar' => __('Right Sidebar','expert-consultant'),
		   'One Column' => __('One Column','expert-consultant'),
		   'Grid Layout' => __('Grid Layout','expert-consultant')
		),
	));

	$wp_customize->add_setting('expert_consultant_single_post_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_consultant_sanitize_choices'
	));
	$wp_customize->add_control('expert_consultant_single_post_sidebar',array(
        'type' => 'select',
        'label' => __('Single Post Sidebar Layout','expert-consultant'),
        'section' => 'expert_consultant_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-consultant'),
            'Right Sidebar' => __('Right Sidebar','expert-consultant'),
            'One Column' => __('One Column','expert-consultant')
        ),
	));

	$wp_customize->add_setting('expert_consultant_page_sidebar',array(
		'default' => 'One Column',
		'sanitize_callback' => 'expert_consultant_sanitize_choices'
	));
	$wp_customize->add_control('expert_consultant_page_sidebar',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','expert-consultant'),
        'section' => 'expert_consultant_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-consultant'),
            'Right Sidebar' => __('Right Sidebar','expert-consultant'),
            'One Column' => __('One Column','expert-consultant')
        ),
	));

	$wp_customize->add_setting('expert_consultant_archive_page_sidebar',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'expert_consultant_sanitize_choices'
	));
	$wp_customize->add_control('expert_consultant_archive_page_sidebar',array(
        'type' => 'select',
        'label' => __('Archive & Search Page Sidebar Layout','expert-consultant'),
        'section' => 'expert_consultant_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','expert-consultant'),
            'Right Sidebar' => __('Right Sidebar','expert-consultant'),
            'One Column' => __('One Column','expert-consultant'),
            'Grid Layout' => __('Grid Layout','expert-consultant')
        ),
	));

	//Header
	$wp_customize->add_section( 'expert_consultant_header_section' , array(
    	'title'    => __( 'Header', 'expert-consultant' ),
		'priority' => null,
		'panel' => 'expert_consultant_panel_id'
	) );

	$wp_customize->add_setting('expert_consultant_topbar_text',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('expert_consultant_topbar_text',array(
	   	'type' => 'text',
	   	'label' => __('Add Topbar Text','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_email',array(
    	'default' => '',
    	'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('expert_consultant_email',array(
	   	'type' => 'text',
	   	'label' => __('Add Email Address','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_phoneno',array(
    	'default' => '',
    	'sanitize_callback'	=> 'expert_consultant_sanitize_phone_number'
	));
	$wp_customize->add_control('expert_consultant_phoneno',array(
	   	'type' => 'text',
	   	'label' => __('Add Phone Number','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_facebook_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_consultant_facebook_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Facebook URL','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_twitter_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_consultant_twitter_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Twitter URL','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_youtube_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_consultant_youtube_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Youtube URL','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	$wp_customize->add_setting('expert_consultant_instagram_url',array(
    	'default' => '',
    	'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('expert_consultant_instagram_url',array(
	   	'type' => 'url',
	   	'label' => __('Add Instagram URL','expert-consultant'),
	   	'section' => 'expert_consultant_header_section',
	));

	//home page slider
	$wp_customize->add_section( 'expert_consultant_slider_section' , array(
    	'title'    => __( 'Slider Settings', 'expert-consultant' ),
		'priority' => null,
		'panel' => 'expert_consultant_panel_id'
	) );

	$wp_customize->add_setting('expert_consultant_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'expert_consultant_sanitize_checkbox'
	));
	$wp_customize->add_control('expert_consultant_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Slider','expert-consultant'),
	   	'section' => 'expert_consultant_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'expert_consultant_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'expert_consultant_sanitize_dropdown_pages'
		));
		$wp_customize->add_control( 'expert_consultant_slider' . $count, array(
			'label' => __('Select Slider Image Page', 'expert-consultant' ),
			'description' => __('Image Size (625px x 600px)', 'expert-consultant' ),
			'section' => 'expert_consultant_slider_section',
			'type' => 'dropdown-pages'
		));
	}

	//Services Section
	$wp_customize->add_section('expert_consultant_services_section',array(
		'title'	=> __('Services Section','expert-consultant'),
		'description'=> __('This section will appear below the slider.','expert-consultant'),
		'panel' => 'expert_consultant_panel_id',
	));

    $wp_customize->add_setting('expert_consultant_small_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_consultant_small_title',array(
		'label'	=> __('Small Title','expert-consultant'),
		'section' => 'expert_consultant_services_section',
		'type' => 'text'
	));

    $wp_customize->add_setting('expert_consultant_section_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_consultant_section_title',array(
		'label'	=> __('Section Title','expert-consultant'),
		'section' => 'expert_consultant_services_section',
		'type' => 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('expert_consultant_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'expert_consultant_sanitize_choices',
	));
	$wp_customize->add_control('expert_consultant_category_setting',array(
		'type' => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','expert-consultant'),
		'section' => 'expert_consultant_services_section',
	));

	$wp_customize->add_setting('expert_consultant_service_number',array(
		'default'	=> '3',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('expert_consultant_service_number',array(
		'label'	=> __('Number of posts to show in a category','expert-consultant'),
		'description' => __('Image Size (625px x 600px)', 'expert-consultant' ),
		'section' => 'expert_consultant_services_section',
		'type'	  => 'number'
	));

	$expert_consultant_service_number = get_theme_mod('expert_consultant_service_number', 3);
	for ($i=1; $i <= $expert_consultant_service_number; $i++) { 
	   	$wp_customize->add_setting('expert_consultant_service_icon' . $i, array(
	      	'default' => 'fas fa-chart-line',
	      	'sanitize_callback' => 'sanitize_text_field'
	   	));
	   	$wp_customize->add_control(new Expert_Consultant_Fontawesome_Icon_Chooser($wp_customize, 'expert_consultant_service_icon' . $i, array(
	      	'section' => 'expert_consultant_services_section',
	      	'type' => 'icon',
	      	'label' => esc_html__('Service Icon ', 'expert-consultant') . $i
	  	)));
	}

	//Footer
    $wp_customize->add_section( 'expert_consultant_footer', array(
    	'title'  => __( 'Footer Text', 'expert-consultant' ),
		'priority' => null,
		'panel' => 'expert_consultant_panel_id'
	) );

	$wp_customize->add_setting('expert_consultant_show_back_totop',array(
       'default' => true,
       'sanitize_callback'	=> 'expert_consultant_sanitize_checkbox'
    ));
    $wp_customize->add_control('expert_consultant_show_back_totop',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Back to Top','expert-consultant'),
       'section' => 'expert_consultant_footer'
    ));

    $wp_customize->add_setting('expert_consultant_footer_copy',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('expert_consultant_footer_copy',array(
		'label'	=> __('Footer Text','expert-consultant'),
		'section' => 'expert_consultant_footer',
		'setting' => 'expert_consultant_footer_copy',
		'type' => 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'expert_consultant_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'expert_consultant_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'expert_consultant_customize_register' );

function expert_consultant_customize_partial_blogname() {
	bloginfo( 'name' );
}

function expert_consultant_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function expert_consultant_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function expert_consultant_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

if (class_exists('WP_Customize_Control')) {

   	class Expert_Consultant_Fontawesome_Icon_Chooser extends WP_Customize_Control {

      	public $type = 'icon';

      	public function render_content() { ?>
	     	<label>
	            <span class="customize-control-title">
	               <?php echo esc_html($this->label); ?>
	            </span>

	            <?php if ($this->description) { ?>
	                <span class="description customize-control-description">
	                   <?php echo wp_kses_post($this->description); ?>
	                </span>
	            <?php } ?>

	            <div class="expert-consultant-selected-icon">
	                <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
	                <span><i class="fa fa-angle-down"></i></span>
	            </div>

	            <ul class="expert-consultant-icon-list clearfix">
	                <?php
	                $expert_consultant_font_awesome_icon_array = expert_consultant_font_awesome_icon_array();
	                foreach ($expert_consultant_font_awesome_icon_array as $expert_consultant_font_awesome_icon) {
	                   $icon_class = $this->value() == $expert_consultant_font_awesome_icon ? 'icon-active' : '';
	                   echo '<li class=' . esc_attr($icon_class) . '><i class="' . esc_attr($expert_consultant_font_awesome_icon) . '"></i></li>';
	                }
	                ?>
	            </ul>
	            <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
	        </label>
	        <?php
      	}
  	}
}
function expert_consultant_customizer_script() {
   wp_enqueue_style( 'font-awesome-1', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css');
}
add_action( 'customize_controls_enqueue_scripts', 'expert_consultant_customizer_script' );