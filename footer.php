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
                  <strong class="sm-text">Navigation</strong>
                  <ul>
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">Plan a trip</a>
                    </li>
                    <li>
                      <a href="#">Destinations</a>
                    </li>
                    <li>
                      <a href="#">Travel Styles</a>
                    </li>
                    <li>
                      <a href="#">Contact</a>
                    </li>
                    <li>
                      <a href="#">About</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list">
                  <strong class="sm-text">Destinations</strong>
                  <ul>
                    <li>
                      <a href="#">Nepal</a>
                    </li>
                    <li>
                      <a href="#">Bhutan</a>
                    </li>
                    <li>
                      <a href="#">Indonesia</a>
                    </li>
                    <li>
                      <a href="#">Bhutan</a>
                    </li>
                    <li>
                      <a href="#">India</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list">
                  <strong class="sm-text">Activities</strong>
                  <ul>
                    <li>
                      <a href="#">Trekking/Hiking</a>
                    </li>
                    <li>
                      <a href="#">Wildlife & Nature</a>
                    </li>
                    <li>
                      <a href="#">Tours & Sighteen</a>
                    </li>
                    <li>
                      <a href="#">Water Spots</a>
                    </li>
                    <li>
                      <a href="#">Hunting</a>
                    </li>

                  </ul>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="footer-menu-list footer-contact">
                  <strong class="sm-text">Contact</strong>
                  <div class="contact-options">
                    <div class="co-item">
                      <span class="sm-text">Call Us</span>
                      <a href="tel:+977984-9615880">+977 984-9615880</a>
                    </div>
                    <div class="co-item">
                      <span class="sm-text">Mail us</span>
                      <a href="mailto:info@boldhimalaya.com">info@boldhimalaya.com</a>
                    </div>
                    <div class="co-item">
                      <span class="sm-text">Visit us</span>
                      <p>Kuleswor-13, Kathmandu, Nepal</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-signature d-none d-lg-block">
    <div class="container">
      <div class="fs-content d-md-flex justify-content-between align-item-center">
        <p class="sm-text">
          Made with love ❤️ by
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/brand.svg" alt="">
        </p>
        <ul class="policies d-flex justify-content-center align-items-center">
          <li><a href="#" class="sm-text">Privacy Policy</a></li>
          <li><a href="#" class="sm-text">Terms of services</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="fc-item">
            <small>Supported by:</small>
            <ul class="d-flex justify-content-start align-items-center">
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-01.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-02.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-03.png" alt=""
                    class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="fc-item">
            <small>Associated with:</small>
            <ul class="d-flex justify-content-start align-items-center">
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-04.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-05.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-01.png" alt=""
                    class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="fc-item">
            <small>Featured on:</small>
            <ul class="d-flex justify-content-start align-items-center">
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-02.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-03.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-04.png" alt=""
                    class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="fc-item">
            <small>We Accept:</small>
            <ul class="d-flex justify-content-start align-items-center">
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-01.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-02.png" alt=""
                    class="img-fluid">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/client-03.png" alt=""
                    class="img-fluid">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-signature d-lg-none">
    <div class="container">
      <div class="fs-content d-md-flex justify-content-between align-item-center">
        <p class="sm-text text-center">
          Made with love ❤️ by
          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/brand.svg" alt="">
        </p>
        <ul class="policies d-flex justify-content-center align-items-center">
          <li><a href="#" class="sm-text">Privacy Policy</a></li>
          <li><a href="#" class="sm-text">Terms of services</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>