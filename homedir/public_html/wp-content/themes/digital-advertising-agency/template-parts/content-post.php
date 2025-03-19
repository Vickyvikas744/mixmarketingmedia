<?php
  global $post;

  $digital_advertising_agency_classes2 = array(
    'post-single',
    'my-4'
  );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class($digital_advertising_agency_classes2); ?>>
  <div class="post-content">
    <?php
      the_content();      
      the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','digital-advertising-agency').'</strong> ', ', ', '</div>');       
    ?>
  </div>
</div>