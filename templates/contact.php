<?php
/*
 Template Name: Contact
 */
 ?>
 
<?php get_header(); ?>


		
	<div id="primary" class="content-area container">
		<main id="main-contact" class="site-main" role="main">
		<?php
			echo '<p class="ssss">'.the_title().'</p>'; ?>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<p class="ssss"><?php echo the_content(); ?></p>
		 <?php endwhile; endif; ?>
		 
		<?php
			echo do_shortcode('[contact-form-7 id="1390" title="Contact form 1"]');
		?>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();