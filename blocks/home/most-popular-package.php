<!-- Most Popular Packages -->
<?php
$enable_most_pop_packs = get_field('enable_most_pop_packs');
$most_pop_title = get_field('most_pop_title');
$most_pop_desc = get_field('most_pop_desc');
$most_pop_btn = get_field('most_pop_btn');
$most_pop_pack_item = get_field('most_pop_pack_item');
if ($enable_most_pop_packs):
  if ($most_pop_pack_item):
    ?>
<section class="package-listing section-padding-y bg-white section-gap">
  <div class="container">
    <div class="section-title d-flex justify-content-between align-items-start flex-wrap">
      <h2><?php echo $most_pop_title; ?></h2>
      <div class="st-brief">
        <p><?php echo "{$most_pop_desc}"; ?></p>
        <?php if ($most_pop_btn):
              $mpb_link = $most_pop_btn['url'];
              $mpb_title = $most_pop_btn['title'];
              ?>
              <a href="<?php echo esc_url($mpb_link); ?>"
                class="bh-btn bh-btn-underlined"><?php echo $mpb_title; ?></a><?php endif; ?>
          </div>

    </div>
    <div class="row">
      <?php foreach ($most_pop_pack_item as $ftour) {
            if ($ftour instanceof WP_Post) {
              $post_id = $ftour->ID;
              $post_title = $ftour->post_title;
              $post_url = get_permalink($post_id);
              $post_excerpt = get_the_excerpt($post_id);
              if (empty($post_excerpt)) {
                $post_content = apply_filters('the_content', $ftour->post_content);
                $post_excerpt = wp_trim_words($post_content, 11, '...');
              } else {
                $post_excerpt = wp_trim_words($post_excerpt, 11, '...');
              }
              $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
              if (has_post_thumbnail($post_id)) {
                $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'img-fluid'));
              } else {
                $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-06.png');
      $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="img-fluid">';
      }
      $tour_dur_day = get_field('tour_dur_day', $post_id);
      $tour_price_curr = get_field('tour_price_curr', $post_id);
      $tour_price = get_field('tour_price', $post_id);
      $tour_sale = get_field('tour_sale', $post_id);
      $tour_rating = get_field('tour_rating', $post_id);
      $tour_ratings = get_field('tour_ratings', $post_id);
      $tour_badge = get_field('tour_badge', $post_id);
      $terms = get_the_terms($post_id, 'destination');
      $location_names = [];

      if ($terms && !is_wp_error($terms)) {
      foreach ($terms as $term) {
      $location_names[] = $term->name;
      }
      }

      if (count($location_names) > 1) {
      $locations = 'Multi-country';
      $locations_arr = implode(', ', $location_names);

      } else {
      $locations = !empty($location_names) ? $location_names[0] : '';
      }
      $badge_class = '';
      if ($tour_badge && is_array($tour_badge)) {
      foreach ($tour_badge as $badge) {
      $parts = explode(':', $badge);
      $value = trim($parts[0]);
      if ($value === 'trending') {
      $badge_class = 'trending';
      }
      if ($value === 'most-selling') {
      $badge_class = $badge_class ? $badge_class . ' most-selling' : 'most-selling';
      }
      if ($value === 'most-popular') {
      $badge_class = $badge_class ? $badge_class . ' most-popular' : 'most-popular';
      }
      }
      }
      ?>
      <div class="col-lg-3 col-md-6">
        <div class="package-item">
          <div class="pi-image">
            <?php echo $post_thumbnail;
                    if ($tour_price && $tour_sale): ?>
            <span class="discount"><?php $numeric_tour_sale = (int) preg_replace('/[^0-9]/', '', $tour_sale);
                      $percentage_saved = $numeric_tour_sale > 0 ? round((($numeric_tour_sale - $tour_price) / $numeric_tour_sale) * 100) : 0;
                      echo '<p>Save ' . $percentage_saved . '%</p>';
                      ?></span>
            <?php endif; ?>
          </div>
          <div class="pi-content">
            <a href="<?php echo esc_url($post_url); ?>">
              <h6><?php echo $post_title; ?></h6>
            </a>
            <small class="d-none d-md-block"><?php echo $post_excerpt; ?></small>

            <div class="pl-key-indicator d-flex justify-content-between align-items-center">
              <?php if ($locations): ?>
              <div class=" indicator-item location multiple">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/location.svg" alt="">
                <small><?php echo $locations; ?></small>
              </div>
              <?php endif;
                      if (!empty($tour_rating)): ?>
              <div class="indicator-item ">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg" alt="">
                <span> <small><?php echo $tour_rating; ?>
                    &nbsp;</small><small>(<?php echo $tour_ratings; ?>)</small></span>
              </div>
              <?php endif; ?>

              <?php if (!empty($tour_dur_day)): ?>
              <div class="indicator-item">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/calendar-day.svg" alt="">
                <small><?php echo $tour_dur_day; ?> Days</small>
              </div>
              <?php endif; ?>
            </div>
            <?php if (!empty($tour_price)): ?>
            <div class="price-wrapper d-flex justify-content-between align-items-center">
              <div class="price d-flex justify-content-start align-items-center">
                <h5><?php echo $tour_price_curr . $tour_price; ?></h5>
                <del><?php echo $tour_price_curr . $tour_sale; ?></del>
              </div>
              <a href="<?php echo esc_url($post_url); ?>" class="bh-btn bh-btn-underlined">View Detail</a>
            </div>
            <?php endif; ?>
          </div>
          <?php if ($badge_class): ?>
          <div class="tag <?php echo esc_attr($badge_class); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path
                d="M13.2621 6.94616C13.1445 6.66242 12.8689 6.47597 12.5608 6.47597H10.2667L12.496 1.46605C12.6014 1.23096 12.5771 0.959384 12.4392 0.744558C12.2974 0.529731 12.0582 0.400024 11.8029 0.400024H5.72286C5.39454 0.400024 5.10676 0.610798 5.00137 0.918851L2.71934 7.76088C2.64233 7.99192 2.67881 8.24728 2.82473 8.44589C2.9666 8.6445 3.19764 8.76205 3.44084 8.76205H6.05524L4.23529 14.6151C4.1299 14.9474 4.26772 15.3122 4.56766 15.4906C4.68926 15.5635 4.82708 15.6 4.96084 15.6C5.1554 15.6 5.35401 15.523 5.49993 15.3771L13.0999 7.77709C13.3148 7.55416 13.3796 7.22989 13.2621 6.94616Z"
                fill="white" />
            </svg>
            <small>Most Selling Tour</small>
          </div>
          <?php endif; ?>
          <div class="wishlist" data-id="<?php echo $post_id; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <g filter="url(#filter0_b_544_14756)">
                <circle cx="16" cy="16" r="16" fill="black" fill-opacity="0.3" />
              </g>
              <path
                d="M15.3042 23.7388C15.4967 23.9072 15.7437 24 16 24C16.2561 24 16.5033 23.9072 16.6957 23.739C17.4245 23.1023 18.1267 22.5043 18.7463 21.9769L18.7466 21.9767C20.5596 20.4329 22.1253 19.0997 23.2149 17.7862C24.4328 16.3179 25 14.9257 25 13.4047C25 11.927 24.493 10.5637 23.5722 9.56581C22.6404 8.5561 21.3617 8 19.9717 8C18.9327 8 17.9811 8.3282 17.1435 8.97541C16.7207 9.3021 16.3377 9.70192 16 10.1683C15.6624 9.70192 15.2793 9.3021 14.8566 8.97541C14.019 8.3282 13.0675 8 12.0284 8C10.6383 8 9.35973 8.5561 8.42795 9.56581C7.50716 10.5637 7 11.927 7 13.4047C7 14.9257 7.56731 16.3179 8.78528 17.7863C9.87485 19.0998 11.4408 20.4332 13.2542 21.9772L13.2574 21.9799C13.8759 22.5065 14.577 23.1035 15.3042 23.7388Z"
                fill="transparent" stroke="#fff" />
              <defs>
                <filter id="filter0_b_544_14756" x="-24" y="-24" width="80" height="80" filterUnits="userSpaceOnUse"
                  color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feGaussianBlur in="BackgroundImageFix" stdDeviation="12" />
                  <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_544_14756" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_544_14756" result="shape" />
                </filter>
              </defs>
            </svg>
          </div>
        </div>
      </div>
      <?php }
          } ?>
    </div>
  </div>
</section>
<?php endif; endif; ?>
<!-- !Most Popular Packages -->