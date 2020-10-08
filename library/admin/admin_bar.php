<?php

	// define custom toolbar
		function configure_custom_toolbar( $wp_admin_bar ) {

			$wp_admin_bar->remove_node( 'comments' );
			$wp_admin_bar->remove_node( 'wp-logo' );
			$wp_admin_bar->remove_node( 'archive' );
			$wp_admin_bar->remove_node( 'new-content' );
			$wp_admin_bar->remove_node( 'menu-toggle' );
			$wp_admin_bar->remove_node( 'my-sites' );
			$wp_admin_bar->remove_node( 'site-name' );
			$wp_admin_bar->remove_node( 'updates' );
			$wp_admin_bar->remove_node( 'logout' );
			$wp_admin_bar->remove_node( 'view' );
			$wp_admin_bar->remove_node( 'my-account' );
			$wp_admin_bar->remove_node( 'edit-profile' );

			$ui_title = array(
			
				'id'    => 'hhs-network',
				'title' => '<div class="title-block state">' . '<span class="gold">college of</span> <span>health and human sciences</span>' . '</div>',
				'parent' => false,
			
			);

			$update_data = wp_get_update_data();
			$update_calc = $update_data['counts']['total'];

			$wp_updates = array(

				'id' 	 => 'updates',
				'title'  => $update_data['counts']['total'],
				'href'   => admin_url( 'update-core.php' ),
				'parent' => 'custom-menu',

			);

			$site_title = array(
			
				'id'     => 'site-name',
				'title'  => get_bloginfo( 'name' ),
				'href'   => home_url(),
				'parent' => 'custom-menu',
			
			);
			
			$my_sites = array(

				'id' 	 => 'my-sites',
				'title'  => '',
				// 'href'   => admin_url( 'my-sites.php' ),
				'parent' => 'custom-menu',
				'meta'   => array(

					'class' => 'sites-dropdown'

				),

			);

			$profile_icon = array(

				'id'     => 'edit-profile',
				'parent' => 'custom-menu',
				'title'  => '',
				'href'   => admin_url( 'profile.php' ),
				'meta'   => array(

					'class' => 'edit-profile-button'

				),

			);
			
			$logout_icon = array(

				'id'     => 'logout',
				'parent' => 'custom-menu',
				'title'  => '',
				'href'   => wp_logout_url(),
				'meta'   => array(

					'class' => 'logout-button'

				),

			);

			$help_icon = array(

				'id'     => 'help-button',
				'title'  => '',
				'parent' => 'custom-menu',

			);

			$view = array(

				'id' 	 => 'view',
				'title'  => 'view',
				'parent' => 'top-secondary',
				'href'   => get_permalink(),

			);

		// custom account node
			$user_id 	  = get_current_user_id();
			$current_user = wp_get_current_user();

			if ( ! $user_id )
				return;

			$proper_avatar = get_avatar( $user_id, 128 ); 
			$wp_my_account = $wp_admin_bar->get_node( 'my-account' );
			$replaceprefix = str_replace( 'Howdy,', '', '' );

			$account_menu = array(

				'id' 	 => 'my-account',
				'parent' => 'custom-menu',
				'title'  => $replaceprefix . $proper_avatar,
				'href'   => admin_url( 'profile.php' ),

			);

			$custom_menu = array(

				'id'     => 'custom-menu',
				'title'  => '<span>menu</span>',
				'parent' => 'top-secondary'

			);

			$menu_icon = array(

				'id'     => 'menu-button',
				'title'  => '',
				'href'   => '#',
				'parent' => 'top-secondary',
				'meta'   => array(

					'class' => 'custom-toolbar-toggle'

				),

			);

		// reset toolbar
			$wp_admin_bar->add_node( $ui_title );
			
			if ( $update_calc >= 1 ) {

				$wp_admin_bar->add_node( $wp_updates );

			}

			// // $wp_admin_bar->add_menu( $view );
			$wp_admin_bar->add_node( $site_title );
			$wp_admin_bar->add_node( $my_sites );
			$wp_admin_bar->add_node( $help_icon );
			$wp_admin_bar->add_node( $profile_icon );
			$wp_admin_bar->add_node( $logout_icon );
			$wp_admin_bar->add_menu( $account_menu );
			$wp_admin_bar->add_menu( $custom_menu );
			$wp_admin_bar->add_node( $menu_icon );

		}

	add_action( 'admin_bar_menu', 'configure_custom_toolbar', 999 );

?>