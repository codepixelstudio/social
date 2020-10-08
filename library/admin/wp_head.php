<?php

	// custom favicon
		function add_favicon() {
	  	
	  		$favicon_url = get_stylesheet_directory_uri() . '/assets/img/icons/favicons/favicon_admin.ico';
		
			echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';

		}
  
	add_action( 'admin_head', 'add_favicon' );

?>