<?php

/**
 * Template Name: Lead Traveler Template
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
            <h4>Lead Traveler Information</h4>
            <p class="sm-text">Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>

          <form action="">
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


              <div class="col-md-12">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/calendar-date.svg" alt="">
                    Nationality</label>
                  <div class="date-field-wrapper">
                    <select>
                      <option value="" disabled selected>Select your Nationality</option>
                      <option value="nepal">Nepal</option>
                      <option value="india">India</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/message-box.svg" alt="">
                    Message</label>
                  <textarea name="" id="" rows="4"
                    placeholder="Write your beautiful trip plan here with a group size, budget range, trip plan and other requirement..."></textarea>
                </div>
              </div>


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