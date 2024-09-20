<!-- Homepage -->
<section class="page-banner section-gap">
  <div class="pb-content">
    <div class="feature-image">
      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-01.png" alt="" class="img-fluid" />
      <!-- Video will go in here -->
    </div>
    <div class="pb-absolute-text ">
      <h1 class="text-center">Explore the World Your Way with <span>
          Bold Himalaya</span></h1>
      <div class="pb-search-box">
        <?php echo do_shortcode('[wpdreams_ajaxsearchpro id=2]'); ?>
      </div>
      <div class="pb-reviews d-flex justify-content-center align-items-center">
        <span>5.0</span>
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
        <p><span>672</span><span> TripAdvisor reviews</span></p>
      </div>
    </div>
  </div>
</section>
<!-- Homepage -->
<!-- Hero Banner -->
<?php
$hero = get_field('hero');
$enable_hero = $hero['enable_hero'];
$wb_banner_image = $hero['wb_banner_image'];
$wb_title = $hero['wb_title'];
$hsp = $hero['hsp'];
$enable_hsp = $hsp['enable_hsp'];
$title = $hsp['title'];
$wb_btn_title = $hsp['wb_btn_title'];
$wb_btn_link = $hsp['wb_btn_link'];
$wb_hsp_tours = $hsp['wb_hsp_tours'];
if ($enable_hero):
  ?>
  <div class="top-banner-image-content position-absolute top-0 w-100">
    <div class="position-relative hero-banner-section">
      <?php
      $banner = $wb_banner_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/08/Where-do-you-want-to-Explore.png';
      $image_id_banner = attachment_url_to_postid($banner);
      $banner_alt_text = get_post_meta($image_id_banner, '_wp_attachment_image_alt', true);
      if (!$banner_alt_text) {
        $banner_alt_text = 'Uncover Nepal Where do you want to Explore';
      } ?>
      <img src="<?php echo $banner; ?>" class="img-fluid" alt="<?php echo esc_attr($banner_alt_text); ?>">
      <div class="inner-content-wrapper">
        <h1><?php echo $wb_title; ?></h1>
        <div class="search-form-wrapper">
          <?php echo do_shortcode('[wpdreams_ajaxsearchpro id=4]'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  $banner1 = esc_url(get_home_url()) . '/wp-content/uploads/2024/08/Where-do-you-want-to-Go.png';
  $image_id_banner1 = attachment_url_to_postid($banner1);
  $banner1_alt_text = get_post_meta($image_id_banner1, '_wp_attachment_image_alt', true);
  if (!$banner1_alt_text) {
    $banner1_alt_text = 'Uncover Nepal Explore Where do you want to Go';
  } ?>
  <img src="<?php echo $banner1; ?>" class="side-art-wrapper" alt="<?php echo esc_attr($banner1_alt_text); ?>">
  </div>
  <!-- !Hero Banner -->
  <!-- Hot Seasonal Picks -->
<?php endif;
if ($enable_hsp):
  ?>
  <section class="hero-main-art-wrapper">
    <section class="hot-seasonal-picks-main-wrapper">
      <div class="position-relative hot-seasonal-picks-wrapper">
        <div class="container">
          <div class="mb-4 top-wrapper row">
            <div class="col-md-6">
              <h4><?php echo $title; ?></h4>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-end gap-5">
                <a href="<?php echo esc_url($wb_btn_link); ?>" class="btn-fill d-none d-md-inline-block">
                  <?php echo $wb_btn_title; ?>
                </a>
                <div class="align-items-center nav-arrow-wrapper gap-3 d-none d-md-flex">
                  <div class="hot-picks-prev-arrow arrow">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="36" height="36" rx="18" transform="matrix(-1 0 0 1 36 0)"
                        fill="rgba(20, 154, 237, 1)" />
                      <g clip-path="url(#clip0_164_9681)">
                        <path
                          d="M12.2486 17.6104L23.3912 12.4677C23.5686 12.3871 23.7803 12.4351 23.9037 12.5877C24.028 12.7403 24.0323 12.9571 23.914 13.114L20.2498 17.9996L23.914 22.8852C24.0323 23.042 24.028 23.2597 23.9046 23.4115C23.8214 23.5152 23.6971 23.5709 23.5712 23.5709C23.5103 23.5709 23.4494 23.558 23.392 23.5314L12.2494 18.3887C12.0969 18.3184 12 18.1667 12 17.9996C12 17.8324 12.0969 17.6807 12.2486 17.6104Z"
                          fill="white" />
                      </g>
                      <defs>
                        <clipPath id="clip0_164_9681">
                          <rect width="12" height="12" fill="white" transform="matrix(-1 0 0 1 24 12)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="hot-picks-next-arrow arrow">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect width="36" height="36" rx="18" fill="rgba(20, 154, 237, 1)" />
                      <g clip-path="url(#clip0_164_9686)">
                        <path
                          d="M23.7514 17.6104L12.6088 12.4677C12.4314 12.3871 12.2197 12.4351 12.0963 12.5877C11.972 12.7403 11.9677 12.9571 12.086 13.114L15.7502 17.9996L12.086 22.8852C11.9677 23.042 11.972 23.2597 12.0954 23.4115C12.1786 23.5152 12.3029 23.5709 12.4288 23.5709C12.4897 23.5709 12.5506 23.558 12.608 23.5314L23.7506 18.3887C23.9031 18.3184 24 18.1667 24 17.9996C24 17.8324 23.9031 17.6807 23.7514 17.6104Z"
                          fill="white" />
                      </g>
                      <defs>
                        <clipPath id="clip0_164_9686">
                          <rect width="12" height="12" fill="white" transform="translate(12 12)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="positon-relative">
            <div class="row">
              <div class="hot-seasonal-picks-wrapper-carousel owl-carousel owl-theme">
                <?php
                foreach ($wb_hsp_tours as $item) {
                  if ($item instanceof WP_Post) {
                    $post_id = $item->ID;
                    $post_title = $item->post_title;
                    $post_url = get_permalink($post_id);
                    $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
                    if (has_post_thumbnail($post_id)) {
                      $post_thumbnail = get_the_post_thumbnail($post_id, 'medium', array('class' => 'post-thumbnail'));
                    } else {
                      $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
                      $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="post-thumbnail">';
                    }
                    $tour_dur_day = get_field('tour_dur_day', $post_id);
                    $tour_dur_night = get_field('tour_dur_night', $post_id);
                    $tour_price_curr = get_field('tour_price_curr', $post_id);
                    $tour_price = get_field('tour_price', $post_id);
                    echo '<div class="item">';
                    echo '<a href="' . esc_url($post_url) . '">';
                    echo '<div class="hot-seasonal-picks-card">';
                    echo '<div class="image-wrapper">';
                    echo $post_thumbnail;
                    echo '</div>';
                    echo '<div class="bottom-content-wrapper">';
                    echo '<div class="d-flex align-items-center justify-content-between title">';
                    echo '<h6>' . esc_html($post_title) . '</h6>';
                    if (!empty($tour_dur_day) && !empty($tour_dur_night)) {
                      echo '<p>[' . esc_html($tour_dur_day) . 'D/' . esc_html($tour_dur_night) . 'N]</p>';
                    }
                    echo '</div>';
                    echo '<div class="price-wrapper">';
                    echo '<p>' . esc_html($tour_price_curr . $tour_price) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                  }
                }
                ?>
              </div>
            </div>
          </div>
          <div class="section-footer d-md-none">
            <div class="d-flex justify-content-center align-items-center nav-arrow-wrapper gap-3">
              <div class="hot-picks-prev-arrow arrow disabled">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="36" height="36" rx="18" transform="matrix(-1 0 0 1 36 0)" fill="rgba(20, 154, 237, 1)" />
                  <g clip-path="url(#clip0_164_9681)">
                    <path
                      d="M12.2486 17.6104L23.3912 12.4677C23.5686 12.3871 23.7803 12.4351 23.9037 12.5877C24.028 12.7403 24.0323 12.9571 23.914 13.114L20.2498 17.9996L23.914 22.8852C24.0323 23.042 24.028 23.2597 23.9046 23.4115C23.8214 23.5152 23.6971 23.5709 23.5712 23.5709C23.5103 23.5709 23.4494 23.558 23.392 23.5314L12.2494 18.3887C12.0969 18.3184 12 18.1667 12 17.9996C12 17.8324 12.0969 17.6807 12.2486 17.6104Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_9681">
                      <rect width="12" height="12" fill="white" transform="matrix(-1 0 0 1 24 12)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <div class="hot-picks-next-arrow arrow">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect width="36" height="36" rx="18" fill="rgba(20, 154, 237, 1)" />
                  <g clip-path="url(#clip0_164_9686)">
                    <path
                      d="M23.7514 17.6104L12.6088 12.4677C12.4314 12.3871 12.2197 12.4351 12.0963 12.5877C11.972 12.7403 11.9677 12.9571 12.086 13.114L15.7502 17.9996L12.086 22.8852C11.9677 23.042 11.972 23.2597 12.0954 23.4115C12.1786 23.5152 12.3029 23.5709 12.4288 23.5709C12.4897 23.5709 12.5506 23.558 12.608 23.5314L23.7506 18.3887C23.9031 18.3184 24 18.1667 24 17.9996C24 17.8324 23.9031 17.6807 23.7514 17.6104Z"
                      fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_9686">
                      <rect width="12" height="12" fill="white" transform="translate(12 12)" />
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-center d-md-none">
            <a href="<?php echo esc_url($wb_btn_link); ?>" class="btn-fill"> <?php echo $wb_btn_title; ?> </a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
  <!-- !Hot Seasonal Picks -->
  <!-- Most selling tour packages in Nepal -->
  <?php
  $ft = get_field('featured_tours');
  $enable_featured_tours = $ft['enable_featured_tours'];
  $ft_small_title = $ft['ft_small_title'];
  $ft_title = $ft['ft_title'];
  $ft_btn = $ft['ft_btn'];
  $ft_most_selling_tours = $ft['ft_most_selling_tours'];
  if ($enable_featured_tours):
    ?>
    <section class="feature-tour-section">
      <div class="container">
        <div class="mb-4 row">
          <div class="title-type-one">
            <div class="aligh-items-center row">
              <div class="col-lg-6">
                <span class="over-title"><?php echo $ft_small_title; ?></span>
                <h3><?php echo $ft_title; ?></h3>
              </div>
              <div class=" col-lg-6 d-none d-md-block">
                <a href="<?php echo esc_url($ft_btn['url']); ?>" class="btn-none-fill ms-lg-auto">
                  <?php echo $ft_btn['title']; ?>
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_164_9701)">
                      <path
                        d="M15.6686 7.48064L0.811792 0.623664C0.575226 0.516238 0.292947 0.580237 0.12838 0.78366C-0.0373304 0.987084 -0.0430445 1.27622 0.114666 1.48536L5.00026 7.99948L0.114666 14.5136C-0.0430445 14.7227 -0.0373304 15.013 0.127237 15.2153C0.238091 15.3536 0.403802 15.4279 0.571797 15.4279C0.652938 15.4279 0.734079 15.4107 0.810649 15.3753L15.6674 8.51833C15.8709 8.42462 16 8.22234 16 7.99948C16 7.77663 15.8708 7.57435 15.6686 7.48064Z"
                        fill="rgba(20, 154, 237, 1)" />
                    </g>
                    <defs>
                      <clipPath id="clip0_164_9701">
                        <rect width="16" height="16" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="feature-tour-carousel owl-carousel owl-theme">
            <?php
            foreach ($ft_most_selling_tours as $ftour) {
              if ($ftour instanceof WP_Post) {
                $post_id = $ftour->ID;
                $post_title = $ftour->post_title;
                $post_url = get_permalink($post_id);
                $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
                if (has_post_thumbnail($post_id)) {
                  $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'post-thumbnail'));
                } else {
                  $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
                  $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="post-thumbnail">';
                }
                $tour_dur_day = get_field('tour_dur_day', $post_id);
                $tour_dur_night = get_field('tour_dur_night', $post_id);
                $tour_price_curr = get_field('tour_price_curr', $post_id);
                $tour_price = get_field('tour_price', $post_id);
                $locations = get_field('tour_country', $post_id);
                $tour_sale = get_field('tour_sale', $post_id);
                $tour_rating = get_field('tour_rating', $post_id);
                $tour_ratings = get_field('tour_ratings', $post_id);
                $tour_badge = get_field('tour_badge', $post_id);
                $terms = get_the_terms($post_id, 'tour-category');
                $badge_class = '';
                if ($tour_badge && is_array($tour_badge)) {
                  foreach ($tour_badge as $badge) {
                    $parts = explode(':', $badge);
                    $value = trim($parts[0]);
                    if ($value === 'hot') {
                      $badge_class = 'hottest-tour';
                    }
                    if ($value === 'most') {
                      $badge_class = $badge_class ? $badge_class . ' most-popular' : 'most-popular';
                    }
                  }
                } ?>
                <div class="item">
                  <a href="<?php echo esc_url($post_url); ?>">
                    <div class="tour-card-wrapper <?php echo esc_attr($badge_class); ?>">
                      <div class="image-wrapper">
                        <?php echo $post_thumbnail; ?>
                      </div>
                      <div class="bottom-content-wrapper">
                        <?php if (!empty($tour_rating)): ?>
                          <div class="d-flex align-items-center rating-wrapper">
                            <?php for ($i = 1; $i <= $tour_rating; $i++): ?>
                              <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z"
                                  fill="#F18B2C" />
                              </svg>
                            <?php endfor; ?>
                            <!-- <span>(<?php echo $tour_ratings; ?>)</span> -->
                          </div>
                        <?php endif; ?>
                        <div class="title">
                          <h6><?php echo $post_title; ?></h6>
                          <?php if (!empty($locations)): ?>
                            <div class="location-wrapper">
                              <p>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0_164_9813)">
                                    <path
                                      d="M14.6353 11.2179C14.4083 11.0932 14.1233 11.1761 13.9987 11.403C13.8741 11.6299 13.957 11.9149 14.1839 12.0395C14.7423 12.3463 15.0625 12.6864 15.0625 12.9725C15.0625 13.3226 14.5666 13.8651 13.1746 14.338C11.7994 14.8052 9.96172 15.0625 8 15.0625C6.03828 15.0625 4.20056 14.8052 2.82541 14.338C1.43344 13.8651 0.9375 13.3226 0.9375 12.9725C0.9375 12.6864 1.25775 12.3463 1.81613 12.0395C2.04303 11.9149 2.12591 11.6299 2.00125 11.403C1.87659 11.1761 1.59169 11.0932 1.36472 11.2179C0.742156 11.5599 0 12.1419 0 12.9725C0 13.6092 0.437875 14.517 2.52381 15.2257C3.99356 15.725 5.93837 16 8 16C10.0616 16 12.0064 15.725 13.4762 15.2257C15.5621 14.517 16 13.6092 16 12.9725C16 12.1419 15.2578 11.5599 14.6353 11.2179Z"
                                      fill="rgba(20, 154, 237, 1)" />
                                    <path
                                      d="M4.46147 13.6602C5.41303 13.929 6.66988 14.0771 8.00047 14.0771C9.33106 14.0771 10.5879 13.9291 11.5395 13.6602C12.7036 13.3314 13.2939 12.8553 13.2939 12.2454C13.2939 11.6354 12.7036 11.1594 11.5395 10.8306C11.281 10.7576 11 10.6935 10.7012 10.6389C10.5389 10.9193 10.3688 11.2079 10.1911 11.5048C10.5218 11.5544 10.8323 11.6153 11.1143 11.6871C11.9711 11.9053 12.2841 12.151 12.3484 12.2454C12.2841 12.3399 11.9711 12.5855 11.1144 12.8037C10.3035 13.0103 9.26016 13.1281 8.16131 13.1386C8.10809 13.1425 8.05447 13.1448 8.00047 13.1448C7.94644 13.1448 7.89284 13.1425 7.83959 13.1386C6.74075 13.1281 5.69744 13.0103 4.88653 12.8037C4.02978 12.5855 3.71681 12.3399 3.65247 12.2454C3.71681 12.151 4.02981 11.9053 4.88656 11.6871C5.16856 11.6153 5.47909 11.5544 5.80988 11.5048C5.63209 11.2079 5.46206 10.9193 5.29978 10.6389C5.00097 10.6936 4.71987 10.7576 4.46147 10.8306C3.29731 11.1594 2.70703 11.6354 2.70703 12.2454C2.70703 12.8553 3.29731 13.3314 4.46147 13.6602Z"
                                      fill="rgba(20, 154, 237, 1)" />
                                    <path
                                      d="M8 12.2073C8.41728 12.2073 8.79631 11.9947 9.014 11.6385C10.5393 9.143 12.3575 5.85406 12.3575 4.35747C12.3575 1.95475 10.4028 0 8 0C5.59725 0 3.6425 1.95475 3.6425 4.35747C3.6425 5.85406 5.46072 9.143 6.986 11.6385C7.20369 11.9947 7.58275 12.2073 8 12.2073ZM6.24853 4.05828C6.24853 3.09256 7.03425 2.30687 8 2.30687C8.96575 2.30687 9.75147 3.09256 9.75147 4.05828C9.75147 5.02403 8.96575 5.80972 8 5.80972C7.03425 5.80972 6.24853 5.02406 6.24853 4.05828Z"
                                      fill="rgba(20, 154, 237, 1)" />
                                  </g>
                                  <defs>
                                    <clipPath id="clip0_164_9813">
                                      <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                  </defs>
                                </svg> <?php echo $locations; ?>
                              </p>
                            </div>
                          <?php endif; ?>
                        </div>
                        <?php if ((!empty($tour_dur_day) && !empty($tour_dur_night)) || (!empty($tour_price))) { ?>
                          <div class="d-flex align-items-center justify-content-between duration-price-wrapper">
                            <?php if (!empty($tour_dur_day) && !empty($tour_dur_night)) {
                              ?>
                              <div class="duration-wrapper">
                                <h6>
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M3.52658 7.5H20.4725C20.6791 7.5 20.876 7.41487 21.0177 7.26487C21.1595 7.11487 21.233 6.91313 21.2213 6.70687L21.212 6.51225C21.0901 4.54275 19.4438 3 17.4635 3H16.4997V2.25C16.4997 1.836 16.1637 1.5 15.7497 1.5C15.3357 1.5 14.9997 1.836 14.9997 2.25V3H8.99971V2.25C8.99971 1.836 8.66371 1.5 8.24971 1.5C7.83571 1.5 7.49971 1.836 7.49971 2.25V3H6.53596C4.55558 3 2.90896 4.54313 2.78708 6.51375L2.77771 6.70725C2.76571 6.91313 2.83958 7.11488 2.98096 7.26525C3.12233 7.41563 3.32033 7.5 3.52658 7.5Z"
                                      fill="rgba(20, 154, 237, 1)" />
                                    <path
                                      d="M21.3387 9.73125C21.329 9.32438 20.996 9 20.5891 9H3.41034C3.00346 9 2.67084 9.32438 2.66034 9.73125C2.59321 12.4181 2.64084 15.0956 2.80209 17.6903C2.91909 19.5728 4.42696 21.0803 6.30871 21.1973C8.19721 21.3158 10.0985 21.375 11.9997 21.375C13.9006 21.375 15.8026 21.3158 17.69 21.1969C19.5725 21.0799 21.08 19.572 21.1973 17.6899C21.3586 15.0956 21.4062 12.4178 21.3387 9.73125ZM15.7497 13.5C15.1283 13.5 14.6247 12.9964 14.6247 12.375C14.6247 11.7536 15.1283 11.25 15.7497 11.25C16.3711 11.25 16.8747 11.7536 16.8747 12.375C16.8747 12.9964 16.3711 13.5 15.7497 13.5ZM16.8747 16.125C16.8747 16.7464 16.3711 17.25 15.7497 17.25C15.1283 17.25 14.6247 16.7464 14.6247 16.125C14.6247 15.5036 15.1283 15 15.7497 15C16.3711 15 16.8747 15.5036 16.8747 16.125ZM8.24971 15C8.87109 15 9.37471 15.5036 9.37471 16.125C9.37471 16.7464 8.87109 17.25 8.24971 17.25C7.62834 17.25 7.12471 16.7464 7.12471 16.125C7.12471 15.5036 7.62834 15 8.24971 15ZM7.12471 12.375C7.12471 11.7536 7.62834 11.25 8.24971 11.25C8.87109 11.25 9.37471 11.7536 9.37471 12.375C9.37471 12.9964 8.87109 13.5 8.24971 13.5C7.62834 13.5 7.12471 12.9964 7.12471 12.375ZM10.8747 16.125C10.8747 15.5036 11.3783 15 11.9997 15C12.6211 15 13.1247 15.5036 13.1247 16.125C13.1247 16.7464 12.6211 17.25 11.9997 17.25C11.3783 17.25 10.8747 16.7464 10.8747 16.125ZM11.9997 13.5C11.3783 13.5 10.8747 12.9964 10.8747 12.375C10.8747 11.7536 11.3783 11.25 11.9997 11.25C12.6211 11.25 13.1247 11.7536 13.1247 12.375C13.1247 12.9964 12.6211 13.5 11.9997 13.5Z"
                                      fill="rgba(20, 154, 237, 1)" />
                                  </svg> <?php echo $tour_dur_day; ?> Days <?php echo $tour_dur_night; ?>
                                  Nights
                                </h6>
                              </div>
                            <?php }
                            if (!empty($tour_price)) {
                              ?>
                              <div class="price-wrapper">
                                <h6 class="regular-price"><?php echo $tour_sale; ?></h6>

                                <h6><?php echo $tour_price_curr . $tour_price; ?></h6>
                              </div>
                            <?php } ?>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </a>
                </div>
              <?php }
            } ?>
          </div>
        </div>
        <div class="text-center d-md-none">
          <a href="<?php echo esc_url($ft_btn['url']); ?>" class="btn-none-fill mx-auto">
            <?php echo $ft_btn['title']; ?>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_164_9701)">
                <path
                  d="M15.6686 7.48064L0.811792 0.623664C0.575226 0.516238 0.292947 0.580237 0.12838 0.78366C-0.0373304 0.987084 -0.0430445 1.27622 0.114666 1.48536L5.00026 7.99948L0.114666 14.5136C-0.0430445 14.7227 -0.0373304 15.013 0.127237 15.2153C0.238091 15.3536 0.403802 15.4279 0.571797 15.4279C0.652938 15.4279 0.734079 15.4107 0.810649 15.3753L15.6674 8.51833C15.8709 8.42462 16 8.22234 16 7.99948C16 7.77663 15.8708 7.57435 15.6686 7.48064Z"
                  fill="rgba(20, 154, 237, 1)" />
              </g>
              <defs>
                <clipPath id="clip0_164_9701">
                  <rect width="16" height="16" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </section>
  <?php endif; ?>
</section>
<!-- !Most selling tour packages in Nepal -->
<!-- Most selling international tour packages -->
<?php
$int = get_field('int_featured_tours');
$enable_int_featured_tours = $int['enable_int_featured_tours'];
$int_small_title = $int['int_small_title'];
$int_title = $int['int_title'];
$int_btn = $int['int_btn'];
$int_desc = $int['int_desc'];
$int_most_selling = $int['int_most_selling'];
$int_btn = $int['int_btn'];
if ($enable_int_featured_tours):
  ?>
  <section class="position-relative overflow-hidden explore-tour-section">
    <div class="top-art-wrapper">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/h1-rev-bottom-3.png" alt="" />
    </div>
    <div class="earthimg-wrapper">
      <?php
      $earthimg = esc_url(get_home_url()) . '/wp-content/uploads/2024/08/Most-selling-tour-packages-in-Nepal-scaled.webp';
      $image_id_earthimg = attachment_url_to_postid($earthimg);
      $earthimg_alt_text = get_post_meta($image_id_earthimg, '_wp_attachment_image_alt', true);
      if (!$earthimg_alt_text) {
        $earthimg_alt_text = 'Most selling tour packages in Nepal';
      } ?>
      <img src="<?php echo $earthimg; ?>" alt="<?php echo esc_attr($earthimg_alt_text); ?>">

    </div>
    <div class="container position-relative">
      <div class="mb-5 row">
        <div class="title-type-one">
          <div class="aligh-items-center justify-content-between row">
            <div class="col-lg-6">
              <span><?php echo $int_small_title; ?></span>
              <h3 class="text-white"><?php echo $int_title; ?></h3>
            </div>
            <div class="d-flex align-items-center justify-content-end col-lg-5">
              <div class="right-paragraph">
                <p><?php echo $int_desc; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      if ($int_most_selling):
        ?>
        <div class="row">
          <div class="col-lg-12">
            <ul class="nav mb-5 nav-tabs" id="myTab" role="tablist">
              <?php
              $active = 'active';
              foreach ($int_most_selling as $index => $section):
                $tab_title = $section['title'];
                ?>
                <li class="nav-item" role="presentation">
                  <button class="nav-link <?php echo $active; ?>" id="<?php echo sanitize_title($tab_title); ?>-tab"
                    data-bs-toggle="tab" data-bs-target="#<?php echo sanitize_title($tab_title); ?>-tab-pane" type="button"
                    role="tab" aria-controls="<?php echo sanitize_title($tab_title); ?>-tab-pane"
                    aria-selected="true"><?php echo $tab_title; ?></button>
                </li>
                <?php $active = ''; ?>
              <?php endforeach; ?>
            </ul>

            <div class="tab-content" id="myTabContent">
              <?php
              $active = 'show active';
              foreach ($int_most_selling as $index => $section):
                $tab_title = $section['title'];
                $int_posts = $section['int_most_selling_tours'];
                ?>
                <div class="tab-pane fade <?php echo $active; ?>" id="<?php echo sanitize_title($tab_title); ?>-tab-pane"
                  role="tabpanel" aria-labelledby="<?php echo sanitize_title($tab_title); ?>-tab" tabindex="0">
                  <div class="row">
                    <?php if ($int_posts): ?>
                      <?php
                      foreach ($int_posts as $tour) {
                        if ($tour instanceof WP_Post) {
                          $post_id = $tour->ID;
                          $post_title = $tour->post_title;
                          $post_url = get_permalink($post_id);
                          $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
                          if (has_post_thumbnail($post_id)) {
                            $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'post-thumbnail'));
                          } else {
                            $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
                            $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="post-thumbnail">';
                          }
                          $duration_days = get_field('tour_dur_day', $post_id);
                          $duration_nights = get_field('tour_dur_night', $post_id);
                          $tour_price_curr = get_field('tour_price_curr', $post_id);
                          $price = get_field('tour_price', $post_id);
                          $locations = get_field('tour_country', $post_id);
                          $sale_price = get_field('tour_sale', $post_id);
                          $rating = get_field('tour_rating', $post_id);
                          $reviews_count = get_field('tour_ratings', $post_id);
                          $badges = get_field('tour_badge', $post_id);
                          $terms = get_the_terms($post_id, 'tour-category');
                          $badge_class = '';
                          if ($tour_badge && is_array($tour_badge)) {
                            foreach ($tour_badge as $badge) {
                              $parts = explode(':', $badge);
                              $value = trim($parts[0]);
                              if ($value === 'hot') {
                                $badge_class = 'hottest-tour';
                              }
                              if ($value === 'most') {
                                $badge_class = $badge_class ? $badge_class . ' most-popular' : 'most-popular';
                              }
                            }
                          }
                          ?>
                          <div class="mb-4 col-md-6 col-lg-4">
                            <a href="<?php echo esc_url($post_url); ?>">
                              <div class="tour-card-wrapper <?php echo esc_attr($badge_class); ?>">
                                <div class="image-wrapper">
                                  <?php echo $post_thumbnail; ?>
                                </div>
                                <div class="bottom-content-wrapper">
                                  <?php if (!empty($rating)): ?>
                                    <div class="d-flex align-items-center rating-wrapper">
                                      <?php for ($i = 1; $i <= $rating; $i++): ?>
                                        <svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                            d="M5.04894 0.927049C5.3483 0.00573826 6.6517 0.00573993 6.95106 0.927051L7.5716 2.83688C7.70547 3.2489 8.08943 3.52786 8.52265 3.52786H10.5308C11.4995 3.52786 11.9023 4.76748 11.1186 5.33688L9.49395 6.51722C9.14347 6.77187 8.99681 7.22323 9.13068 7.63525L9.75122 9.54508C10.0506 10.4664 8.9961 11.2325 8.21238 10.6631L6.58778 9.48278C6.2373 9.22813 5.7627 9.22814 5.41221 9.48278L3.78761 10.6631C3.0039 11.2325 1.94942 10.4664 2.24878 9.54508L2.86932 7.63526C3.00319 7.22323 2.85653 6.77186 2.50604 6.51722L0.881445 5.33688C0.0977311 4.76748 0.500508 3.52786 1.46923 3.52786H3.47735C3.91057 3.52786 4.29453 3.2489 4.4284 2.83688L5.04894 0.927049Z"
                                            fill="#F18B2C" />
                                        </svg>
                                      <?php endfor; ?>
                                    </div>
                                  <?php endif; ?>
                                  <div class="title">
                                    <h6><?php echo $post_title; ?>
                                    </h6>
                                    <?php if (!empty($locations)): ?>
                                      <div class="location-wrapper">
                                        <p>
                                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_164_9813)">
                                              <path
                                                d="M14.6353 11.2179C14.4083 11.0932 14.1233 11.1761 13.9987 11.403C13.8741 11.6299 13.957 11.9149 14.1839 12.0395C14.7423 12.3463 15.0625 12.6864 15.0625 12.9725C15.0625 13.3226 14.5666 13.8651 13.1746 14.338C11.7994 14.8052 9.96172 15.0625 8 15.0625C6.03828 15.0625 4.20056 14.8052 2.82541 14.338C1.43344 13.8651 0.9375 13.3226 0.9375 12.9725C0.9375 12.6864 1.25775 12.3463 1.81613 12.0395C2.04303 11.9149 2.12591 11.6299 2.00125 11.403C1.87659 11.1761 1.59169 11.0932 1.36472 11.2179C0.742156 11.5599 0 12.1419 0 12.9725C0 13.6092 0.437875 14.517 2.52381 15.2257C3.99356 15.725 5.93837 16 8 16C10.0616 16 12.0064 15.725 13.4762 15.2257C15.5621 14.517 16 13.6092 16 12.9725C16 12.1419 15.2578 11.5599 14.6353 11.2179Z"
                                                fill="rgba(20, 154, 237, 1)" />
                                              <path
                                                d="M4.46147 13.6602C5.41303 13.929 6.66988 14.0771 8.00047 14.0771C9.33106 14.0771 10.5879 13.9291 11.5395 13.6602C12.7036 13.3314 13.2939 12.8553 13.2939 12.2454C13.2939 11.6354 12.7036 11.1594 11.5395 10.8306C11.281 10.7576 11 10.6935 10.7012 10.6389C10.5389 10.9193 10.3688 11.2079 10.1911 11.5048C10.5218 11.5544 10.8323 11.6153 11.1143 11.6871C11.9711 11.9053 12.2841 12.151 12.3484 12.2454C12.2841 12.3399 11.9711 12.5855 11.1144 12.8037C10.3035 13.0103 9.26016 13.1281 8.16131 13.1386C8.10809 13.1425 8.05447 13.1448 8.00047 13.1448C7.94644 13.1448 7.89284 13.1425 7.83959 13.1386C6.74075 13.1281 5.69744 13.0103 4.88653 12.8037C4.02978 12.5855 3.71681 12.3399 3.65247 12.2454C3.71681 12.151 4.02981 11.9053 4.88656 11.6871C5.16856 11.6153 5.47909 11.5544 5.80988 11.5048C5.63209 11.2079 5.46206 10.9193 5.29978 10.6389C5.00097 10.6936 4.71987 10.7576 4.46147 10.8306C3.29731 11.1594 2.70703 11.6354 2.70703 12.2454C2.70703 12.8553 3.29731 13.3314 4.46147 13.6602Z"
                                                fill="rgba(20, 154, 237, 1)" />
                                              <path
                                                d="M8 12.2073C8.41728 12.2073 8.79631 11.9947 9.014 11.6385C10.5393 9.143 12.3575 5.85406 12.3575 4.35747C12.3575 1.95475 10.4028 0 8 0C5.59725 0 3.6425 1.95475 3.6425 4.35747C3.6425 5.85406 5.46072 9.143 6.986 11.6385C7.20369 11.9947 7.58275 12.2073 8 12.2073ZM6.24853 4.05828C6.24853 3.09256 7.03425 2.30687 8 2.30687C8.96575 2.30687 9.75147 3.09256 9.75147 4.05828C9.75147 5.02403 8.96575 5.80972 8 5.80972C7.03425 5.80972 6.24853 5.02406 6.24853 4.05828Z"
                                                fill="rgba(20, 154, 237, 1)" />
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_164_9813">
                                                <rect width="16" height="16" fill="white" />
                                              </clipPath>
                                            </defs>
                                          </svg>
                                          <?php echo $locations; ?>
                                        </p>
                                      </div>
                                    <?php endif; ?>
                                  </div>
                                  <?php if ((!empty($duration_days) && !empty($duration_nights)) || (!empty($price))) { ?>
                                    <div class="d-flex align-items-center justify-content-between duration-price-wrapper">
                                      <?php if (!empty($duration_days) && !empty($duration_nights)) { ?>
                                        <div class="duration-wrapper">
                                          <h6>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <path
                                                d="M3.52658 7.5H20.4725C20.6791 7.5 20.876 7.41487 21.0177 7.26487C21.1595 7.11487 21.233 6.91313 21.2213 6.70687L21.212 6.51225C21.0901 4.54275 19.4438 3 17.4635 3H16.4997V2.25C16.4997 1.836 16.1637 1.5 15.7497 1.5C15.3357 1.5 14.9997 1.836 14.9997 2.25V3H8.99971V2.25C8.99971 1.836 8.66371 1.5 8.24971 1.5C7.83571 1.5 7.49971 1.836 7.49971 2.25V3H6.53596C4.55558 3 2.90896 4.54313 2.78708 6.51375L2.77771 6.70725C2.76571 6.91313 2.83958 7.11488 2.98096 7.26525C3.12233 7.41563 3.32033 7.5 3.52658 7.5Z"
                                                fill="rgba(20, 154, 237, 1)" />
                                              <path
                                                d="M21.3387 9.73125C21.329 9.32438 20.996 9 20.5891 9H3.41034C3.00346 9 2.67084 9.32438 2.66034 9.73125C2.59321 12.4181 2.64084 15.0956 2.80209 17.6903C2.91909 19.5728 4.42696 21.0803 6.30871 21.1973C8.19721 21.3158 10.0985 21.375 11.9997 21.375C13.9006 21.375 15.8026 21.3158 17.69 21.1969C19.5725 21.0799 21.08 19.572 21.1973 17.6899C21.3586 15.0956 21.4062 12.4178 21.3387 9.73125ZM15.7497 13.5C15.1283 13.5 14.6247 12.9964 14.6247 12.375C14.6247 11.7536 15.1283 11.25 15.7497 11.25C16.3711 11.25 16.8747 11.7536 16.8747 12.375C16.8747 12.9964 16.3711 13.5 15.7497 13.5ZM16.8747 16.125C16.8747 16.7464 16.3711 17.25 15.7497 17.25C15.1283 17.25 14.6247 16.7464 14.6247 16.125C14.6247 15.5036 15.1283 15 15.7497 15C16.3711 15 16.8747 15.5036 16.8747 16.125ZM8.24971 15C8.87109 15 9.37471 15.5036 9.37471 16.125C9.37471 16.7464 8.87109 17.25 8.24971 17.25C7.62834 17.25 7.12471 16.7464 7.12471 16.125C7.12471 15.5036 7.62834 15 8.24971 15ZM7.12471 12.375C7.12471 11.7536 7.62834 11.25 8.24971 11.25C8.87109 11.25 9.37471 11.7536 9.37471 12.375C9.37471 12.9964 8.87109 13.5 8.24971 13.5C7.62834 13.5 7.12471 12.9964 7.12471 12.375ZM10.8747 16.125C10.8747 15.5036 11.3783 15 11.9997 15C12.6211 15 13.1247 15.5036 13.1247 16.125C13.1247 16.7464 12.6211 17.25 11.9997 17.25C11.3783 17.25 10.8747 16.7464 10.8747 16.125ZM11.9997 13.5C11.3783 13.5 10.8747 12.9964 10.8747 12.375C10.8747 11.7536 11.3783 11.25 11.9997 11.25C12.6211 11.25 13.1247 11.7536 13.1247 12.375C13.1247 12.9964 12.6211 13.5 11.9997 13.5Z"
                                                fill="rgba(20, 154, 237, 1)" />
                                            </svg><?php echo $duration_days; ?> Days
                                            <?php echo $duration_nights; ?>
                                            Nights
                                          </h6>
                                        </div>
                                      <?php } ?>
                                      <?php if (!empty($price)) { ?>
                                        <div class="price-wrapper">
                                          <h6 class="regular-price"><?php echo $sale_price; ?></h6>

                                          <h6><?php echo $tour_price_curr . $price; ?></h6>
                                        </div>
                                      <?php } ?>
                                    </div>
                                  <?php } ?>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php }
                      }
                      wp_reset_postdata(); ?>
                    <?php endif; ?>
                  </div>
                </div>
                <?php $active = ''; ?>
              <?php endforeach; ?>
            </div>

            <div class="mt-4 text-center view-all-tour-wrapper">
              <a href="<?php echo esc_url($int_btn['url']); ?>" class="m-auto btn-none-fill">
                <?php echo $int_btn['title']; ?> <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_164_9701)">
                    <path
                      d="M15.6686 7.48064L0.811792 0.623664C0.575226 0.516238 0.292947 0.580237 0.12838 0.78366C-0.0373304 0.987084 -0.0430445 1.27622 0.114666 1.48536L5.00026 7.99948L0.114666 14.5136C-0.0430445 14.7227 -0.0373304 15.013 0.127237 15.2153C0.238091 15.3536 0.403802 15.4279 0.571797 15.4279C0.652938 15.4279 0.734079 15.4107 0.810649 15.3753L15.6674 8.51833C15.8709 8.42462 16 8.22234 16 7.99948C16 7.77663 15.8708 7.57435 15.6686 7.48064Z"
                      fill="rgba(20, 154, 237, 1)" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_9701">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !Most selling international tour packages -->
<!-- Blogs -->
<?php
$blogs = get_field('blogs');
$enable_blogs = $blogs['enable_blogs'];
$blog_small_title = $blogs['blog_small_title'];
$blog_title = $blogs['blog_title'];
$blog_btn = $blogs['blog_btn'];
$blog_blogs = $blogs['blog_blogs'];
if ($enable_blogs):
  ?>
  <section class="feature-blog-section">
    <div class="container">
      <div class="mb-4 row">
        <div class="title-type-one">
          <div class="aligh-items-center row">
            <div class="col-md-6">
              <span><?php echo $blog_small_title; ?></span>
              <h3><?php echo $blog_title; ?></h3>
            </div>
            <div class="col-md-6 d-none d-md-block">
              <a href="<?php echo esc_url($blog_btn['url']); ?> " class="btn-none-fill ms-auto">
                <?php echo $blog_btn['title']; ?> <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_164_9701)">
                    <path
                      d="M15.6686 7.48064L0.811792 0.623664C0.575226 0.516238 0.292947 0.580237 0.12838 0.78366C-0.0373304 0.987084 -0.0430445 1.27622 0.114666 1.48536L5.00026 7.99948L0.114666 14.5136C-0.0430445 14.7227 -0.0373304 15.013 0.127237 15.2153C0.238091 15.3536 0.403802 15.4279 0.571797 15.4279C0.652938 15.4279 0.734079 15.4107 0.810649 15.3753L15.6674 8.51833C15.8709 8.42462 16 8.22234 16 7.99948C16 7.77663 15.8708 7.57435 15.6686 7.48064Z"
                      fill="rgba(20, 154, 237, 1)" />
                  </g>
                  <defs>
                    <clipPath id="clip0_164_9701">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php
      if (is_array($blog_blogs) && !empty($blog_blogs)):
        $wp_posts = $blog_blogs;
        if (is_array($wp_posts) && !empty($wp_posts)):
          $default_image = get_field('fallback_blog_featured_image', 'option');
          $blog_blogs = array_map(function ($post) use ($default_image) {
            $feat_image = get_the_post_thumbnail_url($post->ID, 'full');
            $content = $post->post_content;
            $read_time = calculate_reading_time($content);
            return [
              'link' => esc_url(get_permalink($post->ID)),
              'title' => esc_html($post->post_title),
              'read_time' => $read_time,
              'image' => $feat_image ?: $default_image,
            ];
          }, $wp_posts);
          ?>
          <div class="row">
            <div class="grid-image-wrapper owl-carousel owl-theme">
              <?php foreach ($blog_blogs as $index => $blog): ?>
                <a href="<?php echo esc_url($blog['link']); ?>" class="gridImage<?php echo $index + 1; ?>">
                  <div class="feature-blog-card">
                    <img src="<?php echo esc_url($blog['image']); ?>" class="img-fluid"
                      alt="<?php echo esc_attr($blog['title']); ?>">
                    <div class="inner-content-wrapper">
                      <div class="read-time">
                        <p class="d-flex align-items-center">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_90_985)">
                              <path
                                d="M8 0C3.58867 0 0 3.58867 0 8C0 12.4113 3.58867 16 8 16C12.4113 16 16 12.4113 16 8C16 3.58867 12.4113 0 8 0ZM9.66667 10.8867C9.562 10.9473 9.44733 10.976 9.334 10.976C9.10333 10.976 8.87933 10.8567 8.756 10.6427L7.42267 8.33333C7.364 8.232 7.33333 8.11733 7.33333 8V4C7.33333 3.632 7.63133 3.33333 8 3.33333C8.36867 3.33333 8.66667 3.632 8.66667 4V7.82133L9.91067 9.976C10.0947 10.2947 9.98533 10.7027 9.66667 10.8867Z"
                                fill="rgba(20, 154, 237, 1)" />
                            </g>
                            <defs>
                              <clipPath id="clip0_90_985">
                                <rect width="16" height="16" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                          <?php echo esc_html($blog['read_time']); ?> mins read
                        </p>
                      </div>
                      <h4><?php echo esc_html($blog['title']); ?></h4>
                      <div class="read-more-wrapper">
                        <h6>Read this Article</h6>
                      </div>
                    </div>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php else: ?>
          <div class="py-60 text-center empty-state-wrapper">
            <div class="image-wrapper">
              <svg width="352" height="352" viewBox="0 0 352 352" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="176" cy="176" r="106.5" stroke="rgba(20, 154, 237, 1)" />
                <circle opacity="0.2" cx="176" cy="176" r="140.5" stroke="rgba(20, 154, 237, 1)" />
                <circle opacity="0.1" cx="176" cy="176" r="175.5" stroke="rgba(20, 154, 237, 1)" />
                <rect y="1" width="352" height="351" fill="url(#paint0_linear_1_4)" />
                <g filter="url(#filter0_d_1_4)">
                  <rect x="72.2559" y="74.0088" width="208.408" height="219.646" rx="4.08644" fill="#F6F8FF" />
                  <rect x="72.5113" y="74.2642" width="207.898" height="219.135" rx="3.83104" stroke="black"
                    stroke-opacity="0.15" stroke-width="0.510805" />
                  <rect x="84.5156" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="92.1777" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="99.8398" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="107.502" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="115.164" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="125.381" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#A5A5A5" />
                  <rect x="84.5156" y="223.395" width="178.782" height="12.5044" rx="1.25044" fill="#A5A5A5" />
                  <rect x="84.5156" y="241.077" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                  <rect x="94.7324" y="240.901" width="173.811" height="7.50265" rx="1.25044" fill="#D9D9D9" />
                  <line opacity="0.1" x1="84.5156" y1="256.321" x2="268.405" y2="256.321" stroke="black"
                    stroke-width="0.510805" />
                  <rect x="84.5156" y="269.728" width="10.2161" height="10.2161" rx="1.25044" fill="#D9D9D9" />
                  <rect x="97.7969" y="269.983" width="60.7858" height="9.70529" rx="1.25044" fill="#D9D9D9" />
                  <rect x="207.619" y="268.836" width="60.7858" height="12" rx="1.25044" fill="#A0A0A0" />
                </g>
                <path
                  d="M63.3509 68.5274C63.1582 65.7717 65.2359 63.3816 67.9915 63.1889L265.913 49.3489C268.669 49.1562 271.059 51.2339 271.252 53.9896L279.882 177.409L71.9812 191.947L63.3509 68.5274Z"
                  fill="url(#paint1_linear_1_4)" />
                <defs>
                  <filter id="filter0_d_1_4" x="67.2541" y="69.5178" width="218.412" height="229.65"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      result="hardAlpha" />
                    <feOffset dy="0.510805" />
                    <feGaussianBlur stdDeviation="2.50088" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_4" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_4" result="shape" />
                  </filter>
                  <linearGradient id="paint0_linear_1_4" x1="176" y1="1" x2="176" y2="352" gradientUnits="userSpaceOnUse">
                    <stop offset="0.556823" stop-color="white" stop-opacity="0" />
                    <stop offset="1" stop-color="white" />
                  </linearGradient>
                  <linearGradient id="paint1_linear_1_4" x1="71.755" y1="191.55" x2="269.325" y2="49"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBEBEB" />
                    <stop offset="1" stop-color="#B4B4B4" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="bottom-content-wrapper">
              <h6>No Blogs Found</h6>
              <p>We couldn't find any blogs in our record.</p>
              <a href="/" class="mx-auto btn-none-fill">
                Go Homepage
              </a>
            </div>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="py-60 text-center empty-state-wrapper">
          <div class="image-wrapper">
            <svg width="352" height="352" viewBox="0 0 352 352" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity="0.3" cx="176" cy="176" r="106.5" stroke="rgba(20, 154, 237, 1)" />
              <circle opacity="0.2" cx="176" cy="176" r="140.5" stroke="rgba(20, 154, 237, 1)" />
              <circle opacity="0.1" cx="176" cy="176" r="175.5" stroke="rgba(20, 154, 237, 1)" />
              <rect y="1" width="352" height="351" fill="url(#paint0_linear_1_4)" />
              <g filter="url(#filter0_d_1_4)">
                <rect x="72.2559" y="74.0088" width="208.408" height="219.646" rx="4.08644" fill="#F6F8FF" />
                <rect x="72.5113" y="74.2642" width="207.898" height="219.135" rx="3.83104" stroke="black"
                  stroke-opacity="0.15" stroke-width="0.510805" />
                <rect x="84.5156" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="92.1777" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="99.8398" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="107.502" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="115.164" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="125.381" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#A5A5A5" />
                <rect x="84.5156" y="223.395" width="178.782" height="12.5044" rx="1.25044" fill="#A5A5A5" />
                <rect x="84.5156" y="241.077" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                <rect x="94.7324" y="240.901" width="173.811" height="7.50265" rx="1.25044" fill="#D9D9D9" />
                <line opacity="0.1" x1="84.5156" y1="256.321" x2="268.405" y2="256.321" stroke="black"
                  stroke-width="0.510805" />
                <rect x="84.5156" y="269.728" width="10.2161" height="10.2161" rx="1.25044" fill="#D9D9D9" />
                <rect x="97.7969" y="269.983" width="60.7858" height="9.70529" rx="1.25044" fill="#D9D9D9" />
                <rect x="207.619" y="268.836" width="60.7858" height="12" rx="1.25044" fill="#A0A0A0" />
              </g>
              <path
                d="M63.3509 68.5274C63.1582 65.7717 65.2359 63.3816 67.9915 63.1889L265.913 49.3489C268.669 49.1562 271.059 51.2339 271.252 53.9896L279.882 177.409L71.9812 191.947L63.3509 68.5274Z"
                fill="url(#paint1_linear_1_4)" />
              <defs>
                <filter id="filter0_d_1_4" x="67.2541" y="69.5178" width="218.412" height="229.65"
                  filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix" />
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                    result="hardAlpha" />
                  <feOffset dy="0.510805" />
                  <feGaussianBlur stdDeviation="2.50088" />
                  <feComposite in2="hardAlpha" operator="out" />
                  <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_4" />
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_4" result="shape" />
                </filter>
                <linearGradient id="paint0_linear_1_4" x1="176" y1="1" x2="176" y2="352" gradientUnits="userSpaceOnUse">
                  <stop offset="0.556823" stop-color="white" stop-opacity="0" />
                  <stop offset="1" stop-color="white" />
                </linearGradient>
                <linearGradient id="paint1_linear_1_4" x1="71.755" y1="191.55" x2="269.325" y2="49"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#EBEBEB" />
                  <stop offset="1" stop-color="#B4B4B4" />
                </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="bottom-content-wrapper">
            <h6>No Blogs Found</h6>
            <p>We couldn't find any blogs in our record.</p>
            <a href="/" class="mx-auto btn-none-fill">
              Go Homepage
            </a>
          </div>
        </div> <?php endif; ?>
      <div class="text-center d-md-none">
        <a href="<?php echo esc_url($blog_btn['url']); ?>" class="btn-none-fill mx-auto">
          <?php echo $blog_btn['title']; ?>
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_164_9701)">
              <path
                d="M15.6686 7.48064L0.811792 0.623664C0.575226 0.516238 0.292947 0.580237 0.12838 0.78366C-0.0373304 0.987084 -0.0430445 1.27622 0.114666 1.48536L5.00026 7.99948L0.114666 14.5136C-0.0430445 14.7227 -0.0373304 15.013 0.127237 15.2153C0.238091 15.3536 0.403802 15.4279 0.571797 15.4279C0.652938 15.4279 0.734079 15.4107 0.810649 15.3753L15.6674 8.51833C15.8709 8.42462 16 8.22234 16 7.99948C16 7.77663 15.8708 7.57435 15.6686 7.48064Z"
                fill="rgba(20, 154, 237, 1)" />
            </g>
            <defs>
              <clipPath id="clip0_164_9701">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </a>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Blogs -->