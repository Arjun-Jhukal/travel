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
  <section class="main-cta section-gap">
    <div class="container">
      <div class="main-cta-cta">
        <div class="section-title">
          <h2 class="text-center"><?php echo $cta_title; ?></h2>
        </div>

        <div class="tcta-content-wrapper">
          <p class="sm-text"><?php echo $cta_desc; ?></p>
          <?php if ($cta_contact):
            ?>
            <div class="tcta-btn-group d-flex justify-content-center align-items-center flex-wrap">
              <?php
              foreach ($cta_contact as $cc):
                $wa_icon = $cc['wa_icon'];
                $wa_btn = $cc['wa_btn'];
                if ($wa_btn):
                  ?>
                  <a href="<?php echo esc_url($wa_btn['url']); ?>" class="bh-btn bh-btn-outlined">
                    <img
                      src="<?php echo esc_url($wa_icon ?: get_parent_theme_file_uri() . '/assets/images/icons/whatsapp-icon.svg'); ?>"
                      alt="WhatsApp Icon">
                    <span><?php echo $wa_btn['title']; ?></span>
                  </a>
                <?php endif; endforeach; ?>
            </div>
          <?php endif; ?>
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
<!-- !CTA Home -->