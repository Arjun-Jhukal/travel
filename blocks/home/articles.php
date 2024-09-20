<!-- Articles Listing -->
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
              <li class="breadcrumb-item active" aria-current="page"><?php echo $bc_title ?: get_the_title(); ?>
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
<section class="blog-list-feature-section">
  <div class="container">
    <div class="row">
      <?php
      $featured_article = get_field('featured_article');
      foreach ($featured_article as $fa):
        if ($fa instanceof WP_Post) {
          $post_id = $fa->ID;
          $post_title = $fa->post_title;
          $post_url = get_permalink($post_id);
          $fallback_blog_featured_image = get_field('fallback_blog_featured_image', 'option');
          if (has_post_thumbnail($post_id)) {
            $post_thumbnail = get_the_post_thumbnail($post_id, 'medium', array('class' => 'img-fluid'));
          } else {
            $fallback_image_url = $fallback_blog_featured_image ?: esc_url(get_template_directory_uri() . '/path/to/default-image.jpg');
            $post_thumbnail = '<img src="' . $fallback_image_url . '" alt="' . esc_attr($post_title) . '" class="img-fluid">';
          }
          $content = $fa->post_content;
          $read_time = calculate_reading_time($content);
          $view_count = get_post_views($post_id);
          $post_date = get_the_date('d M, Y', $post_id);
          ?>
          <div class="inner-blog-list-feature-card-wrapper">
            <div class="image-wrapper">
              <?php echo $post_thumbnail; ?>
            </div>
            <div class="bottom-content-wrapper">
              <div class="justify-content-between row">
                <div class="col-lg-6">
                  <div class="quick-info-blog d-flex align-items-center">
                    <div class="d-flex align-items-center blog-info-wrapper">
                      <div class="icon-wrapper">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_191_27805)">
                            <path
                              d="M1.49941 4.97877H14.5019C14.6604 4.97877 14.8115 4.91346 14.9203 4.79836C15.029 4.68327 15.0854 4.52847 15.0765 4.37021L15.0693 4.22088C14.9758 2.70969 13.7126 1.52594 12.1931 1.52594H11.4536V0.950472C11.4536 0.632811 11.1958 0.375 10.8782 0.375C10.5605 0.375 10.3027 0.632811 10.3027 0.950472V1.52594H5.69891V0.950472C5.69891 0.632811 5.4411 0.375 5.12344 0.375C4.80578 0.375 4.54797 0.632811 4.54797 0.950472V1.52594H3.80849C2.28895 1.52594 1.02551 2.70998 0.931991 4.22203L0.924798 4.3705C0.91559 4.52847 0.972274 4.68327 1.08075 4.79865C1.18923 4.91403 1.34115 4.97877 1.49941 4.97877Z"
                              fill="rgba(20, 154, 237, 1)" />
                            <path
                              d="M15.165 6.69072C15.1575 6.37853 14.902 6.12964 14.5898 6.12964H1.40864C1.09644 6.12964 0.841222 6.37853 0.833165 6.69072C0.78166 8.75235 0.818203 10.8068 0.941929 12.7976C1.0317 14.2421 2.18869 15.3988 3.63255 15.4885C5.08158 15.5795 6.54041 15.6249 7.99923 15.6249C9.45776 15.6249 10.9172 15.5795 12.3653 15.4882C13.8098 15.3985 14.9665 14.2415 15.0565 12.7973C15.1803 10.8068 15.2168 8.75206 15.165 6.69072ZM10.8766 9.58247C10.3998 9.58247 10.0134 9.19604 10.0134 8.71926C10.0134 8.24248 10.3998 7.85605 10.8766 7.85605C11.3534 7.85605 11.7398 8.24248 11.7398 8.71926C11.7398 9.19604 11.3534 9.58247 10.8766 9.58247ZM11.7398 11.5966C11.7398 12.0734 11.3534 12.4598 10.8766 12.4598C10.3998 12.4598 10.0134 12.0734 10.0134 11.5966C10.0134 11.1198 10.3998 10.7334 10.8766 10.7334C11.3534 10.7334 11.7398 11.1198 11.7398 11.5966ZM5.12187 10.7334C5.59865 10.7334 5.98508 11.1198 5.98508 11.5966C5.98508 12.0734 5.59865 12.4598 5.12187 12.4598C4.64509 12.4598 4.25866 12.0734 4.25866 11.5966C4.25866 11.1198 4.64509 10.7334 5.12187 10.7334ZM4.25866 8.71926C4.25866 8.24248 4.64509 7.85605 5.12187 7.85605C5.59865 7.85605 5.98508 8.24248 5.98508 8.71926C5.98508 9.19604 5.59865 9.58247 5.12187 9.58247C4.64509 9.58247 4.25866 9.19604 4.25866 8.71926ZM7.13602 11.5966C7.13602 11.1198 7.52245 10.7334 7.99923 10.7334C8.47601 10.7334 8.86243 11.1198 8.86243 11.5966C8.86243 12.0734 8.47601 12.4598 7.99923 12.4598C7.52245 12.4598 7.13602 12.0734 7.13602 11.5966ZM7.99923 9.58247C7.52245 9.58247 7.13602 9.19604 7.13602 8.71926C7.13602 8.24248 7.52245 7.85605 7.99923 7.85605C8.47601 7.85605 8.86243 8.24248 8.86243 8.71926C8.86243 9.19604 8.47601 9.58247 7.99923 9.58247Z"
                              fill="rgba(20, 154, 237, 1)" />
                          </g>
                          <defs>
                            <clipPath id="clip0_191_27805">
                              <rect width="16" height="16" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <div class="icon-text-wrapper">
                        <p><?php echo esc_html($post_date); ?></p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center blog-info-wrapper">
                      <div class="icon-wrapper">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_191_27813)">
                            <path
                              d="M8 0C3.58867 0 0 3.58867 0 8C0 12.4113 3.58867 16 8 16C12.4113 16 16 12.4113 16 8C16 3.58867 12.4113 0 8 0ZM9.66667 10.8867C9.562 10.9473 9.44733 10.976 9.334 10.976C9.10333 10.976 8.87933 10.8567 8.756 10.6427L7.42267 8.33333C7.364 8.232 7.33333 8.11733 7.33333 8V4C7.33333 3.632 7.63133 3.33333 8 3.33333C8.36867 3.33333 8.66667 3.632 8.66667 4V7.82133L9.91067 9.976C10.0947 10.2947 9.98533 10.7027 9.66667 10.8867Z"
                              fill="rgba(20, 154, 237, 1)" />
                          </g>
                          <defs>
                            <clipPath id="clip0_191_27813">
                              <rect width="16" height="16" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <div class="icon-text-wrapper">
                        <p><?php echo esc_html($read_time . ' mins read'); ?></p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center blog-info-wrapper">
                      <div class="icon-wrapper">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_191_27818)">
                            <path
                              d="M8 3.2312C4.94303 3.2312 2.17081 4.9037 0.125192 7.62028C-0.0417306 7.84284 -0.0417306 8.15378 0.125192 8.37634C2.17081 11.0962 4.94303 12.7687 8 12.7687C11.057 12.7687 13.8292 11.0962 15.8748 8.37961C16.0417 8.15705 16.0417 7.84611 15.8748 7.62355C13.8292 4.9037 11.057 3.2312 8 3.2312ZM8.21929 11.358C6.19004 11.4857 4.51427 9.81318 4.64191 7.78065C4.74665 6.10488 6.10494 4.74659 7.78071 4.64186C9.80996 4.51421 11.4857 6.18671 11.3581 8.21923C11.2501 9.89173 9.89179 11.25 8.21929 11.358ZM8.11783 9.80663C7.02465 9.87537 6.1213 8.9753 6.19331 7.88212C6.24895 6.97877 6.9821 6.2489 7.88545 6.18998C8.97862 6.12125 9.88197 7.02132 9.80996 8.1145C9.75105 9.02112 9.0179 9.75099 8.11783 9.80663Z"
                              fill="rgba(20, 154, 237, 1)" />
                          </g>
                          <defs>
                            <clipPath id="clip0_191_27818">
                              <rect width="16" height="16" fill="white" />
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <div class="icon-text-wrapper">
                        <p><?php echo esc_html($view_count . ' Views'); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="title-wrapper">
                    <h1><?php echo esc_html($post_title); ?></h1>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="right-read-link-content-wrapper">
                    <p><?php echo wp_trim_words($content, 20, '...'); ?></p>
                    <a href="<?php echo esc_url($post_url); ?>">Read this Article</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }
      endforeach;
      ?>
    </div>
  </div>
</section>
<!-- Blog List -->
<section class="blog-list-wrapper">
  <div class="container">
    <div class="mobile-reverse row">
      <div class="col-lg-8">
        <div class="row">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'paged' => $paged,
          );
          $custom_query = new WP_Query($args);

          if ($custom_query->have_posts()) {
            while ($custom_query->have_posts()) {
              $custom_query->the_post(); ?>
              <div class="mb-4 col-lg-6">
                <a href="<?php echo esc_url(the_permalink()); ?>">
                  <div class="blog-card-wrapper">
                    <div class="image-wrapper">
                      <?php
                      $post_id = get_the_ID();
                      $thumbnail_id = get_post_thumbnail_id($post_id);
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                      $fallback_image = get_field('fallback_blog_featured_image', 'option');
                      $size = 'full';

                      if ($thumbnail_id && $thumbnail_url && isset($thumbnail_url[0])) {
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        if (empty($alt_text)) {
                          $alt_text = get_the_title();
                        }
                        echo '<img src="' . esc_url($thumbnail_url[0]) . '" class="img-fluid" alt="' . esc_attr($alt_text) . '">';
                      } else {
                        $fallback_image_url = esc_url($fallback_image ? $fallback_image : 'http://localhost/uncovernp/wp-content/uploads/2024/04/3-5.png');
                        echo '<img src="' . $fallback_image_url . '" class="img-fluid" alt="' . esc_attr(get_the_title()) . '" decoding="async">';
                      }
                      ?>
                    </div>
                    <div class="bottom-content-wrapper">
                      <h6><?php echo get_the_title(); ?></h6>
                      <div class="blog-published-date">
                        <p>
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_191_27834)">
                              <path
                                d="M1.49941 4.97877H14.5019C14.6604 4.97877 14.8115 4.91346 14.9203 4.79836C15.029 4.68327 15.0854 4.52847 15.0765 4.37021L15.0693 4.22088C14.9758 2.70969 13.7126 1.52594 12.1931 1.52594H11.4536V0.950472C11.4536 0.632811 11.1958 0.375 10.8782 0.375C10.5605 0.375 10.3027 0.632811 10.3027 0.950472V1.52594H5.69891V0.950472C5.69891 0.632811 5.4411 0.375 5.12344 0.375C4.80578 0.375 4.54797 0.632811 4.54797 0.950472V1.52594H3.80849C2.28895 1.52594 1.02551 2.70998 0.931991 4.22203L0.924798 4.3705C0.91559 4.52847 0.972274 4.68327 1.08075 4.79865C1.18923 4.91403 1.34115 4.97877 1.49941 4.97877Z"
                                fill="rgba(20, 154, 237, 1)" />
                              <path
                                d="M15.165 6.69072C15.1575 6.37853 14.902 6.12964 14.5898 6.12964H1.40864C1.09644 6.12964 0.841222 6.37853 0.833165 6.69072C0.78166 8.75235 0.818203 10.8068 0.941929 12.7976C1.0317 14.2421 2.18869 15.3988 3.63255 15.4885C5.08158 15.5795 6.54041 15.6249 7.99923 15.6249C9.45776 15.6249 10.9172 15.5795 12.3653 15.4882C13.8098 15.3985 14.9665 14.2415 15.0565 12.7973C15.1803 10.8068 15.2168 8.75206 15.165 6.69072ZM10.8766 9.58247C10.3998 9.58247 10.0134 9.19604 10.0134 8.71926C10.0134 8.24248 10.3998 7.85605 10.8766 7.85605C11.3534 7.85605 11.7398 8.24248 11.7398 8.71926C11.7398 9.19604 11.3534 9.58247 10.8766 9.58247ZM11.7398 11.5966C11.7398 12.0734 11.3534 12.4598 10.8766 12.4598C10.3998 12.4598 10.0134 12.0734 10.0134 11.5966C10.0134 11.1198 10.3998 10.7334 10.8766 10.7334C11.3534 10.7334 11.7398 11.1198 11.7398 11.5966ZM5.12187 10.7334C5.59865 10.7334 5.98508 11.1198 5.98508 11.5966C5.98508 12.0734 5.59865 12.4598 5.12187 12.4598C4.64509 12.4598 4.25866 12.0734 4.25866 11.5966C4.25866 11.1198 4.64509 10.7334 5.12187 10.7334ZM4.25866 8.71926C4.25866 8.24248 4.64509 7.85605 5.12187 7.85605C5.59865 7.85605 5.98508 8.24248 5.98508 8.71926C5.98508 9.19604 5.59865 9.58247 5.12187 9.58247C4.64509 9.58247 4.25866 9.19604 4.25866 8.71926ZM7.13602 11.5966C7.13602 11.1198 7.52245 10.7334 7.99923 10.7334C8.47601 10.7334 8.86243 11.1198 8.86243 11.5966C8.86243 12.0734 8.47601 12.4598 7.99923 12.4598C7.52245 12.4598 7.13602 12.0734 7.13602 11.5966ZM7.99923 9.58247C7.52245 9.58247 7.13602 9.19604 7.13602 8.71926C7.13602 8.24248 7.52245 7.85605 7.99923 7.85605C8.47601 7.85605 8.86243 8.24248 8.86243 8.71926C8.86243 9.19604 8.47601 9.58247 7.99923 9.58247Z"
                                fill="rgba(20, 154, 237, 1)" />
                            </g>
                            <defs>
                              <clipPath id="clip0_191_27834">
                                <rect width="16" height="16" fill="white" />
                              </clipPath>
                            </defs>
                          </svg> <?php echo get_the_date('d M, Y'); ?>
                        </p>
                      </div>
                      <div class="border-bottom"></div>
                      <div class="border-bottom-primary"></div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
            }
            ?>
            <?php echo '<div class="pagination">';
            echo paginate_links(
              array(
                'total' => $custom_query->max_num_pages,
                'current' => $paged,
              ),
            );
            echo '</div>'; ?>
            <?php
          } else {
            ?>
            <div class="py-60 text-center empty-state-wrapper">
              <div class="image-wrapper">
                <svg width="352" height="352" viewBox="0 0 352 352" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle opacity="0.3" cx="176" cy="176" r="106.5" stroke="rgba(20, 154, 237, 1)" />
                  <circle opacity="0.2" cx="176" cy="176" r="140.5" stroke="rgba(20, 154, 237, 1)" />
                  <circle opacity="0.1" cx="176" cy="176" r="175.5" stroke="rgba(20, 154, 237, 1)" />
                  <rect y="1" width="352" height="351" fill="url(#paint0_linear_1_4)" />
                  <g filter="url(#filter0_d_1_4)">
                    <rect x="72.2559" y="74.0088" width="208.408" height="219.646" rx="4.08644" fill="#F6F8FF" />
                    <rect x="72.5113" y="74.2642" width="207.898" height="219.135" rx="3.83104" stroke="black"
                      stroke-opacity="0.15" stroke-width="0.510805" />
                    <rect x="84.5156" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="92.1777" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="99.8398" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="107.502" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="115.164" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="125.381" y="210.905" width="7.15127" height="7.15127" rx="1.25044" fill="#A5A5A5" />
                    <rect x="84.5156" y="223.395" width="178.782" height="12.5044" rx="1.25044" fill="#A5A5A5" />
                    <rect x="84.5156" y="241.077" width="7.15127" height="7.15127" rx="1.25044" fill="#D9D9D9" />
                    <rect x="94.7324" y="240.901" width="173.811" height="7.50265" rx="1.25044" fill="#D9D9D9" />
                    <line opacity="0.1" x1="84.5156" y1="256.321" x2="268.405" y2="256.321" stroke="black"
                      stroke-width="0.510805" />
                    <rect x="84.5156" y="269.728" width="10.2161" height="10.2161" rx="1.25044" fill="#D9D9D9" />
                    <rect x="97.7969" y="269.983" width="60.7858" height="9.70529" rx="1.25044" fill="#D9D9D9" />
                    <rect x="207.619" y="268.836" width="60.7858" height="12" rx="1.25044" fill="#A0A0A0" />
                  </g>
                  <path
                    d="M63.3509 68.5274C63.1582 65.7717 65.2359 63.3816 67.9915 63.1889L265.913 49.3489C268.669 49.1562 271.059 51.2339 271.252 53.9896L279.882 177.409L71.9812 191.947L63.3509 68.5274Z"
                    fill="url(#paint1_linear_1_4)" />
                  <defs>
                    <filter id="filter0_d_1_4" x="67.2541" y="69.5178" width="218.412" height="229.65"
                      filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                      <feOffset dy="0.510805" />
                      <feGaussianBlur stdDeviation="2.50088" />
                      <feComposite in2="hardAlpha" operator="out" />
                      <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                      <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_4" />
                      <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_4" result="shape" />
                    </filter>
                    <linearGradient id="paint0_linear_1_4" x1="176" y1="1" x2="176" y2="352"
                      gradientUnits="userSpaceOnUse">
                      <stop offset="0.556823" stop-color="white" stop-opacity="0" />
                      <stop offset="1" stop-color="white" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_1_4" x1="71.755" y1="191.55" x2="269.325" y2="49"
                      gradientUnits="userSpaceOnUse">
                      <stop stop-color="#EBEBEB" />
                      <stop offset="1" stop-color="#B4B4B4" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
              <div class="bottom-content-wrapper">
                <h6>No Blogs Found</h6>
                <p>We couldn't find any blogs in our record.</p>
                <a href="/" class="mx-auto btn-none-fill">
                  Go Homepage
                </a>
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sibar-main-wrapper">
          <div class="d-lg-none d-block text-end mb-3 close-sibar-main-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="32" height="32"
              viewBox="0 0 24 24" stroke-width="2" stroke="#9e9e9e" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M18 6l-12 12"></path>
              <path d="M6 6l12 12"></path>
            </svg>
          </div>
          <div class="mb-4 sidebar-wrapper">
            <div class="title-wrapper">
              <h3>Categories</h3>
            </div>
            <div class="list-wrapper">
              <ul>
                <?php
                $categories = get_terms(
                  array(
                    'taxonomy' => 'category',
                    'hide_empty' => true,
                  ),
                );

                if (!empty($categories)) {
                  echo '<ul>';
                  foreach ($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>' . ' (' . $category->count . ')' . '</li>';
                  }
                  echo '</ul>';
                } else {
                  echo 'No categories found';
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="mb-lg-0 mb-4 sidebar-wrapper">
            <div class="title-wrapper">
              <h3>Archive</h3>
            </div>
            <div class="list-wrapper">
              <ul>
                <?php
                wp_get_archives(
                  array(
                    'type' => 'monthly',
                    'limit' => 12,
                    'show_post_count' => true,
                  ),
                );
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="blog-sidebar-filter fixed-filter-btn">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="32" height="32"
        viewBox="0 0 24 24" stroke-width="1.5" stroke="rgba(20, 154, 237, 1)" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path
            d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z" />
    </svg>
</div>
<!-- !Blog Listings -->
<!-- Fixed -->