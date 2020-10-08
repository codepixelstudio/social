<?php

	// create enqueued script/style handle reference
		function store_admin_init_enqueued_scripts() {
			
			global $wp_scripts;
	        global $wp_styles;

	        $scripts = $wp_scripts;
	        $styles  = $wp_styles;

	        $scripts_storage = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_init/scripts.json';
	        $styles_storage  = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_init/styles.json';

	        // check if scripts.json exists
	        if ( file_exists( $scripts_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $scripts_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	        // check if styles.json exists
	        if ( file_exists( $styles_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $styles_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	    }

    add_action( 'admin_init', 'store_admin_init_enqueued_scripts' );

    // create enqueued script/style handle reference
		function store_admin_head_enqueued_scripts() {
			
			global $wp_scripts;
	        global $wp_styles;
	        global $plugin_path;

	        $scripts = $wp_scripts;
	        $styles  = $wp_styles;

	        $scripts_storage = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_head/scripts.json';
	        $styles_storage  = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_head/styles.json';

	        // check if scripts.json exists
	        if ( file_exists( $scripts_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $scripts_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	        // check if styles.json exists
	        if ( file_exists( $styles_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $styles_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	    }

    add_action( 'admin_head', 'store_admin_head_enqueued_scripts' );

    // create enqueued script/style handle reference
		function store_admin_enqueued_scripts() {
			
			global $wp_scripts;
	        global $wp_styles;
	        global $plugin_path;

	        $scripts = $wp_scripts;
	        $styles  = $wp_styles;

	        $scripts_storage = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_enqueue/scripts.json';
	        $styles_storage  = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/admin_enqueue/styles.json';

	        // check if scripts.json exists
	        if ( file_exists( $scripts_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $scripts_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	        // check if styles.json exists
	        if ( file_exists( $styles_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $styles_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	    }

    add_action( 'admin_enqueue_scripts', 'store_admin_enqueued_scripts' );

    // remove Visual Composer nag
	    function remove_vc_message() {
		    
		    if ( is_admin() ) {
		        
		        setcookie( 'vchideactivationmsg', '1', strtotime( '+3 years' ), '/' );
		        setcookie( 'vchideactivationmsg_vc11', ( defined( 'WPB_VC_VERSION' ) ? WPB_VC_VERSION : '1' ), strtotime( '+3 years' ), '/' );
		    
		    }

		}

    add_action( 'admin_init', 'remove_vc_message' );

    // create enqueued script/style handle reference
		function store_wp_enqueued_scripts() {
			
			global $wp_scripts;
	        global $wp_styles;
	        global $plugin_path;

	        $scripts = $wp_scripts;
	        $styles  = $wp_styles;

	        $scripts_storage = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/wp_enqueue/scripts.json';
	        $styles_storage  = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/wp_enqueue/styles.json';

	        // check if scripts.json exists
	        if ( file_exists( $scripts_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $scripts_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	        // check if styles.json exists
	        if ( file_exists( $styles_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $styles_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	    }

    add_action( 'wp_enqueue_scripts', 'store_wp_enqueued_scripts' );

    // create enqueued script/style handle reference
		function store_wp_head_scripts() {
			
			global $wp_scripts;
	        global $wp_styles;
	        global $plugin_path;

	        $scripts = $wp_scripts;
	        $styles  = $wp_styles;

	        $scripts_storage = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/wp_head/scripts.json';
	        $styles_storage  = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/hhs/cache/utility/wp_head/styles.json';

	        // check if scripts.json exists
	        if ( file_exists( $scripts_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $scripts_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $scripts_storage, json_encode( $scripts, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	        // check if styles.json exists
	        if ( file_exists( $styles_storage ) ) {

	        	// evaluate file modification time
	        	if ( time() - filemtime( $styles_storage ) > 1 ) {

	        		// re-generate if file is older than 24 hours
		        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

		        }	

	        } else {

	        	// generate file
	        	file_put_contents( $styles_storage, json_encode( $styles, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );

	        }

	    }

    add_action( 'wp_head', 'store_wp_head_scripts' );

?>