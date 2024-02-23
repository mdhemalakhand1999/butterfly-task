<?php
namespace Butterfly_Task_1\Ajax;
if( !defined( "ABSPATH" ) ) exit;
/**
 * Create a class for ajax callback
 */
class Butterfly_Ajax {
    private static $_instance = null;
    /**
     * Create a function which will return instance
     * 
     * @package Butterfly Task 1
     * 
     * @since 1.0.0
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
     * Create a constructor of this class
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function __construct() {
        $this->register_ajax_actions();
    }
    public function register_ajax_actions() {
        add_action('wp_ajax_butterfly_handle_form', array($this, 'wp_ajax_send_form_data_callback'));
        add_action('wp_ajax_nopriv_butterfly_handle_form', array($this, 'wp_ajax_send_form_data_callback'));
    }
    /**
     * Create an ajax callback for form handle
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function wp_ajax_send_form_data_callback() {
        /**
         * Check if nonce is not verified
         * 
         * then send a json error message
         * 
         * @return success or failed
         * @since 1.0.0
         */
        if(!isset($_POST['nonce'])) {
            wp_send_json_error(
                array(
                    'message' => 'Nonce is not valid'
                ),
            );
            die();
        }
        /**
         * Check if nonce is varified
         * 
         * @since 1.0.0
         * 
         * @checked true/false
         */
        if(wp_verify_nonce( $_POST['nonce'], 'butterfly-form' )) {
            $username = isset( $_POST['username'] ) ? sanitize_text_field( $_POST['username'] ): '';
            $email = isset( $_POST['email'] ) ? sanitize_email( $_POST['email'] ):'';
            $age = isset( $_POST['age'] ) ? absint($_POST['age']) :'';
            return wp_send_json_success( 
                array(
                    'username' => $username,
                    'email'=> $email,
                    'age'=> $age
                ),
                200, //json code
            );
        }
        die();
    }
}
new Butterfly_Ajax();