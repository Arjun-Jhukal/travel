</main>
<footer class="footer ">
  <?php
  $parallax_animation = get_field('parallax_animation', 'option');
  $enable_parallax = $parallax_animation['enable_parallax'];
  $animated_title = $parallax_animation['animated_title'];
  $animated_img = $parallax_animation['animated_img'];
  if ($enable_parallax):
    ?>
  <div class="footer-animate">
    <div class="fa-content-wrapper">
      <h2 class="text-center">
        <?php echo $animated_title; ?>
      </h2>
    </div>
    <div class="animating-section">
      <div class="as-main">
        <?php
          $bg_art = $animated_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/footer-animate.svg';
          $image_id = attachment_url_to_postid($bg_art);
          $bg_art_alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
          if (!$bg_art_alt_text) {
            $bg_art_alt_text = 'Bold Himalaya';
          } ?>
        <img src="<?php echo $bg_art; ?>" alt="<?php echo esc_attr($bg_art_alt_text); ?>">
      </div>
    </div>
  </div>
  <?php endif;
  $news_subs = get_field('news_subs', 'option');
  $enable_news_subs = $news_subs['enable_news_subs'];
  $news_subs_title = $news_subs['news_subs_title'];
  $news_subs_desc = $news_subs['news_subs_desc'];
  if ($enable_news_subs):
    ?>
  <div class="footer-subscription">
    <div class="container">
      <div class="fs-content">
        <h4><?php echo $news_subs_title; ?></h4>
        <p class="sm-text"><?php echo $news_subs_desc; ?></p>
        <div class="news-letter">
          <?php echo do_shortcode('[contact-form-7 id="3dd198e" title="Subscribe Form"]'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="footer-menus">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-3">
          <div class="footer-info">
            <div class="footer-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>"><?php
                 $footer_logo = get_field('footer_logo', 'option');
                 $copyright_consent = get_field('copyright_consent', 'option');

                 $third_logo = $footer_logo ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/logo.svg';
                 $image_id_third_logo = attachment_url_to_postid($third_logo);
                 $third_logo_alt_text = get_post_meta($image_id_third_logo, '_wp_attachment_image_alt', true);
                 if (!$third_logo_alt_text) {
                   $third_logo_alt_text = 'Bold Himalaya Logo Footer';
                 } ?>
                <img src="<?php echo $third_logo; ?>" class="img-fluid"
                  alt="<?php echo esc_attr($third_logo_alt_text); ?>">
              </a>
            </div>
            <div class="footer-content">
              <p class="copyright sm-text">©<?php echo date('Y'); ?> <?php echo $copyright_consent; ?></p>
              <ul class="socials d-flex justify-content-start ">
                <?php
                $socials = get_field('socials', 'option');
                $enable_soc = $socials['enable_soc'];
                $soc_items = $socials['soc_items'];
                if ($enable_soc && $soc_items):
                  foreach ($soc_items as $sm):
                    $soc_title = $sm['soc_title'];
                    $soc_url = $sm['soc_url'];
                    ?>
                <li>
                  <a href="<?php echo esc_url($soc_url); ?>" target="_blank">
                    <?php echo $soc_title; ?>
                  </a>
                </li>
                <?php endforeach; endif; ?>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="fm-wrapper">
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list">
                  <strong class="sm-text"><?php
                  $menu_location = 'navigation';
                  $menu = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_location]);
                  if ($menu && isset($menu->name)) {
                    $menu_title = esc_html($menu->name);
                  } else {
                    $menu_title = 'Navigation';
                  }
                  echo $menu_title;
                  ?></strong>
                  <ul>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'navigation',
                        'container' => 'li',
                        'menu_class' => '',
                      ),
                    );
                    ?>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list">
                  <strong class="sm-text"><?php
                  $menu_location = 'destination';
                  $menu = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_location]);
                  if ($menu && isset($menu->name)) {
                    $menu_title = esc_html($menu->name);
                  } else {
                    $menu_title = 'Destination';
                  }
                  echo $menu_title;
                  ?></strong>
                  <ul>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'destination',
                        'container' => 'li',
                        'menu_class' => '',
                      ),
                    );
                    ?>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list">
                  <strong class="sm-text">
                    <?php
                    $menu_location = 'activities';
                    $menu = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_location]);
                    if ($menu && isset($menu->name)) {
                      $menu_title = esc_html($menu->name);
                    } else {
                      $menu_title = 'Activities';
                    }
                    echo $menu_title;
                    ?>
                  </strong>
                  <ul>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'activities',
                        'container' => 'li',
                        'menu_class' => '',
                      ),
                    );
                    ?>
                  </ul>
                </div>
              </div>
              <?php
              $contacts = get_field('contacts', 'option');
              $enable_contacts = $contacts['enable_contacts'];
              $contacts_items = $contacts['contacts_items'];
              if ($enable_contacts && $contacts_items):
                ?>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list footer-contact">
                  <strong class="sm-text">Contact</strong>
                  <div class="contact-options">
                    <?php foreach ($contacts_items as $conit):
                        $ci_title = $conit['ci_title'];
                        $ci_info = $conit['ci_info'];
                        if ($ci_info):
                          $ci_info_url = $ci_info['url'];
                          $ci_info_title = $ci_info['title'];
                          ?>
                    <div class="co-item">
                      <span class="sm-text"><?php echo $ci_title; ?></span>
                      <a href="<?php echo esc_url($ci_info_url); ?>"><?php echo $ci_info_title; ?></a>
                    </div>
                    <?php endif; endforeach; ?>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-signature d-none d-lg-block">
    <div class="container">
      <div class="fs-content d-md-flex justify-content-between align-item-center">
        <a href="https://makuracreations.com/" class="sm-text" target="_blank">
          Made with love ❤️ by
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/brand.svg" alt="">
        </a>
        <ul class="policies d-flex justify-content-center align-items-center">
          <?php
          function display_privacy_policy_menu()
          {
            $footer_menu_items = wp_get_nav_menu_items('privacy-policy');
            if ($footer_menu_items) {
              foreach ($footer_menu_items as $item) {
                echo '<li id="menu-item-' . esc_attr($item->ID) . '" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-' . esc_attr($item->ID) . ' sm-text">';
                echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                echo '</li>';
              }
            }
          }
          display_privacy_policy_menu();
          ?>
        </ul>
      </div>
    </div>
  </div>
  <?php
  $supported = get_field('supported', 'option');
  $enable_supported = $supported['enable_supported'];
  $supported_item = $supported['supported_item'];
  if ($enable_supported && $supported_item):
    ?>
  <div class="footer-clients">
    <div class="container">
      <div class="row">
        <?php foreach ($supported_item as $supi):
            $supported_title = $supi['supported_title'];
            $supported_logo_items = $supi['supported_logo_items'];
            ?>
        <div class="col-md-6 col-lg-3">
          <div class="fc-item">
            <small><?php echo $supported_title; ?></small>
            <ul class="d-flex justify-content-start align-items-center">
              <?php foreach ($supported_logo_items as $logooo):
                    $supported_logos = $logooo['supported_logos'];
                    ?>
              <li>
                <a href="javascript:void(0)">
                  <?php
                        $supported_logo_new = $supported_logos ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/client-02.png';
                        $image_id_supported_logo_new = attachment_url_to_postid($supported_logo_new);
                        $supported_logo_new_alt_text = get_post_meta($image_id_supported_logo_new, '_wp_attachment_image_alt', true);
                        if (!$supported_logo_new_alt_text) {
                          $supported_logo_new_alt_text = 'Bold Himalaya Supported By';
                        } ?>
                  <img src="<?php echo $supported_logo_new; ?>"
                    alt="<?php echo esc_attr($supported_logo_new_alt_text); ?>" class="img-fluid">
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="footer-signature d-lg-none">
    <div class="container">
      <div class="fs-content d-md-flex justify-content-between align-item-center">
        <a href="https://makuracreations.com/" class="sm-text text-center" target="_blank">
          Made with love ❤️ by
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/brand.svg" alt="">
        </a>
        <ul class="policies d-flex justify-content-center align-items-center">
          <?php display_privacy_policy_menu();?>
        </ul>
      </div>
    </div>
  </div>
</footer>


<!-- Show This Only at tour detail page -->
<div class="review-form popup-form">
  <div class="pf-content">
    <div class="pf-header">
      <h4>Add Review</h4>
      <strong>Reviewing for Everest Base Camp Trek</strong>
    </div>

    <form action="">
      <div class="rf-rating form-item">
        <div class="d-flex">
          <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/liked-star.svg" alt="">
          <strong>Rating</strong>
        </div>
        <div class="review-rating" data-rating="1">
          <ul class="d-flex stars justify-content-start">
            <li>
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/outlined-star.svg" alt="">
              <div class="filled-star">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/filled-star.svg" alt="">
              </div>
            </li>
            <li>
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/outlined-star.svg" alt="">
              <div class="filled-star">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/filled-star.svg" alt="">
              </div>
            </li>
            <li>
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/outlined-star.svg" alt="">
              <div class="filled-star">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/filled-star.svg" alt="">
              </div>
            </li>
            <li>
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/outlined-star.svg" alt="">
              <div class="filled-star">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/filled-star.svg" alt="">
              </div>
            </li>
            <li>
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/outlined-star.svg" alt="">
              <div class="filled-star">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/filled-star.svg" alt="">
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="rf-review-message form-item">
        <div class="d-flex">
          <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/message-box.svg" alt="">
          <strong>Your Review</strong>
        </div>
        <div class="input-field">
          <textarea placeholder="Provide your review about the tour" rows="3"></textarea>
        </div>
      </div>

      <div class="form-item">
        <input type="submit" value="Submit Review" class="bh-btn bh-btn-filled-dark">
      </div>
    </form>

    <button type="button" class="close-review-form">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>

<!-- Show this only at Blog Detail page -->
<div class="comment-form  popup-form">
  <div class="pf-content">
    <div class="pf-header">
      <h4>Add Review</h4>
      <strong>Reviewing for Everest Base Camp Trek</strong>
    </div>

    <form action="">
      <div class="form-item">
        <div class="input-field">
          <label for="first-name">
            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/user.svg" alt="">
            First Name</label>
          <input type="text" name="first-name" placeholder="Enter your First Name">
        </div>
      </div>
      <div class="pf-message form-item">
        <div class="d-flex">
          <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/message-box.svg" alt="">
          <strong>Your Review</strong>
        </div>
        <div class="input-field">
          <textarea placeholder="Provide your review about the tour" rows="3"></textarea>
        </div>
      </div>
      <div class="form-item">
        <input type="submit" value="Submit Review" class="bh-btn bh-btn-filled-dark">
      </div>
    </form>

    <button type="button" class="close-review-form">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>

<!-- Booking Success Form -->
<!-- The text and image for the planning trip will changes as in figma -->
<div class="booking-confirm">
  <div class="bc-content-wrapper">
    <button type="button" class="close-booking-form">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>

    <div class="bc-image">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/booking-confirm.png" alt="" class="img-fluid">
    </div>

    <div class="bc-content">
      <h4>Booking Confirmed!</h4>
      <p>Your tour has been successfully booked. Get ready for an unforgettable adventure! Check your itinerary or
        explore more travel options.</p>

      <a href="<?php echo home_url()?>" class="bh-btn bh-btn-filled-dark">Go to Dashboard</a>
    </div>
  </div>
</div>


<!-- Plan a trip form -->
<div class="plan-a-trip ">
  <div class="pat-content">
    <div class="pat-header d-flex justify-content-between">
      <div class="title">
        <h4>Plan a trip</h4>
        <p>Explore the recognitions we've earned and the legal foundations we've built.</p>
      </div>
      <button type="button" class="close-pat-btn">
        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
      </button>
    </div>
    <div class="pat-content-box">
      <div class="row align-items-stretch">
        <div class="col-lg-3">
          <?php get_template_part('/template-parts/plan-a-trip/plan-a-trip-menu',null)?>
        </div>
        <div class="col-lg-9">
          <?php
         get_template_part("/template-parts/plan-a-trip/plan-a-trip-destinations", null);
         get_template_part("/template-parts/plan-a-trip/plan-a-trip-activities", null);
         get_template_part("/template-parts/plan-a-trip/plan-a-trip-dates", null);
          get_template_part("/template-parts/plan-a-trip/plan-a-trip-contact", null);
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Quick Inquiry form -->
<div class="popup-form quick-inquiry ">
  <div class="pf-content">
    <div class="pf-header">
      <h4>Quick Inquiry - Everest Basecamp Trek</h4>
      <p>Submit the form and we will be back to you shortly</p>
    </div>

    <form action="#" class="inquiry-form">

      <div class="form-item">
        <div class="input-field">
          <label for="start-date">
            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/user.svg" alt="">
            Full Name</label>
          <input type="text" placeholder="Enter your full name">
        </div>
      </div>

      <div class="form-item">
        <div class="input-field">
          <label for="start-date">
            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/email.svg" alt="">
            Email Address</label>
          <input type="tel" placeholder="Enter your Email Address">
        </div>
      </div>
      <div class="form-item">
        <div class="input-field">
          <label for="start-date">
            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone-v2.svg" alt="">
            Phone Number</label>
          <input type="tel" placeholder="Enter your Phone Number">
        </div>
      </div>
      <div class="form-item">
        <div class="input-field">
          <label for="start-date">
            <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/message-box.svg" alt="">
            Message</label>
          <textarea rows="4"
            placeholder="Write your beautiful trip plan here with a group size, budget range, trip plan and other requirement..."></textarea>
        </div>
      </div>
      <div class="form-item">
        <button type="button" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Inquiry Now</button>
      </div>

    </form>

    <button type="button" class="close-review-form">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>

<!-- Attraction Model Popup -->

<div class="popup-form attraction-modal ">
  <div class="pf-content">
    <div class="am-content-box">
      <div class="am-image">
        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-63.png" alt="" class="img-fluid">
      </div>
      <div class="am-text">
        <h4>Narayanhiti Palace Museum</h4>
        <p>The Narayanhiti Palace Museum (Nepali: नारायणहिटी दरवार) is a public museum in Kathmandu, Nepal located east
          of the Kaiser Mahal and next to Thamel. The museum was created in 2008 from the complex of the former
          Narayanhiti Palace (or Narayanhiti Durbar) following the 2006 revolution. Before the revolution, the palace
          was the residence and principal workplace of the monarch of the Kingdom of Nepal, and hosted occasions of
          state. The existing palace complex was built by King Mahendra in 1963, and incorporates an impressive array of
          courtyards, gardens and buildings.
        </p>
        <p>Ownership of the palace site changed multiple times prior to being occupied by the monarchy. Prime Minister
          Fateh Jung Shah; his father, Choutaria Pran Shah, also lived on the property. Fateh</p>
      </div>
    </div>
    <button type="button" class="close-review-form">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>


<!-- Toast -->
<div class="bh-toast success">
  <div class="toast-content d-flex justify-content-start align-items-center">
    <div class="toast-icon">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/success-icon.svg" alt="">
    </div>
    <div class="toast-message">
      <h6>Bookmark Added Successfully</h6>
      <small>You can always view your bookmarks on the profile page.</small>
    </div>

    <button class="toast-close-btn">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>
<div class="bh-toast error">
  <div class="toast-content d-flex justify-content-start align-items-center">
    <div class="toast-icon">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/error-icon.svg" alt="">
    </div>
    <div class="toast-message">
      <h6>Error</h6>
      <small>You can always view your bookmarks on the profile page.</small>
    </div>

    <button class="toast-close-btn">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>
<div class="bh-toast warning">
  <div class="toast-content d-flex justify-content-start align-items-center">
    <div class="toast-icon">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/warning.svg" alt="">
    </div>
    <div class="toast-message">
      <h6>Warning</h6>
      <small>You can always view your bookmarks on the profile page.</small>
    </div>

    <button class="toast-close-btn">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>
<div class="bh-toast info">
  <div class="toast-content d-flex justify-content-start align-items-center">
    <div class="toast-icon">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/info.svg" alt="">
    </div>
    <div class="toast-message">
      <h6>Information</h6>
      <small>You can always view your bookmarks on the profile page.</small>
    </div>

    <button class="toast-close-btn">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/close-dark.svg" alt="">
    </button>
  </div>
</div>

<?php wp_footer(); ?>
</body>

</html>