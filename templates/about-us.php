<?php
/*
 Template Name: About Us
 */
?>
<?php get_header(); ?>
<div class="description-page">
	<div class="container">
		<h1><?php echo the_title(); ?></h1>
		<p class="desc"><?php the_field('description'); ?></p>
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

<?php echo do_shortcode('[team]'); ?>
<?php echo do_shortcode('[future num-item="2" title-1="Our mission" content-1="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis dui a ex tempor, eu vestibulum nunc viverra. Mauris non est ultrices, vestibulum mauris eget, tristique elit. Praesent nec nisi at libero dictum rutrum.  Duis a justo at ipsum suscipit vehicula at eu quam." title-2="Our vision" content-2="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis dui a ex tempor, eu vestibulum nunc viverra. Mauris non est ultrices, vestibulum mauris eget, tristique elit. Praesent nec nisi at libero dictum rutrum.  Duis a justo at ipsum suscipit vehicula at eu quam." src-img="http://img.news.zing.vn/img/537/t537860.jpg"]'); ?>
<div></div>
<?php
	get_footer();
?>