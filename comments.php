<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RepairPress
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				echo '<span class="comments-link">';
				/* translators: %s: post title */
				comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'repairpress' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
				echo '</span>';
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments('type=comment&callback=repairpress_comment' );
			?>
		</ol><!-- .comment-list -->
		<?php

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'repairpress' ); ?></p>
	<?php
	endif;
     $args = array(
     'fields' => apply_filters(
          'comment_form_default_fields', array(
               'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Your Name (No Keywords)" name="author" type="text" value="' .
                    esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
                    '</p>'
                    ,
               'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="your-real-email@example.com" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' />'  .
                    '</p>',
               'url'    => '<p class="comment-form-url">' .
                '<input id="url" name="url" placeholder="http://your-site-name.com" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .
                '</p>'
          )
     ),
     'comment_field' => '<p class="comment-form-comment">' .
          '<textarea id="comment" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
          '</p>',
     'comment_notes_before'=>'',
    'comment_notes_after' => '',
    'title_reply' => '<div class="crunchify-text"> <h2>While a comment: </h2></div>'
);
    comment_form($args);
 ?>


</div><!-- #comments -->
