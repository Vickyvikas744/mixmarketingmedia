<?php if ( get_theme_mod('digital_advertising_agency_about_us_section_enable', true) == true ) : ?>
  <section id="about" class="py-5 my-5">
    <div class="container">
      <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12 align-self-center image-main-box">
            <?php if ( get_theme_mod('digital_advertising_agency_about_us_image') ) : ?>
              <div class="about-center-box">
                <div class="about-box">
                  <img src="<?php echo esc_url(get_theme_mod('digital_advertising_agency_about_us_image')); ?>">
                </div>
              </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
            <?php if ( get_theme_mod('digital_advertising_agency_about_us_section_title') ) : ?>
              <h6><?php echo esc_html(get_theme_mod('digital_advertising_agency_about_us_section_title')) ?></h6>
            <?php endif; ?>
            <?php if ( get_theme_mod('digital_advertising_agency_about_us_main_section_title') ) : ?>
              <h3 class="my-3"><?php echo esc_html(get_theme_mod('digital_advertising_agency_about_us_main_section_title')) ?></h3>
            <?php endif; ?>
            <?php if ( get_theme_mod('digital_advertising_agency_about_us_section_content') ) : ?>
              <p class="my-3"><?php echo esc_html(get_theme_mod('digital_advertising_agency_about_us_section_content')) ?></p>
            <?php endif; ?>
            <?php $digital_advertising_agency_progress_count = get_theme_mod('digital_advertising_agency_about_us_progress_count'); 
              for ($i=1; $i <= $digital_advertising_agency_progress_count; $i++) { ?>
                <?php if ( get_theme_mod('digital_advertising_agency_about_us_list'.$i) ) : ?>
                  <li class="mb-0"><i class="fas fa-check-circle me-2"></i><?php echo esc_html( get_theme_mod('digital_advertising_agency_about_us_list'.$i ) ); ?></li>
                <?php endif; ?>
            <?php } ?>
          </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
<?php endif; ?>