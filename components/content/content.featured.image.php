<?php // dynamically determine if featured image is set and use interchange to determine optimal size ?>

<?php if ( has_post_thumbnail( $post->ID ) ) : ?>

	<div class="featured_image" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">

	</div>

<?php endif; ?>
