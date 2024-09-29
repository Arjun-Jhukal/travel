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
<!-- About Intro -->
<?php
$enable_ab_section = get_field('enable_ab_section');
$ab_title = get_field('ab_title');
$ab_desc = get_field('ab_desc');
$ab_ban_img = get_field('ab_ban_img');
if ($enable_ab_section):
  ?>
  <section class="about-intro">
    <div class="container">
      <div class="section-title d-flex justify-content-between align-items-end flex-wrap">
        <h2>
          <?php echo $ab_title; ?>
        </h2>
        <div class="st-brief">
          <?php echo $ab_desc; ?>
        </div>
      </div>
      <div class="ai-featured-image">
        <?php $img = $ab_ban_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/About-Intro-Banner-Image.png';
        $image_id_pop = attachment_url_to_postid($img);
        $img_alt_text = get_post_meta($image_id_pop, '_wp_attachment_image_alt', true);
        if (!$img_alt_text) {
          $img_alt_text = 'Explore the World Your Way with Bold Himalaya';
        } ?>
        <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($img_alt_text); ?>" class="img-fluid" />
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !About Intro -->