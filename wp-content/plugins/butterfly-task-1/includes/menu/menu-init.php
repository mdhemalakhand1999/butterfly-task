<?php
namespace Butterfly_Task_1\Menu;
if ( !defined('ABSPATH') ) exit;
/**
 * Create all essential menu and submenu in this class
 * 
 * @package Butterfly Task 1
 * 
 * @since 1.0.0
 */

class Menu_Init {
    // create an instance
    private static $_instance = null;
    /**
     * Create a method for create own class instance
     * 
     * @since 1.0.0
     * 
     * @return static $_instance this function will return a static instance.
     */
    public function instance() {
        if( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * Create a constructor for admin page
     * 
     * Here we will create a constructor where we will create main and submenu page
     * 
     * @since 1.0.0
     * 
     * @return void this constructor will not return anything
     */
    public function __construct() {
        add_action( "admin_menu", array( $this, "butterfly_admin_menu" ) );
    }
    /**
     * Create a admin menu for Butterfly task plugin
     * 
     * @since 1.0.0
     * 
     * @return void this function will not return anything
     */
    public function butterfly_admin_menu() {
        // create main menu
        add_menu_page(
            __("Butterfly Task", "butterfly-task-1"), // page title
            __("Butterfly Task", "butterfly-task-1"), // menu title
            "manage_options", // capability
            "butterfly-task", // slug
            array( $this,"butterfly_task_callback" ), // callback
            "dashicons-admin-settings", // icon
            10 // priority
        );
    }
    /**
     * Output for butterfly task page
     * 
     * Here we will put output for butterfly task menu.
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function butterfly_task_callback() {
        ob_start();
        include( ABSPATH ."wp-content/plugins/butterfly-task-1/views/menu-task-panel.php");
        echo ob_get_clean();
    }
}