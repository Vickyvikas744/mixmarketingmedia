<?php if ( get_theme_mod('digital_advertising_agency_blog_box_enable') ) : ?>

<?php $digital_advertising_agency_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('digital_advertising_agency_blog_slide_category'),
  'posts_per_page' => get_theme_mod('digital_advertising_agency_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $digital_advertising_agency_arr_posts = new WP_Query( $digital_advertising_agency_args );
    if ( $digital_advertising_agency_arr_posts->have_posts() ) :
      while ( $digital_advertising_agency_arr_posts->have_posts() ) :
        $digital_advertising_agency_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="blog_box pt-3 pt-md-0">
                <?php if ( get_theme_mod('digital_advertising_agency_title_unable_disable', true) ) : ?>
                  <h3><?php the_title(); ?></h3>
                <?php endif; ?>
                <p class="mb-0"><?php echo wp_trim_words( get_the_content(), 15 ); ?></p>
                <div class="layer-box mt-5">
                  <div class="button-box mt-2">
                    <?php if ( get_theme_mod('digital_advertising_agency_button_unable_disable', true) ) : ?>
                      <p class="slider-button">
                        <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Get Started Now','digital-advertising-agency'); ?></a>
                      </p>
                    <?php endif; ?>
                  </div>
                  <div class="call-info">
                    <?php if ( get_theme_mod('digital_advertising_agency_phone_text') ) : ?>
                      <p class="mb-0"><?php echo esc_html(get_theme_mod('digital_advertising_agency_phone_text'));?></p>
                    <?php endif; ?>
                    <?php if ( get_theme_mod('digital_advertising_agency_phone_number') ) : ?>
                      <h6 class="mb-0"><?php echo esc_html(get_theme_mod('digital_advertising_agency_phone_number'));?></h6>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 image-main-box">
              <div class="image-center-box">
                <div class="image-box">
                 <?php
                  if ( has_post_thumbnail() ) :
                    the_post_thumbnail();
                  else:
                    ?>
                    <div class="slider-alternate">
                      <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
                    </div>
                    <?php
                  endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>
