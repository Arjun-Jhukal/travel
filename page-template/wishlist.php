<?php

/**
 * Template Name: Wishlist Template
 * 
 */

 get_header();
?>

<?php

$isAuthenticated=false;
get_template_part("/template-parts/breadcrumb",null);

if(!$isAuthenticated):
  get_template_part("/template-parts/wishlist-page/auth-message", null);
endif;

get_template_part("/template-parts/wishlist-page/wishlist-list",null);
?>

<?php get_footer()?>