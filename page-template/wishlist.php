<?php

/**
 * Template Name: Wishlist Template
 * 
 */

get_header();
$bc=get_field('bc');
$bc_title = $bc['bc_title'];
?>
<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="<?php echo esc_url(get_home_url()); ?>" class="sm-text">Home</a></li>
        <li><span class="sm-text"><?php echo $bc_title ?: get_the_title(); ?></span></li>
      </ul>
    </div>
  </div>
</section>
<?php
if (is_user_logged_in()) {
  $user_id = get_current_user_id();
  $wishlist = get_user_meta($user_id, 'wishlist', true);
  if (empty($wishlist)) {
    get_template_part("/template-parts/empty-state");
  } else {
    ?>
    <section class="wishlist-list">
      <div class="container">
        <div class="row">
          <?php foreach ($wishlist as $package_id) {
            $package = get_post($package_id);
            if ($package) {
              ?>
              <div class="col-md-6 col-lg-12">
                <div class="wl-item">
                  <div class="package-item package-horizontal">
                    <div class="row align-items-center">
                      <div class="col-lg-3">
                        <div class="pi-image"> <?php $thumbnail_id = get_post_thumbnail_id($package_id);
                        $thumbnail = wp_get_attachment_image($thumbnail_id, 'full', false, [
                          'class' => 'img-fluid',
                          'alt' => get_the_title($package_id),
                        ]);
                        echo $thumbnail;
                        $tour_price_curr = get_field('tour_price_curr', $package_id);
                        $tour_price = get_field('tour_price', $package_id);
                        $tour_sale = get_field('tour_sale', $package_id);
                        $tour_dur_day = get_field('tour_dur_day', $package_id);
                        $tour_rating = get_field('tour_rating', $package_id);
                        $tour_ratings = get_field('tour_ratings', $package_id);
                        $terms = get_the_terms($package_id, 'destination');
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
                        ?>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="pi-content">
                          <a href="<?php echo esc_url(get_permalink($package_id)); ?>">
                            <h5><?php echo $package->post_title; ?></h5>
                          </a>
                          <small class="d-none d-md-block"><?php echo $package->post_excerpt; ?></small>
                          <div class="pl-key-indicator d-flex justify-content-between align-items-center">
                            <?php if ($locations): ?>
                              <div class=" indicator-item location">
                                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/location.svg" alt="">
                                <small><?php echo $locations; ?></small>
                              </div>
                            <?php endif; ?>
                            <div class="indicator-item ">
                              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg"
                                alt="">
                              <span> <small><?php echo $tour_rating; ?>
                                  &nbsp;</small><small>(<?php echo $tour_ratings; ?>)</small></span>
                            </div>
                            <div class="indicator-item">
                              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/calendar-day.svg" alt="">
                              <small><?php echo $tour_dur_day; ?> Days</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="price-wrapper ">
                          <div class="price d-flex justify-content-start align-items-center">
                            <h4><?php echo $tour_price_curr; ?><?php echo $tour_price; ?></h4>
                            <del><?php echo $tour_price_curr; ?><?php echo $tour_sale; ?></del>
                            <span class="discount"><?php $numeric_tour_sale = (int) preg_replace('/[^0-9]/', '', $tour_sale);
                            $percentage_saved = $numeric_tour_sale > 0 ? round((($numeric_tour_sale - $tour_price) / $numeric_tour_sale) * 100) : 0;
                            echo '<p>Save ' . $percentage_saved . '%</p>';
                            ?></span>
                          </div>
                        </div>
                        <div class="package-btn-group">
                          <a href="<?php echo esc_url(get_permalink($package_id)); ?>"
                            class="bh-btn bh-btn-filled-dark d-block text-center">View Detail</a>
                          <a href="#" class="bh-btn bh-btn-outlined red-outline d-block text-center remove-from-wishlist" data-id="<?php echo esc_attr($package_id); ?>">Remove
                            from list</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          } ?>
        </div>
      </div>
    </section>
    <?php
  }
} else {
  get_template_part("/template-parts/wishlist-page/auth-message", null);
}
?>
<?php get_footer() ?>