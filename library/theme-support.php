<?php // register theme support for languages, menus, post-thumbnails, post-formats etc.

	// filter hook for status column
	add_filter( 'manage_post_posts_columns', 'custom_migration_attributes' );

	// define custom status column
	function custom_migration_attributes ( $columns ) {

		return array_merge( $columns, [

			'card_image'	   => __( 'Card Image', 'social' ),
			'migration_status' => __( 'Migration Status', 'social' )

		]);

	}

	// action reference for status column
	add_action( 'manage_post_posts_custom_column', 'custom_migration_attribute_columns', 10, 2 );

	// get metatdata for custom status column
	function custom_migration_attribute_columns ( $column_key, $post_id ) {

		if ( $column_key == 'migration_status' ) {

			$migration_status = get_post_meta( $post_id, 'migration_status', true );

			if ( $migration_status ) {

				echo '<span style="color:green;">';
					_e( 'Ready', 'textdomain' );
				echo '</span>';
				// echo '<span style="color:green;">' . $migrated . '</span>';

			} else {

				echo '<span style="color:red;">';
					_e( 'Not Ready', 'textdomain' );
				echo '</span>';
				// echo '<span style="color:red;">' . $migrated . '</span>';

			}

		}

		if ( $column_key == 'card_image' ) {

			$card_image = get_post_meta( $post_id, 'card_image' );
			$card_image = get_field( 'card_image' );

			// print_r( $card_image );
			echo '<img src="' . $card_image . '" width="128" />';

		}

	}

	// filter hook to make status column sortable
	add_filter( 'manage_edit-post_sortable_columns', 'sortable_migration_status_column' );

	// make custom status column sortable
	function sortable_migration_status_column ( $columns ) {

		$columns[ 'migration_status' ] = 'migration_status';

		return $columns;

	}

	// action reference for custom column sortable by metadata
	add_action( 'pre_get_posts', 'status_column_orderby' );

	// set orderby parameters for sorting custom column
	function status_column_orderby ( $query ) {

		$orderby = $query->get( 'orderby' );

		if ( ! is_admin() || ! $query->is_main_query() ) {

			return;

		}

		if ( $orderby == 'migration_status' ) {

			$query->set( 'meta_key', 'migration_status');
			$query->set( 'orderby', 'meta_value' );

			$orderdir = $query->get( 'order' );

			if( 'desc' == $orderdir ) {

				$query->set( 'order','asc' );

			} else {

				$query->set( 'order','desc' );

			}

		}

	}

	// action reference for column width
	add_action( 'admin_head', 'status_column_width' );

	// custom status column width
	function status_column_width () {

		echo '<style type="text/css">.column-migration_status{width:160px;}</style>';

	}

	// action reference to set migration status
	// add_action( 'init', 'set_migration_status_once' );

	// set initial migration status for all posts
	function set_migration_status_once () {

	    $args = array(

		    'posts_per_page'   => -1,
	        'post_type'        => 'post',
	        'suppress_filters' => true

		);

	    $posts_array = get_posts( $args );

		foreach ( $posts_array as $post_array ) {

			update_post_meta( $post_array->ID, 'migration_status', '' );

		}

	}

	// explicitly get users
	function get_users_by_include( $args = array() ) {

		$blogusers = get_users( $args );

		if( isset( $args[ 'include' ] ) ){

			$include = $args[ 'include' ];

			usort( $blogusers, function ( $a, $b ) use( $include ){

				$q = array_flip( $include );

				return $q[ $a->ID ] - $q[ $b->ID ];

			});

		}

		return $blogusers;
	}

	// core theme support
	if ( ! function_exists( 'foundationpress_theme_support' ) ) :

		function foundationpress_theme_support() {

			// language support
			load_theme_textdomain( 'foundationpress', get_template_directory() . '/languages' );

			// switch default core markup
			add_theme_support(

				'html5', array(

					'search-form',
					'comment-form',
					'comment-list',
					'gallery',
					'caption',

				)

			);

			// menus
			add_theme_support( 'menus' );

			// manage the document title
			add_theme_support( 'title-tag' );

			// post thumbnail
			add_theme_support( 'post-thumbnails' );

			// post formats
			add_theme_support(

				'post-formats', array(

					'aside',
					'gallery',
					'link',
					'image',
					'quote',
					'status',
					'video',
					'audio',
					'chat'

				)

			);

		}

		add_action( 'after_setup_theme', 'foundationpress_theme_support' );

	endif;

?>
