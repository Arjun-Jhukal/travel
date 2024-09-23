<?php

/**
 * Template Name: Contact Us Template
 * 
 */

 get_header();
?>

<?php
get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/contact-page/contact-info",null);
get_template_part("/template-parts/contact-page/location-map",null);
?>

<?php get_footer()?>