<!-- Hero Banner -->
<?php
$enable_hero = get_field('enable_hero');
$hero_title = get_field('hero_title');
$show_img_vdo = get_field('show_img_vdo');
$hero_img = get_field('hero_img');
$hero_vdo = get_field('hero_vdo');
$show_search = get_field('show_search');
$show_tripad_review = get_field('show_tripad_review');
if ($enable_hero):
  ?>
  <section class="page-banner section-gap">
    <div class="pb-content">
      <?php if ($show_img_vdo): ?>
        <div class="feature-image">
          <?php $img = $hero_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Explore-the-World-Your-Way-with-Bold-Himalaya.png';
          $image_id_pop = attachment_url_to_postid($img);
          $img_alt_text = get_post_meta($image_id_pop, '_wp_attachment_image_alt', true);
          if (!$img_alt_text) {
            $img_alt_text = 'Explore the World Your Way with Bold Himalaya';
          } ?>
          <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($img_alt_text); ?>" class="img-fluid" />
        </div>
      <?php endif; ?>
      <!-- Video will go in here -->
      <div class="pb-absolute-text ">
        <h1 class="text-center"><?php echo $hero_title; ?></h1>
        <?php if ($show_search): ?>
          <div class="pb-search-box">
            <?php echo do_shortcode('[wpdreams_ajaxsearchpro id=2]'); ?>
          </div>
        <?php endif; ?>
        <?php if ($show_tripad_review): ?>
          <div class="pb-reviews d-flex justify-content-center align-items-center">
            <?php
            $reviews = get_field('reviews', 'option');
            if (isset($reviews[1]) && is_array($reviews[1]['review_items'])) {
              $total_rating = 0;
              $total_reviewers = count($reviews[1]['review_items']);
              foreach ($reviews[1]['review_items'] as $item) {
                if (isset($item['ri_rating'])) {
                  $total_rating += (float) $item['ri_rating'];
                }
              }
              $average_rating = $total_reviewers > 0 ? $total_rating / $total_reviewers : 0;
              $average_rating = number_format($average_rating, 1);
            } ?>

            <span><?php echo esc_html($average_rating); ?></span>
            <ul class="stars">
              <li>
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
              </li>
              <li>
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
              </li>
              <li>
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
              </li>
              <li>
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
              </li>
              <li>
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
              </li>
            </ul>
            <p><span><?php echo esc_html($total_reviewers); ?></span><span> TripAdvisor reviews</span></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Hero Banner -->