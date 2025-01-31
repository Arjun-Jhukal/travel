<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
  // check function exists.
  if (function_exists('acf_register_block_type')) {
    // Welcome Banner Block
    acf_register_block_type(
      array(
        'name' => 'Welcome Banner Block',
        'title' => __('Welcome Banner Block', 'bold'),
        'description' => __('Welcome Banner Block', 'bold'),
        'render_template' => 'blocks/home/welcome.php',
        'category' => 'formatting',
        'icon' => '<svg width="42" height="36" viewBox="0 0 42 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M37.6245 3.79422C35.5435 1.80986 32.8167 0.694622 29.9775 0.666748C28.6382 0.667121 27.3126 0.944183 26.0796 1.48146C24.8467 2.01873 23.7314 2.80524 22.8003 3.79422C21.7075 4.93531 20.8395 6.2824 20.2438 7.76156C19.3097 6.09487 17.9491 4.7228 16.3097 3.79422C14.912 3.01115 13.3442 2.6041 11.7522 2.61098C10.0926 2.61654 8.45745 3.0218 6.97795 3.79422C5.01249 4.82176 3.36111 6.38647 2.20557 8.31612C1.05003 10.2458 0.435142 12.4655 0.428589 14.7311L0.428589 35.3334H41.7167V13.2718C41.7159 11.4861 41.3515 9.72043 40.6467 8.08818C39.9419 6.45594 38.9124 4.99327 37.6245 3.79422ZM6.82664 26.7166L7.48835 25.538L11.3728 18.6288C11.4765 18.4432 11.6259 18.2891 11.8062 18.1818C11.9864 18.0746 12.191 18.0181 12.3992 18.0181C12.6075 18.0181 12.8121 18.0746 12.9923 18.1818C13.1725 18.2891 13.322 18.4432 13.4257 18.6288L17.3101 25.538L17.9718 26.7166L21.0884 21.174L25.0452 14.1232C25.2074 13.8352 25.4406 13.596 25.7212 13.4297C26.0019 13.2635 26.3201 13.176 26.6441 13.176C26.9681 13.176 27.2864 13.2635 27.567 13.4297C27.8476 13.596 28.0808 13.8352 28.2431 14.1232L31.7481 20.3642L35.3186 26.7166H6.82664Z" fill="#7FB51F"/>
            </svg>',
        'keywords' => array('Welcome Banner Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Products Archive Block
    acf_register_block_type(
      array(
        'name' => 'Products Archive Block',
        'title' => __('Products Archive Block'),
        'description' => __('Products Archive Block'),
        'render_template' => 'blocks/products-archive.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Products Archive Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Tours Block
    acf_register_block_type(
      array(
        'name' => 'Tours Block',
        'title' => __('Tours Block'),
        'description' => __('Tours Block'),
        'render_template' => 'blocks/tours.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Tours Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Industry Report Block
    acf_register_block_type(
      array(
        'name' => 'Industry Report Block',
        'title' => __('Industry Report Block'),
        'description' => __('Industry Report Block'),
        'render_template' => 'blocks/industry-report.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Industry Report Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Book Demo Block
    acf_register_block_type(
      array(
        'name' => 'Book Demo Block',
        'title' => __('Book Demo Block'),
        'description' => __('Book Demo Block'),
        'render_template' => 'blocks/book.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Book Demo Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Articles Listing Block
    acf_register_block_type(
      array(
        'name' => 'Articles Listing Block',
        'title' => __('Articles Listing Block'),
        'description' => __('Articles Listing Block'),
        'render_template' => 'blocks/articles.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Articles Listing Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Company News Listing Block
    acf_register_block_type(
      array(
        'name' => 'Company News Listing Block',
        'title' => __('Company News Listing Block'),
        'description' => __('Company News Listing Block'),
        'render_template' => 'blocks/company-news.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Company News Listing Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Case Studies Listing Block
    acf_register_block_type(
      array(
        'name' => 'Case Studies Listing Block',
        'title' => __('Case Studies Listing Block'),
        'description' => __('Case Studies Listing Block'),
        'render_template' => 'blocks/case-studies.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Case Studies Listing Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Partner With Us Block
    acf_register_block_type(
      array(
        'name' => 'Partner With Us Block',
        'title' => __('Partner With Us Block'),
        'description' => __('Partner With Us Block'),
        'render_template' => 'blocks/partner.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Partner With Us Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    //    Industry Events
    acf_register_block_type(
      array(
        'name' => 'Industry Events Block',
        'title' => __('Industry Events Block'),
        'description' => __('Industry Events Block'),
        'render_template' => 'blocks/industry-events.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Industry Events Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Videos Listing
    acf_register_block_type(
      array(
        'name' => 'Videos Listing',
        'title' => __('Videos Listing Block'),
        'description' => __('Videos Listing Block'),
        'render_template' => 'blocks/videos.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Videos Listing Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // About Block
    acf_register_block_type(
      array(
        'name' => 'About',
        'title' => __('About Block'),
        'description' => __('About Block'),
        'render_template' => 'blocks/about.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('About Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
    // Contact Block
    acf_register_block_type(
      array(
        'name' => 'Contact',
        'title' => __('Contact Block'),
        'description' => __('Contact Block'),
        'render_template' => 'blocks/contact.php',
        'category' => 'formatting',
        'icon' => 'admin-comments',
        'keywords' => array('Contact Block'),
        'example' => [
          'attributes' => [
            'mode' => 'preview',
            'data' => [],
          ],
        ],
      ),
    );
  }
}
