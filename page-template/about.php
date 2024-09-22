<?php

/**
 * Template Name: About Us Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/about/about-intro",null);
get_template_part("/template-parts/about/about-blocks",null);
get_template_part("/template-parts/global-cta",null);
get_template_part("/template-parts/team",null);

?>

<?php get_footer()?>