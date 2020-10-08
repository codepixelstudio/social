<?php

    // register menus
	register_nav_menus(

		array(

			'site-menu-panel'       => __( 'Site Main Menu', 'social' )

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

?>
