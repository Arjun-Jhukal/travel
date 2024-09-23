<?php

/**
 * Template Name: Single Region Page Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/inner-banner",null);
get_template_part("/template-parts/region-page/region-page-intro",null);
get_template_part("/template-parts/package-filter", null);
get_template_part("/template-parts/faqs", null);
get_template_part("/template-parts/landing-page/blog-list", null);

?>

<?php get_footer()?>