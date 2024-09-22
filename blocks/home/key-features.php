<!-- Key Features Block -->
<?php
$enable_key_features = get_field('enable_key_features');
$key_features_title = get_field('key_features_title');
$key_features_item = get_field('key_features_item');
if ($enable_key_features):
  ?>
  <section class="key-features section-gap">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center"><?php echo $key_features_title; ?></h2>
      </div>
      <?php if ($key_features_item): ?>
        <div class="row">
          <?php foreach ($key_features_item as $kfi):
            $kfi_image = $kfi['kfi_image'];
            $kfi_title = $kfi['kfi_title'];
            $kfi_desc = $kfi['kfi_desc'];
            $key_features_btn = $kfi['key_features_btn'];
            ?>
            <div class=" col-md-6 col-lg-3 ">
              <div class="kf-item">
                <div class="kfi-icon">
                  <?php $kfi_img = $kfi_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/key-01.svg';
                  $image_id_kfi_img = attachment_url_to_postid($kfi_img);
                  $kfi_img_alt_text = get_post_meta($image_id_kfi_img, '_wp_attachment_image_alt', true);
                  if (!$kfi_img_alt_text) {
                    $kfi_img_alt_text = 'Your Perfect Travel Partner and What Makes Us Unique';
                  } ?>
                  <img src="<?php echo esc_url($kfi_img); ?>" alt="<?php echo esc_attr($kfi_img_alt_text); ?>"
                    class="img-fluid" />
                </div>
                <div class="kfi-content">
                  <p class="title"><?php echo $kfi_title; ?></p>
                  <p class="sm-text"><?php echo $kfi_desc; ?></p>
                  <?php if ($key_features_btn):
                    $kfi_btn_link = $key_features_btn['url'];
                    $kfi_btn_title = $key_features_btn['title'];
                    ?>
                    <a href="<?php echo esc_url($kfi_btn_link); ?>"
                      class="bh-btn bh-btn-underlined"><?php echo $kfi_btn_title; ?></a><?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !Key Features Block -->