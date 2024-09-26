<?php

class Makoh_Slider_Assets {

    public function __construct() {
        // Hook the enqueue method to WordPress
        add_action('wp_enqueue_scripts', [$this, 'conditionally_enqueue_assets']);
    }

    public function conditionally_enqueue_assets() {
        // Check if the page has the slider shortcode or if it's a specific page for the slider
        if ( $this->is_slider_in_use() ) {
            $this->enqueue_assets();
        }
    }

    // Function to enqueue the plugin assets
    private function enqueue_assets() {
        $plugin_url = plugin_dir_url(__FILE__);

        // Enqueue styles
        wp_enqueue_style('makoh-slider-bootstrap', $plugin_url . 'assets/css/bootstrap.min.css');
        wp_enqueue_style('makoh-slider-meanmenu', $plugin_url . 'assets/css/meanmenu.css');
        wp_enqueue_style('makoh-slider-all', $plugin_url . 'assets/css/all.min.css');
        wp_enqueue_style('makoh-slider-swiper', $plugin_url . 'assets/css/swiper-bundle.min.css');
        wp_enqueue_style('makoh-slider-magnific-popup', $plugin_url . 'assets/css/magnific-popup.css');
        wp_enqueue_style('makoh-slider-animate', $plugin_url . 'assets/css/animate.css');
        wp_enqueue_style('makoh-slider-nice-select', $plugin_url . 'assets/css/nice-select.css');
        wp_enqueue_style('makoh-slider-style', $plugin_url . 'assets/css/style.css');

        // Favicon can be added in the header
        echo '<link rel="shortcut icon" href="' . $plugin_url . 'assets/images/favicon.png" />';

        // Enqueue scripts
        wp_enqueue_script('jquery'); // Use the built-in WordPress jQuery instead of manually including it
        wp_enqueue_script('makoh-slider-bootstrap', $plugin_url . 'assets/js/bootstrap.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-meanmenu', $plugin_url . 'assets/js/meanmenu.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-swiper', $plugin_url . 'assets/js/swiper-bundle.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-counterup', $plugin_url . 'assets/js/jquery.counterup.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-wow', $plugin_url . 'assets/js/wow.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-pace', $plugin_url . 'assets/js/pace.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-magnific-popup', $plugin_url . 'assets/js/magnific-popup.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-nice-select', $plugin_url . 'assets/js/nice-select.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-isotope', $plugin_url . 'assets/js/isotope.pkgd.min.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-waypoints', $plugin_url . 'assets/js/jquery.waypoints.js', ['jquery'], null, true);
        wp_enqueue_script('makoh-slider-script', $plugin_url . 'assets/js/script.js', ['jquery'], null, true);
    }

    // Function to check if the slider shortcode or widget is in use on the page
    private function is_slider_in_use() {
        // Check if shortcode exists in post content
        global $post;
        if ( has_shortcode( $post->post_content, 'makoh_slider_shortcode' ) ) {
            return true;
        }

        // Add additional conditions for custom post types or widget areas if needed
        return false;
    }
}
