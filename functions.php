<?php

    // assorted cleanup functions
    require_once(

        'library/cleanup/cleanup.php'

    );

    // foundation framework
    require_once(

        'library/foundation.php'

    );

    // navigation menus
    require_once(

        // 'library/navigation.php'
        'library/menus.php'

    );

    // custom post types
    // require_once(

        // 'library/post.types.php'

    // );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

    // loop programs
    require_once(

        'library/loop/loop.php'

    );

    // admin
    require_once(

        'library/admin/admin.php'

    );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once(

    'library/theme-support.php'

);

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Gutenberg editor support */
require_once( 'library/gutenberg.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
