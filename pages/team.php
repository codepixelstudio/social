<?php // Template Name: Meet The Team ?>

<?php get_header(); ?>

<!-- container -->
<div class="main-container">

	<!-- grid -->
	<div class="main-grid">

		<?php while ( have_posts() ) : the_post(); ?>

		<!-- content -->
		<main class="the_content">

			<!-- header -->
            <header class="page_header">

                <span class="styled_heading">

                    we're<br />
                    #CSUsocial<em>.</em>

                </span>

                <span class="styled_text">

                    <?php the_content(); ?>

                </span>

            </header>
			<!-- END header -->

			<?php

				// configure author query
				$author_group = array(

					'role__in' => array(

						// 'supereditor',
						// 'author',
						// 'administrator'

					),
					// 'fields'   => 'all_with_meta',
					'meta_key' => $author_meta[ 'order' ],
					'orderby'  => 'meta_value_num',
					'order'    => 'ASC'

				);

				// get users function call
				$authors = get_users( $author_group );

				// get users
				$authors = get_users_by_include( array( 'include' => array( 83, 91, 125, 106, 127, 129, 126, 128, 130 ) ) );

			?>

			<pre class="developer hide">

				<?php // print_r( $author_meta ); ?>

				<?php // print_r( $authors ); ?>

			</pre>

			<!-- bio grid -->
            <div class="page_bios">

			<?php foreach ( $authors as $author ) {

				$author_bio  	 = $author->data->user_nicename;
				$author_name 	 = $author->data->display_name;
				$author_data 	 = get_user_meta( $author->ID );
				$author_metadata = get_field( 'author_meta', 'user_' . $author->ID );

				echo '<div class="bio_block">

					<a class="bio_link" href="' . get_site_url() . '/author/' . $author_bio . '" style="background-image:url(' . $author_metadata[ 'team_picture' ] . ');">

						<div class="tag">

							<span class="name">

								' . $author_name . '

							</span>

							<span class="title">

								' . $author_metadata[ 'title' ] . '

							</span>

						</div>

					</a>

				</div>';

			} ?>

            </div>
			<!-- END bio grid -->

		</main>
		<!-- END content -->

		<?php endwhile; ?>

	</div>
	<!-- END grid -->

</div>
<!-- END container -->

<?php get_footer(); ?>
