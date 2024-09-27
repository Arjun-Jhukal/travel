<?php

/**
 * Template Name: Wishlist Template
 * 
 */

 get_header();
?>
<!-- 
<?php

$isAuthenticated=false;
get_template_part("/template-parts/breadcrumb",null);

if(!$isAuthenticated):
  get_template_part("/template-parts/wishlist-page/auth-message", null);
endif;

get_template_part("/template-parts/wishlist-page/wishlist-list",null);
?> -->
<div class="wishlist-container">
    <h1>Your Wishlist</h1>
    <ul class="wishlist-items">
     <?php
    // Check if the user is logged in
    if (is_user_logged_in()) {
      $user_id = get_current_user_id();
      $wishlist = get_user_meta($user_id, 'wishlist', true);

      // Check if wishlist is empty
      if (empty($wishlist)) {
        echo '<li>No items in your wishlist.</li>';
      } else {
        // Loop through each package ID in the wishlist
        foreach ($wishlist as $package_id) {
          // Get package details, replace 'your_post_type' with the actual post type
          $package = get_post($package_id);
          if ($package) {
            echo '<li>';
            echo '<a href="' . get_permalink($package_id) . '">' . esc_html($package->post_title) . '</a>';
            echo '</li>';
          }
        }
      }
    } else {
      echo '<li>Please log in to view your wishlist.</li>';
    }
    ?>
  </ul>
</div>

<?php get_footer()?>