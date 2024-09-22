<!-- Blogs & Insights -->
<?php
$enable_blogs = get_field('enable_blogs');
$blogs_title = get_field('blogs_title');
$blogs_desc = get_field('blogs_desc');
$blogs_btn = get_field('blogs_btn');
$blogs_blog = get_field('blogs_blog');
if ($enable_blogs && $blogs_blog):
  ?>
  <section class="blogs bg-white">
    <div class="container">
      <div class="row">
        <div class="col-xl-3">
          <div class="section-title d-md-flex justify-content-between align-items-start flex-wrap d-xl-block">
            <h2 class="text-center text-md-start"><?php echo $blogs_title; ?></h2>
            <div class="st-brief text-center text-md-start mx-auto mx-md-0">
              <?php echo $blogs_desc;
              if ($blogs_btn):
                $blogs_btn_url = $blogs_btn['url'];
                $blogs_btn_title = $blogs_btn['title'];
                ?>
                <a href="<?php echo esc_url($blogs_btn_url); ?>"
                  class="bh-btn bh-btn-underlined"><?php echo $blogs_btn_title; ?></a><?php endif; ?>
            </div>

            <div class="slider-btns d-none d-xl-flex">
              <button class="blog-prev">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="-1" y="1" width="38" height="38" rx="19" transform="matrix(-1 0 0 1 38 0)" stroke="#7FB51F"
                    stroke-width="2" />
                  <g clip-path="url(#clip0_379_9222)">
                    <path
                      d="M15.4314 18.9167L21.9118 14.4803C22.2111 14.2753 22.5126 14.1667 22.7632 14.1667C23.2478 14.1667 23.5475 14.5556 23.5475 15.2066V24.7951C23.5475 25.4453 23.2482 25.8334 22.7647 25.8334C22.5137 25.8334 22.217 25.7248 21.9171 25.5192L15.4337 21.0829C15.0167 20.7971 14.7858 20.4125 14.7858 19.9996C14.7857 19.5869 15.014 19.2024 15.4314 18.9167Z"
                      fill="#7FB51F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_379_9222">
                      <rect width="11.6667" height="11.6667" fill="white" transform="matrix(-1 0 0 1 25 14.1667)" />
                    </clipPath>
                  </defs>
                </svg>


              </button>
              <button class="blog-next">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="-1" y="1" width="38" height="38" rx="19" transform="matrix(-1 0 0 1 38 0)" stroke="#7FB51F"
                    stroke-width="2" />
                  <g clip-path="url(#clip0_379_9222)">
                    <path
                      d="M15.4314 18.9167L21.9118 14.4803C22.2111 14.2753 22.5126 14.1667 22.7632 14.1667C23.2478 14.1667 23.5475 14.5556 23.5475 15.2066V24.7951C23.5475 25.4453 23.2482 25.8334 22.7647 25.8334C22.5137 25.8334 22.217 25.7248 21.9171 25.5192L15.4337 21.0829C15.0167 20.7971 14.7858 20.4125 14.7858 19.9996C14.7857 19.5869 15.014 19.2024 15.4314 18.9167Z"
                      fill="#7FB51F" />
                  </g>
                  <defs>
                    <clipPath id="clip0_379_9222">
                      <rect width="11.6667" height="11.6667" fill="white" transform="matrix(-1 0 0 1 25 14.1667)" />
                    </clipPath>
                  </defs>
                </svg>


              </button>
            </div>
          </div>
        </div>
        <div class="col-xl-9">
          <div class="blog-items">
            <div class="blog-slider-wrapper">
              <div class="blog-slider" id="blog-slider">
                <?php
                if (is_array($blogs_blog) && !empty($blogs_blog)):
                  $wp_posts = $blogs_blog;
                  if (is_array($wp_posts) && !empty($wp_posts)):
                    $default_image = get_field('fallback_blog_featured_image', 'option');
                    $blogs_blog = array_map(function ($post) use ($default_image) {
                      $feat_image = get_the_post_thumbnail_url($post->ID, 'full');
                      $modified_date = get_the_modified_time('d M. Y', $post->ID);
                      return [
                        'link' => esc_url(get_permalink($post->ID)),
                        'title' => esc_html($post->post_title),
                        'modified_date' => $modified_date,
                        'image' => $feat_image ?: $default_image,
                      ];
                    }, $wp_posts);
                    foreach ($blogs_blog as $index => $blog):
                      ?>
                      <div class="blog-item">
                        <div class="bi-image">
                          <a href="#">
                            <img src="<?php echo esc_url($blog['image']); ?>" alt="<?php echo esc_attr($blog['title']); ?>"
                              class="img-fluid">
                          </a>
                        </div>
                        <div class="bi-content">
                          <small><?php echo $blog['modified_date']; ?></small>
                          <a href="<?php echo esc_url($blog['link']); ?>"><?php echo $blog['title']; ?></a>
                        </div>
                      </div>
                    <?php endforeach; endif; endif; ?>
              </div>
              <div class="blog-slider-dots"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- !Blogs & Insights -->