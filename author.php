<?php

	$current_author = ( isset( $_GET[ 'author_name' ] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );

	$author_ID = get_the_author_meta( 'ID' );

	$author_bio_query = new WP_Query( array(

		'author'         => $author_ID,
		'posts_per_page' => 3

	));

	$author_metadata = get_field( 'author_meta', 'user_' . $author_ID );

?>

<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="author_bio_content">

			<!-- container -->
			<div class="author_bio_grid">

				<!-- image -->
				<div class="author_bio_image" style="background-image:url(<?php echo $author_metadata[ 'bio_picture' ]; ?>)">

				</div>
				<!-- END image -->

				<!-- bio -->
				<div class="author_bio">

					<h1 class="author_bio_name">

						<?php // the_archive_title( 'ball so hard' ); ?>

						<?php echo $current_author->nickname; ?>

					</h1>

					<!-- entry box -->
					<div class="entry_container">

						<!-- entry -->
						<div class="bio_entry">

							<span class="entry_label">

								hometown

							</span>

							<span class="entry_text">

								<?php echo $author_metadata[ 'hometown' ]; ?>

							</span>

						</div>
						<!-- END entry -->

						<!-- entry -->
						<div class="bio_entry">

							<span class="entry_label">

								education

							</span>

							<span class="entry_text">

								<?php echo $author_metadata[ 'education' ]; ?>

							</span>

						</div>
						<!-- END entry -->

						<!-- entry -->
						<div class="bio_entry">

							<span class="entry_label">

								favorite platform

							</span>

							<span class="entry_text">

								<?php echo $author_metadata[ 'favorite_platform' ]; ?>

							</span>

						</div>
						<!-- END entry -->

						<!-- entry -->
						<div class="bio_entry">

							<span class="entry_label">

								role

							</span>

							<span class="entry_text">

								<?php echo $author_metadata[ 'role' ]; ?>

							</span>

						</div>
						<!-- END entry -->

					</div>
					<!-- END entry box -->

					<!-- description -->
					<div class="bio_entry description">

						<span class="entry_label">

							bio

						</span>

						<span class="entry_text">

							<?php echo get_the_author_meta( 'description' ); ?>

						</span>

					</div>
					<!-- END description -->

					<!-- email -->
					<div class="bio_entry email">

						<span class="entry_label">

							e-mail

						</span>

						<span class="entry_text">

							<?php echo get_the_author_meta( 'email' ); ?>

						</span>

					</div>
					<!-- END description -->

				</div>
				<!-- END bio -->

			</div>
			<!-- END container -->

			<?php if ( $author_bio_query->have_posts() ) : ?>

			<!-- posts -->
			<div class="author_posts">

				<?php while ( $author_bio_query->have_posts() ) : $author_bio_query->the_post(); ?>

				<?php // get_template_part( 'components/content/content.base', get_post_format() ); ?>

				<?php get_template_part( 'components/content/content.home', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php else : ?>

				<?php get_template_part( 'components/content.none' ); ?>

			</div>
			<!-- END posts -->

			<?php endif; ?>

		</main>

		<?php // get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>
