
<!-- post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- header -->
	<header class="post-header">

		<?php

			// test for archive or single post
			if ( is_single() ) {

				the_title( '<h1 class="entry-title">', '</h1>' );

			} else {

				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

			}

			// get custom subheadline
			echo '<span class="subheadline">' . get_field( 'post_subheadline' ) . '</span>';

		?>

		<!-- meta -->
		<div class="post-meta">

			<?php

				// setup author avatar
				$author  = get_the_author_meta( 'ID' );
				$avatar  = get_avatar( $author );

				// render avatar
				echo '<a class="avatar" href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . $avatar . '</a>';

			?>

			<!-- metadata -->
			<div class="metadata">

				<?php

					// render post meta
					foundationpress_entry_meta();

				?>

			</div>
			<!-- END metadata -->

		</div>
		<!-- END meta -->

	</header>
	<!-- END header -->

	<!-- content -->
	<div class="entry-content">

		<?php the_content(); ?>

	</div>
	<!-- END content -->

	<!-- footer -->
	<footer class="post-footer">

		<?php

			wp_link_pages(

				array(

					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',

				)

			);

			// render tags
			$tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php }

		?>

	</footer>
	<!-- END footer -->

</article>
<!-- END post -->
