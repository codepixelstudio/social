
<?php get_header(); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="the_content">

			<h1 class="entry_title">

				<?php single_cat_title(); ?>

			</h1>

			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'components/content/content.base', get_post_format() ); ?>

				<?php get_template_part( 'components/content/content.home', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'components/content.none' ); ?>

			<?php endif; ?>

			<?php get_template_part( 'components/content/content.pagination' ); ?>

		</main>

		<?php // get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>
