<?php

/**
 * Template Name: General Page
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);
?>
<section class="general-page-info">
  <div class="container">
    <div class="pi-content ">
      <div class="page-title text-center">
        <h2><?php echo the_title(); ?></h2>
        <P>Last Modified: <strong>06 Sept. 2024</strong></P>
      </div>

      <div class="content">
        <?php the_content();?>
      </div>
    </div>
  </div>
</section>
<?php

?>

<?php get_footer()?>