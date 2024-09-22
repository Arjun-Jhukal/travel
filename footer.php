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
          <h4><?php echo $news_subs_title;?></h4>
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
                <img src="<?php echo $third_logo; ?>" class="img-fluid" alt="<?php echo esc_attr($third_logo_alt_text); ?>">
              </a>
            </div>
            <div class="footer-content">
              <p class="copyright sm-text">©<?php echo date('Y'); ?> <?php echo $copyright_consent; ?></p>
              <ul class="socials d-flex justify-content-start ">
                <li>
                  <a href="#">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#363A38" />
                      <path
                        d="M17.2409 24V16.7022H19.6895L20.0569 13.8573H17.2409V12.0412C17.2409 11.2178 17.4686 10.6566 18.6507 10.6566L20.156 10.656V8.11138C19.8957 8.07756 19.0021 8 17.9621 8C15.7904 8 14.3037 9.32557 14.3037 11.7594V13.8573H11.8477V16.7022H14.3037V24H17.2409Z"
                        fill="#363A38" />
                    </svg>


                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#363A38" />
                      <g clip-path="url(#clip0_648_1096)">
                        <path
                          d="M20 8H12C9.76 8 8 9.76 8 12V20C8 22.24 9.76 24 12 24H20C22.24 24 24 22.24 24 20V12C24 9.76 22.24 8 20 8ZM22.4 20C22.4 21.36 21.36 22.4 20 22.4H12C10.64 22.4 9.6 21.36 9.6 20V12C9.6 10.64 10.64 9.6 12 9.6H20C21.36 9.6 22.4 10.64 22.4 12V20Z"
                          fill="#363A38" />
                        <path
                          d="M16 12C13.76 12 12 13.76 12 16C12 18.24 13.76 20 16 20C18.24 20 20 18.24 20 16C20 13.76 18.24 12 16 12ZM16 18.4C14.64 18.4 13.6 17.36 13.6 16C13.6 14.64 14.64 13.6 16 13.6C17.36 13.6 18.4 14.64 18.4 16C18.4 17.36 17.36 18.4 16 18.4Z"
                          fill="#363A38" />
                        <path
                          d="M19.9992 12.8C20.441 12.8 20.7992 12.4418 20.7992 12C20.7992 11.5581 20.441 11.2 19.9992 11.2C19.5574 11.2 19.1992 11.5581 19.1992 12C19.1992 12.4418 19.5574 12.8 19.9992 12.8Z"
                          fill="#363A38" />
                      </g>
                      <defs>
                        <clipPath id="clip0_648_1096">
                          <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#363A38" />
                      <g clip-path="url(#clip0_648_1102)">
                        <path
                          d="M23.9968 24L24.0008 23.9993V18.1313C24.0008 15.2606 23.3828 13.0493 20.0268 13.0493C18.4135 13.0493 17.3308 13.9346 16.8888 14.774H16.8422V13.3173H13.6602V23.9993H16.9735V18.71C16.9735 17.3173 17.2375 15.9706 18.9622 15.9706C20.6615 15.9706 20.6868 17.56 20.6868 18.7993V24H23.9968Z"
                          fill="#363A38" />
                        <path d="M8.26562 13.3179H11.583V23.9999H8.26562V13.3179Z" fill="#363A38" />
                        <path
                          d="M9.92133 8C8.86067 8 8 8.86067 8 9.92133C8 10.982 8.86067 11.8607 9.92133 11.8607C10.982 11.8607 11.8427 10.982 11.8427 9.92133C11.842 8.86067 10.9813 8 9.92133 8Z"
                          fill="#363A38" />
                      </g>
                      <defs>
                        <clipPath id="clip0_648_1102">
                          <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#363A38" />
                      <g clip-path="url(#clip0_648_1107)">
                        <path
                          d="M17.3811 14.8641L22.785 8.58252H21.5045L16.8123 14.0367L13.0646 8.58252H8.74219L14.4093 16.8302L8.74219 23.4174H10.0228L14.9779 17.6576L18.9356 23.4174H23.2581L17.3808 14.8641H17.3811ZM15.6271 16.9029L15.0529 16.0816L10.4842 9.54655H12.4512L16.1382 14.8206L16.7124 15.6418L21.5051 22.4972H19.5381L15.6271 16.9032V16.9029Z"
                          fill="#363A38" />
                      </g>
                      <defs>
                        <clipPath id="clip0_648_1107">
                          <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#363A38" />
                      <g clip-path="url(#clip0_648_1110)">
                        <path
                          d="M15.9994 21.8123C15.998 21.8123 15.9966 21.8123 15.9951 21.8123C15.5123 21.809 11.2442 21.77 10.035 21.443C9.18991 21.2158 8.5228 20.5495 8.29501 19.7042C7.97861 18.5164 7.99875 16.2294 8.00095 16.0468C7.99887 15.865 7.97848 13.5591 8.29404 12.3615C8.2944 12.3604 8.29465 12.3591 8.29501 12.358C8.52023 11.5225 9.20236 10.8355 10.0329 10.6077C10.035 10.6071 10.0372 10.6066 10.0393 10.606C11.2348 10.2917 15.5113 10.2533 15.9951 10.25H16.0038C16.4878 10.2533 20.7672 10.2922 21.9653 10.6198C22.8082 10.8463 23.4749 11.5118 23.7032 12.356C24.0315 13.5544 24.0011 15.8654 23.9978 16.0604C24.0001 16.2526 24.0193 18.5191 23.7047 19.7129C23.7045 19.7141 23.7041 19.7152 23.7039 19.7163C23.4759 20.5615 22.809 21.2279 21.9629 21.4553C21.9618 21.4557 21.9606 21.456 21.9595 21.4563C20.764 21.7704 16.4874 21.8089 16.0038 21.8123C16.0023 21.8123 16.0008 21.8123 15.9994 21.8123ZM9.50229 12.682C9.22446 13.7391 9.2507 16.0156 9.25095 16.0386V16.0551C9.24265 16.6864 9.27182 18.5148 9.50241 19.3808C9.61423 19.7954 9.94321 20.1239 10.3604 20.2361C11.2527 20.4774 14.7289 20.5534 15.9994 20.5623C17.2732 20.5534 20.7545 20.4795 21.6401 20.2478C22.056 20.1353 22.3839 19.8079 22.4965 19.3927C22.7273 18.5141 22.7562 16.6946 22.7478 16.0673C22.7478 16.0607 22.7478 16.0541 22.7479 16.0475C22.7594 15.4086 22.7368 13.5588 22.4976 12.6859C22.4973 12.6851 22.4971 12.6842 22.4969 12.6834C22.3846 12.2668 22.0555 11.9384 21.6383 11.8262C20.7548 11.5846 17.2729 11.5089 15.9994 11.5C14.7264 11.5089 11.2485 11.5826 10.3602 11.8141C9.9509 11.9276 9.61447 12.2678 9.50229 12.682ZM14.4062 18.5623V13.4999L18.7812 16.0311L14.4062 18.5623Z"
                          fill="#363A38" />
                      </g>
                      <defs>
                        <clipPath id="clip0_648_1110">
                          <rect width="16" height="16" fill="white" transform="translate(8 8)" />
                        </clipPath>
                      </defs>
                    </svg>

                  </a>
                </li>
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