<!-- Featured Page Intro -->
<?php
$award_title = get_field('award_title');
$award_desc = get_field('award_desc');
$award_ban_img = get_field('award_ban_img');
?>
<section class="general-page-intro">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo $award_title; ?></h2>
      <p><?php echo $award_desc; ?></p>
    </div>
    <div class="pi-content">
      <div class="pic-image">
        <?php
        $award_imgs = $award_ban_img ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Featured-Page-Intro.png';
        $image_id_award_imgs = attachment_url_to_postid($award_imgs);
        $award_imgs_alt_text = get_post_meta($image_id_award_imgs, '_wp_attachment_image_alt', true);
        if (!$award_imgs_alt_text) {
          $award_imgs_alt_text = 'Discover the Awards and Integrity Behind Our Name';
        } ?>
        <img src="<?php echo $award_imgs; ?>" alt="<?php echo esc_attr($award_imgs_alt_text); ?>" class="img-fluid">
      </div>
    </div>
  </div>
</section>
<!-- !Featured Page Intro -->