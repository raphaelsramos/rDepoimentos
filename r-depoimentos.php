<?php
	
/*
Plugin Name: rDepoimentos
Plugin URI: https://www.raphaelramos.com.br/wp/plugins/r-depoimentos/
Description: Depoimentos
Author: Raphael Ramos
Author URI: https://www.raphaelramos.com.br/
Version: 0.1.1
License: GPLv2 or later
Text Domain: r-depoimentos
*/

	/***
	 *	Date: 2018-06-13
	 */
	
	define( 'R_DEPOE_PATH',	plugin_dir_path( __FILE__ ) );
	define( 'R_DEPOE_URL',	plugins_url( '', __FILE__ ) );
	define( 'R_DEPOE_VERSION',	'0.1.1' );

	if( !class_exists( 'rCore' ) ){
		require_once 'inc/class/array.php';
		require_once 'inc/class/html.php';
		require_once 'inc/class/json.php';
		require_once 'inc/class/string.php';
	}
	
	require_once 'backend.php';
	if( class_exists( 'rDepoimentos_Backend' ) ){
		rDepoimentos_Backend::init();
		
		register_activation_hook( __FILE__, 'r_depoe_activate' );
		function r_depoe_activate(){
			rDepoimentos_Backend::activate();
		}

		register_deactivation_hook( __FILE__, 'r_depoe_deactivate' );
		function r_depoe_deactivate(){
			rDepoimentos_Backend::deactivate();
		}
	}

	require_once 'frontend.php';
	if( class_exists( 'rDepoimentos_Frontend' ) ){
		rDepoimentos_Frontend::init();
	}
