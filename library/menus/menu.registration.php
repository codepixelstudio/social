<?php // menu registration script

    // register menus
	register_nav_menus(

		array(

			'site-menu-panel'       => __( 'Site Main Menu', 'social' ),
			'footer-menu' 			=> __( 'Footer Menu', 'social' )

		)

	);

    // site menu
	function social_site_menu() {

	    wp_nav_menu( array(

	        'container' => false,
	        'container_class' => '',
	        'menu' => '',
	        'menu_class' => 'vertical menu accordion-menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
	        'theme_location' => 'site-menu-panel',
	        'before' => '',
	        'after' => '',
	        'link_before' => '',
	        'link_after' => '',
	        'depth' => 5,
	        'fallback_cb' => false,
	        'walker' => new Off_Canvas_Menu_Walker(),

	    ));

	}

	// footer menu
	function social_footer_menu() {

	    wp_nav_menu( array(

	        'container' 		=> false,
	        'container_class' 	=> '',
	        'menu' 				=> '',
	        'menu_class' 		=> 'megafooter_menu',
	        'theme_location' 	=> 'footer-menu',
	        'before' 			=> '',
	        'after' 			=> '',
	        'link_before' 		=> '',
	        'link_after' 		=> '',
	        'fallback_cb' 		=> false,

	    ));

	}

?>
