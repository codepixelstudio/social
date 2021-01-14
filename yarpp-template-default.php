<?php /*

    YARPP Template: Ball So Hard
    Author: Web Communications
    Description: Custom related posts layout.

*/ ?>

<!-- related posts -->
<div class="related_posts">

    <h4>

        Related Posts

    </h4>

    <?php if ( have_posts() ) :?>

    <ul class="related_posts_list">

    	<?php while ( have_posts() ) : the_post(); ?>

            <?php $post_thumbnail = has_post_thumbnail() ? 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'x-large' ) . ');"' : ''; ?>

            <?php $post_thumbnail = get_field( 'card_image' ); ?>

    		<?php if ( has_post_thumbnail() ) :?>

    		<li class="related_posts_list_item">

                <a class="related_post_link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                    <!-- <span class="post_thumbnail" <?php echo $post_thumbnail; ?>> -->
                    <span class="post_thumbnail" style="background-image:url(<?php echo $post_thumbnail; ?>)">

                        <?php // the_post_thumbnail(); ?>

                    </span>

                    <span class="post_title">

                        <?php the_title(); ?>

                    </span>

                </a>

            </li>

    		<?php endif; ?>

    	<?php endwhile; ?>

    </ul>

    <?php endif; ?>

</div>
<!-- END related posts -->
