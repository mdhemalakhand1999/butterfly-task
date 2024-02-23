<?php
namespace Butterfly_Task_1\Shortcode;
/**
 * Create shortcode
 * 
 * In this class we will create a shortcode
 * 
 * @since 1.0.0
 */
if ( !defined('ABSPATH') ) exit;
class Butterfly_Shortcode {
    /**
     * all required methods
     */
    private static $_instance = null;

    /**
     * Create a function for class instance
     * 
     * @package 1.0.0
     * 
     * @return static $_instance
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    /**
     * Create class own constructor
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function __construct() {
        add_action( 'init', array( $this, 'butterfly_shortcode_register' ) );
    }
    /**
     * Function for register shortcode
     */
    public function butterfly_shortcode_register() {
        add_shortcode( "butterfly_form", array( $this, "butterfly_form_callback" ) ); // tag, callback, priority, arguments
    }
    /**
     * Create a output callback for butterfly form
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function butterfly_form_callback( $atts ) {
        $defaults = array(
            'username' => '',
            'email' => '',
            'age' => ''
        );
        $atts = shortcode_atts( $defaults, $atts, 'butterfly_form' ); //default, attrubutes, tag
        ob_start();
        include( ABSPATH ."wp-content/plugins/butterfly-task-1/views/shortcode/form.php");
        $content = ob_get_clean();
        return $content;
    }
}

new Butterfly_Shortcode();