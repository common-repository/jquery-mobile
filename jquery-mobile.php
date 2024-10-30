<?php
/*
Plugin Name: jQuery Mobile
Plugin URI: http://www.ramoonus.nl/wordpress/jquery-mobile/
Description: jQuery Mobile: Touch-Optimized Web Framework for Smartphones & Tablets. Requires jQuery 1.6 and WordPress 3.2
Version: 1.3.2
Author: Ramoonus
Author URI: http://www.ramoonus.nl/
*/

function rw_jquery_mobile() {
	
		// javascript
		wp_deregister_script('jquery-mobile'); // deregister
		wp_enqueue_script('jquery-mobile', plugins_url('/js/jquery.mobile-1.3.2.min.js', __FILE__), array("jquery"), '1.3.2'); // forces jQuery to load
		
		// css
		wp_deregister_style('jquery-mobile'); // deregister
		wp_enqueue_style('jquery-mobile', plugins_url('/css/jquery.mobile-1.3.2.min.css', __FILE__), false, '1.3.2');
		
} 
add_action('wp_enqueue_scripts', 'rw_jquery_mobile');
?>