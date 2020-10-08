<?php // variables

	$author_bio = get_the_author_meta( 'user_description' );

?>

<?php get_header(); ?>

<?php get_template_part( 'components/content/content.featured.image' ); ?>

<div class="main-container">

	<div class="main-grid">

		<main class="the_content">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'components/content/content.base' ); ?>

				<?php get_template_part( 'components/content/content.author' ); ?>

				<?php the_post_navigation(); ?>

				<?php get_sidebar(); ?>

			<?php endwhile; ?>

		</main>

		<?php // get_sidebar(); ?>

	</div>

</div>

<?php get_footer(); ?>
