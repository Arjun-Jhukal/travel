<?php

/**
 * Template Name: Book Tour General Template
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
            <h4>General</h4>
            <p class="sm-text">Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>

          <form action="">
            <div class="row">
              <div class="col-md-12">
                <div class="individual-cards d-sm-flex">
                  <div class="input-field">
                    <div class="individual-info-card d-flex justify-content-start  active ">
                      <div class="ic-icon">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/group.svg" alt="">
                      </div>
                      <div class="ic-info">
                        <strong>Group Trip</strong>
                        <span class="sm-text">(USD $1,460 /pax)</span>
                      </div>

                    </div>
                  </div>
                  <div class="input-field">
                    <div class="individual-info-card d-flex justify-content-start ">
                      <div class="ic-icon">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/group.svg" alt="">
                      </div>
                      <div class="ic-info">
                        <strong>Private Trip</strong>
                        <span class="sm-text">(USD $1,1580 /pax)</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/calendar-date.svg" alt="">
                    Start Date</label>
                  <div class="date-field-wrapper">
                    <input type="text" class="start-date" placeholder="13th Sept. 2024">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/calendar-date.svg" alt="">
                    End Date</label>
                  <div class="date-field-wrapper">
                    <input type="text" class="end-date" placeholder="13th Sept. 2024">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/group-v2.svg" alt="">
                    No. of Adult <span>(above 12 yrs)</span></label>
                  <div class="number-controller d-flex justify-content-start align-items-center">
                    <button type="button " class="decrease">-</button>
                    <input type="number" value="1">
                    <button type="button " class="increase">+</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-field">
                  <label for="start-date">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/group-v2.svg" alt="">
                    No. of Child <span>(below 12 yrs)</span></label>
                  <div class="number-controller d-flex justify-content-start align-items-center">
                    <button type="button " class="decrease">-</button>
                    <input type="number" value="2">
                    <button type="button " class="increase">+</button>
                  </div>
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