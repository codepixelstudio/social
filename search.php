<?php

    $search = get_search_query();

    // setup query parameters
    $news = array(

        's' => $search

    );

    // setup query
    $news_query = new WP_Query( $news );

?>

<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="the_content">

			<!-- header -->
			<header class="taxonomy_header">

				<h1 class="entry_title">

					<?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"

				</h1>

			</header>
			<!-- END header -->

			<?php if ( $news_query->have_posts() ) : ?>

			<?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>

            <?php get_template_part( 'components/content/content.home', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php else : ?>

			<?php get_template_part( 'components/content.none' ); ?>

			<?php endif; ?>

			<?php get_template_part( 'components/content/content.pagination' ); ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>
