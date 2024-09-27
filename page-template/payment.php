<?php

/**
 * Template Name: Payment Template
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
        <div class="bm-content payment-form">
          <div class="bm-title">
            <h4>Payment</h4>
            <p class="sm-text">Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>

          <div class="payment-block">
            <div class="payment-options">
              <div class="po-item active">
                <div class="radio-btn">
                  <input type="radio">
                </div>
                <div class="po-content">
                  <strong>Pay advance amount ($930)</strong>
                  <p class="sm-text">You will receive an email with a link to pay when a payment is done.</p>
                  <strong class="sm-text">Final payment due 01 Dec. 2024 ($2,170)</strong>
                </div>
              </div>
              <div class="po-item">
                <div class="radio-btn">
                  <input type="radio">
                </div>
                <div class="po-content">
                  <strong>Pay full amount ($3,100)</strong>
                </div>
              </div>
            </div>
            <div class="payment-methods">
              <p>We accept:</p>
              <ul class="d-flex justify-content-start align-items-center">
                <li>
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/client-03.png" alt="">
                </li>
                <li>
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/client-04.png" alt="">
                </li>
                <li>
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/client-05.png" alt="">
                </li>
                <li>
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/client-06.png" alt="">
                </li>
                <li>
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/client-07.png" alt="">
                </li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="bh-btn bh-btn-outlined d-block w-100 text-center">Previous</button>
            </div>
            <div class="col-lg-6">
              <button type="submit"
                class="bh-btn bh-btn-filled-dark d-block w-100 text-center handle-success">Next</button>
            </div>
          </div>
        </div>

        <div class="cancellation-policy">
          <h5>Cancellation Policy</h5>
          <p>At Bold Himalaya, we understand that plans can change. Our cancellation policy is designed to offer
            flexibility while ensuring fairness for all parties involved.</p>
          <ol>
            <li>
              <strong>Cancellation 30 Days Prior to Departure:</strong>
              <p>Full refund of the booking amount, with no cancellation charges applied.</p>
            </li>
            <li>
              <strong>Trip Modifications or Postponements: </strong>
              <p> If you need to modify or postpone your trip, we will work with you to reschedule based on
                availability.
                A
                nominal rebooking fee may apply.</p>
            </li>
          </ol>
          <p>
            For any queries or to initiate a cancellation, please contact our customer service team from dashboard. We
            aim
            to assist you promptly and provide any necessary support.
          </p>
        </div>
      </div>
      <div class="col-md-5 col-lg-4">
        <?php get_template_part("/template-parts/tour-booking/booking-pricing")?>
      </div>
    </div>
  </div>
</section>

<?php get_footer()?>