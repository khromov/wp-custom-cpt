<?php
/*
Plugin Name: Custom Post Types
Plugin URI:
Description: Provides additional post types
Version: 2014.04.24
Author: khromov
Author URI: http://profiles.wordpress.org/khromov/
License: GPL2
*/

add_action('plugins_loaded', function()
{
	if(defined('CUSTOM_CPT_DEVELOPMENT_MODE') && CUSTOM_CPT_DEVELOPMENT_MODE !== true)
	{
		foreach (glob(__DIR__ . "/cpt/*.php") as $filename)
			include $filename;
	}
});