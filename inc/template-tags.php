<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package RepairPress
 */

if(!function_exists('repairpress_date_post')){
	function repairpress_date_post(){
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( ' j ' ) ),
			esc_html( get_the_date(' j ') ),
			esc_attr( get_the_modified_date( ' j ' ) ),
			esc_html( get_the_modified_date(' j ') )
		);

		$posted_on = sprintf(
			esc_html_x( '%s', 'post date', 'repairpress' ),
			'<span class="day">' . $time_string . '</span>'
		); 

		$time_string2 = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string2 = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string2 = sprintf( $time_string2,
			esc_attr( get_the_date( 'M  ' ) ),
			esc_html( get_the_date('M  ') ),
			esc_attr( get_the_modified_date( 'M ' ) ),
			esc_html( get_the_modified_date('M ') )
		);

		$posted_on2 = sprintf(
			esc_html_x( '%s', 'post date', 'repairpress' ),
			'<span class="mounth">' . $time_string2 . '</span>'
		);
		echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $posted_on .$posted_on2. '</a><span class="byline"> ' . $bylines . '</span>'; 
	}
}


if ( ! function_exists( 'repairpress_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function repairpress_posted_on() {
	?>
	<span class="by-author"><a href="<?php echo the_author_link(); ?>" >BY <?php echo get_the_author(); ?></a></span><span class="wall">&nbsp;/&nbsp</span>
	<?php
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'repairpress' ) );
		if ( $categories_list && repairpress_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( '%1$s', 'repairpress' ) . '</span><span class="wall">&nbsp;/&nbsp;</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'repairpress' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( '%1$s', 'repairpress' ) . '</span class="wall"><span>&nbsp;/&nbsp;</span> ', $tags_list ); // WPCS: XSS OK.
		}
	}
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'repairpress' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}

	// $byline = sprintf(
	// 	esc_html_x( 'by %s', 'post author', 'repairpress' ),
	// 	'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	// );

	// echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'repairpress_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function repairpress_entry_footer() {
	// edit_post_link(
	// 	sprintf(
	// 		/* translators: %s: Name of current post */
	// 		esc_html__( 'Edit %s', 'repairpress' ),
	// 		the_title( '<span class="screen-reader-text">"', '"</span>', false )
	// 	),
	// 	'<span class="edit-link">',
	// 	'</span>'
	// );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function repairpress_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'repairpress_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'repairpress_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so repairpress_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so repairpress_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in repairpress_categorized_blog.
 */
function repairpress_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'repairpress_categories' );
}
add_action( 'edit_category', 'repairpress_category_transient_flusher' );
add_action( 'save_post',     'repairpress_category_transient_flusher' );
