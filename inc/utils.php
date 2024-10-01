<?php
// SVG support
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
// !SVG support
// menus
function register_boldhimalaya_menu()
{
  register_nav_menu('primary-menu', __('Primary Menu', 'bold'));
  register_nav_menu('privacy-policy', __('Privacy Policy', 'bold'));
  register_nav_menu('activities', __('Activities', 'bold'));
  register_nav_menu('navigation', __('Navigation', 'bold'));
  register_nav_menu('destination', __('Destination', 'bold'));
}
// !menus
// wishlist
require_once get_template_directory() . '/inc/wishlist-register.php';
function my_enqueue_scripts()
{
  wp_enqueue_script('my-wishlist-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
  wp_localize_script('my-wishlist-js', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// AJAX handler for toggling the wishlist
function toggle_wishlist()
{
  if (!isset($_POST['package_id'])) {
    wp_send_json_error('No package ID provided');
    wp_die();
  }
  $package_id = intval($_POST['package_id']);
  $user_id = get_current_user_id();
  if ($user_id === 0) {
    wp_send_json_error('User not logged in');
    wp_die();
  }
  // Get current wishlist from user meta
  $wishlist = get_user_meta($user_id, 'wishlist', true);
  $wishlist = is_array($wishlist) ? $wishlist : array();
  // Toggle package in wishlist
  if (in_array($package_id, $wishlist)) {
    // Remove from wishlist
    $wishlist = array_diff($wishlist, array($package_id));
    $message = 'Removed from wishlist';
  } else {
    // Add to wishlist
    $wishlist[] = $package_id;
    $message = 'Added to wishlist';
  }
  // Update user meta
  update_user_meta($user_id, 'wishlist', $wishlist);
  wp_send_json_success(array('message' => $message, 'count' => count($wishlist)));
}
add_action('wp_ajax_toggle_wishlist', 'toggle_wishlist');

// !wishlist

// reviews like/dislike
function likedislike_enqueue_scripts()
{
  wp_enqueue_script('my-script', get_template_directory_uri() . '/js/my-script.js', ['jquery'], null, true);
  wp_localize_script('my-script', 'ajax_object', [
    'ajax_url' => admin_url('admin-ajax.php'),
  ]);
}
add_action('wp_enqueue_scripts', 'likedislike_enqueue_scripts');
function handle_review_reaction()
{
  if (!isset($_POST['comment_id']) || !isset($_POST['type'])) {
    wp_send_json_error('Invalid request');
  }
  $comment_id = intval($_POST['comment_id']);
  $type = sanitize_text_field($_POST['type']);
  $meta_key = ($type === 'like') ? 'likes' : 'dislikes';
  $current_count = intval(get_comment_meta($comment_id, $meta_key, true));
  $new_count = $current_count + 1;

  // Update the count in the database
  update_comment_meta($comment_id, $meta_key, $new_count);

  wp_send_json_success(['new_count' => $new_count]);
}

add_action('wp_ajax_handle_review_reaction', 'handle_review_reaction');
add_action('wp_ajax_nopriv_handle_review_reaction', 'handle_review_reaction'); // for not-logged
// !reviews like/dislike
