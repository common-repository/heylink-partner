<?php
/**
 * Define plugin namespace
 * 
 * Create the plugin object
 * 
 * @since 1.0.0
 */
require_once 'Helper.php';
//require_once 'functions/admin.php';
class Heylink {
  function __construct()
    {
        $this->includes_dir = plugin_dir_path( __DIR__ );
        $this->root_dir = plugin_dir_path( dirname( __DIR__ ) );

       
    }

}

