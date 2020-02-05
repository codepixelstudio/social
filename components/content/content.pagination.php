
<?php if ( function_exists( 'foundationpress_pagination' ) ) :

		foundationpress_pagination();

	elseif ( is_paged() ) : ?>

		<nav id="post-nav">

			<!-- previous -->
			<div class="post-previous">

				<?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?>

			</div>
			<!-- END previous -->

			<!-- next -->
			<div class="post-next">

				<?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?>

			</div>
			<!-- END next -->

		</nav>

	<?php endif; ?>
