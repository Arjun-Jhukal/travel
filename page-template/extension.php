<?php

/**
 * Template Name: Extension Template
 * 
 */

 get_header();
?>

<?php

get_template_part("/template-parts/breadcrumb",null);


?>

<section class="booking-module general bg-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <?php get_template_part("/template-parts/tour-booking/booking-menu")?>
      </div>
      <div class="col-md-7 col-lg-5">
        <div class="bm-content">
          <div class="bm-title">
            <h4>Trip Extension</h4>
            <p class="sm-text">Explore the recognitions we've earned and the legal foundations we've built.</p>
          </div>



          <div class="extension-items">
            <div class="extension-item">
              <div class="extension-title d-flex justify-content-between align-items-center">

                <div class="ei-detail d-flex justify-content-start">
                  <div class="ei-image">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-62.png" alt=""
                      class="img-fluid">
                  </div>
                  <div class="ei-info">
                    <h6>Bunjee Jumping</h6>
                    <p><strong class="sm-text">+ $60</strong><small>/person</small></p>
                    <a href="#" class="view-detail-btn">View in Detail <svg xmlns="http://www.w3.org/2000/svg"
                        width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path
                          d="M5.34433 1.89765C5.33813 1.93581 5.33528 1.97443 5.33578 2.01307L5.33578 8.59217L5.26905 8.44871C5.20268 8.30849 5.11235 8.18092 5.00215 8.07172L3.15721 6.22677C2.92525 5.98379 2.55212 5.94296 2.2731 6.13002C1.97578 6.34773 1.91122 6.76524 2.12893 7.06258C2.14653 7.08661 2.16572 7.10944 2.18636 7.13089L5.52261 10.4671C5.78305 10.7279 6.20552 10.7281 6.46625 10.4677C6.46641 10.4675 6.4666 10.4673 6.46677 10.4671L9.80302 7.13089C10.0632 6.86996 10.0626 6.44748 9.8017 6.18726C9.78117 6.16678 9.75931 6.14766 9.73629 6.13002C9.45728 5.94296 9.08414 5.98379 8.85219 6.22677L7.0039 8.06838C6.9059 8.16628 6.82373 8.27884 6.76036 8.40201L6.67028 8.60218L6.67028 2.04978C6.68294 1.70892 6.44483 1.40987 6.10979 1.34584C5.74603 1.28685 5.40334 1.5339 5.34433 1.89765Z"
                          fill="#1E201F" />
                      </svg></a>
                  </div>
                </div>
                <div class="number-controller d-flex justify-content-start align-items-center">
                  <button type="button " class="decrease">-</button>
                  <input type="number" value="0">
                  <button type="button " class="increase">+</button>
                </div>
              </div>

              <div class="ei-content">
                <div class="ei-text">
                  <p>Embark on an exhilarating cycle tour through the scenic landscapes of Pokhara, where every turn
                    reveals breathtaking views of lush hills, serene lakes, and the majestic Annapurna mountain range.
                    This adventure allows you to experience the local culture, pedal through quaint villages, and enjoy
                    peaceful moments by the famous Phewa Lake. Whether you are a seasoned cyclist or a casual rider,
                    this tour is the perfect way to explore Pokhara’s natural beauty and charm at your own pace.</p>

                  <a href="#" class="view-less-btn">Hide detail <svg xmlns="http://www.w3.org/2000/svg" width="12"
                      height="12" viewBox="0 0 12 12" fill="none">
                      <path
                        d="M5.34433 10.1023C5.33813 10.0642 5.33528 10.0256 5.33578 9.98693L5.33578 3.40783L5.26905 3.55129C5.20268 3.69151 5.11235 3.81908 5.00215 3.92828L3.15721 5.77323C2.92525 6.01621 2.55212 6.05704 2.2731 5.86998C1.97578 5.65227 1.91122 5.23476 2.12893 4.93742C2.14653 4.91339 2.16572 4.89056 2.18636 4.86911L5.52261 1.53286C5.78305 1.27213 6.20552 1.2719 6.46625 1.53233C6.46641 1.5325 6.4666 1.53269 6.46677 1.53286L9.80302 4.86911C10.0632 5.13004 10.0626 5.55252 9.8017 5.81274C9.78117 5.83322 9.75931 5.85234 9.73629 5.86998C9.45728 6.05704 9.08414 6.01621 8.85219 5.77323L7.0039 3.93162C6.9059 3.83372 6.82373 3.72116 6.76036 3.59799L6.67028 3.39782L6.67028 9.95022C6.68294 10.2911 6.44483 10.5901 6.10979 10.6542C5.74603 10.7132 5.40334 10.4661 5.34433 10.1023Z"
                        fill="#1E201F" />
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="extension-item active">
              <div class="extension-title d-flex justify-content-between align-items-center">

                <div class="ei-detail d-flex justify-content-start">
                  <div class="ei-image">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-62.png" alt=""
                      class="img-fluid">
                  </div>
                  <div class="ei-info">
                    <h6>Bunjee Jumping</h6>
                    <p><strong class="sm-text">+ $60</strong><small>/person</small></p>
                    <a href="#" class="view-detail-btn">View in Detail <svg xmlns="http://www.w3.org/2000/svg"
                        width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path
                          d="M5.34433 1.89765C5.33813 1.93581 5.33528 1.97443 5.33578 2.01307L5.33578 8.59217L5.26905 8.44871C5.20268 8.30849 5.11235 8.18092 5.00215 8.07172L3.15721 6.22677C2.92525 5.98379 2.55212 5.94296 2.2731 6.13002C1.97578 6.34773 1.91122 6.76524 2.12893 7.06258C2.14653 7.08661 2.16572 7.10944 2.18636 7.13089L5.52261 10.4671C5.78305 10.7279 6.20552 10.7281 6.46625 10.4677C6.46641 10.4675 6.4666 10.4673 6.46677 10.4671L9.80302 7.13089C10.0632 6.86996 10.0626 6.44748 9.8017 6.18726C9.78117 6.16678 9.75931 6.14766 9.73629 6.13002C9.45728 5.94296 9.08414 5.98379 8.85219 6.22677L7.0039 8.06838C6.9059 8.16628 6.82373 8.27884 6.76036 8.40201L6.67028 8.60218L6.67028 2.04978C6.68294 1.70892 6.44483 1.40987 6.10979 1.34584C5.74603 1.28685 5.40334 1.5339 5.34433 1.89765Z"
                          fill="#1E201F" />
                      </svg></a>
                  </div>
                </div>
                <div class="number-controller d-flex justify-content-start align-items-center">
                  <button type="button " class="decrease">-</button>
                  <input type="number" value="2">
                  <button type="button " class="increase">+</button>
                </div>
              </div>

              <div class="ei-content">
                <div class="ei-text">
                  <p>Embark on an exhilarating cycle tour through the scenic landscapes of Pokhara, where every turn
                    reveals breathtaking views of lush hills, serene lakes, and the majestic Annapurna mountain range.
                    This adventure allows you to experience the local culture, pedal through quaint villages, and enjoy
                    peaceful moments by the famous Phewa Lake. Whether you are a seasoned cyclist or a casual rider,
                    this tour is the perfect way to explore Pokhara’s natural beauty and charm at your own pace.</p>

                  <a href="#" class="view-less-btn">Hide detail <svg xmlns="http://www.w3.org/2000/svg" width="12"
                      height="12" viewBox="0 0 12 12" fill="none">
                      <path
                        d="M5.34433 10.1023C5.33813 10.0642 5.33528 10.0256 5.33578 9.98693L5.33578 3.40783L5.26905 3.55129C5.20268 3.69151 5.11235 3.81908 5.00215 3.92828L3.15721 5.77323C2.92525 6.01621 2.55212 6.05704 2.2731 5.86998C1.97578 5.65227 1.91122 5.23476 2.12893 4.93742C2.14653 4.91339 2.16572 4.89056 2.18636 4.86911L5.52261 1.53286C5.78305 1.27213 6.20552 1.2719 6.46625 1.53233C6.46641 1.5325 6.4666 1.53269 6.46677 1.53286L9.80302 4.86911C10.0632 5.13004 10.0626 5.55252 9.8017 5.81274C9.78117 5.83322 9.75931 5.85234 9.73629 5.86998C9.45728 6.05704 9.08414 6.01621 8.85219 5.77323L7.0039 3.93162C6.9059 3.83372 6.82373 3.72116 6.76036 3.59799L6.67028 3.39782L6.67028 9.95022C6.68294 10.2911 6.44483 10.5901 6.10979 10.6542C5.74603 10.7132 5.40334 10.4661 5.34433 10.1023Z"
                        fill="#1E201F" />
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="extension-item active">
              <div class="extension-title d-flex justify-content-between align-items-center">

                <div class="ei-detail d-flex justify-content-start">
                  <div class="ei-image">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-62.png" alt=""
                      class="img-fluid">
                  </div>
                  <div class="ei-info">
                    <h6>Bunjee Jumping</h6>
                    <p><strong class="sm-text">+ $60</strong><small>/person</small></p>
                    <a href="#" class="view-detail-btn">View in Detail <svg xmlns="http://www.w3.org/2000/svg"
                        width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path
                          d="M5.34433 1.89765C5.33813 1.93581 5.33528 1.97443 5.33578 2.01307L5.33578 8.59217L5.26905 8.44871C5.20268 8.30849 5.11235 8.18092 5.00215 8.07172L3.15721 6.22677C2.92525 5.98379 2.55212 5.94296 2.2731 6.13002C1.97578 6.34773 1.91122 6.76524 2.12893 7.06258C2.14653 7.08661 2.16572 7.10944 2.18636 7.13089L5.52261 10.4671C5.78305 10.7279 6.20552 10.7281 6.46625 10.4677C6.46641 10.4675 6.4666 10.4673 6.46677 10.4671L9.80302 7.13089C10.0632 6.86996 10.0626 6.44748 9.8017 6.18726C9.78117 6.16678 9.75931 6.14766 9.73629 6.13002C9.45728 5.94296 9.08414 5.98379 8.85219 6.22677L7.0039 8.06838C6.9059 8.16628 6.82373 8.27884 6.76036 8.40201L6.67028 8.60218L6.67028 2.04978C6.68294 1.70892 6.44483 1.40987 6.10979 1.34584C5.74603 1.28685 5.40334 1.5339 5.34433 1.89765Z"
                          fill="#1E201F" />
                      </svg></a>
                  </div>
                </div>
                <div class="number-controller d-flex justify-content-start align-items-center">
                  <button type="button " class="decrease">-</button>
                  <input type="number" value="2">
                  <button type="button " class="increase">+</button>
                </div>
              </div>

              <div class="ei-content">
                <div class="ei-text">
                  <p>Embark on an exhilarating cycle tour through the scenic landscapes of Pokhara, where every turn
                    reveals breathtaking views of lush hills, serene lakes, and the majestic Annapurna mountain range.
                    This adventure allows you to experience the local culture, pedal through quaint villages, and enjoy
                    peaceful moments by the famous Phewa Lake. Whether you are a seasoned cyclist or a casual rider,
                    this tour is the perfect way to explore Pokhara’s natural beauty and charm at your own pace.</p>

                  <a href="#" class="view-less-btn">Hide detail <svg xmlns="http://www.w3.org/2000/svg" width="12"
                      height="12" viewBox="0 0 12 12" fill="none">
                      <path
                        d="M5.34433 10.1023C5.33813 10.0642 5.33528 10.0256 5.33578 9.98693L5.33578 3.40783L5.26905 3.55129C5.20268 3.69151 5.11235 3.81908 5.00215 3.92828L3.15721 5.77323C2.92525 6.01621 2.55212 6.05704 2.2731 5.86998C1.97578 5.65227 1.91122 5.23476 2.12893 4.93742C2.14653 4.91339 2.16572 4.89056 2.18636 4.86911L5.52261 1.53286C5.78305 1.27213 6.20552 1.2719 6.46625 1.53233C6.46641 1.5325 6.4666 1.53269 6.46677 1.53286L9.80302 4.86911C10.0632 5.13004 10.0626 5.55252 9.8017 5.81274C9.78117 5.83322 9.75931 5.85234 9.73629 5.86998C9.45728 6.05704 9.08414 6.01621 8.85219 5.77323L7.0039 3.93162C6.9059 3.83372 6.82373 3.72116 6.76036 3.59799L6.67028 3.39782L6.67028 9.95022C6.68294 10.2911 6.44483 10.5901 6.10979 10.6542C5.74603 10.7132 5.40334 10.4661 5.34433 10.1023Z"
                        fill="#1E201F" />
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="extension-item">
              <div class="extension-title d-flex justify-content-between align-items-center">

                <div class="ei-detail d-flex justify-content-start">
                  <div class="ei-image">
                    <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/placeholder-62.png" alt=""
                      class="img-fluid">
                  </div>
                  <div class="ei-info">
                    <h6>Bunjee Jumping</h6>
                    <p><strong class="sm-text">+ $60</strong><small>/person</small></p>
                    <a href="#" class="view-detail-btn">View in Detail <svg xmlns="http://www.w3.org/2000/svg"
                        width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path
                          d="M5.34433 1.89765C5.33813 1.93581 5.33528 1.97443 5.33578 2.01307L5.33578 8.59217L5.26905 8.44871C5.20268 8.30849 5.11235 8.18092 5.00215 8.07172L3.15721 6.22677C2.92525 5.98379 2.55212 5.94296 2.2731 6.13002C1.97578 6.34773 1.91122 6.76524 2.12893 7.06258C2.14653 7.08661 2.16572 7.10944 2.18636 7.13089L5.52261 10.4671C5.78305 10.7279 6.20552 10.7281 6.46625 10.4677C6.46641 10.4675 6.4666 10.4673 6.46677 10.4671L9.80302 7.13089C10.0632 6.86996 10.0626 6.44748 9.8017 6.18726C9.78117 6.16678 9.75931 6.14766 9.73629 6.13002C9.45728 5.94296 9.08414 5.98379 8.85219 6.22677L7.0039 8.06838C6.9059 8.16628 6.82373 8.27884 6.76036 8.40201L6.67028 8.60218L6.67028 2.04978C6.68294 1.70892 6.44483 1.40987 6.10979 1.34584C5.74603 1.28685 5.40334 1.5339 5.34433 1.89765Z"
                          fill="#1E201F" />
                      </svg></a>
                  </div>
                </div>
                <div class="number-controller d-flex justify-content-start align-items-center">
                  <button type="button " class="decrease">-</button>
                  <input type="number" value="0">
                  <button type="button " class="increase">+</button>
                </div>
              </div>

              <div class="ei-content">
                <div class="ei-text">
                  <p>Embark on an exhilarating cycle tour through the scenic landscapes of Pokhara, where every turn
                    reveals breathtaking views of lush hills, serene lakes, and the majestic Annapurna mountain range.
                    This adventure allows you to experience the local culture, pedal through quaint villages, and enjoy
                    peaceful moments by the famous Phewa Lake. Whether you are a seasoned cyclist or a casual rider,
                    this tour is the perfect way to explore Pokhara’s natural beauty and charm at your own pace.</p>

                  <a href="#" class="view-less-btn">Hide detail <svg xmlns="http://www.w3.org/2000/svg" width="12"
                      height="12" viewBox="0 0 12 12" fill="none">
                      <path
                        d="M5.34433 10.1023C5.33813 10.0642 5.33528 10.0256 5.33578 9.98693L5.33578 3.40783L5.26905 3.55129C5.20268 3.69151 5.11235 3.81908 5.00215 3.92828L3.15721 5.77323C2.92525 6.01621 2.55212 6.05704 2.2731 5.86998C1.97578 5.65227 1.91122 5.23476 2.12893 4.93742C2.14653 4.91339 2.16572 4.89056 2.18636 4.86911L5.52261 1.53286C5.78305 1.27213 6.20552 1.2719 6.46625 1.53233C6.46641 1.5325 6.4666 1.53269 6.46677 1.53286L9.80302 4.86911C10.0632 5.13004 10.0626 5.55252 9.8017 5.81274C9.78117 5.83322 9.75931 5.85234 9.73629 5.86998C9.45728 6.05704 9.08414 6.01621 8.85219 5.77323L7.0039 3.93162C6.9059 3.83372 6.82373 3.72116 6.76036 3.59799L6.67028 3.39782L6.67028 9.95022C6.68294 10.2911 6.44483 10.5901 6.10979 10.6542C5.74603 10.7132 5.40334 10.4661 5.34433 10.1023Z"
                        fill="#1E201F" />
                    </svg></a>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-lg-6">
              <button type="button" class="bh-btn bh-btn-outlined d-block w-100 text-center">Previous</button>
            </div>
            <div class="col-lg-6">
              <button type="submit" class="bh-btn bh-btn-filled-dark d-block w-100 text-center">Next</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-4">
        <?php get_template_part("/template-parts/tour-booking/booking-pricing")?>
      </div>
    </div>
  </div>
</section>

<?php get_footer()?>