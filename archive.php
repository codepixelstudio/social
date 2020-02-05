<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="main-content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'components/content/content.base', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'components/content/content.base.none' ); ?>

			<?php endif; ?>

			<?php get_template_part( 'components/content/content.pagination' ); ?>

		</main>

		<?php // get_sidebar(); ?>

	</div>

</div>

<?php get_footer();
