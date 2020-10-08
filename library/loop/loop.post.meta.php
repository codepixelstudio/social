<?php

	if ( ! function_exists( 'foundationpress_entry_meta' ) ) :

		function foundationpress_entry_meta() {

			// get category object
			$category = get_the_category();

			// author name + link to posts
			// echo '<p class="meta byline author">' . __( 'Written by', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
			echo '<p class="meta byline author"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a> in <a href="' . get_category_link( $category[ 0 ]->term_id ) . '">' . $category[ 0 ]->name . '</a></p>';

			// new
			// echo '<p class="meta byline author"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a> in <a href="' . get_category_link( $category[ 0 ]->term_id ) . '">' . $category[ 0 ]->name . '</a></p>';

			// published date/time
			// echo '<time class="meta updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s // %2$s', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time>';
			echo '<time class="meta updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s %2$s' ), get_the_date(), get_the_time() ) . '</time>';

		}

	endif;

?>
