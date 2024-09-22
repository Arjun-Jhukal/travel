<?php

/**
 * Template Name: Destination Page Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/inner-banner",null);
get_template_part("/template-parts/destination-page/destination-list",null);

?>

<?php get_footer()?>