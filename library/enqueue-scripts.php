<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


// Check to see if rev-manifest exists for CSS and JS static asset revisioning
//https://github.com/sindresorhus/gulp-rev/blob/master/integration.md

if ( ! function_exists( 'foundationpress_asset_path' ) ) :

	function foundationpress_asset_path( $filename ) {

		$filename_split = explode( '.', $filename );
		$dir            = end( $filename_split );
		$manifest_path  = dirname( dirname( __FILE__ ) ) . '/dist/assets/' . $dir . '/rev-manifest.json';

		if ( file_exists( $manifest_path ) ) {

			$manifest = json_decode( file_get_contents( $manifest_path ), true );

		} else {

			$manifest = array();

		}

		if ( array_key_exists( $filename, $manifest ) ) {

			return $manifest[ $filename ];

		}

		return $filename;

	}

endif;

// check to see if core scripts function exists
if ( ! function_exists( 'foundationpress_scripts' ) ) :

	// scripst and styles
	function foundationpress_scripts() {

		// main stylesheet
		wp_enqueue_style( 'main-stylesheet', get_stylesheet_directory_uri() . '/dist/assets/css/' . foundationpress_asset_path( 'state.ui.css' ), array(), '2.10.4', 'all' );

		// deregister the jquery version bundled with WordPress
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header
		wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

		// Deregister the jquery-migrate version bundled with WordPress
		wp_deregister_script( 'jquery-migrate' );

		// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );

		// enqueue jQuery migrate -> uncomment the line below to enable
		// wp_enqueue_script( 'jquery-migrate' );

		// site.app
		wp_enqueue_script( 'foundation', get_stylesheet_directory_uri() . '/dist/assets/js/' . foundationpress_asset_path( 'state.app.js' ), array( 'jquery' ), '2.10.4', true );

		// FontAwesome via CDN
		//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );

	}

	// action reference
	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );

endif;
