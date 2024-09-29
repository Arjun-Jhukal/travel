<!-- About Our Team -->
<?php
$our_team = get_field('our_team');
$aot_title = $our_team['aot_title'];
$aot_desc = $our_team['aot_desc'];
$team_members = $our_team['team_members'];
if ($team_members):
  ?>
  <section class="team section-gap">
    <div class="container">
      <div class="section-title text-center">
        <h2><?php echo $aot_title; ?>
        </h2>
        <p><?php echo $aot_desc; ?></p>
      </div>
      <div class="row row-cols-xl-5">
        <?php foreach ($team_members as $member):
          if ($member instanceof WP_Post) {
            $post_id = $member->ID;
            $post_title = $member->post_title;
            $post_excerpt = $member->post_excerpt;
            $post_content = $member->post_content;
            $post_url = get_permalink($post_id);
            $fallback_team_featured_image = get_field('fallback_team_featured_image', 'option');
            if (has_post_thumbnail($post_id)) {
              $post_thumbnail = get_the_post_thumbnail($post_id, 'full', array('class' => 'img-fluid'));
            } else {
              $fallback_image_url = $fallback_team_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
              $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="img-fluid">';
            }
            ?>
            <div class="col col-6 col-md-4 col-lg-3">
              <div class="team-member">
                <div class="tm-profile">
                  <?php echo $post_thumbnail; ?>
                </div>
                <div class="tm-content">
                  <a href="#">
                    <h4><?php echo $post_title; ?></h4>
                    <p class="sm-text"><?php echo $post_excerpt; ?></p>
                    <a href="#" class="bh-btn bh-btn-underlined">View Detail</a>
                  </a>
                </div>
              </div>
            </div>
          <?php }endforeach; ?>
      </div>
    </div>
  </section>
  <div class="team-popup">
    <div class="team-popup-content d-md-flex justify-content-center">
      <div class="tp-member-profile">
        <?php echo $post_thumbnail; ?>
      </div>
      <div class="tp-member-info ">
        <div class="tmi-key-info">
          <h4><?php echo $post_title; ?></h4>
          <p class="sm-text"><?php echo $post_excerpt; ?></p>
        </div>
        <div class="tmi-message">
          <p><?php echo $post_content;?></p>
        </div>
      </div>
      <button class="close-team-popup">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
          <path
            d="M17.4658 16.0001L23.6959 9.76972C24.1014 9.36446 24.1014 8.70921 23.6959 8.30395C23.2907 7.89868 22.6354 7.89868 22.2302 8.30395L15.9999 14.5343L9.76983 8.30395C9.36438 7.89868 8.70934 7.89868 8.30408 8.30395C7.89864 8.70921 7.89864 9.36446 8.30408 9.76972L14.5342 16.0001L8.30408 22.2305C7.89864 22.6358 7.89864 23.291 8.30408 23.6963C8.50604 23.8984 8.77159 24 9.03695 24C9.30231 24 9.56767 23.8984 9.76983 23.6963L15.9999 17.4659L22.2302 23.6963C22.4323 23.8984 22.6977 24 22.963 24C23.2284 24 23.4938 23.8984 23.6959 23.6963C24.1014 23.291 24.1014 22.6358 23.6959 22.2305L17.4658 16.0001Z"
            fill="black" />
        </svg>
      </button>
    </div>
  </div>
<?php endif; ?>
<!-- !About Our Team -->