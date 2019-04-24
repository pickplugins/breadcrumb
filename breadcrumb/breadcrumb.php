<?php
/*
Plugin Name: Breadcrumb
Plugin URI: http://pickplugins.com
Description: Awesome Breadcrumb for wordpress.
Version: 2.0.6
Author: pickplugins
Author URI: http://pickplugins.com
Text Domain: breadcrumb
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


class BreadcrumbMain{
	
	public function __construct(){
		
		define('breadcrumb_plugin_url', plugins_url('/', __FILE__)  );
		define('breadcrumb_plugin_dir', plugin_dir_path( __FILE__ ) );
		define('breadcrumb_wp_url', 'https://wordpress.org/plugins/breadcrumb/' );
		define('breadcrumb_wp_reviews', 'http://wordpress.org/support/view/plugin-reviews/breadcrumb' );
		define('breadcrumb_pro_url','' );
		define('breadcrumb_demo_url', 'http://pickplugins.com' );
		define('breadcrumb_conatct_url', 'http://pickplugins.com/contact' );
		define('breadcrumb_qa_url', 'http://www.pickplugins.com/questions/' );
		define('breadcrumb_plugin_name', 'Breadcrumb' );
		define('breadcrumb_plugin_version', '2.0.6' );
		define('breadcrumb_customer_type', 'pro' );	 // pro & free	
		define('breadcrumb_share_url', 'https://wordpress.org/plugins/breadcrumb/' );
		define('breadcrumb_tutorial_video_url', '//www.youtube.com/embed/8OiNCDavSQg?rel=0' );
		define('breadcrumb_textdomain', 'breadcrumb' );


        require_once( plugin_dir_path( __FILE__ ) . 'includes/class-settings-tabs.php');
		require_once( plugin_dir_path( __FILE__ ) . 'includes/functions.php');
        require_once( plugin_dir_path( __FILE__ ) . 'includes/functions-settings.php');

		require_once( plugin_dir_path( __FILE__ ) . 'includes/themes-css.php');
		
		require_once( plugin_dir_path( __FILE__ ) . 'includes/class-breadcrumb.php');
		require_once( plugin_dir_path( __FILE__ ) . 'includes/class-shortcodes.php');		
		require_once( plugin_dir_path( __FILE__ ) . 'includes/class-settings.php');		
		
		
		add_action( 'wp_enqueue_scripts', array( $this, 'breadcrumb_front_scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'breadcrumb_admin_scripts' ) );
		add_filter('widget_text', 'do_shortcode');
		add_action( 'plugins_loaded', array( $this, 'breadcrumb_load_textdomain' ));
		
		}
	
	public function breadcrumb_load_textdomain() {
		
		load_plugin_textdomain( breadcrumb_textdomain, false, plugin_basename( dirname( __FILE__ ) ) . '/languages/' ); 
		}
		
	
	public function breadcrumb_front_scripts(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('breadcrumb_js', plugins_url( 'assets/front/js/scripts.js' , __FILE__ ) , array( 'jquery' ));
		wp_enqueue_style('breadcrumb_style', breadcrumb_plugin_url.'assets/front/css/style.css');
	
	}
	
	
	public function breadcrumb_admin_scripts(){

        $screen = get_current_screen();

        if (  $screen->base == 'toplevel_page_breadcrumb_settings' ){

            wp_enqueue_script('wp-color-picker');
            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_script('codemirror', plugins_url( 'assets/admin/js/codemirror.js' , __FILE__ ) , array( 'jquery' ));
            wp_enqueue_style('codemirror', breadcrumb_plugin_url.'assets/admin/css/codemirror.css');

            wp_enqueue_script('settings-tabs', plugins_url( 'assets/admin/js/settings-tabs.js' , __FILE__ ) , array( 'jquery' ));
            wp_enqueue_style('settings-tabs', breadcrumb_plugin_url.'assets/admin/css/settings-tabs.css');

        }









	}
	
	
	
	}

new BreadcrumbMain();

