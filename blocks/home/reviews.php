<!-- Reviews of Bold Himalaya Tours -->
<?php
$enable_reviews = get_field('enable_reviews');
$reviews_title = get_field('reviews_title');
if ($enable_reviews):
  ?>
  <section class="testimonials section-gap">
    <div class="container">
      <div class="section-title">
        <h2 class="text-center">
          <?php echo $reviews_title; ?>
        </h2>
      </div>
      <div class="testimonials-wrapper">
        <h2><span>Testimonials Yet To Come...</span></h2>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Reviews of Bold Himalaya Tours -->