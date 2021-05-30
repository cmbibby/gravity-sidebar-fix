<?php

/**
 * Plugin Name:     Gravity Sidebar Fix
 * Plugin URI:      https://chrisbibby.com.au
 * Description:     Fixes the width of the sidebar in gravity forms admin
 * Author:          Chris Bibby
 * Author URI:      https://chrisbibby.com.au
 * Text Domain:     gravity-sidebar-fix
 * Domain Path:     /languages
 * Version:         1.0.0
 * GitHub Plugin URI: cmbibby/gravity-sidebar-fix
 *
 * @package         Gravity_Sidebar_Fix
 */


class Gravity_Sidebar_Fix
{

	public static function init()
	{
		add_action('admin_enqueue_scripts', self::enqueue());
	}

	public static function enqueue()
	{
		wp_register_style('gravity-sidebar-fix', plugin_dir_url(__FILE__) . '/css/gravity-sidebar-fix.css', false, '1.0');
		wp_enqueue_style('gravity-sidebar-fix');
	}
}

Gravity_Sidebar_Fix::init();
