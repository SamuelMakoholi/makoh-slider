<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


//short code for the slider

function makoh_slider_shortcode( $atts) {
    ob_start();
    include MAKOH_SLIDER_PLUGIN_DIR . 'slider-tamplates/swipe-slider.php';
    return ob_get_clean();
}

//adding the short code

add_shortcode('makoh_slider', 'makoh_slider_shortcode');
