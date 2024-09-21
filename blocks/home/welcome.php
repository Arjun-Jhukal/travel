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
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Hero Banner -->