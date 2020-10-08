<?php // Template Name: Developer ?>

<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="the_content">

            <?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

            <pre>

                <?php

                    $author_meta = get_field( 'author_meta' );

                    $author_meta = get_author_posts_url( get_the_author_meta( 'ID' ) );

                    print_r( $author_meta );

                ?>

            </pre>

            <?php endwhile; ?>

            <?php endif; ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>

<?php get_footer(); ?>
