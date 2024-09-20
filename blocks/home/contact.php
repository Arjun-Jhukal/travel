<!-- Contact Us Page -->
<!-- Breadcrumb -->
<?php
$bc = get_field('bc');
$enable_bc = $bc['enable_bc'];
$bc_title = $bc['bc_title'];
if ($enable_bc):
    ?>
<section class="mb-60 breadcrumb-title-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              <?php echo $bc_title ?: get_the_title(); ?>
          </ol>
        </nav>
        <div class="title-wrapper">
          <h1><?php echo $bc_title ?: get_the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- !Breadcrumb -->
<!-- Get in Touch with us Section -->
<?php
$git = get_field('git');
$enable_git = $git['enable_git'];
$git_title = $git['git_title'];
$git_desc = $git['git_desc'];
$call_us = $git['call_us'];
$email_us = $git['email_us'];
$git_map = $git['git_map'];
$git_map_url = $git['git_map_url'];
if ($enable_git):
    ?>
<section class="pb-80 contact-page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="left-wrapper">
          <div class="top-title-wrapper">
            <h4><?php echo $git_title; ?></h4>
            <p><?php echo $git_desc; ?></p>
          </div>
        </div>
        <div class="mb-4 row">
          <?php
                        $enable_call = $call_us['enable_call'];
                        $call_icon = $call_us['call_icon'];
                        $call_title = $call_us['call_title'];
                        $call_phn = $call_us['call_phn'];
                        if ($enable_call): ?>
          <div class="col-md-6 mb-lg-0 mb-4">
            <div class="quick-touch-link-wrapper">
              <div class="icon-wrapper">
                <?php echo $call_icon; ?>
              </div>
              <h6><?php echo $call_title; ?></h6>
              <div class="link-wrapper">
                <p><a href="tel: <?php echo $call_phn; ?>"><?php echo $call_phn; ?></a></p>
              </div>
            </div>
          </div><?php endif; ?>
          <?php
                        $enable_mail = $email_us['enable_mail'];
                        $mail_icon = $email_us['mail_icon'];
                        $mail_title = $email_us['mail_title'];
                        $mail_add = $email_us['mail_add'];
                        if ($enable_mail): ?>
          <div class="col-md-6">
            <div class="quick-touch-link-wrapper">
              <div class="icon-wrapper">
                <?php echo $mail_icon; ?>
              </div>
              <h6><?php echo $mail_title; ?></h6>
              <div class="link-wrapper">
                <p><a href="mailto:<?php echo $mail_add; ?>"><?php echo $mail_add; ?></a></p>
              </div>
            </div>
          </div><?php endif; ?>
        </div>
        <?php
                    if ($git_map):
                        ?>
        <div class="row">
          <div class="contact-map-location">
            <?php echo $git_map; ?>
          </div>
        </div>
        <?php endif;
                    if ($git_map_url):

                        ?>
        <div class="get-map-location-wrapper">
          <a href="<?php echo esc_url($git_map_url['url']); ?>" target="_blank"><?php echo $git_map_url['title']; ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M7.13909 15.624C6.79739 15.9657 6.79739 16.5197 7.13909 16.8614C7.4808 17.2031 8.03482 17.2031 8.37653 16.8614L7.13909 15.624ZM17.1181 7.75739C17.1181 7.27415 16.7263 6.88239 16.2431 6.88239L8.36809 6.88239C7.88485 6.88239 7.49309 7.27415 7.49309 7.75739C7.49309 8.24064 7.88485 8.63239 8.36809 8.63239H15.3681V15.6324C15.3681 16.1156 15.7598 16.5074 16.2431 16.5074C16.7263 16.5074 17.1181 16.1156 17.1181 15.6324L17.1181 7.75739ZM8.37653 16.8614L16.8618 8.37611L15.6244 7.13868L7.13909 15.624L8.37653 16.8614Z"
                fill="rgba(20, 154, 237, 1)" />
            </svg>
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php
                $contact_form = get_field('contact_form');
                $enable_form = $contact_form['enable_form'];
                $form_title = $contact_form['form_title'];
                $form_desc = $contact_form['form_desc'];
                if ($enable_form):
                    ?>
      <div class="col-lg-6">
        <div class="contact-form-wrapper">
          <div class="form-title-wrapper">
            <h3><?php echo $form_title; ?></h3>
            <p><?php echo $form_desc; ?></p>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="2d34a2e" title="Contact Form"]'); ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<!-- !Contact Section -->
<!-- !Contact Us -->