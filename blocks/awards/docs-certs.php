<!-- Documents and Certifications -->
<?php
$docs_listing = get_field('docs_listing');
$al_title = $docs_listing['al_title'];
$al_desc = $docs_listing['al_desc'];
$docs = $docs_listing['docs'];
if ($docs):
  ?>
  <section class="certificate-listing section-gap">
    <div class="container">
      <div class="section-title text-center d-flex justify-content-between flex-wrap">
        <h2><?php echo $al_title; ?></h2>
        <p><?php echo $al_desc; ?></p>
      </div>

      <div class="row certificate-light-gallery">
        <?php foreach ($docs as $doc):
          $doc_image = $doc['doc_image'];
          $doc_title = $doc['doc_title'];
          ?>
          <div class="col-md-6 col-lg-3">
            <div class="cl-item">
              <div class="cli-image">
                <a data-src="
              <?php echo esc_url($doc_image); ?>" data-iframe="true">
                  <?php
                  $doc_img = $doc_image ?: esc_url(get_home_url()) . '/wp-content/uploads/2024/09/Featured-Page-Intro.png';
                  $image_id_doc_img = attachment_url_to_postid($doc_img);
                  $doc_img_alt_text = get_post_meta($image_id_doc_img, '_wp_attachment_image_alt', true);
                  if (!$doc_img_alt_text) {
                    $doc_img_alt_text = 'Recognition from the Ministry of Tourism, Nepal';
                  } ?>
                  <img src="<?php echo $doc_img; ?>" alt="<?php echo esc_attr($doc_img_alt_text); ?>" class="img-fluid">
                </a>
              </div>
              <div class="cli-content text-center">
                <strong><?php echo $doc_title; ?></strong>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Documents and Certifications -->