<?php
add_action('wp_enqueue_scripts', 'boldhimalaya_enqueue_scripts');
function boldhimalaya_enqueue_scripts()
{
wp_enqueue_style('dashicons');
wp_enqueue_style('light-gallery', 'https://cdn.jsdelivr.net/npm/lightgallery@1.6.11/dist/css/lightgallery.min.css',
array(), '1.0.0');
wp_enqueue_style('jquery-ui-style', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), '1.12.1');
wp_enqueue_style('flatpickr-style', 'https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css',
array(), '4.6.13', 'all', );
wp_enqueue_style('bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(),
'5.3.3', null );
wp_enqueue_style('slick-bs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0');
wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');


wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true);
wp_enqueue_script('jquery-ui-core', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true);
wp_enqueue_script('jquery-ui-slider', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1',
true);
wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js',
array('jquery'), 5.1, true);
wp_enqueue_script('flatpickr-script', 'https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js',
array(), '4.6.13', true);
wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
wp_enqueue_script('scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), null, true);
wp_enqueue_script('typed', 'https://cdn.jsdelivr.net/npm/typed.js@2.0.11', array('jquery'), 1.6, true);
wp_enqueue_script('light-gallery', 'https://cdn.jsdelivr.net/npm/lightgallery@1.6.11/dist/js/lightgallery-all.min.js', array('jquery'), 1.6, true);
wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'),
null, true);
 wp_enqueue_script('jquery-ui-core', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true);
wp_enqueue_script('jquery-ui-slider', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), '1.12.1', true);
wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'jquery-ui-core',
'jquery-ui-slider'), '1.0.0', true);
wp_enqueue_script('custom-form-js', get_template_directory_uri() . '/assets/js/form.js', array('jquery', 'jquery-ui-core',
'jquery-ui-slider'), '1.0.0', true);
}