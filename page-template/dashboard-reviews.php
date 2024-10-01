<?php

/**
 * Template Name: Dashboard Reviews Template
 * 
 */

 get_header();
?>

<section class="dashboard">
  <div class="d-flex">
    <?php get_template_part("/template-parts/dashboard/sidebar", null);?>
    <div class="dashboard-content w-100">
      <div class="container-fluid">
        <?php  get_template_part("/template-parts/dashboard/dashboard-header", null); ?>
        <div class="dashboard-content-box  ">
          <h1>Reviews Page</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer()?>