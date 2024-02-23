<?php
namespace Butterfly_Task_1\Essentials;
/**
 * Create a class where all activation functions will be declare
 * 
 * @package Butterfly Task 1
 * 
 * @since 1.0.0
 */
class Activation_Class {
    // create an instance for class
    private static $_instance = null;

    /**
     * Create a function for create class own instance
     * 
     * @param static $_instance this is instance variable which will store object.
     * 
     * @since 1.0.0
     */
    public static function instance() {
        if( ! is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * Create a constructor method of this class
     * 
     * Here will will put all essential action hooks.
     */
    public function __construct() {
        // register_activation_hook( __FILE__, array( $this,"register_menu" ) );
        add_action("init", array( $this,"register_menu") );
    }
    /**
     * Register Menu
     * 
     * Here will will register all our essential menu and submenu. This function will run only when plugin is activate.
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function register_menu() {
        new \Butterfly_Task_1\Menu\Menu_Init();
    }
}

new Activation_Class();
