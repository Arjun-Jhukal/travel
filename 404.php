<?php
get_header();

?>

<section class="not-found ">
  <div class="not-found-content">
    <div class="nf-image">
      <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/404.png" alt="" class="img-fluid">
    </div>
    <h1 class="text-uppercase ">Page Not Found</h1>
    <p>Uh-oh! It looks like the page you're searching for isn't here. Please check the URL or return to the homepage.
    </p>
    <a href="<?php echo home_url()?>" class="bh-btn bh-btn-filled-dark">Go Back to Homepage</a>
  </div>
</section>