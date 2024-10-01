<!-- Commitment Values -->
<?php
$values = get_field('values');
$cv_title = $values['cv_title'];
$cv_desc = $values['cv_desc'];
$cv_image = $values['cv_image'];
$cv_values = $values['cv_values'];
?>
<section class="section-gap our-values">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo $cv_title; ?></h2>
      <?php echo $cv_desc; ?>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="ov-featured-image">
          <?php
          $val_img = $cv_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Featured-Page-Intro.png';
          $image_id_val_img = attachment_url_to_postid($val_img);
          $val_img_alt_text = get_post_meta($image_id_val_img, '_wp_attachment_image_alt', true);
          if (!$val_img_alt_text) {
            $val_img_alt_text = 'Recognition from the Ministry of Tourism, Nepal';
          } ?>
          <img src="<?php echo $val_img; ?>" alt="<?php echo esc_attr($val_img_alt_text); ?>" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ov-content">
          <?php if (!empty($cv_values)): ?>
          <ul>
            <?php foreach ($cv_values as $cvv): ?>
            <li><?php echo $cvv['item']; ?></li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- !Commitment Values -->