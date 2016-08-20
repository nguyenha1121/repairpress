<?php
/*
 Template Name: Home
*/
?>
<?php
	get_header();
?>
<div class="slider">
	<div id="owl-demo" class="owl-carousel owl-theme">	
		<?php 
		$items = get_field('item_slider');
		$sc = explode("/", $items);
		 	for ($i = 0;$i<count($sc);$i++){
		 		$strings = $sc[$i];
				echo do_shortcode( $strings ); 
			}
		?>			 
	</div>
</div>
<div class="banner">
	<div class="item-banner">
		<div class="banner-text">
			<p class="main-banner">No fix, no fee</p>
			<p class="desc-banner">Lorem ipsum dolor sit.</p>
		</div>
		<div class="banner-icon">
			<i class="fa fa-money" aria-hidden="true"></i>
		</div>
	</div>
</div>





<?php get_footer(); ?>