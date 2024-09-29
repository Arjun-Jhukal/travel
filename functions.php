<?php
require_once get_template_directory() . '/inc/utils.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/acf-blocks.php';
function boldhimalaya_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'boldhimalaya_theme_support');
add_action('after_setup_theme', 'register_boldhimalaya_menu');
add_post_type_support('posts', 'excerpt');

// industry report pagination
function add_custom_rewrite_rule()
{
    add_rewrite_rule(
        '^industry-report/page/([0-9]{1,})/?$',
        'index.php?pagename=industry-report&paged=$matches[1]',
        'top',
    );
}
add_action('init', 'add_custom_rewrite_rule');
// !industry report pagination
// article read time
function calculate_reading_time($content)
{
    $word_count = str_word_count(strip_tags($content));
    $reading_speed = 200;
    $reading_time = ceil($word_count / $reading_speed);
    return $reading_time;
}
// !article read time
// article read views
function increment_post_views($post_id)
{
    $count = get_post_meta($post_id, 'views', true);
    if ($count == '') {
        $count = 0;
    }
    $count++;
    update_post_meta($post_id, 'views', $count);
}
function get_post_views($post_id)
{
    $count = get_post_meta($post_id, 'views', true);
    if ($count == '') {
        $count = 0;
    }
    return $count;
}
function track_post_views()
{
    if (is_single()) {
        $post_id = get_the_ID();
        $cookie_name = 'viewed_post_' . $post_id;
        if (!isset($_COOKIE[$cookie_name])) {
            increment_post_views($post_id);
            setcookie($cookie_name, '1', time() + 30 * DAY_IN_SECONDS, '/');
        }
    }
}
add_action('wp', 'track_post_views');
// !article read views
function get_related_blogs($post_id)
{
    $categories = get_the_category($post_id);
    if (empty($categories)) {
        return array();
    }
    $category_ids = array_map(function ($category) {
        return $category->term_id;
    }, $categories);
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'post__not_in' => array($post_id),
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $category_ids,
                'operator' => 'IN',
            ),
        ),
    );
    $related_posts = get_posts($args);
    return $related_posts;
}
// !get related tours
function get_related_tours($post_id)
{
    // Get the current post's terms for the taxonomies
    $taxonomies = ['tour-category', 'destination', 'travel-with'];
    $terms = [];

    foreach ($taxonomies as $taxonomy) {
        $terms = array_merge($terms, wp_get_object_terms($post_id, $taxonomy, array('fields' => 'ids')));
    }

    // Remove duplicates
    $terms = array_unique($terms);

    // Set up the query arguments
    $args = array(
        'post_type' => 'tour',
        'posts_per_page' => 5,
        'post__not_in' => array($post_id),
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'tour-category',
                'field' => 'id',
                'terms' => $terms,
                'operator' => 'IN',
            ),
            array(
                'taxonomy' => 'destination',
                'field' => 'id',
                'terms' => $terms,
                'operator' => 'IN',
            ),
            array(
                'taxonomy' => 'travel-with',
                'field' => 'id',
                'terms' => $terms,
                'operator' => 'IN',
            ),
        ),
    );

    // Query related tours
    $related_tours = new WP_Query($args);

    return $related_tours;
}

// !get related tours
// archives company-news:
function custom_post_type_rewrite_rules()
{
    add_rewrite_rule(
        '^company-news/([0-9]{4})/([0-9]{2})/?',
        'index.php?post_type=company-news&year=$matches[1]&monthnum=$matches[2]',
        'top',
    );
}
add_action('init', 'custom_post_type_rewrite_rules');
function custom_post_type_archive_template($template)
{
    if (is_post_type_archive('company-news') && !is_tax()) {
        $template = locate_template('archive-company-news.php');
    }
    return $template;
}
add_filter('archive_template', 'custom_post_type_archive_template');
// !archives company-news:
// resources
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $classes = array('sub-menu');
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $output .= "\n$indent<ul$class_names>\n";
    }
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        if ($item->title == 'Resources') {
            $class_names = ' class="navigation-bar-dropdown-wrapper"';
            $link_class = 'drop-down-clicked';
        } else {
            $link_class = '';
        }
        $output .= $indent . '<li' . $class_names . '>';
        $attributes = array();
        $attributes['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $attributes['target'] = !empty($item->target) ? $item->target : '';
        $attributes['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $attributes['href'] = !empty($item->url) ? $item->url : '';

        if ($link_class) {
            $attributes['class'] = $link_class;
        }
        $attributes = apply_filters('nav_menu_link_attributes', $attributes, $item, $args, $depth);
        $attr = '';
        foreach ($attributes as $attr_key => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr_key) ? esc_url($value) : esc_attr($value);
                $attr .= ' ' . $attr_key . '="' . $value . '"';
            }
        }
        $title = apply_filters('the_title', $item->title, $item->ID);
        $item_output = $args->before;
        $item_output .= '<a' . $attr . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }
}

// !resources
/*
validate for nummbers and text
*/

add_filter('wpcf7_validate_text', 'wpcs_custom_validation_filter', 10, 2);
add_filter('wpcf7_validate_text*', 'wpcs_custom_validation_filter', 10, 2);
function wpcs_custom_validation_filter($result, $tag)
{
    $name = $tag->name;
    $value = isset($_POST[$name])
        ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " ")))
        : '';
    if ('text' == $tag->basetype) {
        // checking for numbers
        if (preg_match('/\d/', $value)) {
            // $result->invalidate( $tag, wpcf7_get_message( 'invalid_wpcs_custom_error' ) );
            $result->invalidate($tag, 'Sorry! Names are not math equations. Try letters only.');

        }
        // checking for special characters
        if (preg_match('/[^a-zA-Z0-9\s]/', $value)) {
            // $result->invalidate( $tag, wpcf7_get_message( 'invalid_wpcs_custom_error' ) );
            $result->invalidate($tag, 'Sorry! No secret codes or hieroglyphs, please!');
        }
    }
    return $result;
}

add_action('wp_enqueue_scripts', 'enqueue_ajax_scripts');
function enqueue_ajax_scripts()
{
    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/js/style.js', array('jquery'), null, true);
    wp_localize_script('ajax-script', 'my_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
    wp_localize_script('ajax-script', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action('wp_ajax_ajax_sort_posts', 'ajax_sort_posts');
add_action('wp_ajax_nopriv_ajax_sort_posts', 'ajax_sort_posts');
function ajax_sort_posts()
{
    $sort_order = isset($_GET['sort']) ? sanitize_text_field($_GET['sort']) : 'date_desc';
    $keyword = isset($_GET['keyword']) ? sanitize_text_field($_GET['keyword']) : '';
    $tour_types = isset($_GET['tour_types']) ? array_map('sanitize_text_field', $_GET['tour_types']) : array();
    $destinations = isset($_GET['destinations']) ? array_map('sanitize_text_field', $_GET['destinations']) : array();
    $travelWith = isset($_GET['travel_with']) ? array_map('sanitize_text_field', $_GET['travel_with']) : array();
    $tourCategory = isset($_GET['tour_category']) ? array_map('sanitize_text_field', $_GET['tour_category']) : array();
    $price_min = isset($_GET['price_min']) ? sanitize_text_field($_GET['price_min']) : ''; // Adjusted key
    $price_max = isset($_GET['price_max']) ? sanitize_text_field($_GET['price_max']) : ''; // Adjusted key
    $paged = isset($_GET['paged']) ? intval($_GET['paged']) : 1;

    $args = array(
        'post_type' => 'tour',
        'paged' => $paged,
        's' => $keyword,
        'meta_query' => array(),
        'tax_query' => array(),
    );
    // sorting
    switch ($sort_order) {
        case 'date_asc':
            $args['orderby'] = 'date';
            $args['order'] = 'ASC';
            break;
        case 'date_desc':
            $args['orderby'] = 'date';
            $args['order'] = 'DESC';
            break;
        case 'price_asc':
            $args['meta_key'] = 'tour_price';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'ASC';
            break;
        case 'price_desc':
            $args['meta_key'] = 'tour_price';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'DESC';
            break;
        case 'rating':
            $args['meta_key'] = 'tour_ratings';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'DESC';
            break;
        default:
            $args['orderby'] = 'date';
            $args['order'] = 'DESC';
            break;
    }
    // filter by tour types
    if (!empty($tour_types)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'tour-category',
            'field' => 'term_id',
            'terms' => $tour_types,
            'operator' => 'IN',
        );
    }
    // by destinations
    if (!empty($destinations)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'destination',
            'field' => 'term_id',
            'terms' => $destinations,
            'operator' => 'IN',
        );
    }
    //  by travel-with
    if (!empty($travelWith)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'travel-with',
            'field' => 'term_id',
            'terms' => $travelWith,
            'operator' => 'IN',
        );
    }
    if (!empty($tourCategory)) {
        $args['tax_query'][] = array(
            'taxonomy' => 'tour-category',
            'field' => 'term_id',
            'terms' => $tourCategory,
            'operator' => 'IN',
        );
    }

    // Debugging: Print the $args to ensure it's built correctly
    error_log(print_r($args, true));
    // by price range
    if (!empty($price_min) || !empty($price_max)) {
        $meta_query = array('relation' => 'AND');

        if (!empty($price_min)) {
            $meta_query[] = array(
                'key' => 'tour_price',
                'value' => $price_min,
                'compare' => '>=',
                'type' => 'NUMERIC',
            );
        }

        if (!empty($price_max)) {
            $meta_query[] = array(
                'key' => 'tour_price',
                'value' => $price_max,
                'compare' => '<=',
                'type' => 'NUMERIC',
            );
        }

        if (!empty($meta_query)) {
            $args['meta_query'] = $meta_query;
        }
    }

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        ob_start();
        echo '<div class="row">';
        while ($query->have_posts()):
            $query->the_post();
            get_template_part('template-parts/tours-filter');

        endwhile;
        echo '</div>';
        wp_reset_postdata();
        $response = ob_get_clean();
        echo $response;
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
        <rect x="72.5113" y="74.2642" width="207.898" height="219.135" rx="3.83104" stroke="black" stroke-opacity="0.15"
          stroke-width="0.510805" />
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
        <filter id="filter0_d_1_4" x="67.2541" y="69.5178" width="218.412" height="229.65" filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB">
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
        <linearGradient id="paint0_linear_1_4" x1="176" y1="1" x2="176" y2="352" gradientUnits="userSpaceOnUse">
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
    <h6>No Results Found</h6>
    <p>Your Search did not match any of our Tour Record.</p>
    <a href="" class="mx-auto btn-none-fill">
      Clear Search
    </a>
  </div>
</div>
<?php
    }
    wp_die();
}