<?php
/*
Plugin Name: Perfect Image Quality
Description: Disable WordPress's built-in image quality reduction.
Version: 1.0.0
Author: Leland Fiegel
Author URI: https://le.land/
Text Domain: perfect-image-quality
License: GPLv2 or later
License URI: LICENSE
*/

/**
 * Function to return 100 image quality, passed to jpeg_quality filter
 * No args needed, 100 should be returned in all contexts
 *
 * @url https://developer.wordpress.org/reference/hooks/jpeg_quality/
 */
function perfect_image_quality() {
	return 100;
}
add_filter( 'jpeg_quality', 'perfect_image_quality' );
