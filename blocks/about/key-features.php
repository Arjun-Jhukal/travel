<!-- About Key Features Block -->
<?php
$key_features = get_field('key_features');
if ($key_features):
  ?>
  <section class="about-left-right-blocks section-gap">
    <div class="container">
      <?php foreach ($key_features as $index => $alr):
        $alr_img = $alr['alr_img'];
        $content = $alr['content'];
        ?>
        <div class="alr-block">
          <div class="row align-items-center <?php echo $index % 2 === 1 ? 'flex-row-reverse' : ''; ?>">
            <div class="col-lg-5 order-lg-2">
              <div class="alrb-image"><?php
              $alr_imgs = $alr_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Personalized-Travel-Experiences.png';
              $image_id_alr_imgs = attachment_url_to_postid($alr_imgs);
              $alr_imgs_alt_text = get_post_meta($image_id_alr_imgs, '_wp_attachment_image_alt', true);
              if (!$alr_imgs_alt_text) {
                $alr_imgs_alt_text = 'Personalized Travel Experiences';
              } ?>
                <img src="<?php echo $alr_imgs; ?>" alt="<?php echo esc_attr($alr_imgs_alt_text); ?>" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-7 order-lg-1">
              <div class="alrb-content">
                <?php foreach ($content as $c_alr):
                  $alr_title = $c_alr['alr_title'];
                  $alr_desc = $c_alr['alr_desc'];
                  ?>
                  <h4><?php echo $alr_title; ?></h4>
                  <?php echo $alr_desc; ?>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !About Key Features Block -->