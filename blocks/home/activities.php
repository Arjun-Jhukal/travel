<!-- Activities and Experiences -->
<?php
$enable_activities = get_field('enable_activities');
$activities_title = get_field('activities_title');
$activities_desc = get_field('activities_desc');
$activities_btn = get_field('activities_btn');
$activities_acts = get_field('activities_acts');
if ($enable_activities):
  if ($activities_acts):
    ?>
    <section class="activities section-gap">
      <div class="container">
        <div class="section-title">
          <h2 class="text-center"><?php echo $activities_title; ?></h2>
        </div>
        <div class="activities-grid">

          <?php
          if (have_rows('activities_acts')):
            while (have_rows('activities_acts')):
              the_row();
              if (get_row_layout() === 'activities'):
                $selected_terms = get_sub_field('dest_title');
                if ($selected_terms):
                  $countt = count($selected_terms);
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
                      static $featured_count = 0;
                      wp_reset_postdata();
                      ?>

                      <div class="activity-item <?php if ($featured_count < 2)
                        echo 'featured'; ?>">
                        <a href="<?php echo esc_url($term_link); ?>">
                          <div class="ai-image">
                            <img src="<?php echo $term_image ?: get_parent_theme_file_uri() . '/assets/images/placeholder-14.png'; ?>"
                              alt="<?php echo esc_attr($term->name); ?>" class="img-fluid">
                          </div>
                          <div class="ai-content">
                            <h6><?php echo $term->name; ?></h6>
                            <p class="sm-text"><?php echo esc_html($term_count); ?> Tours</p>
                          </div>
                        </a>
                      </div>
                      <?php
                    }
                    $featured_count++;
                  endforeach;
                endif;
              endif;
            endwhile;
          endif;
          ?>
        </div>
        <span class="text-center section-cta"><?php echo '<span class="text-center section-cta">' . $activities_desc . '</span>';
        if ($activities_btn): ?>
            <a href="<?php echo esc_url($activities_btn['url']); ?>"
              class="bh-btn bh-btn-underlined"><?php echo $activities_btn['title']; ?></a><?php endif; ?></span>
      </div>
    </section>
  <?php endif; endif; ?>
<!-- !Activities and Experiences -->