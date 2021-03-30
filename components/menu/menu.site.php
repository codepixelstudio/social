
<!-- menu.site -->
<div id="site_menu" class="off-canvas position-right" data-off-canvas data-transition="overlap" data-content-scroll="false">

    <!-- search -->
    <div class="site_menu_search">

        <!-- search form -->
        <form role="search" method="get" id="news_search" action="<?php echo home_url(); ?>/">

            <!-- wrap -->
            <span class="input_wrap input_query">

                <label for="s">search</label>
                <input type="text" class="text" value="" name="s" id="s" placeholder="">
                <input type="submit" value="search" class="submit">

            </span>
            <!-- END wrap -->

        </form>
        <!-- END search form -->

    </div>
    <!-- END search -->

    <!-- header -->
    <div class="site_menu_header">

        <span>

            site navigation

        </span>

    </div>
    <!-- END header -->

    <!-- container -->
    <div class="site_menu_container">

        <?php social_site_menu(); ?>

    </div>
    <!-- END container -->

    <!-- newsletter signup -->
    <div class="newsletter_signup">

        <!-- form -->
        <form action="https://colostate.us16.list-manage.com/subscribe/post?u=6b85dbdc3e85eef3354908bed&amp;id=a817b78433" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

            <!-- field container -->
            <div class="form_fields">

                <!-- input wrap -->
                <div class="input_wrap">

                    <label for="EMAIL">e-mail address</label>
                    <input id="mce-EMAIL" class="text_input" type="email" name="EMAIL" value="" placeholder="subscribe to our newsletter">

                </div>
                <!-- END input wrap -->

                <input type="submit" value="subscribe" name="subscribe" id="mc-embedded-subscribe" class="required email">

            </div>
            <!-- END field container -->

            <!-- responses -->
            <div id="mce-responses" class="clear">

                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>

            </div>
            <!-- END  responses -->

            <!-- honeypot -->
            <div style="position: absolute; left: -5000px; height: 0;" aria-hidden="true">

                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <input type="text" name="b_6b85dbdc3e85eef3354908bed_a817b78433" tabindex="-1" value="">

            </div>
            <!-- END honeypot -->

        </form>
        <!-- END form -->

    </div>
    <!-- END newsletter signup -->

</div>
<!-- END menu.site -->
