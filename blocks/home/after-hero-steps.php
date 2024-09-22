<!-- After Hero Steps Block -->
<?php $enable_steps = get_field('enable_steps');
$steps_title = get_field('steps_title');
$step_desc = get_field('step_desc');
$steps_item = get_field('steps_item');
if ($enable_steps):
  ?>
  <section class="steps section-gap">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center"><?php echo $steps_title; ?></h2>
        <p class="text-center"><?php echo $step_desc; ?></p>
      </div>
      <?php if ($steps_item): ?>
        <div class="steps-content-wrapper">
          <div class="row">
            <?php foreach ($steps_item as $sitem):
              $steps_icon_image = $sitem['steps_icon_image'];
              $steps_title = $sitem['steps_title'];
              $steps_desc = $sitem['steps_desc'];
              ?>
              <div class="col-md-6 col-lg-3">
                <div class="steps-item d-flex justify-content-start align-items-start d-md-block">
                  <div class="step-icon">
                    <?php $step_img = $steps_icon_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/step-01.svg';
                    $image_id_step_img = attachment_url_to_postid($step_img);
                    $step_img_alt_text = get_post_meta($image_id_step_img, '_wp_attachment_image_alt', true);
                    if (!$step_img_alt_text) {
                      $step_img_alt_text = 'Plan Perfectly';
                    } ?>
                    <img src="<?php echo esc_url($step_img); ?>" alt="<?php echo esc_attr($step_img_alt_text); ?>"
                      class="img-fluid" />
                  </div>
                  <div class="step-content">
                    <p><?php echo $steps_title; ?></p>
                    <small><?php echo $steps_desc; ?></small>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !After Hero Steps Block -->