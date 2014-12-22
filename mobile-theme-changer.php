<?php
/**
 * Plugin Name: Digistal Sports Mobile Theme Switcher
 * Plugin URI: http://smronju.me
 * Description: This plugin modifies several things in wordpress backend section for digistal sports.
 * Version: 1.0
 * Author: Mohammad Shoriful Islam Ronju
 * Author URI: http://smronju.me
 * License: GPL2
 */

// define('MOBILE_THEME_SWITCHER', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
require_once('lib/Mobile_Detect.php');


function my_mobile_theme_changer($theme){
	$mobile = new Mobile_Detect;
	
	if ($mobile->isMobile()){
		$theme = 'ds_mobile';
	}

	return $theme;
}

add_filter('template', 'my_mobile_theme_changer');
add_filter('stylesheet', 'my_mobile_theme_changer');
add_filter('option_template', 'my_mobile_theme_changer');
add_filter('option_stylesheet', 'my_mobile_theme_changer');