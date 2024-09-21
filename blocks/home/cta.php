<section class="testimonials section-gap">
  <div class="container">
    <div class="section-title">
      <h2 class="text-center">Real Guest Experiences and
        <span>Reviews of Bold Himalaya Tours</span>
      </h2>
    </div>

    <div class="testimonials-wrapper">
      <h2><span>Testimonials Yet To Come...</span></h2>
    </div>
    <!-- CTA Home -->
    <?php
    $enable_cta = get_field('enable_cta');
    $cta_title = get_field('cta_title');
    $cta_desc = get_field('cta_desc');
    $cta_contact = get_field('cta_contact');
    $cta_mail_id = get_field('cta_mail_id');
    $cta_img = get_field('cta_img');
    if ($enable_cta):
      ?>
      <div class="testimonials-cta">
        <div class="section-title">
          <h2 class="text-center"><?php echo $cta_title; ?></h2>

        </div>

        <div class="tcta-content-wrapper">
          <span class="sm-text"><?php echo $cta_desc; ?></span>
          <?php if ($cta_contact):
            foreach ($cta_contact as $cc):
              $wa_icon = $cc['wa_icon'];
              $wa_btn = $cc['wa_btn'];
              if ($wa_btn):
                ?>
                <div class="tcta-btn-group d-flex justify-content-center align-items-center flex-wrap">
                  <a href="<?php echo esc_url($wa_btn['url']); ?>" class="bh-btn bh-btn-outlined">
                    <img
                      src="<?php echo esc_url($wa_icon) ?: get_parent_theme_file_uri() ?>/assets/images/icons/whatsapp-icon.svg"
                      alt="">
                    <span><?php echo $wa_btn['title']; ?></span>
                  </a>
                </div>
              <?php endif; endforeach; endif; ?>
          <?php if ($cta_mail_id):
            $mail_url = $cta_mail_id['url'];
            $mail = $cta_mail_id['title'];
            ?>
            <p class="sm-text">Or mail us at: <a href="mailto:<?php echo esc_url($mail_url); ?>"
                class="bh-btn bh-btn-underlined"><?php echo $mail; ?></a></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>