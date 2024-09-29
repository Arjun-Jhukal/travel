<section class="contact-info section-padding-y">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-6 col-xl-5">
        <div class="ci-content">
          <div class="section-title">
            <h2>Get in Touch with us
              <span>for Personalized Travel Assistance & Inqueries</span>
            </h2>
            <p>Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>

          <div class="contact-options">
            <div class="co-item d-flex justify-content-start align-items-center">
              <div class="co-icon">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone.svg" alt=""
                  class="img-fluid">
              </div>
              <div class="co-info">
                <span class="sm-text">Call Us</span>
                <a href="tel:+977-014439789">+977-014439789 <img
                    src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone-after-01.svg" alt=""></a>
                <a href="tel:+977-9819947321">+977-9819947321 <img
                    src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/phone-after-02.svg" alt=""></a>
              </div>
            </div>
            <div class="co-item d-flex justify-content-start align-items-center">
              <div class="co-icon">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/email.svg" alt=""
                  class="img-fluid">
              </div>
              <div class="co-info">
                <span class="sm-text">Email Us</span>
                <a href="mailto:info@boldhimalaya.com">info@boldhimalaya.com</a>
              </div>
            </div>
            <div class="co-item d-flex justify-content-start align-items-center">
              <div class="co-icon">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/contact-location.svg" alt=""
                  class="img-fluid">
              </div>
              <div class="co-info">
                <span class="sm-text">Visit Us</span>
                <strong>Paknajol-4, Kathmandu, Nepal</strong>
                <p class="sm-text">Sun-Mon (9AM-6PM)</p>
              </div>
            </div>
          </div>

          <div class="socials">
            <h5>Follow us on Socials:</h5>

            <ul class="socials d-flex justify-content-start ">
              <?php
                $socials = get_field('socials', 'option');
                $enable_soc = $socials['enable_soc'];
                $soc_items = $socials['soc_items'];
                if ($enable_soc && $soc_items):
                  foreach ($soc_items as $sm):
                    $soc_title = $sm['soc_title'];
                    $soc_url = $sm['soc_url'];
                    ?>
              <li>
                <a href="<?php echo esc_url($soc_url); ?>" target="_blank">
                  <?php echo $soc_title; ?>
                </a>
              </li>
              <?php endforeach; endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-5">
        <div class="contact-form">
          <div class="cf-header">
            <h4>Fill out the Form</h4>
            <p>Submit the Form and we will be back to you shortly</p>
          </div>
          <form>
            <div class="input-field">
              <label>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path
                    d="M13.1094 11.918H6.89062C3.70703 11.918 1.12891 14.4961 1.12891 17.6797C1.12891 18.9609 2.16797 20 3.44922 20H16.5508C17.832 20 18.8711 18.9609 18.8711 17.6797C18.8711 14.4961 16.293 11.918 13.1094 11.918Z"
                    fill="#7FB51F" />
                  <path
                    d="M10 10.2734C12.8369 10.2734 15.1367 7.97365 15.1367 5.13672C15.1367 2.29979 12.8369 0 10 0C7.16307 0 4.86328 2.29979 4.86328 5.13672C4.86328 7.97365 7.16307 10.2734 10 10.2734Z"
                    fill="#7FB51F" />
                </svg>
                Full Name
              </label>
              <input type="text" placeholder="Enter your full name">
            </div>
            <div class="input-field">
              <label>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2.45562 3.84223L7.85875 9.24769C9.03719 10.4239 10.9635 10.4249 12.1429 9.24769L17.5461 3.84223C17.6005 3.78781 17.5925 3.6982 17.5294 3.65418C16.9783 3.26984 16.3078 3.04199 15.5855 3.04199H4.41617C3.69387 3.04199 3.02336 3.26988 2.47227 3.65418C2.40914 3.6982 2.40121 3.78781 2.45562 3.84223ZM1.01172 6.44641C1.01172 5.87844 1.15254 5.3418 1.40059 4.87012C1.43937 4.79633 1.5377 4.78141 1.59664 4.84035L6.93137 10.1751C8.6207 11.8669 11.38 11.8679 13.0704 10.1751L18.4051 4.84035C18.464 4.78141 18.5623 4.79633 18.6011 4.87012C18.8491 5.3418 18.99 5.87848 18.99 6.44641V13.5533C18.99 15.432 17.4618 16.9578 15.5855 16.9578H4.41617C2.53992 16.9578 1.01172 15.432 1.01172 13.5533V6.44641Z"
                    fill="#7FB51F" />
                </svg>
                Email
              </label>
              <input type="email" placeholder="Enter your Email Address">
            </div>
            <div class="input-field">
              <label>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_228_3982)">
                    <path
                      d="M15.2051 13.2304C14.5517 12.5853 13.736 12.5853 13.0867 13.2304C12.5915 13.7215 12.0962 14.2126 11.6093 14.712C11.4761 14.8494 11.3638 14.8785 11.2014 14.7869C10.881 14.6121 10.5397 14.4706 10.2317 14.2792C8.79592 13.3761 7.59315 12.2149 6.52773 10.9081C5.99918 10.2589 5.52889 9.56385 5.20011 8.78143C5.13352 8.62328 5.14601 8.51924 5.27502 8.39022C5.77028 7.91162 6.25305 7.42052 6.73998 6.92943C7.41836 6.24689 7.41836 5.44782 6.73582 4.76112C6.34877 4.36991 5.96172 3.98703 5.57467 3.59582C5.17514 3.19628 4.77977 2.79259 4.37607 2.39721C3.72267 1.76046 2.90695 1.76046 2.25771 2.40138C1.75829 2.89247 1.27968 3.39605 0.771944 3.87882C0.301659 4.32413 0.0644358 4.86933 0.014494 5.50609C-0.0645804 6.54238 0.18929 7.5204 0.547206 8.47346C1.27968 10.4462 2.39505 12.1983 3.74764 13.8047C5.57467 15.9772 7.75546 17.696 10.3067 18.9363C11.4553 19.4939 12.6456 19.9226 13.9399 19.9934C14.8305 20.0433 15.6046 19.8186 16.2247 19.1235C16.6493 18.6491 17.1279 18.2163 17.5773 17.7626C18.2432 17.0884 18.2474 16.2727 17.5857 15.6068C16.7949 14.8119 16 14.0212 15.2051 13.2304Z"
                      fill="#7FB51F" />
                    <path
                      d="M14.4098 9.91346L15.9455 9.65126C15.7042 8.24041 15.0383 6.96273 14.027 5.94725C12.9574 4.87767 11.6048 4.20345 10.1149 3.99536L9.89844 5.53939C11.0513 5.7017 12.1 6.22193 12.9282 7.05013C13.7107 7.83255 14.2226 8.82306 14.4098 9.91346Z"
                      fill="#7FB51F" />
                    <path
                      d="M16.8124 3.23789C15.0394 1.46496 12.7962 0.34543 10.3199 0L10.1035 1.54403C12.2427 1.84368 14.1821 2.81338 15.7136 4.34077C17.1661 5.79324 18.1192 7.6286 18.4646 9.64708L20.0003 9.38488C19.5966 7.04595 18.4937 4.92342 16.8124 3.23789Z"
                      fill="#7FB51F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_228_3982">
                      <rect width="20" height="20" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
                Phone Number
              </label>
              <input type="text" placeholder="Enter your Phone Number">
            </div>
            <div class="input-field">
              <label>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <g clip-path="url(#clip0_228_4010)">
                    <path
                      d="M9.99997 0.5C15.514 0.5 20 4.53733 20 9.5C20 11.2347 19.4513 12.915 18.4106 14.368C18.6076 16.547 19.1356 18.1647 19.9023 18.931C20.0036 19.0323 20.029 19.1873 19.965 19.3153C19.9083 19.4297 19.7916 19.5 19.6666 19.5C19.6513 19.5 19.636 19.499 19.6203 19.4967C19.4853 19.4777 16.3493 19.0263 14.081 17.717C12.793 18.2367 11.421 18.5 9.99997 18.5C4.48597 18.5 -2.67029e-05 14.4627 -2.67029e-05 9.5C-2.67029e-05 4.53733 4.48597 0.5 9.99997 0.5ZM14.6666 10.8333C15.402 10.8333 16 10.2353 16 9.5C16 8.76467 15.402 8.16667 14.6666 8.16667C13.9313 8.16667 13.3333 8.76467 13.3333 9.5C13.3333 10.2353 13.9313 10.8333 14.6666 10.8333ZM9.99997 10.8333C10.7353 10.8333 11.3333 10.2353 11.3333 9.5C11.3333 8.76467 10.7353 8.16667 9.99997 8.16667C9.26464 8.16667 8.66664 8.76467 8.66664 9.5C8.66664 10.2353 9.26464 10.8333 9.99997 10.8333ZM5.33331 10.8333C6.06864 10.8333 6.66664 10.2353 6.66664 9.5C6.66664 8.76467 6.06864 8.16667 5.33331 8.16667C4.59797 8.16667 3.99997 8.76467 3.99997 9.5C3.99997 10.2353 4.59797 10.8333 5.33331 10.8333Z"
                      fill="#7FB51F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_228_4010">
                      <rect width="20" height="20" fill="white" transform="matrix(-1 0 0 1 20 0)" />
                    </clipPath>
                  </defs>
                </svg>
                Message
              </label>
              <textarea   rows="3" placeholder="Enter your Message here"></textarea>
            </div>

            <div class="input-field">
              <input type="submit" class="bh-btn bh-btn-filled-dark d-block text-center" value="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>