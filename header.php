<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale:1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kolker+Brush&display=swap"
    rel="stylesheet">

  <title>Bold Himalaya - Tour and Travel Manager Nepal</title>
  <?php wp_head(); ?>
</head>

<body>
  <a href="#" class="overlay"></a>

  <?php
  $isAuthenticated=false;
  ?>
  <header class="header <?php if(is_front_page()) echo 'front-page-header'; ?>">
    <div class="container">
      <div class="header-content-box">
        <!-- Primary Header For Desktop -->
        <div class="header-content-wrapper d-flex justify-content-between align-items-center">
          <div class="header-logo">
            <a href="<?php echo get_home_url()?>">
              <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/logo.svg" alt="" class="img-fluid">
            </a>
          </div>
          <div class="primary-menu">
            <ul class="d-lg-flex justify-content-center align-items-center">
              <li class="mega-menu mega-destinations "><a href="#">Destinations</a></li>
              <li class="mega-menu mega-activities"><a href="#">Activities</a></li>
              <li class="menu-has-children">
                <a href="#">Travel Styles</a>
                <ul class="dropdown-items">
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">Trekking/Hiking</span>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">Water Sports</span>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">Site Seeing</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-has-children">
                <a href="#">Company</a>
                <ul class="dropdown-items">
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">About</span>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">Achievements</span>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#">
                      <span class="sm-text">Commitments</span>
                    </a>
                  </li>
                </ul>

              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="header-right d-flex justify-content-end align-items-center">
            <a href="#" class="wishlist filled">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16" fill="none"
                stroke="#fff">
                <path
                  d="M8.30415 15.7388C8.49669 15.9072 8.74374 16 9 16C9.25612 16 9.50331 15.9072 9.69571 15.739C10.4245 15.1023 11.1267 14.5043 11.7463 13.9769L11.7466 13.9767C13.5596 12.4329 15.1253 11.0997 16.2149 9.78616C17.4328 8.31791 18 6.92567 18 5.40473C18 3.92701 17.493 2.56372 16.5722 1.56581C15.6404 0.556101 14.3617 0 12.9717 0C11.9327 0 10.9811 0.3282 10.1435 0.975406C9.7207 1.3021 9.33769 1.70192 9 2.16828C8.66245 1.70192 8.2793 1.3021 7.8566 0.975406C7.01903 0.3282 6.06747 0 5.02844 0C3.63826 0 2.35973 0.556101 1.42795 1.56581C0.507156 2.56372 0 3.92701 0 5.40473C0 6.92567 0.567307 8.31791 1.78528 9.7863C2.87485 11.0998 4.44081 12.4332 6.25424 13.9772L6.2574 13.9799C6.87593 14.5065 7.577 15.1035 8.30415 15.7388Z"
                  fill="" />
              </svg>
              <sup>2</sup>
            </a>
            <div class="plan-trip">
              <button class="bh-btn bh-btn-plan">Plan a Trip</button>
            </div>
            <?php if($isAuthenticated): ?>
            <div class="profile menu-has-children">
              <div class="profile-image menu-has-children">
                <a href="#">
                  <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/profile.png" alt=""
                    class="img-fluid">
                </a>
              </div>
              <ul class="dropdown-items">
                <li class="dropdown-menu-item">
                  <a href="#">
                    <p> <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/profile.png" alt=""
                        class="img-fluid">
                      <span class="sm-text">Go to Dashboard</span>
                    </p>
                  </a>
                </li>
                <li class="dropdown-menu-item">
                  <a href="#">
                    <p> <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/icons/logout.svg" alt=""
                        class="img-fluid">
                      <span class="sm-text">Logout</span>
                    </p>
                  </a>
                </li>
              </ul>
            </div>
            <?php else: ?>
            <div class="login">
              <a href="#" class="bh-btn bh-btn-filled-light">Login</a>
            </div>
            <?php endif; ?>


          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="mega-menu-box">
        <div class="mega-menu-wrapper " id="mega-destinations">
          <div class="mm-container">
            <div class="row">
              <div class="col-lg-3">
                <ul class="mm-controller">
                  <li class="dropdown-menu-item active">
                    <a href="#nepal">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <span>Nepal</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#india">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <span>India</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#vietnam">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <span>Vietnam</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#new_zealand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <span>New Zealand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#dubai">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <span>Dubai</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#thailand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <span>Thailand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#europe">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <span>Europe</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#fizi">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <span>Fiji</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href=" #srilanka">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <span>Srilanka</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-9">
                <div class="tab-content-wrapper">
                  <div class="tab-content active" id="nepal">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Nepal</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Annapurna Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Everest Basecamp Trek">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Annapurna Basecamp Trek">
                                    Annapurna Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Manaslu Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Everest Basecamp Trek">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Annapurna Basecamp Trek">
                                    Annapurna Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Langtang Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Everest Basecamp Trek">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Annapurna Basecamp Trek">
                                    Annapurna Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Kanchanjunga Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Dhaulagiri Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Everest Basecamp Trek">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Annapurna Basecamp Trek">
                                    Annapurna Basecamp Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title="Annapurna Circuit Trek">
                                    Annapurna Circuit Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="india">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">India</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="vietnam">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Vietnam</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="new_zealand">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">New Zealand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="dubai">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Dubai</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="thailand">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Thailand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="europe">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Europe</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="fiji">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Fiji</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="srilanka">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Srilanka</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mega-menu-wrapper" id="mega-activities">
          <div class="mm-container">
            <div class="row">
              <div class="col-lg-3">
                <ul class="mm-controller">
                  <li class="dropdown-menu-item active">
                    <a href="#nepal">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <span>Nepal</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item">
                    <a href="#india">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <span>India</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#vietnam">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <span>Vietnam</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#new_zealand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <span>New Zealand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#dubai">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <span>Dubai</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#thailand">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <span>Thailand</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#europe">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <span>Europe</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href="#fizi">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <span>Fiji</span>
                      </p>
                    </a>
                  </li>
                  <li class="dropdown-menu-item ">
                    <a href=" #srilanka">
                      <p>
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <span>Srilanka</span>
                      </p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-9">
                <div class="tab-content-wrapper">
                  <div class="tab-content active" id="nepal">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-01.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Activity In Nepal</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="india">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-02.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">India</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="vietnam">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-03.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Vietnam</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="new_zealand">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-04.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">New Zealand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="dubai">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-05.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Dubai</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="thailand">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-06.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Thailand</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="europe">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-07.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Europe</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="fiji">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-08.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Fiji</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                  <div class="tab-content" id="srilanka">
                    <div class="tc-header d-flex justify-content-between align-items-center">
                      <div class="dropdown-menu-item d-flex justify-content-start align-items-center">
                        <img src="<?php echo get_parent_theme_file_uri()?>/assets/images/destinaton-09.png" alt=""
                          class="img-fluid">
                        <h4 class="d-inline-block">Srilanka</h4>
                      </div>
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Nepal in Detail</a>
                    </div>
                    <ul class="inner-tab d-flex justify-content-center align-items-center">
                      <li class="active"><a href="#itc1">Trekking/Hiking</a></li>
                      <li><a href="#itc2">Hunting</a></li>
                      <li><a href="#itc3">Water Sports</a></li>
                      <li><a href="#itc4">Spritual Religious</a></li>
                      <li><a href="#itc5">Wildlife & Nature</a></li>
                      <li><a href="#itc6">Tours & Sightseen</a></li>
                    </ul>
                    <div class="tc-list-box">
                      <div class="inner-tab-content active" id="itc1">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc2">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 2</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc3">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 3</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc4">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 4</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc5">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 5</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inner-tab-content" id="itc6">
                        <div class="row">
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region 6</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-4">
                            <div class="tclb-item">
                              <h6>Everest Region</h6>
                              <ul>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Gokyo Chola Pass Kalapatthar Trekking
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest View Trek
                                  </a>
                                </li>
                                <li>
                                  <a href="#" data-toggle="tooltip" data-placement="right"
                                    title=" Gokyo Chola Pass Kalapatthar Trekking">
                                    Everest Basecamp Trek
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <a href="#" class="bh-btn bh-btn-filled-dark">View Trekking in Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>