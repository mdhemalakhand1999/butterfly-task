<?php
namespace Butterfly_Task_1;
/**
 * Create a class for register all important assets
 * 
 * @package butterfly-task-1
 * 
 * @since 1.0.0
 */
class Assets {
    // required variables
    private static $instance = null;
    /**
     * Create a function for register instance of own class
     * 
     * @since 1.0.0
     * 
     * @return static $_instance this will return own class instance
     */
    public static function instance() {
        if( is_null( self::$instance ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    /**
     * Create a constructor of assets class
     * 
     * @since 1.0.0
     * 
     * @return void
     */
    public function __construct() {
        add_action( "wp_enqueue_scripts", array( $this,"enqueue_all_required_files" ) );
        add_action( "admin_enqueue_scripts", array( $this,"enqueue_all_required_files" ) );
    }
    /**
     * Enqueue all required files
     */
    public function enqueue_all_required_files() {
        wp_enqueue_script( 'butterfly-js', BUTTERFLY_PATH. '/assets/js/main.js', array( 'jquery' ), true );
        wp_localize_script( 'butterfly-js', 'butterfly_ajax', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce'  => wp_create_nonce('butterfly-form'),
        ) );
    }
}
new Assets();