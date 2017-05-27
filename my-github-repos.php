<?php
/**
 * Plugin Name: My Github Repos
 * Description: Display Github user repository in WordPress widget
 * Version: 1.0
 * Author: Touheed Hasan
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')) {
	exit;
}

// Include Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-scripts.php');

// Include class
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-class.php');

// Register widget
function mgr_register_widget() {
	register_widget('WP_My_Github_Repos');
}

add_action('widgets_init', 'mgr_register_widget');