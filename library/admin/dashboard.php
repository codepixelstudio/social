<?php

	// define widgets/metaboxes to disable
		function disable_default_dashboard_widgets() {

			// dashboard widgets
			remove_meta_box('dashboard_right_now', 'dashboard', 'core');
			remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
			remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
			remove_meta_box('dashboard_plugins', 'dashboard', 'core');
			remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
			remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
			remove_meta_box('dashboard_primary', 'dashboard', 'core');
			remove_meta_box('dashboard_secondary', 'dashboard', 'core');
			remove_meta_box('dashboard_activity', 'dashboard', 'core');
			remove_meta_box('rg_forms_dashboard', 'dashboard', 'core');

			// post edit screen
			remove_meta_box('commentsdiv', 'page', 'normal');

		}

	add_action( 'admin_init', 'disable_default_dashboard_widgets' );

	// define custom dashboard widget
		function custom_dashboard_widgets() {

	        wp_add_dashboard_widget(

	            'hhs_dashboard_widget',
	            get_bloginfo( 'name' ) . ' <em>Site Info</em>',
	            'central_dashboard_widget'

	        );

	    }

	remove_action( 'welcome_panel', 'wp_welcome_panel' );

	// create custom dashboard widget
	    function central_dashboard_widget() {

	    	get_template_part( 'parts/admin/dashboard/dashboard', 'default' );

	    }

    add_action( 'wp_dashboard_setup', 'custom_dashboard_widgets' );

?>