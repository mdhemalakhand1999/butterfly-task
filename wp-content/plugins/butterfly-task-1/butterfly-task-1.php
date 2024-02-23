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
// define all constant
define("BUTTERFLY_PATH_VIEW", plugins_url("views", __FILE__));
// include all essential files
require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');
require_once(plugin_dir_path(__FILE__) . "/essentials/activation-class.php");