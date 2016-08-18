<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RepairPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="featured-img">
		<?php echo the_post_thumbnail('large'); ?>
	</div>
	<div class="entry-meta">
		<?php repairpress_posted_on(); ?>
	</div><!-- .entry-meta -->
	<div class="title-post">
		<div class="date-post"><?php repairpress_date_post(); ?></div>
		<?php
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		if ( 'post' === get_post_type() ) : ?>
		<?php
		endif; ?>
	</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'READ MORE %s <span class="meta-nav">&#x2023;</span>', 'repairpress' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'repairpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //repairpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
