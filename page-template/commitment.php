<?php

/**
 * Template Name: Commitment Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/general-page-intro",null);
get_template_part("/template-parts/commitment-page/commitment-message",null);
get_template_part("/template-parts/commitment-page/our-values",null);
get_template_part("/template-parts/global-cta",null);

?>

<?php get_footer()?>