<?php

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
get_template_part("/template-parts/blog-detail/blog-detail-featured",null);
get_template_part("/template-parts/blog-detail/blog-detail-content",null);
get_template_part("/template-parts/landing-page/blog-list",null);
?>

<?php get_footer()?>