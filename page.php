<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RepairPress
 */

get_header(); ?>
	<div class="links">
		<div class="container">
			<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <!--<?php if(is_child(the_ID())) : ?>  -->
                <span class="act"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                <a href="<?php echo get_the_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?></a>
           <!--  <?php endif; ?> -->
            <?php if(!is_home()) : ?>
                <span class="act"><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                <a class="this-page" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
            <?php endif; ?>
		</div>
	</div>
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	
<?php
// get_sidebar(sidebar-1);
get_footer();
