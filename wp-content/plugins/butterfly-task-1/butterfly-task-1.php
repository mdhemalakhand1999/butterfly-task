<?php
/**
 * @package Butterfly Task 1
 */
/*
Plugin Name: Butterfly Task 1
Plugin URI: https://butterfly.com/
Description: Butterfly Task 1 is an opensource project for ajax, hook and shortcode api. Task provided by Nazmul islam nayan vai.
Version: 1.0.0
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Butterfly
Author URI: https://butterfly.com/wp/plugins/task-1
License: GPLv2 or later
Text Domain: butterfly-task-1
*/

// constants
define("BUTTERFLY_PATH", plugin_dir_url( __FILE__ ) );
// include all essential files
require_once(plugin_dir_path(__FILE__) . '/includes/menu/menu-init.php');
require_once(plugin_dir_path(__FILE__) . '/includes/ajax/butterfly-ajax.php');
require_once(plugin_dir_path(__FILE__) . '/includes/shortcode/shortcode-init.php');
require_once(plugin_dir_path(__FILE__) . '/essentials/activation-class.php');
require_once(plugin_dir_path(__FILE__) . '/includes/assets.php');

add_action('butterfly_before_form', function() {
    echo "<h2>Welcome</h2>";
});
add_action('butterfly_after_form', function() {
    echo "<h2>Bye</h2>";
});