<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

<?php 
  $smart_cleaning_year  = get_the_time('Y');
  $smart_cleaning_month = get_the_time('m');
  $smart_cleaning_day   = get_the_time('d');
?>

<main id="skip-content">
  <section id="top-slider">
    <?php $smart_cleaning_slide_pages = array();
      for ( $count = 1; $count <= 3; $count++ ) {
        $mod = intval( get_theme_mod( 'smart_cleaning_top_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $smart_cleaning_slide_pages[] = $mod;
        }
      }
      if( !empty($smart_cleaning_slide_pages) ) :
        $args = array(
          'post_type' => 'page',
          'post__in' => $smart_cleaning_slide_pages,
          'orderby' => 'post__in'
        );
        $query = new WP_Query( $args );
        if ( $query->have_posts() ) :
          $i = 1;
    ?>
    <div class="owl-carousel" role="listbox">
      <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="slider-box">
          <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
          <div class="slider-inner-box">
            <h2><?php the_title(); ?></h2>
            <p><?php $excerpt = get_the_excerpt(); echo esc_html( smart_cleaning_string_limit_words( $excerpt, 10 )); ?></p>
            <div class="slide-btn my-4"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Book Online','smart-cleaning'); ?></a></div>
            <?php if(get_theme_mod('smart_cleaning_slide_day') != '' || get_theme_mod('smart_cleaning_slide_time') != ''){ ?>
              <div class="timebox">
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <i class="fas fa-history"></i>
                  </div>
                  <div class="col-lg-10 col-md-10">
                    <p class="mb-0"><?php echo esc_html(get_theme_mod('smart_cleaning_slide_day','')); ?></p>
                    <p class="mb-0"><?php echo esc_html(get_theme_mod('smart_cleaning_slide_time','')); ?></p>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
  </section>

  <section id="featured-topic" class="py-5">
    <div class="container">
      <h3 class="mb-5 text-center "><?php echo esc_html(get_theme_mod('smart_cleaning_featured_category_title','')); ?></h3>
      <div class="row">
        <?php
          $smart_cleaning_featured_cat1 = get_theme_mod('smart_cleaning_featured_category_1','');
          if($smart_cleaning_featured_cat1){
            $smart_cleaning_page_query4 = new WP_Query(array( 'category_name' => esc_html($smart_cleaning_featured_cat1,'smart-cleaning')));
            while( $smart_cleaning_page_query4->have_posts() ) : $smart_cleaning_page_query4->the_post(); ?>
              <div class="col-lg-4 col-md-6">
                <div class="featured-imagebox text-center mb-3">
                  <?php the_post_thumbnail(); ?>
                  <h4 class="mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p><?php $excerpt = get_the_excerpt(); echo esc_html( smart_cleaning_string_limit_words( $excerpt, 10 )); ?></p>
                  <div class="servbtn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','smart-cleaning'); ?></a>
                  </div>
                </div>
              </div>
            <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>

  <section id="content-section" class="container">
    <?php
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
          the_content();
        endwhile; 
      endif; 
    ?>
  </section>
</main>

<?php get_footer(); ?>