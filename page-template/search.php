<?php

/**
 * Template Name: Search template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gme
 * @subpackage gme
 * @since gme 1.0
 */
get_header();
$bc = get_field('bc');
$bc_title = $bc['bc_title'];
?>
<section class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-content">
      <ul class="d-flex justify-content-start align-items-center">
        <li><a href="<?php echo esc_url(get_home_url()); ?>" class="sm-text">Home</a></li>
        <li><span class="sm-text"><?php echo $bc_title ?: get_the_title(); ?></span></li>
      </ul>
    </div>
  </div>
</section>
<?php $s_title = get_field('s_title');
$s_desc = get_field('s_desc'); ?>
<section class="package-filter <?php
if (!is_page('search'))
  echo ' bg-white'; ?>" id="trips-and-tours">

  <div class="container">
    <div class="section-title d-flex justify-content-between align-items-end flex-wrap">
      <h2>
        <?php echo $s_title; ?>
      </h2>
      <div class="st-brief">
        <?php echo $s_desc; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <aside class="aside">
          <div class="filter-options">
            <div class="fo-option">
              <label>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                  <g clip-path="url(#clip0_582_13419)">
                    <path
                      d="M14.6802 13.5413L11.0445 9.90562C11.7302 8.9851 12.1384 7.84541 12.1384 6.61097C12.1384 3.56294 9.65874 1.08325 6.6107 1.08325C3.56267 1.08325 1.08301 3.56291 1.08301 6.61095C1.08301 9.65898 3.56269 12.1387 6.61073 12.1387C7.84517 12.1387 8.98485 11.7304 9.90538 11.0447L13.5411 14.6804C13.6981 14.8374 13.9046 14.9164 14.1106 14.9164C14.3166 14.9164 14.5232 14.8374 14.6802 14.6804C14.995 14.3656 14.995 13.8562 14.6802 13.5413C14.6802 13.5413 14.6802 13.5413 14.6802 13.5413ZM6.61073 10.5276C4.45104 10.5276 2.69411 8.77063 2.69411 6.61095C2.69411 4.45126 4.45104 2.69433 6.61073 2.69433C8.77042 2.69433 10.5273 4.45126 10.5273 6.61095C10.5273 8.77063 8.77039 10.5276 6.61073 10.5276Z"
                      fill="#7FB51F" stroke="#7FB51F" stroke-width="0.5" />
                  </g>
                  <defs>
                    <clipPath id="clip0_582_13419">
                      <rect width="16" height="16" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
                Search</label>
              <input type="text" placeholder="Enter any keyword">
            </div>
            <div class="fo-option">
              <div class="faq-wrapper">
                <div class=" fo-title ">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <g clip-path="url(#clip0_582_13432)">
                        <path
                          d="M13.8046 7.32568C13.5219 7.58799 12.5739 8.48149 12.2745 8.76161C12.1425 8.8978 12.0687 9.08009 12.069 9.26976C12.0644 9.84689 12.1661 10.6244 11.6721 11.0482L10.2276 12.4442C9.92293 12.7337 9.51767 12.8934 9.09741 12.8896C8.67716 12.8859 8.2748 12.719 7.97526 12.4242C7.26028 11.845 7.00774 10.8721 7.57278 10.0976C7.66628 9.97127 7.71635 9.81804 7.71548 9.66086V8.07648C7.71419 7.88256 7.63639 7.69699 7.499 7.56013C7.36161 7.42327 7.17574 7.3462 6.98181 7.34567C6.80353 7.345 6.62726 7.30794 6.4638 7.23676C6.30034 7.16559 6.15313 7.06179 6.03119 6.93173L4.09568 4.79639C3.11141 5.57869 2.38528 6.63903 2.01172 7.83954C2.01174 7.84239 3.83589 9.69511 3.83589 9.69511C4.00092 9.85975 4.21994 9.95912 4.45252 9.97488C4.83695 10.0017 5.19704 10.1729 5.46067 10.454C5.72429 10.7351 5.87198 11.1054 5.87416 11.4907L5.87418 12.5213C5.8747 12.755 5.82908 12.9865 5.73992 13.2026C5.65076 13.4186 5.51982 13.6149 5.35461 13.7802C5.14667 13.991 5.0185 14.2675 4.99208 14.5624L4.88929 15.1676C10.0422 18.1103 16.0689 12.8087 13.8046 7.32568Z"
                          fill="#7FB51F" />
                        <path
                          d="M5.30253 12.5213V11.4907C5.30126 11.2502 5.20901 11.0191 5.04431 10.8438C4.87962 10.6685 4.65468 10.5621 4.41471 10.5458C4.04316 10.5199 3.69345 10.3607 3.42983 10.0976L1.84545 8.48755C1.76238 8.89141 1.72125 9.30277 1.72269 9.71509C1.72136 10.7172 1.96078 11.7049 2.42081 12.5952C2.88084 13.4854 3.54802 14.2522 4.36618 14.8308L4.44897 14.3483C4.50305 13.6004 5.32666 13.2729 5.30253 12.5213Z"
                          fill="#7FB51F" />
                        <path
                          d="M9.22705 6.07529C9.29332 6.18787 9.38783 6.2812 9.50124 6.34604C9.61465 6.41088 9.74302 6.44499 9.87366 6.44498C10.0043 6.44498 10.1327 6.41087 10.2461 6.34603C10.3595 6.28118 10.454 6.18785 10.5202 6.07527L11.9476 3.60021C12.1607 3.23709 12.2731 2.82368 12.2731 2.40265C12.2731 1.98162 12.1607 1.56821 11.9476 1.20509C10.27 -1.49421 6.30337 0.797871 7.79969 3.60023L9.22705 6.07529ZM9.87508 1.08521C11.6106 1.14015 11.6102 3.66261 9.87505 3.71728C9.52819 3.71396 9.19667 3.57385 8.95257 3.3274C8.70847 3.08095 8.57153 2.7481 8.57153 2.40123C8.57154 2.05436 8.70848 1.72151 8.95259 1.47507C9.19669 1.22863 9.52822 1.08852 9.87508 1.08521Z"
                          fill="#7FB51F" />
                        <path
                          d="M6.45233 6.54368C6.52055 6.61618 6.6028 6.67406 6.69408 6.71381C6.78535 6.75356 6.88375 6.77435 6.98331 6.77491C7.32833 6.77648 7.65882 6.91405 7.90306 7.15776C8.1473 7.40146 8.28559 7.73165 8.28792 8.07667V9.66105C8.33688 10.1935 7.82075 10.5255 7.83685 11.0456C7.81604 11.4499 8.10252 11.7657 8.38216 12.019C8.57446 12.2097 8.83354 12.3179 9.10435 12.3206C9.37515 12.3233 9.63632 12.2202 9.83233 12.0333L11.2768 10.6374C11.6187 10.3368 11.4692 9.70558 11.4995 9.26995C11.4988 8.92664 11.6343 8.59708 11.8763 8.35358L13.5521 6.78062C13.1732 6.05732 12.654 5.4168 12.0248 4.89649C11.8423 5.2099 11.3261 6.10484 11.137 6.43234C11.0075 6.65231 10.8229 6.83467 10.6013 6.96137C10.3798 7.08806 10.129 7.15471 9.87372 7.1547C9.6185 7.1547 9.36769 7.08805 9.14614 6.96134C8.92458 6.83464 8.73995 6.65227 8.61052 6.4323C8.61052 6.43234 7.03975 3.70679 6.9719 3.52051C6.11133 3.66114 5.29023 3.98219 4.5625 4.46257C4.802 4.7256 6.17971 6.24486 6.45233 6.54368Z"
                          fill="#7FB51F" />
                        <path
                          d="M9.87415 3.14642C10.0697 3.14336 10.2563 3.06351 10.3935 2.92411C10.5307 2.78471 10.6076 2.59694 10.6076 2.40132C10.6076 2.20571 10.5307 2.01795 10.3935 1.87855C10.2563 1.73915 10.0697 1.65931 9.87412 1.65625C9.67853 1.65932 9.49199 1.73917 9.35477 1.87857C9.21754 2.01797 9.14062 2.20574 9.14063 2.40135C9.14063 2.59696 9.21755 2.78473 9.35478 2.92412C9.49202 3.06352 9.67856 3.14336 9.87415 3.14642Z"
                          fill="#7FB51F" />
                      </g>
                      <defs>
                        <clipPath id="clip0_582_13432">
                          <rect width="16" height="16" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Select Difficulty</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <ul>
                      <li><label><input type="radio" name="difficulty" value="Easy">Easy</label></li>
                        <li><label><input type="radio" name="difficulty" value="Medium">Medium</label></li>
                        <li><label><input type="radio" name="difficulty" value="Hard">Hard</label></li>
                        <li><label><input type="radio" name="difficulty" value="Challenging">Challenging</label></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fo-option">
              <div class="faq-wrapper">
                <div class=" fo-title">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <g clip-path="url(#clip0_582_13458)">
                        <path
                          d="M14.6353 11.2179C14.4083 11.0933 14.1233 11.1762 13.9987 11.4031C13.8741 11.63 13.957 11.915 14.1839 12.0396C14.7423 12.3464 15.0625 12.6864 15.0625 12.9726C15.0625 13.3226 14.5666 13.8651 13.1746 14.338C11.7994 14.8053 9.96172 15.0626 8 15.0626C6.03828 15.0626 4.20056 14.8053 2.82541 14.338C1.43344 13.8652 0.9375 13.3226 0.9375 12.9726C0.9375 12.6864 1.25775 12.3464 1.81613 12.0396C2.04303 11.9149 2.12591 11.6299 2.00125 11.403C1.87659 11.1762 1.59169 11.0933 1.36472 11.2179C0.742156 11.5599 0 12.142 0 12.9726C0 13.6093 0.437875 14.517 2.52381 15.2257C3.99356 15.7251 5.93837 16.0001 8 16.0001C10.0616 16.0001 12.0064 15.7251 13.4762 15.2257C15.5621 14.517 16 13.6093 16 12.9726C16 12.142 15.2578 11.5599 14.6353 11.2179Z"
                          fill="#7FB51F" />
                        <path
                          d="M4.46147 13.6602C5.41303 13.929 6.66988 14.0771 8.00047 14.0771C9.33106 14.0771 10.5879 13.9291 11.5395 13.6602C12.7036 13.3314 13.2939 12.8553 13.2939 12.2454C13.2939 11.6354 12.7036 11.1594 11.5395 10.8306C11.281 10.7576 11 10.6935 10.7012 10.6389C10.5389 10.9193 10.3688 11.2079 10.1911 11.5048C10.5218 11.5544 10.8323 11.6153 11.1143 11.6871C11.9711 11.9053 12.2841 12.151 12.3484 12.2454C12.2841 12.3399 11.9711 12.5855 11.1144 12.8037C10.3035 13.0103 9.26016 13.1281 8.16131 13.1386C8.10809 13.1425 8.05447 13.1448 8.00047 13.1448C7.94644 13.1448 7.89284 13.1425 7.83959 13.1386C6.74075 13.1281 5.69744 13.0103 4.88653 12.8037C4.02978 12.5855 3.71681 12.3399 3.65247 12.2454C3.71681 12.151 4.02981 11.9053 4.88656 11.6871C5.16856 11.6153 5.47909 11.5544 5.80988 11.5048C5.63209 11.2079 5.46206 10.9193 5.29978 10.6389C5.00097 10.6936 4.71987 10.7576 4.46147 10.8306C3.29731 11.1594 2.70703 11.6354 2.70703 12.2454C2.70703 12.8553 3.29731 13.3314 4.46147 13.6602Z"
                          fill="#7FB51F" />
                        <path
                          d="M7.99813 12.2073C8.41541 12.2073 8.79444 11.9947 9.01213 11.6385C10.5374 9.143 12.3556 5.85406 12.3556 4.35747C12.3556 1.95475 10.4009 0 7.99813 0C5.59538 0 3.64062 1.95475 3.64062 4.35747C3.64062 5.85406 5.45884 9.143 6.98413 11.6385C7.20181 11.9947 7.58088 12.2073 7.99813 12.2073ZM6.24666 4.05828C6.24666 3.09256 7.03238 2.30687 7.99813 2.30687C8.96387 2.30687 9.74959 3.09256 9.74959 4.05828C9.74959 5.02403 8.96387 5.80972 7.99813 5.80972C7.03238 5.80972 6.24666 5.02406 6.24666 4.05828Z"
                          fill="#7FB51F" />
                      </g>
                      <defs>
                        <clipPath id="clip0_582_13458">
                          <rect width="16" height="16" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Region</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <ul>
                    <?php
                    // Fetch 'regions' taxonomies
                    $terms = get_terms(array(
                      'taxonomy' => 'destination',
                      'hide_empty' => false,
                    ));

                    $grandchild_terms = [];

                    if (!empty($terms) && !is_wp_error($terms)) {
                      foreach ($terms as $term) {
                        // Check if the term has children
                        $children = get_terms(array(
                          'taxonomy' => 'destination',
                          'hide_empty' => false,
                          'parent' => $term->term_id,
                        ));

                        if ($children) {
                          foreach ($children as $child) {
                            $grandchildren = get_terms(array(
                              'taxonomy' => 'destination',
                              'hide_empty' => false,
                              'parent' => $child->term_id,
                            ));
                            if ($grandchildren) {
                              $grandchild_terms = array_merge($grandchild_terms, $grandchildren);
                            }
                          }
                        }
                      }
                    }
                    if ($grandchild_terms) {
                      foreach ($grandchild_terms as $term) {
                        echo '<li>';
                        echo '<label>';
                        echo '<input type="radio" name="region" value="' . esc_attr($term->term_id) . '" id="region-' . esc_attr($term->term_id) . '">';
                        echo esc_html($term->name);
                        echo '</label>';
                        echo '</li>';
                      }
                    }
                    ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fo-option">
              <div class="faq-wrapper">
                <div class=" fo-title">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path
                        d="M13.1521 8.40527H10.4156C9.95768 8.44719 9.54056 8.62767 9.20312 8.90207C9.23641 8.93551 9.26936 8.96943 9.30136 9.00431C9.9044 9.66127 10.2367 10.5146 10.2367 11.4074C10.2367 11.5552 10.2266 11.6946 10.2081 11.8275C10.2265 11.8275 10.2447 11.8277 10.2633 11.8277C10.3802 11.8277 10.5006 11.827 10.6231 11.827H12.945C13.0671 11.827 13.1876 11.8277 13.3046 11.8277C14.3786 11.8277 15.1991 11.7726 15.1991 10.6501C15.199 9.47487 14.2999 8.51007 13.1521 8.40527Z"
                        fill="#7FB51F" />
                      <path
                        d="M11.7833 8.06708C12.8588 8.06708 13.7307 7.19522 13.7307 6.11972C13.7307 5.04423 12.8588 4.17236 11.7833 4.17236C10.7078 4.17236 9.83594 5.04423 9.83594 6.11972C9.83594 7.19522 10.7078 8.06708 11.7833 8.06708Z"
                        fill="#7FB51F" />
                      <path
                        d="M4.16366 7.86533C4.47726 8.00677 4.82478 8.08597 5.19102 8.08597C5.55726 8.08597 5.90494 8.00661 6.2187 7.86533C7.08878 7.47301 7.69486 6.59861 7.69486 5.58245C7.69486 4.19941 6.5739 3.07861 5.19118 3.07861C3.80862 3.07861 2.6875 4.19941 2.6875 5.58245C2.68734 6.59861 3.29342 7.47301 4.16366 7.86533Z"
                        fill="#7FB51F" />
                      <path
                        d="M6.9507 8.52148H6.34958H4.03342H3.43214C1.95662 8.65636 0.800781 9.89668 0.800781 11.4076C0.800781 12.8506 1.85534 12.9215 3.2363 12.9215C3.3867 12.9215 3.54142 12.9207 3.69918 12.9207H6.68414C6.8411 12.9207 6.99598 12.9215 7.14654 12.9215C8.38734 12.9215 9.36478 12.8637 9.55006 11.8048C9.57102 11.6853 9.58238 11.5538 9.58238 11.4077C9.58238 10.6213 9.26878 9.90884 8.76062 9.38676C8.29214 8.90548 7.65838 8.58612 6.9507 8.52148Z"
                        fill="#7FB51F" />
                    </svg>
                    Tour Type</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <ul>
                      <?php
                      // Fetch 'tour type' taxonomies
                      $terms = get_terms(array(
                        'taxonomy' => 'destination',
                        'hide_empty' => false,
                      ));
                      $first_child_terms = [];
                      if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                          if ($term->parent) {
                            $siblings = get_terms(array(
                              'taxonomy' => 'destination',
                              'hide_empty' => false,
                              'parent' => $term->parent,
                            ));
                            if (count($siblings) > 1) {
                              $first_child_terms[] = $term;
                            }
                          }
                        }
                      }
                      // Output first child terms
                      if ($first_child_terms) {
                        foreach ($first_child_terms as $term) {
                          echo '<li>';
                          echo '<label>';
                          echo '<input type="radio" name="tour_type" value="' . esc_attr($term->term_id) . '" id="tour_type-' . esc_attr($term->term_id) . '">';
                          echo esc_html($term->name);
                          echo '</label>';
                          echo '</li>';
                        }
                      }
                      ?>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="fo-option range-value-slider">
              <div class="faq-wrapper expand">
                <div class=" fo-title">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path
                        d="M10.5205 6.33759C11.5813 5.37044 13.0158 4.06241 13.1466 0.9375H14.0938V0H1.90625V0.9375H2.85341C2.98416 4.06241 4.41872 5.37044 5.47953 6.33759C6.19112 6.98637 6.59375 7.38347 6.59375 8C6.59375 8.61653 6.19112 9.01363 5.47953 9.66241C4.41872 10.6296 2.98416 11.9376 2.85341 15.0625H1.90625V16H14.0938V15.0625H13.1466C13.0158 11.9376 11.5813 10.6296 10.5205 9.66241C9.80888 9.01363 9.40625 8.61653 9.40625 8C9.40625 7.38347 9.80888 6.98637 10.5205 6.33759ZM7.53125 11.5137C7.38647 11.5436 7.24344 11.587 7.10384 11.6448L4.23269 12.8329C4.70156 11.6407 5.45675 10.9518 6.11116 10.3552C6.84147 9.68937 7.53125 9.06047 7.53125 8V11.5137ZM9.88884 10.3552C10.5433 10.9518 11.2984 11.6407 11.7673 12.8328L8.89616 11.6447C8.75656 11.587 8.61353 11.5435 8.46875 11.5137V8C8.46875 9.06047 9.15853 9.68937 9.88884 10.3552ZM4.21622 3.125C3.98956 2.53441 3.83303 1.82131 3.79206 0.9375H12.2079C12.1669 1.82131 12.0104 2.53441 11.7837 3.125H4.21622Z"
                        fill="#7FB51F" />
                    </svg>
                    Duration</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <div class="range-slider-container">
                      <div class="price-labels">
                        <span class="price-min-label"><span>0</span> Days</span>
                        <span>-</span>
                        <span class="price-max-label"><span>3</span> Days</span>
                      </div>
                      <div class="price-range"></div>

                      <input type="hidden" name="duration-min" placeholder="Min Days" min="0" class="price-min" value="0">
                    <input type="hidden" name="duration-max" placeholder="Max Days" max="30" class="price-max" value="5">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fo-option range-value-slider">
              <div class="faq-wrapper expand">
                <div class=" fo-title">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <g clip-path="url(#clip0_582_13491)">
                        <path
                          d="M12.4559 8.4165C12.5459 9.27107 12.4298 10.1553 12.0742 10.9906V10.9909L13.3087 12.5853C13.4192 12.728 13.6264 12.7476 13.7632 12.6299C14.8717 11.676 15.6051 10.299 15.7138 8.74947C15.7265 8.56908 15.5814 8.41654 15.4005 8.41654H12.4559V8.4165Z"
                          fill="#7FB51F" />
                        <path
                          d="M9.35938 0.314001V4.21255C10.4052 4.66516 11.2734 5.45331 11.8277 6.44015H15.4117C15.5889 6.44015 15.7323 6.29348 15.7255 6.11639C15.5979 2.80225 12.9555 0.166195 9.68656 0.000403389C9.50822 -0.00863635 9.35938 0.135435 9.35938 0.314001Z"
                          fill="#7FB51F" />
                        <path
                          d="M7.36265 14.1492C4.50926 14.1787 2.15124 11.8653 2.12817 9.01182C2.10491 6.13606 4.43776 3.78893 7.30829 3.78893V2.25998C7.30829 2.08107 7.15891 1.93794 6.98019 1.94614C3.24976 2.11751 0.277375 5.19621 0.277344 8.96923C0.277344 12.8598 3.46398 16.025 7.35443 16C8.8216 15.9906 10.1817 15.532 11.3044 14.7549C11.4521 14.6526 11.4832 14.4469 11.3732 14.3048L10.437 13.0955C9.5804 13.7463 8.51625 14.1373 7.36265 14.1492Z"
                          fill="#7FB51F" />
                        <path
                          d="M3.07031 8.9691C3.07031 11.3063 4.9718 13.2077 7.30895 13.2077C9.64585 13.2077 11.5476 11.3066 11.5476 8.9691C11.5476 6.63202 9.64585 4.73047 7.30895 4.73047C4.9718 4.73047 3.07031 6.63195 3.07031 8.9691ZM7.77977 6.15329V6.60245C8.26245 6.60245 8.68974 6.80776 8.99103 7.12914C9.16869 7.31872 9.15896 7.61691 8.96937 7.79456C8.78095 7.97109 8.48421 7.96434 8.30395 7.77291C8.16898 7.62915 7.98504 7.54566 7.79891 7.54409C7.41793 7.54409 7.16039 7.54409 6.781 7.54409C6.51712 7.54409 6.3039 7.75787 6.3039 8.02119C6.3039 8.28422 6.51797 8.49828 6.78132 8.49828H7.83689C8.61908 8.49828 9.25563 9.13483 9.25563 9.91702C9.25563 10.6479 8.69344 11.3361 7.77977 11.3361V11.7849C7.77977 12.0448 7.56915 12.2557 7.30895 12.2557C7.04906 12.2557 6.83813 12.0448 6.83813 11.7849V11.3361C6.50648 11.3361 6.17973 11.3002 5.79699 11.0347C5.58355 10.8866 5.5305 10.5931 5.67866 10.3797C5.82681 10.1659 6.12028 10.1129 6.33372 10.261C6.44672 10.3401 6.58706 10.3926 6.7267 10.3944H7.83689C8.09908 10.3944 8.31399 10.1828 8.31399 9.91702C8.31399 9.65399 8.09993 9.43992 7.83689 9.43992C7.36978 9.43992 7.27351 9.43992 6.78132 9.43992C5.99881 9.43992 5.36226 8.80337 5.36226 8.02119C5.36226 7.28799 5.92646 6.60245 6.83813 6.60245V6.15329C6.83813 5.89339 7.04906 5.68247 7.30895 5.68247C7.56915 5.68247 7.77977 5.89339 7.77977 6.15329Z"
                          fill="#7FB51F" />
                      </g>
                      <defs>
                        <clipPath id="clip0_582_13491">
                          <rect width="16" height="16" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    Price Range</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <div class="range-slider-container">
                      <div class="price-labels">
                        <span class="price-min-label">$ <span>0</span></span>
                        <span>-</span>
                        <span class="price-max-label">$ <span>3</span></span>
                      </div>
                      <div class="price-range"></div>

                      <input type="hidden" name="price-min" placeholder="Min Price" class="price-min" min="100" value="100">
                    <input type="hidden" name="price-max" placeholder="Max Price" class="price-max" max="1000000" value="15000">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fo-option">
              <div class="faq-wrapper">
                <div class=" fo-title">
                  <label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                      <path
                        d="M5.20167 6.99997H10.135C10.6683 6.99997 11.0017 6.39997 10.6683 5.99997L8.20167 1.9333C7.935 1.5333 7.335 1.5333 7.06833 1.9333L4.60167 5.99997C4.335 6.46663 4.66833 6.99997 5.20167 6.99997Z"
                        fill="#7FB51F" />
                      <path
                        d="M11.3359 14.333C12.9928 14.333 14.3359 12.9899 14.3359 11.333C14.3359 9.67615 12.9928 8.33301 11.3359 8.33301C9.67908 8.33301 8.33594 9.67615 8.33594 11.333C8.33594 12.9899 9.67908 14.333 11.3359 14.333Z"
                        fill="#7FB51F" />
                      <path
                        d="M6.33464 8.66675H2.33464C2.0013 8.66675 1.66797 9.00008 1.66797 9.33341V13.3334C1.66797 13.6667 2.0013 14.0001 2.33464 14.0001H6.33464C6.66797 14.0001 7.0013 13.6667 7.0013 13.3334V9.33341C7.0013 9.00008 6.66797 8.66675 6.33464 8.66675Z"
                        fill="#7FB51F" />
                    </svg>
                    Travel Style</label>
                </div>
                <div class="faq-content-wrapper">
                  <div class="faq-content">
                    <ul>
                      <?php
                      // Fetch 'travel-style' taxonomies
                      $terms = get_terms(array(
                        'taxonomy' => 'travel-style',
                        'hide_empty' => false,
                      ));
                      if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                          echo '<li>';
                          echo '<label>';
                          echo '<input type="radio" name="travel_style" value="' . esc_attr($term->term_id) . '" id="travel_style-' . esc_attr($term->term_id) . '">';
                          echo esc_html($term->name);
                          echo '</label>';
                          echo '</li>';
                        }
                      }
                      ?>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
      <div class="col-lg-9">
        <div class="pf-content">
          <h5>Showing <span id="filter-count"></span> Packages</h5>

          <div class="row results-container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
              'post_type' => 'tour',
              'posts_per_page' => 10,
              'paged' => $paged,
            );
            $custom_query = new WP_Query($args);
            if ($custom_query->have_posts()) {
              while ($custom_query->have_posts()) {
                $custom_query->the_post();
                $post_id = get_the_ID();
                $tour_dur_day = get_field('tour_dur_day', $post_id);
                $tour_price_curr = get_field('tour_price_curr', $post_id);
                $tour_price = get_field('tour_price', $post_id);
                $tour_sale = get_field('tour_sale', $post_id);
                $tour_rating = get_field('tour_rating', $post_id);
                $tour_ratings = get_field('tour_ratings', $post_id);
                $tour_badge = get_field('tour_badge', $post_id);
                $terms = get_the_terms($post_id, 'destination');
                $location_names = [];

                if ($terms && !is_wp_error($terms)) {
                  foreach ($terms as $term) {
                    $location_names[] = $term->name;
                  }
                }
                if (count($location_names) > 1) {
                  $locations = 'Multi-country';
                  $locations_arr = implode(', ', $location_names);

                } else {
                  $locations = !empty($location_names) ? $location_names[0] : '';
                }
                $badge_class = '';
                if ($tour_badge && is_array($tour_badge)) {
                  foreach ($tour_badge as $badge) {
                    $parts = explode(':', $badge);
                    $value = trim($parts[0]);
                    if ($value === 'trending') {
                      $badge_class = 'trending';
                    }
                    if ($value === 'most-selling') {
                      $badge_class = $badge_class ? $badge_class . ' most-selling' : 'most-selling';
                    }
                    if ($value === 'most-popular') {
                      $badge_class = $badge_class ? $badge_class . ' most-popular' : 'most-popular';
                    }
                  }
                }
                ?>
                <div class="col-lg-4 col-md-6">
                  <div class="package-item">
                    <div class="pi-image">
                      <?php
                      $thumbnail_id = get_post_thumbnail_id($post_id);
                      $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full', true);
                      $fallback_image = get_field('fallback_tour_featured_image', 'option');
                      $size = 'full';
                      if ($thumbnail_id && $thumbnail_url && isset($thumbnail_url[0])) {
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                        if (empty($alt_text)) {
                          $alt_text = get_the_title();
                        }
                        echo '<img src="' . esc_url($thumbnail_url[0]) . '" class="img-fluid" alt="' . esc_attr($alt_text) . '">';
                      } else {
                        $fallback_image_url = esc_url($fallback_image ? $fallback_image : 'http://localhost/lambda/wp-content/uploads/2024/08/Kyrgyzstan-Tour.png');
                        echo '<img src="' . $fallback_image_url . '" class="img-fluid" alt="' . esc_attr(get_the_title()) . '" decoding="async">';
                      }
                      ?>
                      <?php
                      if ($tour_price && $tour_sale): ?>
                        <span class="discount"><?php $numeric_tour_sale = (int) preg_replace('/[^0-9]/', '', $tour_sale);
                        $percentage_saved = $numeric_tour_sale > 0 ? round((($numeric_tour_sale - $tour_price) / $numeric_tour_sale) * 100) : 0;
                        echo '<p>Save ' . $percentage_saved . '%</p>';
                        ?></span>
                      <?php endif; ?>
                    </div>
                    <div class="pi-content">
                      <a href="<?php echo the_permalink(); ?>">
                        <h6><?php echo get_the_title(); ?></h6>
                      </a>
                      <small class="d-none d-md-block"><?php $post_content = get_the_excerpt();
                      echo wp_trim_words($post_content, 11, '...'); ?></small>

                      <div class="pl-key-indicator d-flex justify-content-between align-items-center">
                        <?php if ($locations): ?>
                          <div class=" indicator-item location multiple">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/location.svg" alt="">
                            <small><?php echo $locations; ?></small>
                          </div>
                        <?php endif;
                        if (!empty($tour_rating)): ?>
                          <div class="indicator-item ">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/filled-star-sm.svg"
                              alt="">
                            <span> <small><?php echo $tour_rating; ?>
                                &nbsp;</small><small>(<?php echo $tour_ratings; ?>)</small></span>
                          </div>
                        <?php endif; ?>

                        <?php if (!empty($tour_dur_day)): ?>
                          <div class="indicator-item">
                            <img src="<?php echo get_parent_theme_file_uri() ?>/assets/images/icons/calendar-day.svg" alt="">
                            <small><?php echo $tour_dur_day; ?> Days</small>
                          </div>
                        <?php endif; ?>
                      </div>
                      <?php if (!empty($tour_price)): ?>
                        <div class="price-wrapper d-flex justify-content-between align-items-center">
                          <div class="price d-flex justify-content-start align-items-center">
                            <h5><?php echo $tour_price_curr . $tour_price; ?></h5>
                            <del><?php echo $tour_price_curr . $tour_sale; ?></del>
                          </div>
                          <a href="<?php echo the_permalink(); ?>" class="bh-btn bh-btn-underlined">View Detail</a>
                        </div>
                      <?php endif; ?>
                    </div>
                    <?php if ($badge_class): ?>
                      <div class="tag <?php echo esc_attr($badge_class); ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <path
                            d="M13.2621 6.94616C13.1445 6.66242 12.8689 6.47597 12.5608 6.47597H10.2667L12.496 1.46605C12.6014 1.23096 12.5771 0.959384 12.4392 0.744558C12.2974 0.529731 12.0582 0.400024 11.8029 0.400024H5.72286C5.39454 0.400024 5.10676 0.610798 5.00137 0.918851L2.71934 7.76088C2.64233 7.99192 2.67881 8.24728 2.82473 8.44589C2.9666 8.6445 3.19764 8.76205 3.44084 8.76205H6.05524L4.23529 14.6151C4.1299 14.9474 4.26772 15.3122 4.56766 15.4906C4.68926 15.5635 4.82708 15.6 4.96084 15.6C5.1554 15.6 5.35401 15.523 5.49993 15.3771L13.0999 7.77709C13.3148 7.55416 13.3796 7.22989 13.2621 6.94616Z"
                            fill="white" />
                        </svg>
                        <small>Most Selling Tour</small>
                      </div>
                    <?php endif; ?>
                    <div class="wishlist">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <g filter="url(#filter0_b_379_9366)">
                          <circle cx="16" cy="16" r="16" fill="black" fill-opacity="0.3" />
                        </g>
                        <path
                          d="M16 24C15.7437 24 15.4967 23.9072 15.3042 23.7388C14.577 23.1035 13.8759 22.5065 13.2574 21.9799L13.2542 21.9772C11.4408 20.4332 9.87485 19.0998 8.78528 17.7863C7.56731 16.3179 7 14.9257 7 13.4047C7 11.927 7.50716 10.5637 8.42795 9.56581C9.35973 8.5561 10.6383 8 12.0284 8C13.0675 8 14.019 8.3282 14.8566 8.97541C15.2793 9.3021 15.6624 9.70192 16 10.1683C16.3377 9.70192 16.7207 9.3021 17.1435 8.97541C17.9811 8.3282 18.9327 8 19.9717 8C21.3617 8 22.6404 8.5561 23.5722 9.56581C24.493 10.5637 25 11.927 25 13.4047C25 14.9257 24.4328 16.3179 23.2149 17.7862C22.1253 19.0998 20.5595 20.433 18.7463 21.9769C18.1267 22.5043 17.4245 23.1023 16.6957 23.739C16.5033 23.9072 16.2561 24 16 24ZM12.0284 9.05348C10.9363 9.05348 9.93294 9.48897 9.20303 10.2798C8.46228 11.0826 8.05428 12.1924 8.05428 13.4047C8.05428 14.6839 8.53012 15.8279 9.59703 17.1141C10.6282 18.3574 12.1621 19.6633 13.938 21.1755L13.9413 21.1782C14.5622 21.7069 15.266 22.3062 15.9985 22.9461C16.7354 22.3049 17.4403 21.7047 18.0624 21.1752C19.8382 19.663 21.3719 18.3574 22.4031 17.1141C23.4699 15.8279 23.9457 14.6839 23.9457 13.4047C23.9457 12.1924 23.5377 11.0826 22.797 10.2798C22.0672 9.48897 21.0637 9.05348 19.9717 9.05348C19.1716 9.05348 18.437 9.30758 17.7884 9.80866C17.2104 10.2554 16.8078 10.8202 16.5717 11.2153C16.4503 11.4185 16.2366 11.5398 16 11.5398C15.7634 11.5398 15.5497 11.4185 15.4283 11.2153C15.1924 10.8202 14.7897 10.2554 14.2116 9.80866C13.563 9.30758 12.8284 9.05348 12.0284 9.05348Z"
                          fill="white" />
                        <defs>
                          <filter id="filter0_b_379_9366" x="-24" y="-24" width="80" height="80"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feGaussianBlur in="BackgroundImageFix" stdDeviation="12" />
                            <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_379_9366" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_379_9366"
                              result="shape" />
                          </filter>
                        </defs>
                      </svg>
                    </div>
                  </div>
                </div><?php }
              ?>
              <?php
              echo '<div class="pagination justify-content-center">';
              echo paginate_links(
                array(
                  'total' => $custom_query->max_num_pages,
                  'current' => max(1, get_query_var('paged')),
                ),
              );
              echo '</div>';
              ?>
            <?php } else {
              get_template_part('template-parts/empty-state');

            } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>