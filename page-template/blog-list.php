<?php

/**
 * Template Name: Blog List Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/blog-list-page/blog-with-aside",null);

?>

<?php get_footer()?>