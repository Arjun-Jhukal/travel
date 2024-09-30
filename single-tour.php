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
        <?php get_template_part("/template-parts/tour-detail-page/trip-content", null) ?>
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