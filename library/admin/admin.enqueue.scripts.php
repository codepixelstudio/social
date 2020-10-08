<?php

    // load custom scripts + styles
    function load_admin_scripts_styles() {

        // scripts

            // register

                // base
                wp_register_script(

                    'hhs-admin-ui-js',
                    get_stylesheet_directory_uri() . '/assets/js/app/hhs.admin.ui.min.js',
                    array(

                        'jquery',
                        'velocity',
                        'velocity-ui',
                        'foundation',
                        'scrollbar-ui'

                    ), null, true );

                // velocity
                wp_register_script(

                    'velocity',
                    get_stylesheet_directory_uri() . '/assets/js/lib/velocity.min.js',
                    array(

                        // empty

                    ), null, true );

                // velocity-ui
                wp_register_script(

                    'velocity-ui',
                    get_stylesheet_directory_uri() . '/assets/js/lib/velocity.ui.min.js',
                    array(

                        'velocity'

                    ), null, true );

                // foundation
                wp_register_script(

                    'foundation',
                    get_stylesheet_directory_uri() . '/assets/js/lib/foundation.min.js',
                    array(

                        // empty

                    ), null, true );

                // scrollbar-ui
                wp_register_script(

                    'scrollbar-ui',
                    get_stylesheet_directory_uri() . '/assets/js/lib/slimscroll.min.js',
                    array(

                        'jquery'

                    ), null, true );

            // enqueue

                // base
                // wp_enqueue_script( 'state-admin-ui-js' );

                // velocity
                // wp_enqueue_script( 'velocity' );

                // velocity-ui
                // wp_enqueue_script( 'velocity-ui' );

                // foundation
                // wp_enqueue_script( 'foundation' );

                // scrollbar-ui
                // wp_enqueue_script( 'scrollbar-ui' );

        // styles

            // register

                // base
                wp_register_style(

                    'state-ui-admin-css',
                    get_stylesheet_directory_uri() . '/dist/assets/css/state.ui.admin.css'

                    , null, null );

            // enqueue

                // base
                wp_enqueue_style( 'state-ui-admin-css' );

    }

    add_action( 'admin_enqueue_scripts', 'load_admin_scripts_styles', 9999 );

    // remove default scripts [ REMOVE ]
    add_action( 'wp_default_scripts', function( $scripts ) {

        if ( ! empty( $scripts->registered['jquery'] ) ) {

            // $scripts->registered['jquery']->deps = array_diff( $scripts->registered['jquery']->deps, array( 'jquery-migrate' ) );

        }

    });

?>
