<?php

/**
 * Single Tour
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */

get_header();
?>
<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="<?php echo esc_url(get_home_url()); ?>" class="sm-text">Home</a></li>
        <li><span class="sm-text"><?php echo get_the_title(); ?></span></li>
      </ul>
    </div>
  </div>
</section>
<!-- !Breadcrumb -->
<!-- Tour Gallery -->
<?php
$tour_gallery = get_field('tour_gallery');
if ($tour_gallery):
  ?>
  <section class="gallery-banner py-0">
    <div class="gb-items light-gallery">
      <?php
      $placeholder_image = get_field('fallback_gallery_placeholder_image', 'option');
      $tour_gallery = is_array($tour_gallery) ? $tour_gallery : [];
      $image_count = count($tour_gallery);
      while ($image_count < 8) {
        $tour_gallery[] = $placeholder_image;
        $image_count++;
      }
      foreach ($tour_gallery as $index => $gallery): ?>
        <div class="gb-item <?php echo $index === 0 ? 'featured' : ''; ?>">
          <a data-src="<?php echo esc_url($gallery); ?>" data-iframe="true">
            <img src="<?php echo esc_url($gallery); ?>" alt="Tour Images" class="img-fluid">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
<?php endif; ?>
<!-- !Tour Gallery -->
<?php
// endif;
get_footer(); ?>
<!-- !Single Tour -->