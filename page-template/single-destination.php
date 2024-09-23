<?php

/**
 * Template Name: Single Destination Page Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/inner-banner",null);
get_template_part("/template-parts/single-destination/sticky-tab", null);
get_template_part("/template-parts/single-destination/destination-overview", null);
get_template_part("/template-parts/landing-page/activities", null);
get_template_part("/template-parts/single-destination/destination-places", null);
get_template_part("/template-parts/package-filter", null);
get_template_part("/template-parts/faqs", null);
get_template_part("/template-parts/landing-page/blog-list", null);

?>

<?php get_footer()?>