<?php

/**
 * Single Tour
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */

get_header();
$tour_rating = get_field('tour_rating');
$tour_ratings = get_field('tour_ratings');
$tour_key_info = get_field('tour_key_info');
$add_key_info = get_field('add_key_info');

?>
<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="<?php echo esc_url(get_home_url()); ?>" class="sm-text">Home</a></li>
        <li><span class="sm-text"><?php echo get_the_title(); ?></span></li>
      </ul>
    </div>
  </div>
</section>
<!-- !Breadcrumb -->
<!-- Tour Gallery -->
<?php
$tour_gallery = get_field('tour_gallery');
if ($tour_gallery):
  ?>
  <section class="gallery-banner py-0">
    <div class="gb-items light-gallery">
      <?php
      $placeholder_image = get_field('fallback_gallery_placeholder_image', 'option');
      $tour_gallery = is_array($tour_gallery) ? $tour_gallery : [];
      $image_count = count($tour_gallery);
      while ($image_count < 8) {
        $tour_gallery[] = $placeholder_image;
        $image_count++;
      }
      foreach ($tour_gallery as $index => $gallery): ?>
        <div class="gb-item <?php echo $index === 0 ? 'featured' : ''; ?>">
          <a data-src="<?php echo esc_url($gallery); ?>" data-iframe="true">
            <img src="<?php echo esc_url($gallery); ?>" alt="Tour Images" class="img-fluid">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !Tour Gallery -->
<!-- Tour Intro -->
<section class="trip-detail-box bg-white section-padding-y">
  <div class="container">

    <div class="trip-detail-page-title d-md-flex justify-content-between flex-wrap">
      <div class="title-info">
        <h3><?php echo get_the_title(); ?></h3>
        <?php if (!empty($tour_rating)): ?>
          <div class="d-flex justify-content-start align-items-center gap-2">
            <div class="review-rating" data-rating="4.5">
              <ul class="d-flex stars justify-content-start">
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
            <p><strong><?php echo $tour_rating; ?></strong><span>(<?php echo $tour_ratings; ?>)</span></p>
          </div>
        <?php endif; ?>
      </div>
      <ul class="page-title-button">
        <li>
          <a href="#" class="wishlist" data-id="<?php echo get_the_ID(); ?>">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="34" height="34" rx="17" fill="#F9F9F9" />
              <rect x="0.5" y="0.5" width="33" height="33" rx="16.5" stroke="black" stroke-opacity="0.1" />
              <path
                d="M14.3997 22.4224L14.3997 22.4224L14.4016 22.424C14.9514 22.8848 15.5734 23.4062 16.2183 23.9608C16.4352 24.1477 16.7129 24.25 17 24.25C17.287 24.25 17.5647 24.1477 17.7815 23.9611C18.4279 23.4052 19.0509 22.8829 19.6017 22.4214L19.6018 22.4214L19.6168 22.4088C21.2165 21.0679 22.6219 19.89 23.6044 18.724C24.7148 17.4063 25.25 16.1331 25.25 14.7291C25.25 13.3782 24.7788 12.1225 23.9132 11.1991L23.9132 11.1991C23.0366 10.264 21.8335 9.75 20.5304 9.75C19.5514 9.75 18.6526 10.0556 17.8651 10.6545C17.5514 10.8931 17.2623 11.1731 17 11.4907C16.7378 11.1731 16.4486 10.8931 16.135 10.6545L16.135 10.6545C15.3476 10.0556 14.4487 9.75 13.4697 9.75C12.1665 9.75 10.9635 10.264 10.0869 11.1991L10.0869 11.1991C9.22131 12.1225 8.75 13.3782 8.75 14.7291C8.75 16.1331 9.28535 17.4063 10.3957 18.7241L10.3957 18.7241C11.3784 19.8903 12.7844 21.0686 14.3849 22.41L14.3969 22.42L14.3987 22.4216L14.3997 22.4224ZM11.4997 17.8138L11.4996 17.8138C10.5772 16.7191 10.1871 15.7731 10.1871 14.7291C10.1871 13.7248 10.5302 12.8171 11.1406 12.1658C11.7409 11.5256 12.5662 11.1718 13.4697 11.1718C14.125 11.1718 14.725 11.3756 15.2589 11.7816C15.7388 12.1466 16.0774 12.6122 16.2781 12.943L16.2781 12.9431C16.432 13.1966 16.7035 13.3473 17 13.3473C17.2965 13.3473 17.568 13.1966 17.7219 12.9431L17.5082 12.8134L17.7219 12.9431C17.9227 12.6122 18.2614 12.1465 18.7411 11.7815C19.275 11.3755 19.875 11.1718 20.5304 11.1718C21.4338 11.1718 22.2592 11.5256 22.8594 12.1658C23.4698 12.8171 23.8129 13.7248 23.8129 14.7291C23.8129 15.7731 23.4228 16.7191 22.5005 17.8138C21.601 18.8813 20.2573 20.0084 18.6727 21.3367C18.1657 21.7614 17.596 22.239 16.999 22.7487C16.4051 22.24 15.8364 21.7632 15.3306 21.3393L15.3285 21.3376L15.3267 21.336C13.7424 20.0082 12.399 18.8811 11.4997 17.8138Z"
                fill="#015637" stroke="#015637" stroke-width="0.5" />
            </svg>

          </a>
          <a href="#">
            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="34" height="34" rx="17" fill="#F9F9F9" />
              <rect x="0.5" y="0.5" width="33" height="33" rx="16.5" stroke="black" stroke-opacity="0.1" />
              <g clip-path="url(#clip0_211_3601)">
                <path
                  d="M22.2734 19.6719C21.2314 19.6719 20.3131 20.1845 19.7363 20.964L14.7496 18.4106C14.8324 18.1284 14.8906 17.8359 14.8906 17.5273C14.8906 17.1088 14.8048 16.7108 14.6566 16.3448L19.8753 13.2044C20.4561 13.886 21.3098 14.3281 22.2734 14.3281C24.0182 14.3281 25.4375 12.9088 25.4375 11.1641C25.4375 9.41929 24.0182 8 22.2734 8C20.5287 8 19.1094 9.41929 19.1094 11.1641C19.1094 11.5661 19.1922 11.9476 19.3295 12.3016L14.0952 15.4513C13.5149 14.7899 12.6736 14.3633 11.7266 14.3633C9.98179 14.3633 8.5625 15.7826 8.5625 17.5273C8.5625 19.2721 9.98179 20.6914 11.7266 20.6914C12.7858 20.6914 13.7196 20.1637 14.2942 19.3623L19.2645 21.9074C19.1729 22.2029 19.1094 22.5107 19.1094 22.8359C19.1094 24.5807 20.5287 26 22.2734 26C24.0182 26 25.4375 24.5807 25.4375 22.8359C25.4375 21.0912 24.0182 19.6719 22.2734 19.6719Z"
                  fill="#015637" />
              </g>
              <defs>
                <clipPath id="clip0_211_3601">
                  <rect width="18" height="18" fill="white" transform="translate(8 8)" />
                </clipPath>
              </defs>
            </svg>

          </a>
          <a href="#" class="group-discount-btn download-pdf">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M3.71016 13.2C4.15198 13.2 4.51016 13.5581 4.51016 14V15.6C4.51016 15.8121 4.59443 16.0156 4.74448 16.1656C4.8945 16.3156 5.09797 16.4 5.31016 16.4H14.9101C15.1223 16.4 15.3257 16.3157 15.4758 16.1656C15.6259 16.0156 15.7101 15.8121 15.7101 15.6V14C15.7101 13.5581 16.0683 13.2 16.5101 13.2C16.952 13.2 17.3101 13.5581 17.3101 14V15.6C17.3101 16.2364 17.0573 16.8469 16.6072 17.297C16.1571 17.7471 15.5466 18 14.9101 18H5.31016C4.67365 18 4.06318 17.7472 3.61308 17.297C3.16302 16.8469 2.91016 16.2364 2.91016 15.6V14C2.91016 13.5581 3.26832 13.2 3.71016 13.2Z"
                fill="#015637" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.54486 8.63446C5.85728 8.32204 6.36381 8.32204 6.67624 8.63446L10.1105 12.0688L13.5449 8.63446C13.8573 8.32204 14.3638 8.32204 14.6762 8.63446C14.9887 8.94686 14.9887 9.45342 14.6762 9.76582L10.6762 13.7658C10.3638 14.0782 9.85725 14.0782 9.54485 13.7658L5.54486 9.76582C5.23244 9.45342 5.23244 8.94686 5.54486 8.63446Z"
                fill="#015637" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M10.1105 2.80005C10.5524 2.80005 10.9105 3.15822 10.9105 3.60005V13.2C10.9105 13.6419 10.5524 14 10.1105 14C9.66871 14 9.31055 13.6419 9.31055 13.2V3.60005C9.31055 3.15822 9.66871 2.80005 10.1105 2.80005Z"
                fill="#015637" />
            </svg>

            Download [PDF]
          </a>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <div class="trip-detail-blocks">
          <div class="trip-detail-block trip-overview">
            <div class="key-feature">
              <div class="row">
                <?php
                if (is_array($tour_key_info)):
                  $index = 1;
                  while (isset($tour_key_info['svg_' . $index]) || isset($tour_key_info['title_' . $index]) || isset($tour_key_info['info_' . $index])):
                    $svg = isset($tour_key_info['svg_' . $index]) ? $tour_key_info['svg_' . $index] : '';
                    $title = isset($tour_key_info['title_' . $index]) ? $tour_key_info['title_' . $index] : '';
                    $desc = isset($tour_key_info['info_' . $index]) ? $tour_key_info['info_' . $index] : '';
                    if ($svg && $title && $desc): ?>
                      <div class="col-6 col-lg-3">
                        <div class="kf-item d-flex justify-content-start">
                          <div class="kf-icon">
                            <?php
                            if (filter_var($svg, FILTER_VALIDATE_URL)):
                              echo '<img src="' . esc_url($svg) . '" alt="' . esc_attr($title) . '">';
                            elseif (strpos($svg, 'dashicons') !== false):
                              echo '<span class="dashicons ' . esc_attr($svg) . '"></span>';
                            else:
                              echo wp_kses_post($svg);
                            endif;
                            ?>
                          </div>
                          <div class="kf-info">
                            <span class="sm-text"><?php echo esc_html($title); ?></span>
                            <strong class="sm-text"><?php echo esc_html($desc); ?></strong>
                          </div>
                        </div>
                      </div>
                      <?php
                    endif;
                    $index++;
                  endwhile;
                else:
                  echo 'not array';
                endif;
                ?>
                <?php
                if (have_rows('add_key_info')):
                  ?>
                  <?php
                  while (have_rows('add_key_info')):
                    the_row();
                    $add_svg = get_sub_field('svg_5');
                    $add_title = get_sub_field('title_5');
                    $add_desc = get_sub_field('info_5');
                    if ($add_svg && $add_title && $add_desc): ?>
                      <div class="col-6 col-lg-3">
                        <div class="kf-item d-flex justify-content-start">
                          <div class="kf-icon">
                            <?php
                            if (filter_var($add_svg, FILTER_VALIDATE_URL)):
                              echo '<img src="' . esc_url($add_svg) . '" alt="' . esc_attr($add_title) . '">';
                            elseif (strpos($add_svg, 'dashicons') !== false):
                              echo '<span class="dashicons ' . esc_attr($add_svg) . '"></span>';
                            else:
                              echo wp_kses_post($add_svg);
                            endif;
                            ?>
                          </div>
                          <div class="kf-info">
                            <span class="sm-text"><?php echo esc_html($add_title); ?></span>
                            <strong class="sm-text"><?php echo esc_html($add_desc); ?></strong>
                          </div>
                        </div>
                      </div>
                      <?php
                    endif;
                  endwhile;
                ?><?php
                endif;
                ?>
              </div>
            </div>
            <div class="text-wrapper text-expandable">
              <div class="text-read-more ">
                <p><?php echo the_content(); ?></p>
              </div>
            </div>
            <a href="#" class="bh-btn bh-btn-underlined handle-client-read-more">Read More</a>
          </div>
          <!-- Itinerary -->
          <?php
          $tour_maps_itinerary = get_field('tour_maps_itinerary');
          $enable_itinerary = $tour_maps_itinerary['enable_itinerary'];
          $tour_itinerary_icon = $tour_maps_itinerary['tour_itinerary_icon'];
          $tour_itinerary_title = $tour_maps_itinerary['tour_itinerary_title'];
          $tour_itinerary_desc = $tour_maps_itinerary['tour_itinerary_desc'];
          $tour_itinerary_items = $tour_maps_itinerary['tour_itinerary_items'];
          if ($enable_itinerary && $tour_itinerary_items):
            ?>
            <div class="trip-detail-block itinerary">
              <div class="block-title">
                <div class="bt-icon">
                  <?php echo $tour_itinerary_icon; ?>
                </div>
                <div class="bt-text">
                  <h5><?php echo $tour_itinerary_title; ?></h5>
                  <p><?php echo $tour_itinerary_desc; ?></p>
                </div>
              </div>
              <div class="itinerary-wrapper accordions">
                <?php
                $firstItem = true;
                foreach ($tour_itinerary_items as $tii):
                  $tiiDay = $tii['day'];
                  $tiiTitle = $tii['title'];
                  $tiiDesc = $tii['desc'];
                  $iti_key_info = $tii['iti_key_info'];
                  $tour_attraction_places = $tii['tour_attraction_places'];
                  $enable_tour_ext = $tii['enable_tour_ext'];
                  $tour_extension_title = $tii['tour_extension_title'];
                  $tour_extension = $tii['tour_extension'];

                  ?>
                  <div class="accordion-item">
                    <div class="faq-wrapper <?php echo $firstItem ? 'expand' : ''; ?>">
                      <div class="faq-title">
                        <small><?php echo $tiiDay; ?></small>
                        <strong><?php echo $tiiTitle; ?></strong>
                      </div>
                      <div class="faq-content-wrapper">
                        <div class="faq-content">
                          <?php if ($iti_key_info):
                            ?>
                            <div class="features">
                              <div class="row">
                                <?php
                                if (is_array($iti_key_info)):
                                  foreach ($iti_key_info as $item):
                                    $svg = isset($item['svg_5']) ? $item['svg_5'] : '';
                                    $title = isset($item['title_5']) ? $item['title_5'] : '';
                                    $desc = isset($item['info_5']) ? $item['info_5'] : '';
                                    if ($svg && $title && $desc): ?>
                                      <div class="col-6 col-lg-3">
                                        <div class="kf-item d-flex justify-content-start">
                                          <div class="kf-icon">
                                            <?php
                                            if (filter_var($svg, FILTER_VALIDATE_URL)):
                                              echo '<img src="' . esc_url($svg) . '" alt="' . esc_attr($title) . '">';
                                            elseif (strpos($svg, 'dashicons') !== false):
                                              echo '<span class="dashicons ' . esc_attr($svg) . '"></span>';
                                            else:
                                              echo wp_kses_post($svg);
                                            endif;
                                            ?>
                                          </div>
                                          <div class="kf-info">
                                            <span class="sm-text"><?php echo esc_html($title); ?></span>
                                            <strong class="sm-text"><?php echo esc_html($desc); ?></strong>
                                          </div>
                                        </div>
                                      </div>
                                      <?php
                                    endif;
                                  endforeach;
                                else:
                                  echo 'not array';
                                endif;
                                ?>
                              </div>
                            </div>
                          <?php endif;
                          echo $tiiDesc;
                          if ($tour_attraction_places):
                            ?>
                            <div class="places">
                              <div class="row">
                                <?php foreach ($tour_attraction_places as $places):
                                  if ($places instanceof WP_Post) {
                                    $post_id = $places->ID;
                                    $post_title = $places->post_title;
                                    $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
                                    if (has_post_thumbnail($post_id)) {
                                      $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'img-fluid'));
                                    } else {
                                      $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
                                      $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="img-fluid">';
                                    }
                                    ?>
                                    <div class="col-lg-3 col-md-4">
                                      <div class="popular-destination-item">
                                        <div class="pdi-image">
                                          <a href="#">
                                            <?php echo $post_thumbnail; ?>
                                          </a>
                                        </div>
                                        <div class="pdi-content">
                                          <a href="#" class="sm-text"><?php echo $post_title; ?></a>
                                        </div>
                                      </div>
                                    </div>
                                  <?php }endforeach; ?>
                              </div>
                            </div>
                          <?php endif;
                          if ($enable_tour_ext):
                            ?>
                            <div class="available-expansion">
                              <h6><?php echo $tour_extension_title; ?></h6>
                              <div class="row">
                                <?php foreach ($tour_extension as $ext):
                                  if ($ext instanceof WP_Post) {
                                    $post_id = $ext->ID;
                                    $post_title = $ext->post_title;
                                    $fallback_tour_featured_image = get_field('fallback_tour_featured_image', 'option');
                                    if (has_post_thumbnail($post_id)) {
                                      $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'img-fluid'));
                                    } else {
                                      $fallback_image_url = $fallback_tour_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
                                      $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="img-fluid">';
                                    }
                                    $ext_price_curr = get_field('ext_price_curr', $post_id);
                                    $ext_price = get_field('ext_price', $post_id);
                                    ?>
                                    <div class="col-lg-3 col-md-4">
                                      <div class="popular-destination-item">
                                        <div class="pdi-image">
                                          <a href="#">
                                            <?php echo $post_thumbnail; ?>
                                          </a>
                                        </div>
                                        <div class="pdi-content">
                                          <a href="#" class="sm-text"><?php echo $post_title; ?></a>
                                          <?php if ($ext_price): ?>
                                            <span
                                              class="d-block"><strong><?php echo $ext_price_curr; ?><?php echo $ext_price; ?></strong>
                                              /person</span>
                                          <?php endif; ?>
                                        </div>
                                      </div>
                                    </div>
                                  <?php }endforeach; ?>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  $firstItem = false;
                endforeach;
                ?>
              </div>
            </div>
          <?php endif; ?>
          <!-- !Itinerary -->
          <!-- Exckudes Includes -->
          <?php
          $tour_maps_Inclusions = get_field('tour_maps_Inclusions');
          $enable_inclusions = $tour_maps_Inclusions['enable_inclusions'];
          $tour_inclusions_icon = $tour_maps_Inclusions['tour_inclusions_icon'];
          $tour_inclusions_title = $tour_maps_Inclusions['tour_inclusions_title'];
          $tour_inclusions_desc = $tour_maps_Inclusions['tour_inclusions_desc'];
          $tour_inc_list = $tour_maps_Inclusions['tour_inc_list'];
          $tour_exc_list = $tour_maps_Inclusions['tour_exc_list'];
          if ($enable_inclusions || ($tour_inc_list && $tour_exc_list)):
            ?>
            <div class="trip-detail-block inclusion-exclusion">
              <div class="block-title">
                <div class="bt-icon">
                  <?php echo $tour_inclusions_icon; ?>
                </div>
                <div class="bt-text">
                  <h5><?php echo $tour_inclusions_title; ?></h5>
                  <p><?php echo $tour_inclusions_desc; ?></p>
                </div>
              </div>
              <?php if ($tour_inc_list): ?>
                <div class="includes">
                  <strong>Includes</strong>
                  <ul>
                    <?php foreach ($tour_inc_list as $inc):
                      $inc_title = $inc['title']; ?>
                      <li><?php echo $inc_title; ?></li><?php endforeach; ?>
                  </ul>
                </div>
              <?php endif;
              if ($tour_exc_list): ?>
                <div class="excludes">
                  <strong>Excludes</strong>
                  <ul>
                    <?php foreach ($tour_exc_list as $exc):
                      $exc_title = $exc['title']; ?>
                      <li><?php echo $exc_title; ?></li><?php endforeach; ?>
                  </ul>
                </div>
              <?php endif ?>
            </div>
          <?php endif; ?>
          <!-- !Exckudes Includes -->
          <!-- Availability -->
          <div class="trip-detail-block availability-block" trip-duration="<?php echo get_field('tour_dur_day'); ?>">
            <div class="d-flex justify-content-between align-items-center flex-wrap block-title-wrapper">

              <div class="block-title">
                <div class="bt-icon">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/availability-icon.svg" alt="">
                </div>
                <div class="bt-text">
                  <h5>Availability</h5>
                  <p>Add your travel dates for booking</p>
                </div>
              </div>
              <div class="block-title-right d-flex align-items-center ">
                <a href="#" class="bh-bth bh-btn-underlined ">
                  Clear Dates
                </a>
                <div class="date-field-wrapper">
                  <select class="pe-5">
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="availability-calendar">
              <input type="text" class="available-dates">
            </div>
          </div>
          <!-- !Availability -->
          <!-- Maps -->
          <?php
          $tour_maps = get_field('tour_maps');
          $enable_maps = $tour_maps['enable_maps'];
          $map_type = $tour_maps['map_type'];
          $tour_map_icon = $tour_maps['tour_map_icon'];
          $tour_map_title = $tour_maps['tour_map_title'];
          $tour_map_desc = $tour_maps['tour_map_desc'];
          $tour_map_image = $tour_maps['tour_map_image'];
          $tour_map_iframe = $tour_maps['tour_map_iframe'];
          if ($enable_maps):
            ?>
            <div class="trip-detail-block map-block">
              <div class="block-title">
                <div class="bt-icon">
                  <?php echo $tour_map_icon; ?>
                </div>
                <div class="bt-text">
                  <h5><?php echo $tour_map_title; ?></h5>
                  <p><?php echo $tour_map_desc; ?></p>
                </div>
              </div>
              <?php if ($map_type): ?>
                <div class="map-wrapper">
                  <img src="<?php echo $tour_map_image; ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                </div>
              <?php else: ?>
                <div class="map-iframe-wrapper">
                  <?php echo $tour_map_iframe; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <!-- !Maps -->
          <!-- Good to Know -->
          <?php
          $tour_maps_gtk = get_field('tour_maps_gtk');
          $enable_gtk = $tour_maps_gtk['enable_gtk'];
          $tour_gtk_icon = $tour_maps_gtk['tour_gtk_icon'];
          $tour_gtk_title = $tour_maps_gtk['tour_gtk_title'];
          $tour_gtk_desc = $tour_maps_gtk['tour_gtk_desc'];
          $tour_gtk_items = $tour_maps_gtk['tour_gtk_items'];
          if ($enable_gtk && $tour_gtk_items):
            ?>
            <div class="trip-detail-block good-to-know">
              <div class="block-title">
                <div class="bt-icon">
                  <?php echo $tour_gtk_icon; ?>
                </div>
                <div class="bt-text">
                  <h5><?php echo $tour_gtk_title; ?></h5>
                  <p><?php echo $tour_gtk_desc; ?></p>
                </div>
              </div>
              <div class="itinerary-wrapper accordions">
                <?php foreach ($tour_gtk_items as $index => $gtk):
                  $gtk_title = $gtk['title'];
                  $gtk_desc = $gtk['desc'];
                  ?>
                  <div class="accordion-item">
                    <div class="faq-wrapper <?php echo $index === 0 ? 'expand' : '' ?>">
                      <div class="faq-title">
                        <strong><?php echo $gtk_title; ?></strong>
                      </div>
                      <div class="faq-content-wrapper">
                        <div class="faq-content">
                          <?php echo $gtk_desc; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
          <!-- !Good to Know -->
          <!-- FAQs -->
          <?php
          $tour_maps_faqs = get_field('tour_maps_faqs');
          $enable_faqs = $tour_maps_faqs['enable_faqs'];
          $tour_faqs_icon = $tour_maps_faqs['tour_faqs_icon'];
          $tour_faqs_title = $tour_maps_faqs['tour_faqs_title'];
          $tour_faqs_desc = $tour_maps_faqs['tour_faqs_desc'];
          $tour_faqs_items = $tour_maps_faqs['tour_faqs_items'];
          if ($enable_faqs && $tour_faqs_items): ?>
            <div class="trip-detail-block faq-block load-more-block" data-initial="4">
              <div class="block-title">
                <div class="bt-icon">
                  <?php echo $tour_faqs_icon; ?>
                </div>
                <div class="bt-text">
                  <h5><?php echo $tour_faqs_title; ?></h5>
                  <p><?php echo $tour_faqs_desc; ?></p>
                </div>
              </div>
              <div class="item-list accordions">
                <?php foreach ($tour_faqs_items as $index => $faq):
                  $faq_title = $faq['title'];
                  $faq_desc = $faq['desc'];
                  ?>
                  <div class="accordion-item">
                    <div class="faq-wrapper <?php echo $index === 0 ? 'expand' : '' ?>">
                      <div class="faq-title">
                        <strong><?php echo $faq_title; ?></strong>
                      </div>
                      <div class="faq-content-wrapper">
                        <div class="faq-content">
                          <?php echo $faq_desc; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="text-start load-more-accordion">
                <a href="#" class="bh-btn bh-btn-outlined green-outlined load-more"><span>Load More</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                    <path
                      d="M8.49902 11.317C8.29043 11.317 8.08187 11.2374 7.92284 11.0784L2.91845 6.07398C2.6001 5.75564 2.6001 5.23949 2.91845 4.92128C3.23666 4.60306 3.7527 4.60306 4.07107 4.92128L8.49902 9.34949L12.927 4.92143C13.2453 4.60322 13.7613 4.60322 14.0795 4.92143C14.398 5.23965 14.398 5.75579 14.0795 6.07414L9.0752 11.0786C8.9161 11.2376 8.70753 11.317 8.49902 11.317Z"
                      fill="#015637" />
                  </svg>
                </a>
              </div>
            </div>
          <?php endif; ?>
          <!-- !FAQs -->
          <!-- Reviews -->
          <?php
          $tour_maps_reviews = get_field('tour_maps_reviews');
          $enable_reviews = $tour_maps_reviews['enable_reviews'];
          $tour_reviews_icon = $tour_maps_reviews['tour_reviews_icon'];
          $tour_reviews_title = $tour_maps_reviews['tour_reviews_title'];
          $tour_reviews_desc = $tour_maps_reviews['tour_reviews_desc'];
          $tour_reviews_items = $tour_maps_reviews['tour_reviews_items'];
          if ($enable_reviews): ?>
            <div class="trip-detail-block review-block load-more-block" data-initial="2">
              <div class="d-flex justify-content-between align-items-center flex-wrap block-title-wrapper">
                <div class="block-title">
                  <div class="bt-icon">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/reviews-icon.svg" alt="">
                  </div>
                  <div class="bt-text">
                    <h5>Reviews</h5>
                    <p>What Our Travelers Say</p>
                  </div>
                </div>
                <div class="block-title-right d-flex justify-content-md-end ">
                  <div class="rating-wrapper d-flex align-items-center">
                    <?php
                    function get_average_rating($post_id)
                    {
                      $comments = get_comments(['post_id' => $post_id, 'status' => 'approve']);
                      $total_rating = 0;
                      $total_comments = count($comments);
                      foreach ($comments as $comment) {
                        $rating = get_comment_meta($comment->comment_ID, 'rating', true);
                        if ($rating) {
                          $total_rating += intval($rating);
                        }
                      }
                      return $total_comments > 0 ? $total_rating / $total_comments : 0;
                    }
                    ?>
                    <?php
                    $average_rating = get_average_rating(get_the_ID());
                    $rounded_rating = round($average_rating, 1);
                    ?>
                    <div class="review-rating" data-rating="<?php echo $rounded_rating; ?>">
                      <ul class="d-flex stars justify-content-start justify-content-lg-end">
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg"
                            alt="">
                          <div class="filled-star">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg"
                              alt="">
                          </div>
                        </li>
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg"
                            alt="">
                          <div class="filled-star">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg"
                              alt="">
                          </div>
                        </li>
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg"
                            alt="">
                          <div class="filled-star">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg"
                              alt="">
                          </div>
                        </li>
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg"
                            alt="">
                          <div class="filled-star" style="width: 50%;">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg"
                              alt="">
                          </div>
                        </li>
                        <li>
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/outlined-star.svg"
                            alt="">
                          <div class="filled-star" style="width: 0%;">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star.svg"
                              alt="">
                          </div>
                        </li>
                      </ul>
                      <p class="sm-text">Based on <?php echo get_comments_number(); ?> ratings </p>
                    </div>
                    <h3><?php echo $rounded_rating; ?></h3>
                  </div>
                  <a href="#" class="bh-bth bh-btn-filled-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path
                        d="M7.4089 14.0052C7.56567 14.1619 7.7783 14.25 8 14.25M7.4089 14.0052C7.4089 14.0052 7.4089 14.0052 7.4089 14.0052L8 14.25M7.4089 14.0052C7.25213 13.8484 7.16406 13.6358 7.16406 13.4141V2.58594C7.16406 2.36423 7.25213 2.15161 7.4089 1.99484C7.56567 1.83807 7.7783 1.75 8 1.75C8.2217 1.75 8.43433 1.83807 8.5911 1.99484C8.74787 2.15161 8.83594 2.36423 8.83594 2.58594V13.4141C8.83594 13.6358 8.74787 13.8484 8.5911 14.0052C8.43433 14.1619 8.2217 14.25 8 14.25M7.4089 14.0052L8 14.25"
                        fill="white" stroke="white" stroke-width="0.5" />
                      <path
                        d="M2.58594 8.83594H13.4141L14.0052 7.4089C13.8484 7.25213 13.6358 7.16406 13.4141 7.16406H2.58594C2.36423 7.16406 2.15161 7.25213 1.99484 7.4089C1.83807 7.56567 1.75 7.7783 1.75 8C1.75 8.2217 1.83807 8.43433 1.99484 8.5911C2.15161 8.74787 2.36423 8.83594 2.58594 8.83594Z"
                        fill="white" stroke="white" stroke-width="0.5" />
                    </svg>
                    Add a Review
                  </a>
                </div>
              </div>

              <div class="item-list review-list">
                <?php
                // get approved comments
                $comments = get_comments([
                  'post_id' => get_the_ID(),
                  'status' => 'approve',
                ]);
                if ($comments) {
                  foreach ($comments as $comment) {
                    $rating = get_comment_meta($comment->comment_ID, 'rating', true);
                    $rating_class = "review-rating";
                    if ($rating) {
                      $rating_class .= " data-rating=\"{$rating}\"";
                    }
                    ?>
                    <div class="review-single">
                      <div class="<?php echo $rating_class; ?>">
                        <ul class="d-flex stars justify-content-start ">
                          <?php for ($i = 1; $i <= 5; $i++): ?>
                            <li>
                              <img src="<?php echo get_parent_theme_file_uri(); ?>/assets/images/icons/outlined-star.svg"
                                alt="">
                              <div class="filled-star" style="width: <?php echo $i <= $rating ? '100%' : '0%'; ?>;">
                                <img src="<?php echo get_parent_theme_file_uri(); ?>/assets/images/icons/filled-star.svg"
                                  alt="">
                              </div>
                            </li>
                          <?php endfor; ?>
                        </ul>
                      </div>
                      <div class="text-wrapper text-expandable">
                        <div class="text-read-more ">
                          <p><?php echo esc_html($comment->comment_content); ?></p>
                        </div>
                      </div>
                      <a href="#" class="bh-btn bh-btn-underlined handle-client-read-more">Read More</a>

                      <div class="reviewer-detail d-flex justify-content-start ">
                        <div class="reviewer-profile">
                          <span><?php echo esc_html(substr($comment->comment_author, 0, 2)); ?></span>
                        </div>
                        <div class="reviewer-info">
                          <strong><?php echo esc_html($comment->comment_author); ?></strong>
                          <small><?php echo esc_html($comment->comment_author_email); ?></small>
                        </div>
                      </div>
                      <div class="reaction-wrapper d-flex justify-content-start">
                        <a href="#" class="like-button" data-comment-id="<?php echo $comment->comment_ID; ?>"
                          data-type="like">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_997_7996)">
                              <path
                                d="M15.0477 8.19629L14.6356 8.49485L14.9414 8.90165C15.0784 9.0839 15.1591 9.30907 15.1591 9.55365C15.1591 9.91473 14.9821 10.2363 14.7069 10.4356L14.2947 10.7341L14.6005 11.1409C14.7375 11.3232 14.8182 11.5484 14.8182 11.793C14.8182 12.1542 14.6412 12.476 14.3662 12.6752L13.9542 12.9737L14.2598 13.3805C14.3967 13.5626 14.4773 13.7878 14.4773 14.0323C14.4773 14.632 13.9886 15.1207 13.3889 15.1207H8.38834C7.62467 15.1207 6.87551 14.9849 6.1605 14.7168L5.98494 15.1849L6.1605 14.7168L5.1875 14.3519V6.69188C5.90101 5.92234 6.58049 5.17515 7.1199 4.56397C7.67725 3.93246 8.12176 3.4058 8.27419 3.16184L8.35016 3.04026V2.8969V1.05315C8.35016 0.957713 8.4286 0.879272 8.52403 0.879272C9.78036 0.879272 10.8033 1.9022 10.8033 3.15852V3.91926L10.3205 5.58685L10.1355 6.2259H10.8008H14.4116C15.0113 6.2259 15.5 6.71462 15.5 7.3143C15.5 7.6753 15.323 7.99687 15.0477 8.19629ZM0.5 14.8144V5.91687H3.25V14.8144H0.5Z"
                                stroke="#7FB51F" />
                            </g>
                            <defs>
                              <clipPath id="clip0_997_7996">
                                <rect width="16" height="16" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                          <span> Like (<span
                              class="like-count"><?php echo intval(get_comment_meta($comment->comment_ID, 'likes', true) ?: 0); ?>
                            </span>)</span>
                        </a>
                        <a href="#" class="dislike-button" data-comment-id="<?php echo $comment->comment_ID; ?>"
                          data-type="dislike">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <g clip-path="url(#clip0_997_7996)">
                              <path
                                d="M15.0477 8.19629L14.6356 8.49485L14.9414 8.90165C15.0784 9.0839 15.1591 9.30907 15.1591 9.55365C15.1591 9.91473 14.9821 10.2363 14.7069 10.4356L14.2947 10.7341L14.6005 11.1409C14.7375 11.3232 14.8182 11.5484 14.8182 11.793C14.8182 12.1542 14.6412 12.476 14.3662 12.6752L13.9542 12.9737L14.2598 13.3805C14.3967 13.5626 14.4773 13.7878 14.4773 14.0323C14.4773 14.632 13.9886 15.1207 13.3889 15.1207H8.38834C7.62467 15.1207 6.87551 14.9849 6.1605 14.7168L5.98494 15.1849L6.1605 14.7168L5.1875 14.3519V6.69188C5.90101 5.92234 6.58049 5.17515 7.1199 4.56397C7.67725 3.93246 8.12176 3.4058 8.27419 3.16184L8.35016 3.04026V2.8969V1.05315C8.35016 0.957713 8.4286 0.879272 8.52403 0.879272C9.78036 0.879272 10.8033 1.9022 10.8033 3.15852V3.91926L10.3205 5.58685L10.1355 6.2259H10.8008H14.4116C15.0113 6.2259 15.5 6.71462 15.5 7.3143C15.5 7.6753 15.323 7.99687 15.0477 8.19629ZM0.5 14.8144V5.91687H3.25V14.8144H0.5Z"
                                stroke="#7FB51F" />
                            </g>
                            <defs>
                              <clipPath id="clip0_997_7996">
                                <rect width="16" height="16" fill="white" />
                              </clipPath>
                            </defs>
                          </svg>
                          <span> Dislike (<span
                              class="dislike-count"><?php echo intval(get_comment_meta($comment->comment_ID, 'dislikes', true) ?: 0); ?>
                            </span>)</span>
                        </a>
                      </div>
                    </div>
                    <?php
                  }
                } else {
                  get_template_part("/template-parts/empty-state");
                }
                ?>

              <?php endif; ?>



            </div>
            <div class="text-start load-more-accordion">
              <a href="#" class="bh-btn bh-btn-outlined green-outlined load-more"><span>Load More</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                  <path
                    d="M8.49902 11.317C8.29043 11.317 8.08187 11.2374 7.92284 11.0784L2.91845 6.07398C2.6001 5.75564 2.6001 5.23949 2.91845 4.92128C3.23666 4.60306 3.7527 4.60306 4.07107 4.92128L8.49902 9.34949L12.927 4.92143C13.2453 4.60322 13.7613 4.60322 14.0795 4.92143C14.398 5.23965 14.398 5.75579 14.0795 6.07414L9.0752 11.0786C8.9161 11.2376 8.70753 11.317 8.49902 11.317Z"
                    fill="#015637" />
                </svg>

              </a>
            </div>
          </div>
          <!-- !Reviews -->
          <!--  -->
          <!--  -->
          <!--  -->
        </div>
        <div class="col-lg-4">
          <?php get_template_part("/template-parts/tour-detail-page/trip-aside", null) ?>
        </div>
      </div>
    </div>
</section>
<!-- !Tour Intro -->
<?php
// endif;
get_footer(); ?>
<!-- !Single Tour -->