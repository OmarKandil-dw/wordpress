<?php

	$affiliate_review_custom_css= "";

	/*----------------------First highlight color-------------------*/

	$affiliate_review_first_color = get_theme_mod('affiliate_review_first_color');

	if($affiliate_review_first_color != false){
		$affiliate_review_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover, .top-header, .main-navigation ul.sub-menu>li>a:before, #slider .read-btn a, .view-all-btn a:hover, .more-btn a:hover, #comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.pro-button a:hover, #preloader, #footer-2, .scrollup i, .pagination span, .pagination a, .widget_product_search button{';
			$affiliate_review_custom_css .='background-color: '.esc_attr($affiliate_review_first_color).';';
		$affiliate_review_custom_css .='}';
	}

	if($affiliate_review_first_color != false){
		$affiliate_review_custom_css .='.main-navigation a:hover, .post-main-box h2 a,.post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation a:hover{';
			$affiliate_review_custom_css .='color: '.esc_attr($affiliate_review_first_color).';';
		$affiliate_review_custom_css .='}';
	}

	if($affiliate_review_first_color != false){
		$affiliate_review_custom_css .='.home-page-header{';
			$affiliate_review_custom_css .='border-bottom: '.esc_attr($affiliate_review_first_color).';';
		$affiliate_review_custom_css .='}';
	}

	if($affiliate_review_first_color != false){
		$affiliate_review_custom_css .='.more-btn a:hover,input[type="submit"]:hover,#comments input[type="submit"]:hover,#comments a.comment-reply-link:hover,.pagination .current,.pagination a:hover,#footer .tagcloud a:hover,#sidebar .tagcloud a:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,.widget_product_search button:hover,nav.woocommerce-MyAccount-navigation ul li:hover{';
			$affiliate_review_custom_css .='box-shadow: 0 0 10px '.esc_attr($affiliate_review_first_color).';';
		$affiliate_review_custom_css .='}';
	}

	/*----------------Second highlight color-------------------*/

	$affiliate_review_second_color = get_theme_mod('affiliate_review_second_color');

	if($affiliate_review_second_color != false){
		$affiliate_review_custom_css .='#slider .read-btn a:hover, #slider-inner .vwslideimg_width .vw-slide-cover p, #popular-product .product-box p.product-rating, .view-all-btn a,.more-btn a,#comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,nav.woocommerce-MyAccount-navigation ul li,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar h3, .woocommerce span.onsale, .toggle-nav button{';
			$affiliate_review_custom_css .='background-color: '.esc_attr($affiliate_review_second_color).';';
		$affiliate_review_custom_css .='}';
	}

	if($affiliate_review_second_color != false){
		$affiliate_review_custom_css .='.copyright a:hover, .post-main-box:hover h2 a, #footer .textwidget a,#footer li a:hover,.post-main-box:hover h3 a,#sidebar ul li a:hover,.post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-navigation a:hover,.post-navigation a:focus{';
			$affiliate_review_custom_css .='color: '.esc_attr($affiliate_review_second_color).';';
		$affiliate_review_custom_css .='}';
	}

	if($affiliate_review_second_color != false){
		$affiliate_review_custom_css .='#slider-inner .vwslideimg_width .vw-slide-cover p:after, #popular-product .product-box p.product-rating:after{';
			$affiliate_review_custom_css .='border-bottom: '.esc_attr($affiliate_review_second_color).';';
		$affiliate_review_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$affiliate_review_theme_lay = get_theme_mod( 'affiliate_review_width_option','Full Width');
    if($affiliate_review_theme_lay == 'Boxed'){
		$affiliate_review_custom_css .='body{';
			$affiliate_review_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$affiliate_review_custom_css .='}';
	}else if($affiliate_review_theme_lay == 'Wide Width'){
		$affiliate_review_custom_css .='body{';
			$affiliate_review_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$affiliate_review_custom_css .='}';
	}else if($affiliate_review_theme_lay == 'Full Width'){
		$affiliate_review_custom_css .='body{';
			$affiliate_review_custom_css .='max-width: 100%;';
		$affiliate_review_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$affiliate_review_theme_lay = get_theme_mod( 'affiliate_review_slider_opacity_color','0.7');
	if($affiliate_review_theme_lay == '0'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.1'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.1';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.2'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.2';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.3'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.3';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.4'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.4';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.5'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.5';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.6'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.6';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.7'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.7';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.8'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.8';
		$affiliate_review_custom_css .='}';
		}else if($affiliate_review_theme_lay == '0.9'){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='opacity:0.9';
		$affiliate_review_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$affiliate_review_theme_lay = get_theme_mod( 'affiliate_review_slider_content_option','Left');
    if($affiliate_review_theme_lay == 'Left'){
		$affiliate_review_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$affiliate_review_custom_css .='text-align:left;';
		$affiliate_review_custom_css .='}';
	}else if($affiliate_review_theme_lay == 'Center'){
		$affiliate_review_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$affiliate_review_custom_css .='text-align:center;';
		$affiliate_review_custom_css .='}';
	}else if($affiliate_review_theme_lay == 'Right'){
		$affiliate_review_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$affiliate_review_custom_css .='text-align: right;';
		$affiliate_review_custom_css .='}';
	}

	/*------------------ Slider Height ------------*/
	$affiliate_review_slider_height = get_theme_mod('affiliate_review_slider_height');
	if($affiliate_review_slider_height != false){
		$affiliate_review_custom_css .='#slider img{';
			$affiliate_review_custom_css .='height: '.esc_attr($affiliate_review_slider_height).';';
		$affiliate_review_custom_css .='}';
	}

	/*------------- Slider ------------*/

	$affiliate_review_slider = get_theme_mod('affiliate_review_slider_hide_show', false);
	if($affiliate_review_slider == false){
		$affiliate_review_custom_css .='.page-template-custom-home-page .main-header{';
			$affiliate_review_custom_css .='position: static;';
		$affiliate_review_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$affiliate_review_resp_slider = get_theme_mod( 'affiliate_review_resp_slider_hide_show',false);
	if($affiliate_review_resp_slider == true && get_theme_mod( 'affiliate_review_slider_hide_show', false) == false){
    	$affiliate_review_custom_css .='#slider{';
			$affiliate_review_custom_css .='display:none;';
		$affiliate_review_custom_css .='} ';
	}
    if($affiliate_review_resp_slider == true){
    	$affiliate_review_custom_css .='@media screen and (max-width:575px) {';
		$affiliate_review_custom_css .='#slider{';
			$affiliate_review_custom_css .='display:block;';
		$affiliate_review_custom_css .='} }';
	}else if($affiliate_review_resp_slider == false){
		$affiliate_review_custom_css .='@media screen and (max-width:575px) {';
		$affiliate_review_custom_css .='#slider{';
			$affiliate_review_custom_css .='display:none;';
		$affiliate_review_custom_css .='} }';
		$affiliate_review_custom_css .='@media screen and (max-width:575px){';
		$affiliate_review_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$affiliate_review_custom_css .='margin-top: 45px;';
		$affiliate_review_custom_css .='} }';
	}

	$affiliate_review_resp_sidebar = get_theme_mod( 'affiliate_review_sidebar_hide_show',true);
    if($affiliate_review_resp_sidebar == true){
    	$affiliate_review_custom_css .='@media screen and (max-width:575px) {';
		$affiliate_review_custom_css .='#sidebar{';
			$affiliate_review_custom_css .='display:block;';
		$affiliate_review_custom_css .='} }';
	}else if($affiliate_review_resp_sidebar == false){
		$affiliate_review_custom_css .='@media screen and (max-width:575px) {';
		$affiliate_review_custom_css .='#sidebar{';
			$affiliate_review_custom_css .='display:none;';
		$affiliate_review_custom_css .='} }';
	}

	$affiliate_review_resp_scroll_top = get_theme_mod( 'affiliate_review_resp_scroll_top_hide_show',true);
	if($affiliate_review_resp_scroll_top == true && get_theme_mod( 'affiliate_review_hide_show_scroll',true) == false){
    	$affiliate_review_custom_css .='.scrollup i{';
			$affiliate_review_custom_css .='visibility:hidden !important;';
		$affiliate_review_custom_css .='} ';
	}
    if($affiliate_review_resp_scroll_top == true){
    	$affiliate_review_custom_css .='@media screen and (max-width:575px) {';
		$affiliate_review_custom_css .='.scrollup i{';
			$affiliate_review_custom_css .='visibility:visible !important;';
		$affiliate_review_custom_css .='} }';
	}else if($affiliate_review_resp_scroll_top == false){
		$affiliate_review_custom_css .='@media screen and (max-width:575px){';
		$affiliate_review_custom_css .='.scrollup i{';
			$affiliate_review_custom_css .='visibility:hidden !important;';
		$affiliate_review_custom_css .='} }';
	}
	
	/*---------------- Button Settings ------------------*/

	$affiliate_review_button_border_radius = get_theme_mod('affiliate_review_button_border_radius');
	if($affiliate_review_button_border_radius != false){
		$affiliate_review_custom_css .='.post-main-box .more-btn a{';
			$affiliate_review_custom_css .='border-radius: '.esc_attr($affiliate_review_button_border_radius).'px;';
		$affiliate_review_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$affiliate_review_copyright_alingment = get_theme_mod('affiliate_review_copyright_alingment');
	if($affiliate_review_copyright_alingment != false){
		$affiliate_review_custom_css .='.copyright p{';
			$affiliate_review_custom_css .='text-align: '.esc_attr($affiliate_review_copyright_alingment).';';
		$affiliate_review_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	// Site title Font Size
	$affiliate_review_site_title_font_size = get_theme_mod('affiliate_review_site_title_font_size');
	if($affiliate_review_site_title_font_size != false){
		$affiliate_review_custom_css .='.logo h1, .logo p.site-title{';
			$affiliate_review_custom_css .='font-size: '.esc_attr($affiliate_review_site_title_font_size).';';
		$affiliate_review_custom_css .='}';
	}

	// Site tagline Font Size
	$affiliate_review_site_tagline_font_size = get_theme_mod('affiliate_review_site_tagline_font_size');
	if($affiliate_review_site_tagline_font_size != false){
		$affiliate_review_custom_css .='.logo p.site-description{';
			$affiliate_review_custom_css .='font-size: '.esc_attr($affiliate_review_site_tagline_font_size).';';
		$affiliate_review_custom_css .='}';
	}

	/*---------------- Preloader Background Color  -------------------*/

	$affiliate_review_preloader_bg_color = get_theme_mod('affiliate_review_preloader_bg_color');
	if($affiliate_review_preloader_bg_color != false){
		$affiliate_review_custom_css .='#preloader{';
			$affiliate_review_custom_css .='background-color: '.esc_attr($affiliate_review_preloader_bg_color).';';
		$affiliate_review_custom_css .='}';
	}

	$affiliate_review_preloader_border_color = get_theme_mod('affiliate_review_preloader_border_color');
	if($affiliate_review_preloader_border_color != false){
		$affiliate_review_custom_css .='.loader-line{';
			$affiliate_review_custom_css .='border-color: '.esc_attr($affiliate_review_preloader_border_color).'!important;';
		$affiliate_review_custom_css .='}';
	}

	/*---------------- Woocommerce Settings  -------------------*/

	$affiliate_review_woocommerce_sale_position = get_theme_mod( 'affiliate_review_woocommerce_sale_position','left');
    if($affiliate_review_woocommerce_sale_position == 'left'){
		$affiliate_review_custom_css .='.woocommerce ul.products li.product .onsale{';
			$affiliate_review_custom_css .='left: -10px; right: auto;';
		$affiliate_review_custom_css .='}';
	}else if($affiliate_review_woocommerce_sale_position == 'right'){
		$affiliate_review_custom_css .='.woocommerce ul.products li.product .onsale{';
			$affiliate_review_custom_css .='left: auto !important; right: 15px !important;';
		$affiliate_review_custom_css .='}';
	}