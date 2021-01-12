<?php

	$subheadline = get_field( 'post_subheadline' );

?>

<!-- post -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- header -->
	<header class="post-header">

		<?php $card_bg = 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-small' ) . ');"'; ?>

		<?php $card_image = get_field( 'card_image' ); ?>

		<!-- image -->
		<div class="featured_image" style="background-image:url(<?php echo $card_image; ?>);">

		</div>
		<!-- END image -->

		<!-- title -->
		<div class="post-title">

			<?php

				// test for archive or single post
				if ( is_single() ) {

					the_title( '<h1 class="entry_title">', '</h1>' );

				} else {

					the_title( '<h2 class="entry_title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

				}

			?>

		</div>
		<!-- END title -->

	</header>
	<!-- END header -->

	<!-- content -->
	<div class="entry_content">

		<?php if ( $subheadline ) : ?>

		<?php echo $subheadline; ?>

		<?php else : ?>

		<?php the_excerpt(); ?>

		<?php endif; ?>

	</div>
	<!-- END content -->

	<!-- footer -->
	<footer class="post-footer">

		<!-- meta -->
		<div class="post-meta">

			<?php

				// setup author avatar
				$author  = get_the_author_meta( 'ID' );
				$avatar  = get_avatar( $author );
				$avatar  = get_field( 'author_meta', 'user_' . $author );

				// render avatar
				// echo '<a class="avatar" href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '">' . $avatar . '</a>';
				echo '<a class="avatar" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" style="background-image:url(' . $avatar[ 'avatar_picture' ] . ')"></a>';

				// esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) )

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

		<?php wp_link_pages(

			array(

				'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
				'after'  => '</p></nav>',

			)

		); ?>

		<?php // get_template_part( 'components/content/content.tags' ); ?>

	</footer>
	<!-- END footer -->

</article>
<!-- END post -->
