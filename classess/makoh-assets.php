<?php

class Makoh_Slider_Assets
{

    public function __construct()
    {
        // Hook the enqueue method to WordPress
        add_action('wp_enqueue_scripts', [$this, 'conditionally_enqueue_assets']);
    }

    public function conditionally_enqueue_assets()
    {
        // Check if the page has the slider shortcode or if it's a specific page for the slider
        if ($this->is_slider_in_use()) {
            $this->enqueue_assets();
        }
    }

    // Function to enqueue the plugin assets
    private function enqueue_assets()
{
    // Enqueue styles
    wp_enqueue_style('makoh-slider-bootstrap', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/bootstrap.min.css');
    wp_enqueue_style('makoh-slider-meanmenu', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/meanmenu.css');
    wp_enqueue_style('makoh-slider-all', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/all.min.css');
    wp_enqueue_style('makoh-slider-swiper', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/swiper-bundle.min.css');
    wp_enqueue_style('makoh-slider-magnific-popup', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/magnific-popup.css');
    wp_enqueue_style('makoh-slider-animate', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/animate.css');
    wp_enqueue_style('makoh-slider-nice-select', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/nice-select.css');
    wp_enqueue_style('makoh-slider-style', MAKOH_SLIDER_PLUGIN_URL . 'assets/css/style.css');

    // Add favicon (can also be placed in the header)
    echo '<link rel="shortcut icon" href="' . MAKOH_SLIDER_PLUGIN_URL . 'assets/images/favicon.png" />';

    // Enqueue scripts
    wp_enqueue_script('jquery'); // Use the built-in WordPress jQuery
    wp_enqueue_script('makoh-slider-bootstrap', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/bootstrap.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-meanmenu', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/meanmenu.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-swiper', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/swiper-bundle.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-counterup', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/jquery.counterup.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-wow', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/wow.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-pace', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/pace.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-magnific-popup', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/magnific-popup.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-nice-select', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/nice-select.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-isotope', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/isotope.pkgd.min.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-waypoints', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/jquery.waypoints.js', ['jquery'], null, true);
    wp_enqueue_script('makoh-slider-script', MAKOH_SLIDER_PLUGIN_URL . 'assets/js/script.js', ['jquery'], null, true);
}

    // Function to check if the slider shortcode or widget is in use on the page
    private function is_slider_in_use()
    {
        // Check if shortcode exists in post content
        global $post;
        if (has_shortcode($post->post_content, 'makoh_slider')) {
            return true;
        }

        // Add additional conditions for custom post types or widget areas if needed
        return false;
    }
}

//initialize the assets
new Makoh_Slider_Assets();
