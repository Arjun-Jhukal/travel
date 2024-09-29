<!-- Breadcrumb -->
<?php
$bc = get_field('bc');
$bc_title = $bc['bc_title'];
?>
<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="<?php echo esc_url(get_home_url()); ?>" class="sm-text">Home</a></li>
        <li><span class="sm-text"><?php echo $bc_title ?: get_the_title(); ?></span></li>
      </ul>
    </div>
  </div>
</section>
<!-- !Breadcrumb -->