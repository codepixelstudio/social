<?php

    // footer contact info group
    $footer_contact_info = get_field( 'footer_contact_info', 'options' );

    // social media links
    $facebook   = $footer_contact_info[ 'facebook_link' ];
    $twitter    = $footer_contact_info[ 'twitter_link' ];
    $instagram  = $footer_contact_info[ 'instagram_link' ];
    $youtube    = $footer_contact_info[ 'youtube_link' ];
    $linkedin   = $footer_contact_info[ 'linkedin_link' ];

?>

<div id="social_icons">

    <!-- button -->
    <a href="http://www.facebook.com/coloradostateuniversity/" title="Facebook" class="social-media button facebook">

        <svg x="0px" y="0px" viewBox="-786 630 32 32" enable-background="new -786 630 32 32" xml:space="preserve">

        	<path fill="#FFFFFF" d="M-768,662v-16h5.1l0.9-5h-6v-2.9c0-1.6,0.8-2.6,3.1-2.6h2.9v-5.3c-0.5-0.1-2.2-0.2-4.2-0.2 c-4.2,0-7.8,2.7-7.8,7.5v3.5h-4v5h4v16H-768z"/>

        </svg>

    </a>
    <!-- END button -->

    <!-- button -->
    <a href="http://www.twitter.com/coloradostateu/" title="Twitter" class="social-media button twitter">

        <svg x="0px" y="0px" viewBox="-786 630 32 32" enable-background="new -786 630 32 32" xml:space="preserve">

        	<path fill="#FFFFFF" d="M-754.9,634.5c-1.3,0.8-2.7,1.3-4.2,1.6c-1.2-1.3-2.9-2.1-4.8-2.1c-3.6,0-6.6,3-6.6,6.7c0,0.5,0.1,1,0.2,1.5 c-5.5-0.3-10.3-3-13.5-7c-0.6,1-2.5,5.5,2,9c-1.5,0-3-0.8-3-0.8s-0.2,5.4,5.3,6.7c-1.5,0.4-3,0.1-3,0.1s1.2,4.5,6.1,4.7 c-4.1,3.4-9.2,2.8-9.7,2.8c2.9,1.9,6.4,3,10.1,3c12.1,0,18.7-10.3,18.7-19.2c0-0.3,0-0.6,0-0.9c1.3-0.9,2.4-2.1,3.3-3.5 c-1.2,0.5-2.4,0.9-3.8,1.1C-756.4,637.4-755.4,636.1-754.9,634.5z"/>

        </svg>

    </a>
    <!-- END button -->

    <!-- button -->
    <a href="https://www.linkedin.com/school/colorado-state-university/" title="LinkedIn" class="social-media button linkedin">

        <svg x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">

        	<g transform="translate(16.000000, 17.000000)">

        		<path fill="#FFFFFF" d="M-9.3,14.9V-6.2h-6.5v21.1H-9.3z M-9.3-13.6c0-1.9-1.3-3.3-3.3-3.3s-3.4,1.4-3.4,3.3 c0,1.8,1.3,3.3,3.3,3.3l0,0C-10.6-10.3-9.3-11.8-9.3-13.6z M1.3,14.9v-12c0-0.6,0-1.3,0.2-1.7C2-0.1,3.2-1.4,5.2-1.4 c2.6,0,4.2,1.5,4.2,4.4v12H16V2.6c0-6.6-3.5-9.7-8.2-9.7c-3.9,0-5.5,2.2-6.5,3.6v-2.8h-6.6c0.1,2,0,21.2,0,21.2L1.3,14.9L1.3,14.9 z" />

        	</g>

        </svg>

    </a>
    <!-- END button -->

    <!-- button -->
    <a href="http://www.instagram.com/coloradostateuniversity/" title="Instagram" class="social-media button instagram">

        <svg x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">

        	<path fill="#FFFFFF" d="M24,3c2.8,0,5,2.2,5,5v16c0,2.8-2.2,5-5,5H8c-2.8,0-5-2.2-5-5V8c0-2.8,2.2-5,5-5H24 M24,0H8C3.6,0,0,3.6,0,8 v16c0,4.4,3.6,8,8,8h16c4.4,0,8-3.6,8-8V8C32,3.6,28.4,0,24,0L24,0z"/>

        	<path fill="#FFFFFF" d="M16,11c2.8,0,5,2.2,5,5s-2.2,5-5,5s-5-2.2-5-5S13.2,11,16,11 M16,8c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8 S20.4,8,16,8L16,8z"/>

        	<circle fill="#FFFFFF" cx="24.5" cy="7.5" r="2"/>

        </svg>

    </a>
    <!-- END button -->

    <!-- button -->
    <a href="https://www.youtube.com/user/ColoradoStateUniv" title="YouTube" class="social-media button youtube">

        <svg x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">

        	<path fill="#FFFFFF" d="M4.112,4.341C2.055,4.426,0.396,6.059,0.284,8.115C0.149,10.594,0,13.818,0,16 c0,2.186,0.149,5.416,0.285,7.897c0.112,2.056,1.762,3.683,3.819,3.773C7.418,27.815,12.355,28,16,28s8.582-0.185,11.896-0.329 c2.053-0.09,3.707-1.721,3.819-3.773C31.851,21.416,32,18.186,32,16c0-2.183-0.149-5.409-0.284-7.889 c-0.112-2.058-1.766-3.687-3.825-3.774C24.437,4.192,19.299,4,16.125,4C12.928,4,7.639,4.195,4.112,4.341z M13.446,20.752 c-0.093,0.052-0.206,0.05-0.298-0.004C13.056,20.695,13,20.596,13,20.49v-8.98c0-0.106,0.056-0.205,0.148-0.259 c0.092-0.054,0.205-0.055,0.298-0.004l8.082,4.49c0.095,0.053,0.154,0.153,0.154,0.262c0,0.109-0.059,0.209-0.154,0.262 L13.446,20.752z" />

        </svg>

    </a>
    <!-- END button -->

</div>
