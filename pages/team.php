<?php // Template Name: Meet The Team ?>

<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="the_content">

            <div class="page_header">

                <span class="styled_heading">

                    we're<br />
                    #CSUsocial<em>.</em>

                </span>

                <span class="styled_text">

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </span>

            </div>

			<?php $authors = wp_list_authors(

				array(

					'show_fullname' => 1,
					'optioncount'   => 1,
					'feed_image'    => '',
					'echo'			=> false

				)

			); ?>

			<pre>

				<?php print_r( $authors ); ?>

			</pre>

            <div class="page_bios" style="display:none;">

                <a href="#" class="bio_link orange">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title blue">

                            some title goes here

                        </span>

                    </div>

                </a>

                <a href="#" class="bio_link yellow">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title">

                            some title goes here

                        </span>

                    </div>

                </a>

                <a href="#" class="bio_link blue">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title">

                            some title goes here

                        </span>

                    </div>

                </a>

                <a href="#" class="bio_link yellow">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title">

                            some title goes here

                        </span>

                    </div>

                </a>

                <a href="#" class="bio_link blue">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title">

                            some title goes here

                        </span>

                    </div>

                </a>

                <a href="#" class="bio_link orange">

                    <div class="tag">

                        <span class="name">

                            devin koncar

                        </span>

                        <span class="title">

                            some title goes here

                        </span>

                    </div>

                </a>

            </div>

		</main>

	</div>

</div>

<?php get_footer(); ?>
