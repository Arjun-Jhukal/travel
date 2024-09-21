<!-- Destinations Block -->
<?php
$enable_destinations = get_field('enable_destinations');
$destinations_title = get_field('destinations_title');
$destination_button = get_field('destination_button');
$destinations_destination = get_field('destinations_destination');
if ($enable_destinations):
  ?>
  <section class="destinations section-gap">
    <div class=" container">
      <div class="section-title d-flex justify-content-between align-items-center flex-wrap">
        <h2><?php echo $destinations_title; ?></h2>
        <?php if ($destination_button):
          $link = $destination_button['url'];
          $btn_title = $destination_button['title'];
          ?>
          <a href="<?php echo esc_url($link); ?>" class="bh-btn bh-btn-filled-dark"><?php echo $btn_title; ?></a>
        <?php endif; ?>
      </div>
      <div class="destinations-slider-wrapper">
        <div class="destinations-slider" id="destination-slider">
          <?php
          if (have_rows('destinations_destination')):
            while (have_rows('destinations_destination')):
              the_row();
              if (get_row_layout() === 'destinations'):
                $selected_terms = get_sub_field('dest_title');
                if ($selected_terms):
                  foreach ($selected_terms as $term_id):
                    $term = get_term($term_id);
                    if ($term) {
                      $term_link = get_term_link($term);
                      $term_image = get_field('destination_featured_image', $term);
                      $args = array(
                        'post_type' => 'tour',
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'destination',
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                          ),
                        ),
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                      );
                      $query = new WP_Query($args);
                      $term_count = $query->found_posts;
                      wp_reset_postdata();
                      ?>
                      <div class="destination-item">
                        <a href="<?php echo esc_url($term_link); ?>">
                          <div class="dsi-image">
                            <img src="<?php echo $term_image ?: get_parent_theme_file_uri() . '/assets/images/placeholder-04.png'; ?>"
                              alt="<?php echo esc_attr($term->name); ?>" class="img-fluid">
                          </div>
                          <div class="dsi-content d-flex justify-content-between align-items-center">
                            <h6><?php echo esc_html($term->name); ?></h6>
                            <p class="sm-text"><?php echo esc_html($term_count); ?> Tours</p>
                          </div>
                        </a>
                      </div>
                      <?php
                    }
                  endforeach;
                endif;
              endif;
            endwhile;
          endif;
          ?>
        </div>
        <div class="slider-dots"></div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Destinations Block -->