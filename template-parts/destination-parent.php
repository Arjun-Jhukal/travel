<?php

/**
 * Template Name: Destination template
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
$slug = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$term = get_term_by('slug', $slug, 'destination');
$bc_title = $term ? get_field('bc_title', 'destination_' . $term->term_id) : null;
$bc_desc = $term ? get_field('bc_desc', 'destination_' . $term->term_id) : null;
?>
<section class="destination-list bg-white section-padding-y">
  <div class="container">
    <div class="section-title d-flex justify-content-between flex-wrap">
      <h2>Explore and Find the
        <span>Places to Visit in Nepal</span>
      </h2>
      <div class="st-brief">
        <p>As Nepal has attracted trekkers from around the world, trekking is the most popular thing to do in Nepal.
          Trekking in Nepal is not walking alone through an undiscovered wilderness. Walking along the well-marked
          trekking paths, travelers will often discover quite the opposite. Two of the most popular trekking regions are
          Everest and Annapurna with many different trails.</p>
      </div>
    </div>

    <div class="dl-items">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-05.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Nepal</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-04.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>India</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-03.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Bhutan</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-02.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Indonesia</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-05.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Nepal</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-04.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>India</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-03.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Bhutan</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="destination-item">
            <a href="#">
              <div class="dsi-image">
                <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/placeholder-02.png" alt=""
                  class="img-fluid">
              </div>
              <div class="dsi-content d-flex justify-content-between align-items-center">
                <h6>Indonesia</h6>
                <p class="sm-text">24 Tours</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>