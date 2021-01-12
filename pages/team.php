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

				// $authors = get_users( [ 'role__in' => [ 'author' ] ] );
				$authors = get_users();

			?>

			<pre class="developer hide">

				<?php  print_r( $authors ); ?>

			</pre>

			<!-- bio grid -->
            <div class="page_bios">

			<?php foreach ( $authors as $author ) {

				$author_bio  	 = $author->data->user_nicename;
				$author_name 	 = $author->data->display_name;
				$author_data 	 = get_user_meta( $author->ID );
				$author_metadata = get_field( 'author_meta', 'user_' . $author->ID );

				echo '<div class="bio_block">

					<a class="bio_link" href="' . get_site_url() . '/author/' . $author_bio . '" style="background-image:url(' . $author_metadata[ 'bio_picture' ] . ');">

						<div class="tag">

							<span class="name">

								' . $author_name . '

							</span>

							<span class="title">

								' . $author_metadata[ 'role' ] . '

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
