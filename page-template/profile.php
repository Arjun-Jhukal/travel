<?php

/**
 * Template Name: Profile Template
 * 
 */

 get_header();
?>

<section class="dashboard">
  <div class="d-flex">
    <?php get_template_part("/template-parts/dashboard/sidebar", null);?>
    <div class="dashboard-content w-100">
      <div class="container-fluid">
        <?php  get_template_part("/template-parts/dashboard/dashboard-header", null); ?>
        <div class="dashboard-content-box ">
          <div class="profile-page-content">
            <div class="profile-avatar d-flex justify-content-start align-items-center">
              <div class="avatar-image">
                <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/profile.png" alt="">
              </div>
              <div class="pa-content">
                <a href="#" class="bh-btn bh-btn-underlined">
                  <input type="file">
                  Upload Avatar</a>
                <p class="sm-text">[PNG, JPG, JPEG, Max 6 MB]</p>
              </div>
            </div>

            <div class="profile-form">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="first-name">First Name</label>
                      <input type="text" name="first-name" placeholder="Enter your First Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="last-name">Last Name</label>
                      <input type="text" name="last-name" placeholder="Enter your Last Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="phone-number">Phone Number</label>
                      <input type="tel" name="phone-number" placeholder="Enter your Phone Number">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="email">E-mail Address</label>
                      <input type="email" name="email" placeholder="sudip.makura2024@gmail.com">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="address">Address</label>
                      <input type="text" name="address" placeholder="Enter your Permanent Address">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="">Date of Birth</label>
                      <div class="date-field-wrapper">
                        <input type="text" name="" placeholder="Enter your Date of Birth" class="start-date">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="new-password">New Password</label>
                      <div class="password-field">
                        <input type="password" autocomplete name="new-password" placeholder="Enter your New Password">

                        <button type="button" class="show-hide-password">
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye.svg" alt=""
                            class="close-eye">
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye-open.svg" alt=""
                            class="open-eye">
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-field">
                      <label for="confirm-password">Confirm New Password</label>
                      <div class="password-field">
                        <input type="password" autocomplete name="confirm-password" placeholder="Confirm New Password">

                        <button type="button" class="show-hide-password">
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye.svg" alt=""
                            class="close-eye">
                          <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/eye-open.svg" alt=""
                            class="open-eye">
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <input type="submit" value="Update Profile" class="bh-btn bh-btn-filled-dark">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer()?>