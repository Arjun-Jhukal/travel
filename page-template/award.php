<?php

/**
 * Template Name: Award and Achievement Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/general-page-intro",null);
get_template_part("/template-parts/awards-page/award-listing",null);
get_template_part("/template-parts/global-cta",null);
get_template_part("/template-parts/awards-page/certificate-listing",null);

?>

<?php get_footer()?>