<?php 
/**
 * Template Name: Landing Page
 * 
 */
get_header() ?>

<?php 
get_template_part('template-parts/landing-page/page-banner',null);
get_template_part('template-parts/landing-page/steps',null);
get_template_part('template-parts/landing-page/destinations',null);
get_template_part('template-parts/landing-page/key-feature',null);
get_template_part('template-parts/landing-page/popular-package',null);
get_template_part('template-parts/landing-page/activities',null);
get_template_part('template-parts/landing-page/testimonial',null);
get_template_part('template-parts/landing-page/main-cta',null);
get_template_part('template-parts/landing-page/blog-list',null);
?>

<?php get_footer()?>