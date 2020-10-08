<?php

	// define custom admin menu item
		function configure_admin_menu() {

			// remove comments page
			remove_menu_page( 'edit-comments.php' );

			// remove nested dashboard pages
			remove_submenu_page( 'index.php', 'my-sites.php' );

		}

	add_action( 'admin_init', 'configure_admin_menu' );

?>
