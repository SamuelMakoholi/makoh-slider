<?php

/**
 * Plugin Name: Makoh Slider
 * Description: Makoh Slider Plugin is a best for univerisities who want to show their latest posts on the front page but you can put anywhere you want. It has pixel perfect design, mobile responsive editing, and more. Get started now!
 * Plugin URI: https://github.com/SamuelMakoholi/makoh-slider
 * Author: Samuel Makoholi
 * Version: 1.0.0
 *
 * Text Domain: makoh-slider
 *
 * @package Makoh Slider
 *
 * Makoh Slider is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * Makoh Slider is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//define constants
// Define constants
define( 'MAKOH_SLIDER_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'MAKOH_SLIDER_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

// Include the class responsible for enqueuing assets
require_once MAKOH_SLIDER_PLUGIN_DIR . 'classess/makoh-assets.php';
// Include shortcode handler
require_once MAKOH_SLIDER_PLUGIN_DIR . 'includes/slider-shortcode.php';





?>