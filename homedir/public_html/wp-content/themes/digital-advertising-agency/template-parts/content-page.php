<?php
  global $post;

  $digital_advertising_agency_classes1 = array(
    'page-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($digital_advertising_agency_classes1); ?>>
  <div class="post-content">
    <?php the_content();
    comments_template(); ?>    
    <?php wp_link_pages(array(

      'before' => '<div class="page-links">' . esc_html__('Pages:', 'digital-advertising-agency'),
      'after' => '</div>',
    )); ?>
  </div>
</div>