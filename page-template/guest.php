<?php

/**
 * Template Name: Guest Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);


?>

<section class="booking-module general bg-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <?php get_template_part("/template-parts/tour-booking/booking-menu")?>
      </div>
      <div class="col-md-7 col-lg-5">
        <div class="bm-content">
          <div class="bm-title">
            <h4>Guest Information</h4>
            <p class="sm-text">Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>

          <form action="">
            <div class="guest-info-wrapper">
              <div class="guest-info">
                <div class="gi-title d-flex justify-content-between">
                  <strong>Guest #1 [ADULT]</strong>
                  <a href="#" class="bh-btn bh-btn-underlined remove-guest">Remove this Guest</a>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/user.svg" alt="">
                        Full Name</label>
                      <input type="text" placeholder="Enter your full name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone-v2.svg" alt="">
                        Phone Number</label>
                      <input type="tel" placeholder="Enter your Phone Number">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/email.svg" alt="">
                        Email Address</label>
                      <input type="tel" placeholder="Enter your Email Address">
                    </div>
                  </div>
                </div>
              </div>
              <div class="guest-info">
                <div class="gi-title d-flex justify-content-between">
                  <strong>Guest #1 [CHILD]</strong>
                  <a href="#" class="bh-btn bh-btn-underlined remove-guest">Remove this Guest</a>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/user.svg" alt="">
                        Full Name</label>
                      <input type="text" placeholder="Enter your full name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone-v2.svg" alt="">
                        Phone Number</label>
                      <input type="tel" placeholder="Enter your Phone Number">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-field">
                      <label for="start-date">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/email.svg" alt="">
                        Email Address</label>
                      <input type="tel" placeholder="Enter your Email Address">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-start add-more-group">
              <a href="#" class="bh-btn bh-btn-underlined add-adult">+ Add another adult</a>
              <a href="#" class="bh-btn bh-btn-underlined add-child">+ Add another child</a>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <button type="button" class="bh-btn bh-btn-outlined d-block w-100 text-center">Previous</button>
              </div>
              <div class="col-lg-6">
                <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Next</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5 col-lg-4">
        <?php get_template_part("/template-parts/tour-booking/booking-pricing")?>
      </div>
    </div>
  </div>
</section>

<?php get_footer()?>