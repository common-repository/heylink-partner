<?php
/**
 * Define plugin namespace
 * 
 * Create the plugin object
 * 
 * @since 1.0.0
 */
include_once plugin_dir_path( __FILE__ ) . 'Plugin.php';
 	register_activation_hook( __FILE__, 'api_create' );
    register_activation_hook( __FILE__, 'api_data_insert' );






