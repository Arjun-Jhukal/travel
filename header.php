<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale:1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kolker+Brush&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
  <?php wp_head(); ?>
</head>

<body>
  <a href="#" class="overlay"></a>
  <header class="header <?php echo is_front_page() ? 'front-page-header' : ''; ?>">
    <div class="container">
      <div class="header-content-box position-relative">
        <!-- Primary Header For Desktop -->
        <div class="header-content-wrapper d-flex justify-content-between align-items-center">
          <div class="header-logo d-md-flex">
            <button class="hamburger-icon d-xl-none">
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/ham.svg" alt="">
            </button>
            <a href="<?php echo esc_url(get_home_url()); ?>" class="d-none d-md-block">
              <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
              $sticky_logo = get_field('sticky_logo', 'option');
              if ($sticky_logo) {
                echo '<img src="' . esc_url($sticky_logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '" class="img-fluid">';
              }
              if ($logo_url) {
                echo '<img src="' . esc_url($logo_url) . '" class="img-fluid" alt="' . esc_attr(get_bloginfo('name')) . '">';
              }
              ?>
            </a>
          </div>
          <div class="primary-menu">
            <div class="mobile-menu-header d-xl-none d-flex justify-content-between align-items-center">
              <div class="header-logo">
                <a href="<?php echo esc_url(get_home_url()); ?>">
                  <?php
                  $custom_logo_id = get_theme_mod('custom_logo');
                  $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                  if ($logo_url) {
                    echo '<img src="' . esc_url($logo_url) . '" class="img-fluid" alt="' . esc_attr(get_bloginfo('name')) . '">';
                  }
                  ?>
                </a>
              </div>

              <button type="button" class="close-ham-menu">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/close-dark.svg" alt="">
              </button>
            </div>
            <ul class="d-xl-flex justify-content-center align-items-center">
              <li class="mega-menu mega-destinations "><a href="#">Destinations</a></li>
              <li class="mega-menu mega-activities"><a href="#">Activities</a></li>
              <li class="menu-has-children">
                <a href="#">Travel Styles</a>
                <div class="dropdown-items">
                  <ul>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">Trekking/Hiking</span>
                      </a>
                    </li>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">Water Sports</span>
                      </a>
                    </li>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">Site Seeing</span>
                      </a>
                    </li>
                  </ul>
                </div>

              </li>
              <li class="menu-has-children">
                <a href="#">Company</a>
                <div class="dropdown-items">
                  <ul>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">About</span>
                      </a>
                    </li>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">Achievements</span>
                      </a>
                    </li>
                    <li class="dropdown-menu-item">
                      <a href="#">
                        <span class="sm-text">Commitments</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="header-right d-flex justify-content-end align-items-center">
            <?php 
          $header_wishlist= get_field('header_wishlist', 'option');
          $enable_header_wishlist = $header_wishlist['enable_header_wishlist'];
          $wishlist_page_url = $header_wishlist['wishlist_page_url'];
          if($enable_header_wishlist):
          ?>
            <a href="<?php echo esc_url(get_home_url().$wishlist_page_url);?>" class="wishlist filled">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 18 16" fill="none"
                stroke="#fff">
                <path
                  d="M8.30415 15.7388C8.49669 15.9072 8.74374 16 9 16C9.25612 16 9.50331 15.9072 9.69571 15.739C10.4245 15.1023 11.1267 14.5043 11.7463 13.9769L11.7466 13.9767C13.5596 12.4329 15.1253 11.0997 16.2149 9.78616C17.4328 8.31791 18 6.92567 18 5.40473C18 3.92701 17.493 2.56372 16.5722 1.56581C15.6404 0.556101 14.3617 0 12.9717 0C11.9327 0 10.9811 0.3282 10.1435 0.975406C9.7207 1.3021 9.33769 1.70192 9 2.16828C8.66245 1.70192 8.2793 1.3021 7.8566 0.975406C7.01903 0.3282 6.06747 0 5.02844 0C3.63826 0 2.35973 0.556101 1.42795 1.56581C0.507156 2.56372 0 3.92701 0 5.40473C0 6.92567 0.567307 8.31791 1.78528 9.7863C2.87485 11.0998 4.44081 12.4332 6.25424 13.9772L6.2574 13.9799C6.87593 14.5065 7.577 15.1035 8.30415 15.7388Z"
                  fill="" />
              </svg>
              <?php if (is_user_logged_in()): ?>
              <sup
                class="wishlist-count"><?php echo count(get_user_meta(get_current_user_id(), 'wishlist', true)) ?: '0'; ?></sup>
              <?php endif; ?>
            </a>
            <?php endif;?>
            <div class="plan-trip d-none d-md-block">
              <button class="bh-btn bh-btn-plan">Plan a Trip</button>
            </div>
            <div class="profile menu-has-children">
              <div class="profile-image menu-has-children">
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/profile.png" alt=""
                    class="img-fluid">
                </a>
              </div>
              <ul class="dropdown-items">
                <li class="dropdown-menu-item">
                  <a href="#">
                    <p> <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/profile.png" alt=""
                        class="img-fluid">
                      <span class="sm-text">Go to Dashboard</span>
                    </p>
                  </a>
                </li>
                <li class="dropdown-menu-item">
                  <a href="#">
                    <p> <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/logout.svg" alt=""
                        class="img-fluid">
                      <span class="sm-text">Logout</span>
                    </p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="login">
              <a href="#" class="bh-btn bh-btn-filled-light">Login</a>
            </div>


          </div>
        </div>

        <!-- Auth modules -->
        <div class="auth-module-wrapper">
          <div class="auth-content">
            <button type="button" class="close-auth-module">
              <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/close-dark.svg" alt="">
            </button>

            <div class="auth-module login-module show" id="login-module">
              <div class="am-header">
                <h5>Welcome Back!</h5>
                <p>Sign in and start exploring through personalized experiences.</p>
              </div>

              <form action="" class="login-form">
                <div class="input-field">
                  <label for="email">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/email.svg" alt="">
                    Email Address</label>
                  <input type="email" name="email" placeholder="Enter your Email Address">
                </div>
                <div class="input-field">
                  <label for="password">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/lock.svg" alt="">
                    Password</label>
                  <div class="password-field">
                    <input type="password" autocomplete name="password" autocomplete placeholder="Enter Password">

                    <button type="button" class="show-hide-password">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye.svg" alt="">
                    </button>
                  </div>
                </div>

                <div class="action-options d-flex justify-content-between align-items-center">
                  <label for="remember"><input type="checkbox" name="remember">Remember Me</label>
                  <a href="#forgot-password-module" class="bh-btn bh-btn-underlined">Frogot Password</a>
                </div>
                <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Login</button>

                <p class="redirect-option text-center">Don’t have an account? <a href="#register-module"
                    class="bh-btn bh-btn-underlined">Register Now</a>
                </p>
              </form>
            </div>
            <div class="auth-module register-module" id="register-module">
              <div class="am-header">
                <h5>Register Account</h5>
                <p>Register and start exploring through personalized experiences.</p>
              </div>

              <form action="" class="register-form">
                <div class="input-field">
                  <label for="first-name">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/user.svg" alt="">
                    First Name</label>
                  <input type="text" name="first-name" placeholder="Enter your First Name">
                </div>
                <div class="input-field">
                  <label for="last-name">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/user.svg" alt="">
                    Last Name</label>
                  <input type="text" name="last-name" placeholder="Enter your Last Name">
                </div>
                <div class="input-field">
                  <label for="email">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/email.svg" alt="">
                    Email Address</label>
                  <input type="email" name="email" placeholder="Enter your Email Address">
                </div>
                <div class="input-field">
                  <label for="password">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/lock.svg" alt="">
                    Password</label>
                  <div class="password-field">
                    <input type="password" autocomplete autocomplete name="password" placeholder="Enter Password">

                    <button type="button" class="show-hide-password">
                      <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye.svg" alt="">
                    </button>
                  </div>
                </div>


                <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Register and
                  Login</button>

                <small>By Registering, I agree to the terms and conditions of Bold Himalaya</small>
              </form>

              <div class="back-btn-wrapper text-center">
                <a href="#login-module" class="back-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.0742 10.9766H4.43359C3.89414 10.9766 3.45703 10.5395 3.45703 10C3.45703 9.46055 3.89414 9.02344 4.43359 9.02344H16.0742C16.6137 9.02344 17.0508 9.46055 17.0508 10C17.0508 10.5395 16.6137 10.9766 16.0742 10.9766Z"
                      fill="#1E201F" />
                    <path
                      d="M8.90588 15.5957C8.66838 15.5957 8.4301 15.5094 8.24221 15.3352L3.26174 10.716C3.06096 10.5297 2.94729 10.2676 2.94924 9.99338C2.9512 9.71955 3.06799 9.45861 3.27151 9.27502L8.3887 4.65588C8.78909 4.29455 9.40666 4.32619 9.76799 4.72658C10.1293 5.12697 10.0977 5.74455 9.69729 6.10588L5.37229 10.0098L9.57034 13.9031C9.96565 14.2699 9.98909 14.8879 9.62229 15.2832C9.42971 15.4906 9.16838 15.5957 8.90588 15.5957Z"
                      fill="#1E201F" />
                  </svg>
                  Back to Login</a>
              </div>
            </div>
            <div class="auth-module forget-password-module" id="forgot-password-module">
              <div class="am-header">
                <h5>Forgot Password</h5>
                <p>Register and start exploring through personalized experiences.</p>
              </div>
              <form action="" class="register-form">
                <div class="input-field">
                  <label for="email">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/email.svg" alt="">
                    Email Address</label>
                  <input type="email" name="email" placeholder="Enter your Email Address">
                </div>
                <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Send Code</button>
              </form>

              <div class="back-btn-wrapper text-center">
                <a href="#login-module" class="back-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.0742 10.9766H4.43359C3.89414 10.9766 3.45703 10.5395 3.45703 10C3.45703 9.46055 3.89414 9.02344 4.43359 9.02344H16.0742C16.6137 9.02344 17.0508 9.46055 17.0508 10C17.0508 10.5395 16.6137 10.9766 16.0742 10.9766Z"
                      fill="#1E201F" />
                    <path
                      d="M8.90588 15.5957C8.66838 15.5957 8.4301 15.5094 8.24221 15.3352L3.26174 10.716C3.06096 10.5297 2.94729 10.2676 2.94924 9.99338C2.9512 9.71955 3.06799 9.45861 3.27151 9.27502L8.3887 4.65588C8.78909 4.29455 9.40666 4.32619 9.76799 4.72658C10.1293 5.12697 10.0977 5.74455 9.69729 6.10588L5.37229 10.0098L9.57034 13.9031C9.96565 14.2699 9.98909 14.8879 9.62229 15.2832C9.42971 15.4906 9.16838 15.5957 8.90588 15.5957Z"
                      fill="#1E201F" />
                  </svg>
                  Back to Login</a>
              </div>
            </div>
            <div class="auth-module password-reset-module" id="password-reset-module">
              <div class="am-header">
                <h5>Forgot Password</h5>
                <p>Register and start exploring through personalized experiences.</p>
              </div>
              <div class="otp-input-fields d-flex justify-content-center align-items-center">
                <input type="number" class="otp__digit otp__field__1">
                <input type="number" class="otp__digit otp__field__2">
                <input type="number" class="otp__digit otp__field__3">
                <input type="number" class="otp__digit otp__field__4">
                <input type="number" class="otp__digit otp__field__5">
                <input type="number" class="otp__digit otp__field__6">
              </div>

              <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Continue</button>

              <p class="redirect-option text-center">Didn’t receive the email? <button type="button"
                  class="bh-btn bh-btn-underlined">Click
                  to resend</button>
              </p>

              <div class="back-btn-wrapper text-center">
                <a href="#login-module" class="back-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.0742 10.9766H4.43359C3.89414 10.9766 3.45703 10.5395 3.45703 10C3.45703 9.46055 3.89414 9.02344 4.43359 9.02344H16.0742C16.6137 9.02344 17.0508 9.46055 17.0508 10C17.0508 10.5395 16.6137 10.9766 16.0742 10.9766Z"
                      fill="#1E201F" />
                    <path
                      d="M8.90588 15.5957C8.66838 15.5957 8.4301 15.5094 8.24221 15.3352L3.26174 10.716C3.06096 10.5297 2.94729 10.2676 2.94924 9.99338C2.9512 9.71955 3.06799 9.45861 3.27151 9.27502L8.3887 4.65588C8.78909 4.29455 9.40666 4.32619 9.76799 4.72658C10.1293 5.12697 10.0977 5.74455 9.69729 6.10588L5.37229 10.0098L9.57034 13.9031C9.96565 14.2699 9.98909 14.8879 9.62229 15.2832C9.42971 15.4906 9.16838 15.5957 8.90588 15.5957Z"
                      fill="#1E201F" />
                  </svg>
                  Back to Login</a>
              </div>
            </div>
            <div class="auth-module new-password-module" id="new-password-module">
              <div class="am-header">
                <h5>Forgot Password</h5>
                <p>Register and start exploring through personalized experiences.</p>
              </div>
              <form action="" class="register-form">
                <div class="input-field">
                  <label for="new-password">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/lock.svg" alt="">
                    New Password</label>
                  <input type="password" autocomplete name="new-password" placeholder="Enter new password again">
                </div>
                <div class="input-field">
                  <label for="confirm-password">
                    <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/lock.svg" alt="">
                    Confirm Password</label>
                  <input type="password" autocomplete name="confirm-password" placeholder="Confirm Password">
                </div>
                <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Reset
                  Password</button>
              </form>

              <div class="back-btn-wrapper text-center">
                <a href="#login-module" class="back-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path
                      d="M16.0742 10.9766H4.43359C3.89414 10.9766 3.45703 10.5395 3.45703 10C3.45703 9.46055 3.89414 9.02344 4.43359 9.02344H16.0742C16.6137 9.02344 17.0508 9.46055 17.0508 10C17.0508 10.5395 16.6137 10.9766 16.0742 10.9766Z"
                      fill="#1E201F" />
                    <path
                      d="M8.90588 15.5957C8.66838 15.5957 8.4301 15.5094 8.24221 15.3352L3.26174 10.716C3.06096 10.5297 2.94729 10.2676 2.94924 9.99338C2.9512 9.71955 3.06799 9.45861 3.27151 9.27502L8.3887 4.65588C8.78909 4.29455 9.40666 4.32619 9.76799 4.72658C10.1293 5.12697 10.0977 5.74455 9.69729 6.10588L5.37229 10.0098L9.57034 13.9031C9.96565 14.2699 9.98909 14.8879 9.62229 15.2832C9.42971 15.4906 9.16838 15.5957 8.90588 15.5957Z"
                      fill="#1E201F" />
                  </svg>
                  Back to Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mega-menu-box">
        <div class="mega-menu-wrapper" id="mega-destinations">
          <div class="mm-container">
            <div class="row">
              <div class="col-xl-3">
                <ul class="mm-controller">

                  <li class="d-xl-none">
                    <button type="button" class="back-to-mobile-menu bh-btn bh-btn-filled-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g opacity="0.8">
                          <path d="M7.5 3.75L13.75 10L7.5 16.25" stroke="#363A38" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                      </svg>
                      Back
                    </button>
                  </li>
                  <li class="dropdown-menu-item active">
                    <a href="#nepal_01">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <span>Nepal</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#india_02">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <span>India</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#vietnam_03">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <span>Vietnam</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#new_zealand_04">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <span>New Zealand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#dubai_05">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <span>Dubai</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#thailand_06">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <span>Thailand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#europe_07">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <span>Europe</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#fizi_08">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <span>Fiji</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href=" #srilanka_09">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <span>Srilanka</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xl-9">
                <div class="tab-content-wrapper">
                  <div class="tab-content active" id="nepal_01">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">

                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Activity In Nepal</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="india_02">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">India</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="vietnam_03">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Vietnam</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="new_zealand_04">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">New Zealand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="dubai_05">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Dubai</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="thailand_06">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Thailand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="europe_07">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Europe</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="fiji_08">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Fiji</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="srilanka_09">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Srilanka</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mega-menu-wrapper" id="mega-activities">
          <div class="mm-container">
            <div class="row">
              <div class="col-xl-3">
                <ul class="mm-controller">

                  <li class="d-xl-none">
                    <button type="button" class="back-to-mobile-menu bh-btn bh-btn-filled-dark">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g opacity="0.8">
                          <path d="M7.5 3.75L13.75 10L7.5 16.25" stroke="#363A38" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                      </svg>
                      Back
                    </button>
                  </li>
                  <li class="dropdown-menu-item active">
                    <a href="#nepal">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <span>Nepal</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#india">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <span>India</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#vietnam">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <span>Vietnam</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#new_zealand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <span>New Zealand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#dubai">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <span>Dubai</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#thailand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <span>Thailand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#europe">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <span>Europe</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#fizi">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <span>Fiji</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href=" #srilanka">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <span>Srilanka</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xl-9">
                <div class="tab-content-wrapper">
                  <div class="tab-content active" id="nepal">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Activity In Nepal</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="india">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">India</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="vietnam">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Vietnam</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="new_zealand">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">New Zealand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="dubai">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Dubai</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="thailand">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Thailand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="europe">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Europe</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="fiji">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Fiji</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="srilanka">
                    <div class="tc-header d-flex justify-content-between align-items-center flex-wrap">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Srilanka</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-xl-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>