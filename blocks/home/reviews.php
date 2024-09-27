<!-- Reviews of Bold Himalaya Tours -->
<?php
$enable_reviews = get_field('enable_reviews');
$reviews_title = get_field('reviews_title');
$reviews = get_field('reviews', 'option');
if ($enable_reviews && $reviews):
  ?>
  <section class="testimonials section-gap">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center"><?php echo $reviews_title; ?></h2>
      </div>
      <div class="testimonials-wrapper">
        <div class="testimonial-tab d-lg-flex justify-content-between align-items-center ">
          <ul class="d-flex justify-content-start align-items-center">
            <?php foreach ($reviews as $index => $customer_reviews):
              $revw_p_icon = $customer_reviews['revw_p_icon'];
              $revw_title = $customer_reviews['revw_title'];
              $revw_total_review = $customer_reviews['revw_total_review'];
              ?>
              <li class="<?php echo $index === 0 ? 'active' : ''; ?>">
                <a href="#">
                  <?php
                  $plat_icon = $revw_p_icon ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/google.svg';
                  $image_id_plat_icon = attachment_url_to_postid($plat_icon);
                  $plat_icon_alt_text = get_post_meta($image_id_plat_icon, '_wp_attachment_image_alt', true);
                  if (!$plat_icon_alt_text) {
                    $plat_icon_alt_text = 'Reviews of Bold Himalaya Tours';
                  } ?>
                  <img class="img-fluid" src="<?php echo $plat_icon; ?>" alt="<?php echo esc_attr($plat_icon_alt_text); ?>">
                  <span class="title"><?php echo $revw_title; ?></span>
                  <span>(
                    <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M5.13589 1.48359C5.52162 0.82132 6.47838 0.821321 6.86411 1.48359L8.04119 3.5045C8.18249 3.7471 8.41927 3.91913 8.69366 3.97855L10.9794 4.47352C11.7284 4.63572 12.0241 5.54565 11.5134 6.11715L9.95518 7.86111C9.76812 8.07047 9.67768 8.34882 9.70596 8.62814L9.94155 10.955C10.0188 11.7175 9.24472 12.2798 8.54338 11.9708L6.40325 11.0277C6.14634 10.9145 5.85366 10.9145 5.59675 11.0277L3.45661 11.9708C2.75528 12.2798 1.98125 11.7175 2.05845 10.955L2.29404 8.62814C2.32232 8.34882 2.23188 8.07047 2.04482 7.86111L0.486555 6.11715C-0.0240997 5.54565 0.271554 4.63572 1.02061 4.47352L3.30634 3.97855C3.58074 3.91913 3.81751 3.7471 3.95881 3.5045L5.13589 1.48359Z"
                        fill="#E99A23" />
                    </svg>
                    <?php if (isset($reviews[$index]) && is_array($reviews[$index]['review_items'])) {
                      $total_rating = 0;
                      $total_reviewers = count($reviews[$index]['review_items']);
                      foreach ($reviews[$index]['review_items'] as $item) {
                        if (isset($item['ri_rating'])) {
                          $total_rating += (float) $item['ri_rating'];
                        }
                      }
                      $average_rating = $total_reviewers > 0 ? $total_rating / $total_reviewers : 0;
                      $google_average_rating = number_format($average_rating, 1);
                    }
                    echo $google_average_rating; ?>
                    )</span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
          <?php foreach ($reviews as $index => $customer_reviews):
            $revw_total_review = $customer_reviews['revw_total_review'];
            $revw_p_logo = $customer_reviews['revw_p_logo'];
            $revw_status = $customer_reviews['revw_status'];
            ?>
            <div class="platform-info d-flex justify-content-lg-end align-items-center" id="bold-item<?php echo $index; ?>">
              <div class="pi-icon">
                <?php
                $plat_logo = $revw_p_logo ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/google.svg';
                $image_id_plat_logo = attachment_url_to_postid($plat_logo);
                $plat_logo_alt_text = get_post_meta($image_id_plat_logo, '_wp_attachment_image_alt', true);
                if (!$plat_logo_alt_text) {
                  $plat_logo_alt_text = 'Reviews of Bold Himalaya Tours';
                } ?>
                <img class="img-fluid" src="<?php echo $plat_logo; ?>" alt="<?php echo esc_attr($plat_logo_alt_text); ?>">
              </div>
              <small><?php echo $revw_status; ?></small>
              <div class="review-rating" data-rating="2">
                <ul class="d-flex stars">
                  <li>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                    <div class="filled-star">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                    <div class="filled-star">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                    <div class="filled-star">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                    <div class="filled-star" style="width: 50%;">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                    <div class="filled-star" style="width: 0%;">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                    </div>
                  </li>
                </ul>
              </div>
              <small><?php if (isset($reviews[$index]) && is_array($reviews[$index]['review_items'])) {
                $total_rating = 0;
                $total_reviewers = count($reviews[$index]['review_items']);
                foreach ($reviews[$index]['review_items'] as $item) {
                  if (isset($item['ri_rating'])) {
                    $total_rating += (float) $item['ri_rating'];
                  }
                }
                $average_rating = $total_reviewers > 0 ? $total_rating / $total_reviewers : 0;
                $google_average_rating = number_format($average_rating, 1);
              }
              echo $google_average_rating; ?> | <?php echo count($reviews[$index]['review_items']); ?> reviews</small>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="testimonial-slider-wrapper">
          <?php foreach ($reviews as $index => $customer_reviews):
            $review_items = $customer_reviews['review_items'];
            ?>
            <div class="testimonial-slider" id="bold-item<?php echo $index; ?>">
              <?php foreach ($review_items as $ritems):
                $ri_name = $ritems['ri_name'];
                $ri_name_copy = $ritems['ri_name_copy'];
                $ri_rating = $ritems['ri_rating'];
                $ri_review_desc = $ritems['ri_review_desc'];
                $reviews_link = $ritems['reviews_link'];
                ?>
                <div class="testimonial-item">
                  <div class="tsi-header d-flex justify-content-between align-items-center">
                    <div class="tsi-reviewer d-flex justify-content-start align-items-center">
                      <div class="reviewer-profile">
                        <span><?php $initials = strtoupper(substr($ri_name, 0, 1)) . (strpos($ri_name, ' ') !== false ? strtoupper(substr($ri_name, strpos($ri_name, ' ') + 1, 1)) : '');
                        echo $initials; ?></span>
                      </div>
                      <div class="reviewer-info">
                        <strong class="sm-text"><?php echo $ri_name; ?></strong>
                        <small><?php echo $ri_name_copy; ?></small>
                      </div>
                    </div>
                    <div class="brand">
                      <?php
                      $current_review = $reviews[$index];
                      $plat_icon = $current_review['revw_p_icon'] ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/google.svg';
                      $image_id_plat_icon = attachment_url_to_postid($plat_icon);
                      $plat_icon_alt_text = get_post_meta($image_id_plat_icon, '_wp_attachment_image_alt', true);
                      if (!$plat_icon_alt_text) {
                        $plat_icon_alt_text = 'Reviews of Bold Himalaya Tours';
                      }
                      ?>
                      <img class="img-fluid" src="<?php echo $plat_icon; ?>"
                        alt="<?php echo esc_attr($plat_icon_alt_text); ?>">
                    </div>
                  </div>
                  <div class="review-rating" data-rating="4">
                    <ul class="d-flex stars justify-content-start">
                      <?php for ($i = 1; $i <= $ri_rating; $i++): ?>
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg" alt="">
                          <div class="filled-star">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg" alt="">
                          </div>
                        </li>
                      <?php endfor; ?>
                    </ul>
                  </div>
                  <div class="message">
                    <?php echo $ri_review_desc; ?>
                  </div>
                  <?php if($reviews_link):?>
                  <a href="<?php echo esc_url($reviews_link);?>" class="bh-btn bh-btn-underlined" target="_blank">Read More
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path
                        d="M5.35165 11.6539C5.38572 11.6293 5.41758 11.6018 5.44687 11.5718L10.5004 6.51824L10.4415 6.67968C10.3847 6.83837 10.3561 7.00575 10.3569 7.17427L10.3569 10.0085C10.3484 10.3734 10.6037 10.6913 10.9617 10.762C11.3573 10.8231 11.7276 10.552 11.7887 10.1564C11.7937 10.1244 11.7965 10.0921 11.7971 10.0598L11.7971 4.93453C11.7973 4.53421 11.473 4.20953 11.0727 4.2093C11.0724 4.2093 11.0721 4.2093 11.0719 4.2093L5.9466 4.2093C5.5463 4.20986 5.22224 4.53482 5.22278 4.93514C5.22283 4.96664 5.22493 4.99811 5.22906 5.02935C5.29969 5.38735 5.61767 5.6426 5.98248 5.63413L8.81675 5.63925C8.96723 5.63933 9.1168 5.616 9.26009 5.57006L9.48304 5.48549L4.45002 10.5185C4.17848 10.7706 4.13166 11.1832 4.33983 11.4898C4.57392 11.8145 5.02692 11.8879 5.35165 11.6539Z"
                        fill="#7FB51F" />
                    </svg>
                  </a>
                  <?php endif;?>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
          <div class="testimonial-slider-dots"></div>
          <button class="testimonial-prev d-none d-md-block">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="-1" y="1" width="38" height="38" rx="19" transform="matrix(-1 0 0 1 38 0)" stroke="#7FB51F"
                stroke-width="2" />
              <g clip-path="url(#clip0_379_9222)">
                <path
                  d="M15.4314 18.9167L21.9118 14.4803C22.2111 14.2753 22.5126 14.1667 22.7632 14.1667C23.2478 14.1667 23.5475 14.5556 23.5475 15.2066V24.7951C23.5475 25.4453 23.2482 25.8334 22.7647 25.8334C22.5137 25.8334 22.217 25.7248 21.9171 25.5192L15.4337 21.0829C15.0167 20.7971 14.7858 20.4125 14.7858 19.9996C14.7857 19.5869 15.014 19.2024 15.4314 18.9167Z"
                  fill="#7FB51F" />
              </g>
              <defs>
                <clipPath id="clip0_379_9222">
                  <rect width="11.6667" height="11.6667" fill="white" transform="matrix(-1 0 0 1 25 14.1667)" />
                </clipPath>
              </defs>
            </svg>
          </button>
          <button class="testimonial-next d-none d-md-block">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="-1" y="1" width="38" height="38" rx="19" transform="matrix(-1 0 0 1 38 0)" stroke="#7FB51F"
                stroke-width="2" />
              <g clip-path="url(#clip0_379_9222)">
                <path
                  d="M15.4314 18.9167L21.9118 14.4803C22.2111 14.2753 22.5126 14.1667 22.7632 14.1667C23.2478 14.1667 23.5475 14.5556 23.5475 15.2066V24.7951C23.5475 25.4453 23.2482 25.8334 22.7647 25.8334C22.5137 25.8334 22.217 25.7248 21.9171 25.5192L15.4337 21.0829C15.0167 20.7971 14.7858 20.4125 14.7858 19.9996C14.7857 19.5869 15.014 19.2024 15.4314 18.9167Z"
                  fill="#7FB51F" />
              </g>
              <defs>
                <clipPath id="clip0_379_9222">
                  <rect width="11.6667" height="11.6667" fill="white" transform="matrix(-1 0 0 1 25 14.1667)" />
                </clipPath>
              </defs>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Reviews of Bold Himalaya Tours -->