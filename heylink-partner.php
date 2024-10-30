<?php
/**
 * Plugin Name:       Heylink Partner
 * Plugin URI:        https://docs.heylink.com/help/cms/WooCommerce%20(Wordpress)
 * Description:       The official Heylink order tracking plugin for WooCommerce.
 * Version:           1.0.0
 * Requires at least: 3
 * Requires PHP:      5.6
 * Author:            Heylink
 * Author URI:        https://heylink.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       heylink-partner

 */
// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit;


// Check that we're using the required version of PHP
if ( version_compare( PHP_VERSION, 5.6, '<' ) ) {
	if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {
		if ( ! is_plugin_active( plugin_basename( __FILE__ ) ) ) {
			echo '<strong>Heylink Plugin</strong> requires PHP 5.6 or higher, and the plugin has now deactivated itself.<br/>
			Ask your hosting company or your system administrator to upgrade your PHP.';

			exit;
		}
		deactivate_plugins( __FILE__ );
	}
} else {
	// initialize plugin
   	include_once plugin_dir_path( __FILE__ ) . 'includes/init.php';
  
}


// function heylink_settings_link($links) { 
//         $settings_link = '<a href="options-general.php?page=heylink_partner_plugin">Settings</a>'; 
//       array_unshift($links, $settings_link); 
//       return $links; 
//     }
//     $plugin = plugin_basename(__FILE__); 
//     add_filter("plugin_action_links_$plugin", 'heylink_settings_link' );



