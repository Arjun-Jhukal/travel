<?php
function enqueue_ajax_search_scripts()
{
  wp_enqueue_script('ajax-search', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
  wp_localize_script('ajax-search', 'ajax_search_params', array(
    'ajax_url' => admin_url('admin-ajax.php'),
  ));
}
add_action('wp_enqueue_scripts', 'enqueue_ajax_search_scripts');

function ajax_search_handler()
{
  // Get parameters from the AJAX request
  $keyword = sanitize_text_field($_POST['keyword']);
  $difficulty = sanitize_text_field($_POST['difficulty']);
  $region = sanitize_text_field($_POST['region']);
  $tour_type = sanitize_text_field($_POST['tour_type']);
  $travel_style = sanitize_text_field($_POST['travel_style']);
  $duration_min = intval($_POST['duration_min']);
  $duration_max = intval($_POST['duration_max']);
  $price_min = floatval($_POST['price_min']);
  $price_max = floatval($_POST['price_max']);
  $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

  // Prepare query args
  $args = array(
    'post_type' => 'tour',
    'paged' => $paged,
    'meta_query' => array('relation' => 'AND'),
    'tax_query' => array('relation' => 'AND'),
  );

  // Optional keyword search
  if (!empty($keyword)) {
    $args['s'] = $keyword;
  }

  // Meta query for difficulty
  if (!empty($difficulty)) {
    $args['meta_query'][] = array(
      'key' => 'tour_difficulty',
      'value' => $difficulty,
      'compare' => '=',
    );
  }

  // Meta query for duration
  if ($duration_min > 0 || $duration_max > 0) {
    $args['meta_query'][] = array(
      'key' => 'tour_dur_day',
      'value' => array($duration_min, $duration_max),
      'type' => 'NUMERIC',
      'compare' => 'BETWEEN',
    );
  }

  // Meta query for price
  if ($price_min > 0 || $price_max > 0) {
    $args['meta_query'][] = array(
      'key' => 'tour_price',
      'value' => array($price_min, $price_max),
      'type' => 'NUMERIC',
      'compare' => 'BETWEEN',
    );
  }

  // Tax query for region
  if (!empty($region)) {
    $args['tax_query'][] = array(
      'taxonomy' => 'destination',
      'field' => 'term_id',
      'terms' => $region,
    );
  }

  // Tax query for tour type
  if (!empty($tour_type)) {
    $args['tax_query'][] = array(
      'taxonomy' => 'destination',
      'field' => 'term_id',
      'terms' => $tour_type,
    );
  }
  if (!empty($travel_style)) {
    $args['tax_query'][] = array(
      'taxonomy' => 'travel-style',
      'field' => 'term_id',
      'terms' => $travel_style,
    );
  }
  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      echo '<div class="row">';
      get_template_part('template-parts/tour-package-card');
      echo '</div>';
    }
    wp_reset_postdata();
  } else {
    get_template_part('template-parts/empty-state-no-tours');

  }
  wp_die();
}
add_action('wp_ajax_ajax_search', 'ajax_search_handler');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search_handler');
