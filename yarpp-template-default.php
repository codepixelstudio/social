<?php /*

    YARPP Template: Ball So Hard
    Author: Web Communications
    Description: Custom related posts layout.

*/ ?>

<?php if ( have_posts() ) :?>

<!-- related posts -->
<div class="related_posts">

    <h4>

        Related Posts

    </h4>

    <ul class="related_posts_list">

    	<?php while ( have_posts() ) : the_post(); ?>

            <?php $native_thumbnail = 'style="background-image:url(' . get_the_post_thumbnail_url( get_the_id(), 'fp-small' ) . ');"'; ?>

            <?php $custom_thumbnail = get_field( 'card_image' ); ?>

    		<li class="related_posts_list_item">

                <a class="related_post_link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                    <?php if ( $custom_thumbnail ) : ?>

                    <span class="post_thumbnail custom" style="background-image:url(<?php echo $custom_thumbnail; ?>)">

                    </span>

                    <?php elseif ( has_post_thumbnail( $post->ID ) ) : ?>

                    <span class="post_thumbnail native" <?php echo $native_thumbnail; ?>>

                    </span>

                    <?php else : ?>

                    <span class="post_thumbnail default">

                    </span>

                    <?php endif; ?>

                    <span class="post_title">

                        <?php the_title(); ?>

                    </span>

                </a>

            </li>

    	<?php endwhile; ?>

    </ul>

</div>
<!-- END related posts -->

<?php endif; ?>
