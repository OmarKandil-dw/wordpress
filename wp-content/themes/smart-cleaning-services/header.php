
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart Cleaning
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open();} else { do_action( 'wp_body_open' ); } ?>
<?php if(get_theme_mod('smart_cleaning_preloader_hide',true)){ ?>
    <div class="loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
<?php } ?>

<?php $smart_cleaning_sticky_header = get_theme_mod('smart_cleaning_sticky_header');
    $data_sticky = "false";
    if ($smart_cleaning_sticky_header) {
        $data_sticky = "true";
 }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#skip-content"><?php esc_html_e('Skip to content', 'smart-cleaning-services'); ?></a>
    <header id="masthead" class="site-header shadow-sm navbar-dark bg-primary">
        <div class="socialmedia">
            <div class="main_header py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 align-self-center">
                            <?php if(get_theme_mod('smart_cleaning_topbar_email') != ''){ ?>
                                <p class="mb-0"><i class="fas fa-envelope"></i> <span><?php esc_html_e('Email','smart-cleaning-services');?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?></p>
                            <?php }?>
                        </div>
                        <div class="col-lg-3 col-md-3 py-2 align-self-center">
                            <?php if(get_theme_mod('smart_cleaning_header_location') != ''){ ?>
                                <p class="mb-0"><i class="fas fa-map-marker-alt"></i> <span><?php esc_html_e('Location','smart-cleaning-services'); ?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_header_location','')); ?></p>
                            <?php }?>
                        </div>
                        <div class="col-lg-3 col-md-3 py-2 align-self-center">
                            <?php if(get_theme_mod('smart_cleaning_header_phone') != ''){ ?>
                                <p class="mb-0 text-center"><i class="fas fa-phone"></i> <span><?php esc_html_e('Call Us','smart-cleaning-services'); ?></span> : <?php echo esc_html(get_theme_mod('smart_cleaning_header_phone','')); ?></p>
                            <?php }?>
                        </div>
                        <div class="col-lg-3 col-md-3 py-2 align-self-center">
                            <div class="social-link text-center text-lg-right text-md-right">
                                <?php if(get_theme_mod('smart_cleaning_facebook_url') != ''){ ?>
                                    <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_facebook_url','')); ?>"><i class="fab fa-facebook-f"></i></a>
                                <?php }?>
                                <?php if(get_theme_mod('smart_cleaning_twitter_url') != ''){ ?>
                                    <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_twitter_url','')); ?>"><i class="fab fa-twitter"></i></a>
                                <?php }?>
                                <?php if(get_theme_mod('smart_cleaning_intagram_url') != ''){ ?>
                                    <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_intagram_url','')); ?>"><i class="fab fa-instagram"></i></a>
                                <?php }?>
                                <?php if(get_theme_mod('smart_cleaning_linkedin_url') != ''){ ?>
                                    <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_linkedin_url','')); ?>"><i class="fab fa-linkedin-in"></i></a>
                                <?php }?>
                                <?php if(get_theme_mod('smart_cleaning_pintrest_url') != ''){ ?>
                                    <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_pintrest_url','')); ?>"><i class="fab fa-pinterest-p"></i></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-header" data-sticky="<?php echo esc_attr($data_sticky); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-12 align-self-center">
                            <div class="navbar-brand text-center text-md-left">
                                <?php if ( has_custom_logo() ) : ?>
                                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                                <?php endif; ?>
                                <?php $blog_info = get_bloginfo( 'name' ); ?>
                                <?php if ( ! empty( $blog_info ) ) : ?>
                                    <?php if ( is_front_page() && is_home() ) : ?>
                                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                                    <?php else : ?>
                                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                    <?php endif; ?>
                                    <?php
                                        $description = get_bloginfo( 'description', 'display' );
                                        if ( $description || is_customize_preview() ) :
                                    ?>
                                    <p class="site-description mb-0 text-center text-md-left"><?php echo esc_html($description); ?></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-3 col-3 align-self-center">
                            <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
                        </div>
                        <div class="col-lg-3 col-md-5 col-9 align-self-center">
                            <div class="serach_inner my-2">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>