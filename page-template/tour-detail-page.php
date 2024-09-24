<?php

/**
 * Template Name: Trip Detail Page Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/tour-detail-page/gallery-banner",null);
get_template_part("/template-parts/tour-detail-page/trip-content-box",null);

?>

<?php get_footer()?>