<?php
  $service_row_style = get_sub_field('service_row_style');
  $service_row_main_heading = get_sub_field('service_row_main_heading');
  $service_heading = get_sub_field('service_heading');
  $service_row_image = get_sub_field('service_row_image');
  $service_row_image_alt = get_sub_field('service_row_image_alt');
  $service_row_text = get_sub_field('service_row_text');
  $service_row_button_text = get_sub_field('service_row_button_text');
  $service_row_button_link = get_sub_field('service_row_button_link');
?>
<?php if ($service_row_style == 'Style 1') {
  $heading_color = 'heading--brown';
  $service_row_color = 'service-row--green';
  $service_row_button_color = 'button--brown';
  $service_row_direction = 'service-row-copy';
  $service_row_copy_color = '';
  $service_row_paws = '';
  $service_row_img_direction = 'service-row__image';
}
?>
<?php if ($service_row_style == 'Style 2') {
  $heading_color = 'heading--secondary-green';
  $service_row_color = 'service-row--brown';
  $service_row_button_color = 'button--green';
  $service_row_direction = 'service-row-copy--reversed service-row-copy--green';
  $service_row_copy_color = 'service-row-copy--green';
  $service_row_paws = 'display-none';
  $service_row_img_direction = 'service-row__image--reversed';
} 
?>
<?php if (!$service_row_main_heading)
  $hide_main_heading = 'display-none';
?>
<section class="services">
  <h2 class="heading heading--brown heading--center heading--tablet-up <?php echo $hide_main_heading;?>">
    <?php echo $service_row_main_heading; ?>
  </h2>
  <div class="service-row <?php echo $service_row_color;?>" id="training">
    <img 
      class="service-row <?php echo $service_row_img_direction?>" 
      src="<?php echo $service_row_image;?>"           
      alt="<?php echo $service_row_image_alt;?>">
    <div class="service-row-copy <?php echo $service_row_direction?>">
      <h3 class="heading <?php echo $heading_color;?>">
        <?php echo $service_heading; ?>
      </h3>
      <p class="service-row-copy__body">
        <?php echo $service_row_text; ?>
      </p>
      <?php if ($service_row_button_link):?>
        <a 
          class="button <?php echo $service_row_button_color;?>" 
          href="<?php echo $service_row_button_link;?>">
            <?php echo $service_row_button_text;?>
        </a>
      <?php endif;?>
      <!--
        needs more work
      <div class="paw-print-trail <?php /* echo $service_row_paws; */?>">
        <img class="paw-print-trail__1" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
        <img class="paw-print-trail__2" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
        <img class="paw-print-trail__3" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
        <img class="paw-print-trail__4" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
        <img class="paw-print-trail__5" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
        <img class="paw-print-trail__6" src="/wp-content/themes/eastcoastk9/assets/svgs/paw-print-light-brown.svg" alt="" role="presentation">
      </div>
      -->
    </div>
  </div>
</section>