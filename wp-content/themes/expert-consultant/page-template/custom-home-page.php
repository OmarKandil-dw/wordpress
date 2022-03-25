<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<main id="skip-content" role="main">

	<?php do_action( 'expert_consultant_above_slider' ); ?>

	<?php if( get_theme_mod('expert_consultant_slider_hide_show') != ''){ ?>
		<section id="slider">
			<div id="carouselExampleIndicators" class="carousel" data-ride="carousel"> 
			    <?php $expert_consultant_slider_pages = array();
			    for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'expert_consultant_slider'. $count ));
			        if ( 'page-none-selected' != $mod ) {
			          $expert_consultant_slider_pages[] = $mod;
			        }
			    }
		      	if( !empty($expert_consultant_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $expert_consultant_slider_pages,
			          	'orderby' => 'post__in'
			        );
		        	$query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          	$i = 1;
		    	?>     
			    <div class="carousel-inner" role="listbox">
			      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
			        <div <?php if($i == 1){echo 'class="carousel-item fade-in-image active"';} else{ echo 'class="carousel-item fade-in-image"';}?>>
			        	<div class="row">
		            		<div class="col-lg-6 col-md-6 slider-content">
		            			<svg class="slider-svg" viewBox="0 0 87.64 176.64"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><circle class="cls-1" cx="6.27" cy="1.45" r="1.45"/><circle class="cls-1" cx="16.26" cy="1.45" r="1.45"/><circle class="cls-1" cx="26.25" cy="1.45" r="1.45"/><circle class="cls-1" cx="36.24" cy="1.45" r="1.45"/><circle class="cls-1" cx="46.23" cy="1.45" r="1.45"/><circle class="cls-1" cx="56.22" cy="1.45" r="1.45"/><circle class="cls-1" cx="66.21" cy="1.45" r="1.45"/><circle class="cls-1" cx="76.21" cy="1.45" r="1.45"/><circle class="cls-1" cx="86.2" cy="1.45" r="1.45"/><circle class="cls-1" cx="1.45" cy="6.41" r="1.45"/><circle class="cls-1" cx="11.44" cy="6.41" r="1.45"/><circle class="cls-1" cx="21.43" cy="6.41" r="1.45"/><circle class="cls-1" cx="31.42" cy="6.41" r="1.45"/><circle class="cls-1" cx="41.41" cy="6.41" r="1.45"/><circle class="cls-1" cx="51.4" cy="6.41" r="1.45"/><circle class="cls-1" cx="61.39" cy="6.41" r="1.45"/><circle class="cls-1" cx="71.38" cy="6.41" r="1.45"/><circle class="cls-1" cx="81.38" cy="6.41" r="1.45"/><circle class="cls-1" cx="6.27" cy="11.38" r="1.45"/><circle class="cls-1" cx="16.26" cy="11.38" r="1.45"/><circle class="cls-1" cx="26.25" cy="11.38" r="1.45"/><circle class="cls-1" cx="36.24" cy="11.38" r="1.45"/><circle class="cls-1" cx="46.23" cy="11.38" r="1.45"/><circle class="cls-1" cx="56.22" cy="11.38" r="1.45"/><circle class="cls-1" cx="66.21" cy="11.38" r="1.45"/><circle class="cls-1" cx="76.21" cy="11.38" r="1.45"/><circle class="cls-1" cx="86.2" cy="11.38" r="1.45"/><circle class="cls-1" cx="1.45" cy="16.34" r="1.45"/><circle class="cls-1" cx="11.44" cy="16.34" r="1.45"/><circle class="cls-1" cx="21.43" cy="16.34" r="1.45"/><circle class="cls-1" cx="31.42" cy="16.34" r="1.45"/><circle class="cls-1" cx="41.41" cy="16.34" r="1.45"/><circle class="cls-1" cx="51.4" cy="16.34" r="1.45"/><circle class="cls-1" cx="61.39" cy="16.34" r="1.45"/><circle class="cls-1" cx="71.38" cy="16.34" r="1.45"/><circle class="cls-1" cx="81.38" cy="16.34" r="1.45"/><circle class="cls-1" cx="6.27" cy="21.3" r="1.45"/><circle class="cls-1" cx="16.26" cy="21.3" r="1.45"/><circle class="cls-1" cx="26.25" cy="21.3" r="1.45"/><circle class="cls-1" cx="36.24" cy="21.3" r="1.45"/><circle class="cls-1" cx="46.23" cy="21.3" r="1.45"/><circle class="cls-1" cx="56.22" cy="21.3" r="1.45"/><circle class="cls-1" cx="66.21" cy="21.3" r="1.45"/><circle class="cls-1" cx="76.21" cy="21.3" r="1.45"/><circle class="cls-1" cx="86.2" cy="21.3" r="1.45"/><circle class="cls-1" cx="1.45" cy="26.27" r="1.45"/><circle class="cls-1" cx="11.44" cy="26.27" r="1.45"/><circle class="cls-1" cx="21.43" cy="26.27" r="1.45"/><circle class="cls-1" cx="31.42" cy="26.27" r="1.45"/><circle class="cls-1" cx="41.41" cy="26.27" r="1.45"/><circle class="cls-1" cx="51.4" cy="26.27" r="1.45"/><circle class="cls-1" cx="61.39" cy="26.27" r="1.45"/><circle class="cls-1" cx="71.38" cy="26.27" r="1.45"/><circle class="cls-1" cx="81.38" cy="26.27" r="1.45"/><circle class="cls-1" cx="6.27" cy="31.23" r="1.45"/><circle class="cls-1" cx="16.26" cy="31.23" r="1.45"/><circle class="cls-1" cx="26.25" cy="31.23" r="1.45"/><circle class="cls-1" cx="36.24" cy="31.23" r="1.45"/><circle class="cls-1" cx="46.23" cy="31.23" r="1.45"/><circle class="cls-1" cx="56.22" cy="31.23" r="1.45"/><circle class="cls-1" cx="66.21" cy="31.23" r="1.45"/><circle class="cls-1" cx="76.21" cy="31.23" r="1.45"/><circle class="cls-1" cx="86.2" cy="31.23" r="1.45"/><circle class="cls-1" cx="1.45" cy="36.2" r="1.45"/><circle class="cls-1" cx="11.44" cy="36.2" r="1.45"/><circle class="cls-1" cx="21.43" cy="36.2" r="1.45"/><circle class="cls-1" cx="31.42" cy="36.2" r="1.45"/><circle class="cls-1" cx="41.41" cy="36.2" r="1.45"/><circle class="cls-1" cx="51.4" cy="36.2" r="1.45"/><circle class="cls-1" cx="61.39" cy="36.2" r="1.45"/><circle class="cls-1" cx="71.38" cy="36.2" r="1.45"/><circle class="cls-1" cx="81.38" cy="36.2" r="1.45"/><circle class="cls-1" cx="6.27" cy="41.16" r="1.45"/><circle class="cls-1" cx="16.26" cy="41.16" r="1.45"/><circle class="cls-1" cx="26.25" cy="41.16" r="1.45"/><circle class="cls-1" cx="36.24" cy="41.16" r="1.45"/><circle class="cls-1" cx="46.23" cy="41.16" r="1.45"/><circle class="cls-1" cx="56.22" cy="41.16" r="1.45"/><circle class="cls-1" cx="66.21" cy="41.16" r="1.45"/><circle class="cls-1" cx="76.21" cy="41.16" r="1.45"/><circle class="cls-1" cx="86.2" cy="41.16" r="1.45"/><circle class="cls-1" cx="1.45" cy="46.13" r="1.45"/><circle class="cls-1" cx="11.44" cy="46.13" r="1.45"/><circle class="cls-1" cx="21.43" cy="46.13" r="1.45"/><circle class="cls-1" cx="31.42" cy="46.13" r="1.45"/><circle class="cls-1" cx="41.41" cy="46.13" r="1.45"/><circle class="cls-1" cx="51.4" cy="46.13" r="1.45"/><circle class="cls-1" cx="61.39" cy="46.13" r="1.45"/><circle class="cls-1" cx="71.38" cy="46.13" r="1.45"/><circle class="cls-1" cx="81.38" cy="46.13" r="1.45"/><circle class="cls-1" cx="6.27" cy="51.09" r="1.45"/><circle class="cls-1" cx="16.26" cy="51.09" r="1.45"/><circle class="cls-1" cx="26.25" cy="51.09" r="1.45"/><circle class="cls-1" cx="36.24" cy="51.09" r="1.45"/><circle class="cls-1" cx="46.23" cy="51.09" r="1.45"/><circle class="cls-1" cx="56.22" cy="51.09" r="1.45"/><circle class="cls-1" cx="66.21" cy="51.09" r="1.45"/><circle class="cls-1" cx="76.21" cy="51.09" r="1.45"/><circle class="cls-1" cx="86.2" cy="51.09" r="1.45"/><circle class="cls-1" cx="1.45" cy="56.05" r="1.45"/><circle class="cls-1" cx="11.44" cy="56.05" r="1.45"/><circle class="cls-1" cx="21.43" cy="56.05" r="1.45"/><circle class="cls-1" cx="31.42" cy="56.05" r="1.45"/><circle class="cls-1" cx="41.41" cy="56.05" r="1.45"/><circle class="cls-1" cx="51.4" cy="56.05" r="1.45"/><circle class="cls-1" cx="61.39" cy="56.05" r="1.45"/><circle class="cls-1" cx="71.38" cy="56.05" r="1.45"/><circle class="cls-1" cx="81.38" cy="56.05" r="1.45"/><circle class="cls-1" cx="6.27" cy="61.02" r="1.45"/><circle class="cls-1" cx="16.26" cy="61.02" r="1.45"/><circle class="cls-1" cx="26.25" cy="61.02" r="1.45"/><circle class="cls-1" cx="36.24" cy="61.02" r="1.45"/><circle class="cls-1" cx="46.23" cy="61.02" r="1.45"/><circle class="cls-1" cx="56.22" cy="61.02" r="1.45"/><circle class="cls-1" cx="66.21" cy="61.02" r="1.45"/><circle class="cls-1" cx="76.21" cy="61.02" r="1.45"/><circle class="cls-1" cx="86.2" cy="61.02" r="1.45"/><circle class="cls-1" cx="1.45" cy="65.98" r="1.45"/><circle class="cls-1" cx="11.44" cy="65.98" r="1.45"/><circle class="cls-1" cx="21.43" cy="65.98" r="1.45"/><circle class="cls-1" cx="31.42" cy="65.98" r="1.45"/><circle class="cls-1" cx="41.41" cy="65.98" r="1.45"/><circle class="cls-1" cx="51.4" cy="65.98" r="1.45"/><circle class="cls-1" cx="61.39" cy="65.98" r="1.45"/><circle class="cls-1" cx="71.38" cy="65.98" r="1.45"/><circle class="cls-1" cx="81.38" cy="65.98" r="1.45"/><circle class="cls-1" cx="6.27" cy="70.95" r="1.45"/><circle class="cls-1" cx="16.26" cy="70.95" r="1.45"/><circle class="cls-1" cx="26.25" cy="70.95" r="1.45"/><circle class="cls-1" cx="36.24" cy="70.95" r="1.45"/><circle class="cls-1" cx="46.23" cy="70.95" r="1.45"/><circle class="cls-1" cx="56.22" cy="70.95" r="1.45"/><circle class="cls-1" cx="66.21" cy="70.95" r="1.45"/><circle class="cls-1" cx="76.21" cy="70.95" r="1.45"/><circle class="cls-1" cx="86.2" cy="70.95" r="1.45"/><circle class="cls-1" cx="1.45" cy="75.91" r="1.45"/><circle class="cls-1" cx="11.44" cy="75.91" r="1.45"/><circle class="cls-1" cx="21.43" cy="75.91" r="1.45"/><circle class="cls-1" cx="31.42" cy="75.91" r="1.45"/><circle class="cls-1" cx="41.41" cy="75.91" r="1.45"/><circle class="cls-1" cx="51.4" cy="75.91" r="1.45"/><circle class="cls-1" cx="61.39" cy="75.91" r="1.45"/><circle class="cls-1" cx="71.38" cy="75.91" r="1.45"/><circle class="cls-1" cx="81.38" cy="75.91" r="1.45"/><circle class="cls-1" cx="6.27" cy="80.88" r="1.45"/><circle class="cls-1" cx="16.26" cy="80.88" r="1.45"/><circle class="cls-1" cx="26.25" cy="80.88" r="1.45"/><circle class="cls-1" cx="36.24" cy="80.88" r="1.45"/><circle class="cls-1" cx="46.23" cy="80.88" r="1.45"/><circle class="cls-1" cx="56.22" cy="80.88" r="1.45"/><circle class="cls-1" cx="66.21" cy="80.88" r="1.45"/><circle class="cls-1" cx="76.21" cy="80.88" r="1.45"/><circle class="cls-1" cx="86.2" cy="80.88" r="1.45"/><circle class="cls-1" cx="1.45" cy="85.84" r="1.45"/><circle class="cls-1" cx="11.44" cy="85.84" r="1.45"/><circle class="cls-1" cx="21.43" cy="85.84" r="1.45"/><circle class="cls-1" cx="31.42" cy="85.84" r="1.45"/><circle class="cls-1" cx="41.41" cy="85.84" r="1.45"/><circle class="cls-1" cx="51.4" cy="85.84" r="1.45"/><circle class="cls-1" cx="61.39" cy="85.84" r="1.45"/><circle class="cls-1" cx="71.38" cy="85.84" r="1.45"/><circle class="cls-1" cx="81.38" cy="85.84" r="1.45"/><circle class="cls-1" cx="6.27" cy="90.8" r="1.45"/><circle class="cls-1" cx="16.26" cy="90.8" r="1.45"/><circle class="cls-1" cx="26.25" cy="90.8" r="1.45"/><circle class="cls-1" cx="36.24" cy="90.8" r="1.45"/><circle class="cls-1" cx="46.23" cy="90.8" r="1.45"/><circle class="cls-1" cx="56.22" cy="90.8" r="1.45"/><circle class="cls-1" cx="66.21" cy="90.8" r="1.45"/><circle class="cls-1" cx="76.21" cy="90.8" r="1.45"/><circle class="cls-1" cx="86.2" cy="90.8" r="1.45"/><circle class="cls-1" cx="1.45" cy="95.77" r="1.45"/><circle class="cls-1" cx="11.44" cy="95.77" r="1.45"/><circle class="cls-1" cx="21.43" cy="95.77" r="1.45"/><circle class="cls-1" cx="31.42" cy="95.77" r="1.45"/><circle class="cls-1" cx="41.41" cy="95.77" r="1.45"/><circle class="cls-1" cx="51.4" cy="95.77" r="1.45"/><circle class="cls-1" cx="61.39" cy="95.77" r="1.45"/><circle class="cls-1" cx="71.38" cy="95.77" r="1.45"/><circle class="cls-1" cx="81.38" cy="95.77" r="1.45"/><circle class="cls-1" cx="6.27" cy="100.73" r="1.45"/><circle class="cls-1" cx="16.26" cy="100.73" r="1.45"/><circle class="cls-1" cx="26.25" cy="100.73" r="1.45"/><circle class="cls-1" cx="36.24" cy="100.73" r="1.45"/><circle class="cls-1" cx="46.23" cy="100.73" r="1.45"/><circle class="cls-1" cx="56.22" cy="100.73" r="1.45"/><circle class="cls-1" cx="66.21" cy="100.73" r="1.45"/><circle class="cls-1" cx="76.21" cy="100.73" r="1.45"/><circle class="cls-1" cx="86.2" cy="100.73" r="1.45"/><circle class="cls-1" cx="1.45" cy="105.7" r="1.45"/><circle class="cls-1" cx="11.44" cy="105.7" r="1.45"/><circle class="cls-1" cx="21.43" cy="105.7" r="1.45"/><circle class="cls-1" cx="31.42" cy="105.7" r="1.45"/><circle class="cls-1" cx="41.41" cy="105.7" r="1.45"/><circle class="cls-1" cx="51.4" cy="105.7" r="1.45"/><circle class="cls-1" cx="61.39" cy="105.7" r="1.45"/><circle class="cls-1" cx="71.38" cy="105.7" r="1.45"/><circle class="cls-1" cx="81.38" cy="105.7" r="1.45"/><circle class="cls-1" cx="6.27" cy="110.66" r="1.45"/><circle class="cls-1" cx="16.26" cy="110.66" r="1.45"/><circle class="cls-1" cx="26.25" cy="110.66" r="1.45"/><circle class="cls-1" cx="36.24" cy="110.66" r="1.45"/><circle class="cls-1" cx="46.23" cy="110.66" r="1.45"/><circle class="cls-1" cx="56.22" cy="110.66" r="1.45"/><circle class="cls-1" cx="66.21" cy="110.66" r="1.45"/><circle class="cls-1" cx="76.21" cy="110.66" r="1.45"/><circle class="cls-1" cx="86.2" cy="110.66" r="1.45"/><circle class="cls-1" cx="1.45" cy="115.63" r="1.45"/><circle class="cls-1" cx="11.44" cy="115.63" r="1.45"/><circle class="cls-1" cx="21.43" cy="115.63" r="1.45"/><circle class="cls-1" cx="31.42" cy="115.63" r="1.45"/><circle class="cls-1" cx="41.41" cy="115.63" r="1.45"/><circle class="cls-1" cx="51.4" cy="115.63" r="1.45"/><circle class="cls-1" cx="61.39" cy="115.63" r="1.45"/><circle class="cls-1" cx="71.38" cy="115.63" r="1.45"/><circle class="cls-1" cx="81.38" cy="115.63" r="1.45"/><circle class="cls-1" cx="6.27" cy="120.59" r="1.45"/><circle class="cls-1" cx="16.26" cy="120.59" r="1.45"/><circle class="cls-1" cx="26.25" cy="120.59" r="1.45"/><circle class="cls-1" cx="36.24" cy="120.59" r="1.45"/><circle class="cls-1" cx="46.23" cy="120.59" r="1.45"/><circle class="cls-1" cx="56.22" cy="120.59" r="1.45"/><circle class="cls-1" cx="66.21" cy="120.59" r="1.45"/><circle class="cls-1" cx="76.21" cy="120.59" r="1.45"/><circle class="cls-1" cx="86.2" cy="120.59" r="1.45"/><circle class="cls-1" cx="1.45" cy="125.55" r="1.45"/><circle class="cls-1" cx="11.44" cy="125.55" r="1.45"/><circle class="cls-1" cx="21.43" cy="125.55" r="1.45"/><circle class="cls-1" cx="31.42" cy="125.55" r="1.45"/><circle class="cls-1" cx="41.41" cy="125.55" r="1.45"/><circle class="cls-1" cx="51.4" cy="125.55" r="1.45"/><circle class="cls-1" cx="61.39" cy="125.55" r="1.45"/><circle class="cls-1" cx="71.38" cy="125.55" r="1.45"/><circle class="cls-1" cx="81.38" cy="125.55" r="1.45"/><circle class="cls-1" cx="6.27" cy="130.52" r="1.45"/><circle class="cls-1" cx="16.26" cy="130.52" r="1.45"/><circle class="cls-1" cx="26.25" cy="130.52" r="1.45"/><circle class="cls-1" cx="36.24" cy="130.52" r="1.45"/><circle class="cls-1" cx="46.23" cy="130.52" r="1.45"/><circle class="cls-1" cx="56.22" cy="130.52" r="1.45"/><circle class="cls-1" cx="66.21" cy="130.52" r="1.45"/><circle class="cls-1" cx="76.21" cy="130.52" r="1.45"/><circle class="cls-1" cx="86.2" cy="130.52" r="1.45"/><circle class="cls-1" cx="1.45" cy="135.48" r="1.45"/><circle class="cls-1" cx="11.44" cy="135.48" r="1.45"/><circle class="cls-1" cx="21.43" cy="135.48" r="1.45"/><circle class="cls-1" cx="31.42" cy="135.48" r="1.45"/><circle class="cls-1" cx="41.41" cy="135.48" r="1.45"/><circle class="cls-1" cx="51.4" cy="135.48" r="1.45"/><circle class="cls-1" cx="61.39" cy="135.48" r="1.45"/><circle class="cls-1" cx="71.38" cy="135.48" r="1.45"/><circle class="cls-1" cx="81.38" cy="135.48" r="1.45"/><circle class="cls-1" cx="6.27" cy="140.45" r="1.45"/><circle class="cls-1" cx="16.26" cy="140.45" r="1.45"/><circle class="cls-1" cx="26.25" cy="140.45" r="1.45"/><circle class="cls-1" cx="36.24" cy="140.45" r="1.45"/><circle class="cls-1" cx="46.23" cy="140.45" r="1.45"/><circle class="cls-1" cx="56.22" cy="140.45" r="1.45"/><circle class="cls-1" cx="66.21" cy="140.45" r="1.45"/><circle class="cls-1" cx="76.21" cy="140.45" r="1.45"/><circle class="cls-1" cx="86.2" cy="140.45" r="1.45"/><circle class="cls-1" cx="1.45" cy="145.41" r="1.45"/><circle class="cls-1" cx="11.44" cy="145.41" r="1.45"/><circle class="cls-1" cx="21.43" cy="145.41" r="1.45"/><circle class="cls-1" cx="31.42" cy="145.41" r="1.45"/><circle class="cls-1" cx="41.41" cy="145.41" r="1.45"/><circle class="cls-1" cx="51.4" cy="145.41" r="1.45"/><circle class="cls-1" cx="61.39" cy="145.41" r="1.45"/><circle class="cls-1" cx="71.38" cy="145.41" r="1.45"/><circle class="cls-1" cx="81.38" cy="145.41" r="1.45"/><circle class="cls-1" cx="6.27" cy="150.38" r="1.45"/><circle class="cls-1" cx="16.26" cy="150.38" r="1.45"/><circle class="cls-1" cx="26.25" cy="150.38" r="1.45"/><circle class="cls-1" cx="36.24" cy="150.38" r="1.45"/><circle class="cls-1" cx="46.23" cy="150.38" r="1.45"/><circle class="cls-1" cx="56.22" cy="150.38" r="1.45"/><circle class="cls-1" cx="66.21" cy="150.38" r="1.45"/><circle class="cls-1" cx="76.21" cy="150.38" r="1.45"/><circle class="cls-1" cx="86.2" cy="150.38" r="1.45"/><circle class="cls-1" cx="1.45" cy="155.34" r="1.45"/><circle class="cls-1" cx="11.44" cy="155.34" r="1.45"/><circle class="cls-1" cx="21.43" cy="155.34" r="1.45"/><circle class="cls-1" cx="31.42" cy="155.34" r="1.45"/><circle class="cls-1" cx="41.41" cy="155.34" r="1.45"/><circle class="cls-1" cx="51.4" cy="155.34" r="1.45"/><circle class="cls-1" cx="61.39" cy="155.34" r="1.45"/><circle class="cls-1" cx="71.38" cy="155.34" r="1.45"/><circle class="cls-1" cx="81.38" cy="155.34" r="1.45"/><circle class="cls-1" cx="6.27" cy="160.3" r="1.45"/><circle class="cls-1" cx="16.26" cy="160.3" r="1.45"/><circle class="cls-1" cx="26.25" cy="160.3" r="1.45"/><circle class="cls-1" cx="36.24" cy="160.3" r="1.45"/><circle class="cls-1" cx="46.23" cy="160.3" r="1.45"/><circle class="cls-1" cx="56.22" cy="160.3" r="1.45"/><circle class="cls-1" cx="66.21" cy="160.3" r="1.45"/><circle class="cls-1" cx="76.21" cy="160.3" r="1.45"/><circle class="cls-1" cx="86.2" cy="160.3" r="1.45"/><circle class="cls-1" cx="1.45" cy="165.27" r="1.45"/><circle class="cls-1" cx="11.44" cy="165.27" r="1.45"/><circle class="cls-1" cx="21.43" cy="165.27" r="1.45"/><circle class="cls-1" cx="31.42" cy="165.27" r="1.45"/><circle class="cls-1" cx="41.41" cy="165.27" r="1.45"/><circle class="cls-1" cx="51.4" cy="165.27" r="1.45"/><circle class="cls-1" cx="61.39" cy="165.27" r="1.45"/><circle class="cls-1" cx="71.38" cy="165.27" r="1.45"/><circle class="cls-1" cx="81.38" cy="165.27" r="1.45"/><circle class="cls-1" cx="6.27" cy="170.23" r="1.45"/><circle class="cls-1" cx="16.26" cy="170.23" r="1.45"/><circle class="cls-1" cx="26.25" cy="170.23" r="1.45"/><circle class="cls-1" cx="36.24" cy="170.23" r="1.45"/><circle class="cls-1" cx="46.23" cy="170.23" r="1.45"/><circle class="cls-1" cx="56.22" cy="170.23" r="1.45"/><circle class="cls-1" cx="66.21" cy="170.23" r="1.45"/><circle class="cls-1" cx="76.21" cy="170.23" r="1.45"/><circle class="cls-1" cx="86.2" cy="170.23" r="1.45"/><circle class="cls-1" cx="1.45" cy="175.2" r="1.45"/><circle class="cls-1" cx="11.44" cy="175.2" r="1.45"/><circle class="cls-1" cx="21.43" cy="175.2" r="1.45"/><circle class="cls-1" cx="31.42" cy="175.2" r="1.45"/><circle class="cls-1" cx="41.41" cy="175.2" r="1.45"/><circle class="cls-1" cx="51.4" cy="175.2" r="1.45"/><circle class="cls-1" cx="61.39" cy="175.2" r="1.45"/><circle class="cls-1" cx="71.38" cy="175.2" r="1.45"/><circle class="cls-1" cx="81.38" cy="175.2" r="1.45"/></g></g></svg>
		            			<div class="carousel-caption">
						            <div class="inner-carousel">
						              	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						              	<p><?php $expert_consultant_excerpt = get_the_excerpt(); echo esc_html( expert_consultant_string_limit_words( $expert_consultant_excerpt,15 ) ); ?></p>
						              	<a href="<?php the_permalink(); ?>" class="read-btn"><span><?php echo esc_html('Read More','expert-consultant'); ?></span></a>
				            		</div>
				            	</div>
				            </div>
			        		<div class="col-lg-6 col-md-6 slider-bg position-relative">
					        	<div class="slider-img text-right">
		            				<img src="<?php esc_url(the_post_thumbnail_url('full')); ?>" alt="<?php the_title_attribute(); ?> "/>
		            			</div>
		            		</div>
				        </div>
			        </div>
			      	<?php $i++; endwhile; 
			      	wp_reset_postdata();?>
			    </div>
			    <?php else : ?>
			    <div class="no-postfound"></div>
		      		<?php endif;
			    endif;?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Prev','expert-consultant' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
			      	<span class="screen-reader-text"><?php esc_html_e( 'Next','expert-consultant' );?></span>
			    </a>
			</div>
		  	<div class="clearfix"></div>
		</section>
	<?php }?>
	
	<?php do_action('expert_consultant_below_slider'); ?>

	<?php if(get_theme_mod('expert_consultant_section_title') != '' || get_theme_mod('expert_consultant_small_title') != '' || get_theme_mod('expert_consultant_category_setting') != ''){ ?>
		<section id="service-section" class="py-5">
			<div class="container">
				<div class="service-head mb-5">
					<?php if(get_theme_mod('expert_consultant_small_title') != ''){?>
						<p class="mb-2"><?php echo esc_html(get_theme_mod('expert_consultant_small_title')); ?></p>
					<?php }?>
					<?php if(get_theme_mod('expert_consultant_section_title') != ''){?>
						<h3><?php echo esc_html(get_theme_mod('expert_consultant_section_title')); ?></h3>
					<?php }?>
				</div>
				<?php $expert_consultant_catData1 =  get_theme_mod('expert_consultant_category_setting');
				if($expert_consultant_catData1){ 
					$args = array(
						'post_type' => 'post',
						'category_name' => esc_html($expert_consultant_catData1 ,'expert-consultant'),
			          	'posts_per_page' => get_theme_mod('expert_consultant_features_icon', 3)
			        );
			        $i=1; $counter = 1; ?>
			        <div class="row">
		        		<?php $query = new WP_Query( $args );
			          	if ( $query->have_posts() ) :
			        		while( $query->have_posts() ) : $query->the_post(); ?>
			          			<div class="col-lg-4 col-md-6">
			          				<div class="service-box mb-4">
			          					<?php the_post_thumbnail(); ?>
			      						<div class="service-content">
				      						<div class="service-icon">
			      								<i class="<?php echo esc_attr(get_theme_mod('expert_consultant_service_icon' . $i, 'fas fa-chart-line')); ?>"></i>
			      							</div>
						            		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
							              	<p><?php $expert_consultant_excerpt = get_the_excerpt(); echo esc_html( expert_consultant_string_limit_words( $expert_consultant_excerpt,10 ) ); ?></p>
							              	<a href="<?php the_permalink(); ?>" class="read-btn"><?php echo esc_html('Read More','expert-consultant'); ?><span class="screen-reader-text"><?php echo esc_html('Read More','expert-consultant'); ?></span></a>
			            				</div>	
			          				</div>
							    </div>
			          		<?php $i++; $counter++; endwhile; 
			          		wp_reset_postdata(); ?>
			          	<?php else : ?>
			              	<div class="no-postfound"></div>
			            <?php endif; ?>
	          		</div>
	      		<?php }?>
			</div>
		</section>
	<?php }?>

	<?php do_action('expert_consultant_below_service_section'); ?>

	<div class="container">
	  	<?php while ( have_posts() ) : the_post(); ?>
	  		<div class="lz-content">
	        	<?php the_content(); ?>
	        </div>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>