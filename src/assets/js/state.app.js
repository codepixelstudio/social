
// ================================================================================
// START :: require + modules + dependencies
// ================================================================================

    // import modules
    import $ from 'jquery';
    import whatInput from 'what-input';

    import './lib/foundation.library';

    // global jQuery object
    window.jQuery = window.$ = $;

    // global velocity object
    // import velocity from 'velocity-animate';

    // foundation module
    import Foundation from 'foundation-sites';

    // lazyload
    import LazyLoad from 'vanilla-lazyload';

    // slick.js
    // require( 'slick-carousel' );
    // import slick from 'slick-carousel';

    // initialize foundation
    $(document).foundation();

// ================================================================================
// END :: require + modules + dependencies
// ================================================================================



// ================================================================================
// START :: config.objects
// ================================================================================

    // base object
    export var site = {};

    // functions
    site.fx = {

        // scrollpage

    };

    // brand
    site.brand = {

        camelot : $('#brand-rams'),
        state   : $('#brand-state'),
        local   : $('#brand-cvmbs')

    };

    // site.ui
    site.ui = {



    };

    // menus
    site.ui.menus = {};

    // controls + buttons
    site.ui.controls = {

        university : 'university',
        college    : 'college'
        // department : 'department'

    };

    // menu.navigation
    site.ui.menus.navigation = {

        component  : $('#site-menu'),
        controller : $('#site-menu-button')

    };

    // visual debug
    export var log = {

        brite : 'color: rgba(144, 187, 34, 1.00)',
        callb : 'color: rgba(85, 168, 182, 0.80)',
        proms : 'color: rgba(85, 168, 182, 0.47)',
        init  : 'color: rgba(214, 221, 242, 0.80)',
        brack : 'color: rgba(255, 255, 255, 0.35)',
        activ : 'color: rgba(243, 133, 72, 1.000)',
        reset : 'color: rgba(243, 133, 72, 0.47)',
        load  : 'color: rgba(188, 197, 60, 0.60)',
        displ : 'color: rgba(219, 27, 137, 1.00)',
        fail  : 'color: rgba(255, 45, 45, 0.85)',
        fx    : 'color: rgba(76, 185, 246, 1.00)',
        prnth : 'color: rgba(255, 255, 255, 1.00)',
        pink  : 'color: rgba(249, 87, 231, 1.00)',
        purpl : 'color: rgba(140, 108, 206, 1.00)'

    };

// ================================================================================
// END :: config.objects
// ================================================================================



// ================================================================================
// START :: initialize
// ================================================================================

    // ball so hard
    $(document).ready(function() {

        // menus
        // menusFX.init();

        // track focus
        // trackFocus();

        // lazyload
        var lazyLoadFX = new LazyLoad({

            elements_selector : '.lazyload'

        });

    });

// ================================================================================
// END :: initialize
// ================================================================================



// ================================================================================
// START :: track focus
// ================================================================================

    // track focus(ed) element and log content to console
    function trackFocus() {

        $( 'body' ).delegate( '*', 'focus blur', function() {

            var elem = $( this );

            setTimeout(function() {

                elem.toggleClass( 'find-me', elem.is( ':focus' ) );

                var focusedElementCue  = $('.find-me');

                var elementHasFocusTag = focusedElementCue.text();
                var cleanElementOutput = elementHasFocusTag.toLowerCase();
                var stringFocusElement = String(cleanElementOutput);
                var elementHasFocus    = $.trim(stringFocusElement);

                console.log(elementHasFocus);

            }, 0 );

        });

    }

// ================================================================================
// END :: track focus
// ================================================================================
