<!-- Travel Awards Listings -->
<?php
$awards_listing = get_field('awards_listing');
$al_title = $awards_listing['al_title'];
$al_desc = $awards_listing['al_desc'];
$awards = $awards_listing['awards'];
if ($awards):
  ?>
  <section class="award-listing section-gap">
    <div class="container">
      <div class="section-title d-flex justify-content-between flex-wrap">
        <h2><?php echo $al_title; ?></h2>
        <div class="st-brief">
          <?php echo $al_desc; ?>
        </div>
      </div>
      <div class="row">
        <?php foreach ($awards as $award): 
          $award_image = $award['award_image'];
          $award_title = $award['award_title'];
          $award_desc = $award['award_desc'];
          ?>
          <div class="col-lg-4">
            <div class="al-item">
              <div class="ali-image">
                <?php
                  $award_img = $award_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Featured-Page-Intro.png';
                  $image_id_award_img = attachment_url_to_postid($award_img);
                  $award_img_alt_text = get_post_meta($image_id_award_img, '_wp_attachment_image_alt', true);
                  if (!$award_img_alt_text) {
                    $award_img_alt_text = 'Recognition from the Ministry of Tourism, Nepal';
                  } ?>
                <img src="<?php echo $award_img; ?>" alt="<?php echo esc_attr($award_img_alt_text); ?>" class="img-fluid">
              </div>
              <div class="ali-content">
                <h5><?php echo $award_title;?></h5>
                <p class="sm-text"><?php echo $award_desc; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Travel Awards Listings -->