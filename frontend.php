<?php

	/***
	 *	Date: 2018-05-04
	 */

	if( !class_exists( 'rDepoimentos_Frontend' ) ){
		class rDepoimentos_Frontend {

			public static function init(){
				add_action( 'wp_enqueue_scripts', array( __CLASS__, '_assets' ), 10 );
			}


			// add css & js on frontend
			public static function _assets(){
				
				if( apply_filters( 'r/depoimentos/css/include', true ) ){
				
					// css file
					$theme_css_folder = apply_filters( 'r/depoimentos/css/theme_folder', '/assets/plugins/r-depoimentos/' );
					$theme_css_folder_uri = get_template_directory_uri() . $theme_css_folder;
					$theme_css_folder_path = get_template_directory() . $theme_css_folder;

					$css_file = 'r-depoimentos.css';

					$file_url = plugins_url( '/assets/css/'. $css_file, __FILE__ );

					if( file_exists( $theme_css_folder_path . $css_file ) ){
						$file_url = $theme_css_folder_uri . $css_file;
					}

					wp_register_style( 'r-depoimentos', $file_url, array(), R_DEPOE_VERSION, 'all' );
					wp_enqueue_style( 'r-depoimentos' );
				}
			}
		}
	}
