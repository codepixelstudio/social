<?php get_header(); ?>

<?php get_template_part( 'components/content/content.featured.image' ); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="main-content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'components/content/content.page' ); ?>

			<?php endwhile; ?>

		</main>

		<?php // get_sidebar(); ?>

	</div>

</div>

<?php get_footer();
