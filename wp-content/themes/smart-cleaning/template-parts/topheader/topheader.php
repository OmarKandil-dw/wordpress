<?php
/**
 * Displays top header
 *
 * @package Smart Cleaning
 */
?>

<div class="top-info py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 align-self-center">
		        <?php $blog_info = get_bloginfo( 'name' ); ?>
	                <?php
	                    $description = get_bloginfo( 'description', 'display' );
	                    if ( $description || is_customize_preview() ) :
	                ?>
	                <p class="site-description mb-0 text-center text-md-left"><?php echo esc_html($description); ?></p>
	            <?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-4 align-self-center">
				<div class="text-center">
					<?php if(get_theme_mod('smart_cleaning_topbar_email') != ''){ ?>
		            	<p class="mb-0"><i class="fas fa-envelope"></i> <span><?php esc_html_e('Email','smart-cleaning');?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?></p>
			        <?php }?>
			    </div>
			</div>
			<div class="col-lg-4 col-md-4 align-self-center">
				<div class="text-center text-md-right">
					<?php if(get_theme_mod('smart_cleaning_topbar_link1') != '' || get_theme_mod('smart_cleaning_topbar_text1') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link1','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text1','')); ?></a><span> / </span>
			        <?php }?>
			        <?php if(get_theme_mod('smart_cleaning_topbar_link2') != '' || get_theme_mod('smart_cleaning_topbar_text2') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link2','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text2','')); ?></a><span> / </span>
			        <?php }?>
			        <?php if(get_theme_mod('smart_cleaning_topbar_link3') != '' || get_theme_mod('smart_cleaning_topbar_text3') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link3','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text3','')); ?></a>
			        <?php }?>
			    </div>
			</div>
		</div>
	</div>
</div>