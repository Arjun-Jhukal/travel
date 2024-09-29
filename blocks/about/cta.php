<!-- CTA -->
<?php
$cta = get_field('cta');
$show_v1 = $cta['show_v1'];
$cta_title = $cta['cta_title'];
$cta_desc = $cta['cta_desc'];
$cta_button = $cta['cta_button'];
if ($show_v1):
  ?>
  <section class="global-cta section-gap">
    <div class="container">
      <div class="gcta-content">
        <div class="gcta-content-box">
          <h4><?php echo $cta_title; ?></h4>
          <p class="sm-text"><?php echo $cta_desc; ?></p>
          <?php if ($cta_button):
            $cta_btn_url = $cta_button['url'];
            $cta_btn_text = $cta_button['title'];
            ?>
            <a href="<?php echo esc_url($cta_btn_url); ?>" class="bh-btn bh-btn-outlined"><?php echo $cta_btn_text ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php else: ?>
  <section class="global-cta global-cta-v2 section-gap">
    <div class="container">
      <div class="gcta-content">
        <div class="gcta-content-box">
          <h4><?php echo $cta_title; ?></h4>
          <?php if ($cta_button):
            $cta_btn_url = $cta_button['url'];
            $cta_btn_text = $cta_button['title'];
            ?>
            <a href="<?php echo esc_url($cta_btn_url); ?>" class="bh-btn bh-btn-outlined"><?php echo $cta_btn_text ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !CTA -->