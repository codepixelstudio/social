<?php

	// define HTML markup
		function custom_toolbar_menu( $wp_admin_bar ) {

			$toolbar_menu = array(

				'id'     => 'toolbar-menu',
				'title'  => '',
				'parent' => 'top-secondary',
				'meta'   => array(

					'class' => 'offcanvas'

				),

			);

			// $wp_admin_bar->add_node( $toolbar_menu );

			echo '<div class="off-canvas position-top" data-offcanvas>this is codepixel.studio</div>';

		}

	// add_action( 'in_admin_header', 'custom_toolbar_menu' );

?>