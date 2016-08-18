<?php
/*
 Template Name: About Us
 */
?>
<?php get_header(); ?>
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
<div class="content-about-team">
	<div class="container">
		<div class="title-team">
			<div class="our-team">Our Team todo::</div><div class="line"></div>
		</div>
		<div class="content-team">
			<div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div><div class="item-team">
				<div class="item-img"></div>
				<a href="#">CEO&todo::</a>
				<h3 class="item-name">Name todo::</h3>
				<p class="item-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, corporis!</p>
				<hr>
				<p><span>Meet me on:</span><span>List mxh</span></p>
			</div>
		</div>
	</div>
</div>