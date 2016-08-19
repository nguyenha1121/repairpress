<?php
/*
 Template Name: Contact
 */
 ?><?php
get_header(); ?>
	<div class="description-page">
		<div class="container">
			<h1><?php echo the_title(); ?> </h1>
			<p class="desc"><?php the_field('description'); ?> </p>
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
	<div id="primary" class="content-area container">
		<main id="main-contact" class="site-main" role="main">
		<div class="contact-info">
			<h3><?php _e('Contact Info','repairpress'); ?></h3>
			<ul>
				<li>
					<div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div>
						<p class="bold"><?php the_field('company'); ?></p>
						<p><?php the_field('address'); ?></p>
					</div>
				</li>
				<li>
					<div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div>
						<p><?php the_field('phone_number'); ?></p>
					</div>
				</li>
				<li>
					<div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div>
						<p><?php the_field('email'); ?></p>
					</div>
				</li>
				<li>
					<div><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div>
						<p><?php the_field('web_site'); ?></p>
					</div>
				</li>
			</ul>
		</div>
		<?php $time = current_time( 'l', $gmt = 1 ); ?>

		<div class="map-location">
			<h3><?php echo __('Where U can find us ?','repairpress'); ?></h3>
			<?php echo the_field('map'); ?>
		</div>

		<div class="open-time">
			<h3><?php echo __('Openning time','repairpress'); ?></h3>
			<ul>
				<?php  ?>
				<li class="<?php echo 'monday-'.$time; ?>">
					<span><?php _e('Monday','repairpress') ?></span><span class="timming"><?php echo the_field('monday'); ?></span>
				</li>
				<li class="<?php echo 'tuesday-'.$time; ?>">
					<span><?php _e('Tuesday','repairpress') ?></span><span class="timming"><?php echo the_field('tuesday'); ?></span>
				</li>
				<li class="<?php echo 'wednesday-'.$time; ?>">
					<span><?php _e('Wednesday','repairpress') ?></span><span class="timming"><?php echo the_field('wednesday'); ?></span>
				</li>
				<li class="<?php echo 'thursday-'.$time; ?>">
					<span><?php _e('Thursday','repairpress') ?></span><span class="timming"><?php echo the_field('thursday'); ?></span>
				</li>
				<li class="<?php echo 'friday-'.$time; ?>">
					<span><?php _e('Friday','repairpress') ?></span><span class="timming"><?php echo the_field('friday'); ?></span>
				</li>
				<li class="<?php echo 'saturday-'.$time; ?>">
					<span><?php _e('Saturday','repairpress') ?></span><span class="timming"><?php echo the_field('saturday'); ?></span>
				</li> 
				<li class="<?php echo 'sunday-'.$time; ?>">
					<span><?php _e('Sunday','repairpress') ?></span><span class="timming"><?php echo the_field('sunday'); ?></span>
				</li>
			</ul>
		</div> 
		<div class="contact-main-form">
			<?php
				echo do_shortcode('[contact-form-7 id="49" title="Contact form 1"]');
			?>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();