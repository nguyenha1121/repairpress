<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RepairPress
 */

get_header(); ?>
	<div class="description-page">
		<div class="container">
			<h1><?php //echo the_title(); ?> Blog todo::</h1>
			<p class="desc"><?php //the_field('description'); ?> Desc toto::</p>
		</div>
	</div>
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="contents">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
				<div class="right-sidebar">
					<?php get_sidebar('sidebar-1'); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
