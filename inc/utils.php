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