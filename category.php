
<?php get_header(); ?>

<!-- container -->
<div class="main-container">

	<!-- grid -->
	<div class="main-grid">

		<!-- main -->
		<main class="the_content">

			<!-- header -->
			<header class="taxonomy_header">

				<!-- heading -->
				<h1 class="entry_title">

					<?php single_cat_title(); ?>

				</h1>
				<!-- END heading -->

			</header>
			<!-- END header -->

			<!-- post grid -->
			<div class="post_grid">

				<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<?php // get_template_part( 'components/content/content.base', get_post_format() ); ?>

				<?php get_template_part( 'components/content/content.home', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php else : ?>

				<?php get_template_part( 'components/content.none' ); ?>

				<?php endif; ?>

				<?php get_template_part( 'components/content/content.pagination' ); ?>

			</div>
			<!-- END post grid -->

		</main>
		<!-- END main -->

	</div>
	<!-- END grid -->

</div>
<!-- END container -->

<?php get_footer(); ?>
