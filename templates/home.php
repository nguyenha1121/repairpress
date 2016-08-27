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
		 	for ($i = 0 ; $i<count($sc);$i++){
		 		$strings = $sc[$i];
				echo do_shortcode( $strings ); 
			}
		?>			 
	</div>
</div>
<div class="banner">
	<div class="container">
		<?php echo do_shortcode('[banner_item t1="No fix, no fee" t2="Lorem ipsum dolor sit." t3="fa-money"]'); ?>
		<?php echo do_shortcode('[banner_item t1="No fix, no fee" t2="Lorem ipsum dolor sit." t3="fa-money"]'); ?>
		<?php echo do_shortcode('[banner_item t1="No fix, no fee" t2="Lorem ipsum dolor sit." t3="fa-money"]'); ?>
		<?php echo do_shortcode('[banner_item t1="No fix, no fee" t2="Lorem ipsum dolor sit." t3="fa-money"]'); ?>
	</div>
</div>
<div class="first-row">
	<div class="container">
		<div class="fri-c">
			<?php echo do_shortcode('[fri1 src-img="http://tophinhanhdep.net/wp-content/uploads/2015/12/anh-dep-mua-xuan-5.jpg" title="Water damage repair" except="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." src-readmore="#"] '); ?>
			<?php echo do_shortcode('[fri1 src-img="http://www.wn.com.vn/timthumb.php?src=http://www.wn.com.vn/product_images/c/178/dong-v%E1%BA%A1t-ngo-nghinh(1)__08823.jpg&w=1000&h=606&zc=1" title="Water damage repair" except="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." src-readmore="#"] '); ?>
			<?php echo do_shortcode('[fri1 src-img="http://tophinhanhdep.net/wp-content/uploads/2015/12/anh-dep-mua-xuan-5.jpg" title="Water damage repair" except="We offer free postage with all mobile phone & tablet repairs. Saving time and money. Just print the label and send." src-readmore="#"] '); ?>
			<div class="first-row-item fri2">
				<ul>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
					<?php echo do_shortcode('[fri2 href="#" name-i-tag="fa-laptop" title="Mac & Pc Repair"]'); ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class = "r-2">
	<div class="container">
		<div class="row2">
			<h2 class="title-row2">Easy way to get your phone repaired</h2>
			<div class="content-row2">				
				<?php echo do_shortcode('[row_2_steps i-tag="fa-mobile" desc="If your device breaks, don\'t panic. We offer a huge range of mobile phone & tablet repair services" title="Broken Device" active="true"]'); ?>
				<?php echo do_shortcode('[row_2_steps i-tag="fa-mobile" desc="If your device breaks, don\'t panic. We offer a huge range of mobile phone & tablet repair services" title="Broken Device"]'); ?>
				<?php echo do_shortcode('[row_2_steps i-tag="fa-mobile" desc="If your device breaks, don\'t panic. We offer a huge range of mobile phone & tablet repair services" title="Broken Device"]'); ?>
				<?php echo do_shortcode('[row_2_steps i-tag="fa-mobile" desc="If your device breaks, don\'t panic. We offer a huge range of mobile phone & tablet repair services" title="Broken Device"]'); ?>
			</div>
		</div>
	</div>
</div>
<div class="third-row">
	<div class="container">
		<div class="content-tr">			
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>
			<?php echo do_shortcode('[third_row i-tag = "fa-android" title="Android Lolipop" desc="Aenean commodo ligula eget dolor. Aenean massa. Lorem ipsum dolor sit amet, consec tetuer adipis elit, aliquam eget nibh etlibura"]') ?>

		</div>
	</div>
</div>


<?php echo do_shortcode('[sell-row title="Do you want to sell your mobile phone?" desc="We can sell your cell phone device in the matter of days for just 10% fee" href="#" button="GET A FREE ESTIMATION"]') ?>

<div class="blog-row">
	<div class="container">
		<div class="latest-news">
			<p class="latest"><?php echo __('Latest news','repairpress') ?></p>
			<span class="line"></span>
			<a href="more-post">more post</a>
		</div>
		<div class="content-blog">
			<?php
				echo do_shortcode('[blog]');
			?>
		</div>
	</div>
</div>

<div class="r-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				
				<?php echo do_shortcode('[about_us title-us="A little something about us" src-img1="http://baocon.net/wp-content/uploads/2015/11/Diep-lam-anh-ben-bai-bien-1.png" src-img2="http://sv.1phut.mobi/uploads/2016/08/anh-gai-xinh-de-thuong.jpg" except-us="<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quidem. Aperiam eaque porro cum, qui! Repellat cupiditate eos officiis consequuntur quidem nesciunt autem cum quos magnam reiciendis mollitia explicabo provident, adipisci optio fuga libero quo ad eveniet cumque. Quod voluptatum praesentium similique id voluptate blanditiis, debitis officia deserunt nemo et.</p>" href="#"]') ?>
			</div>
			<div class="col-md-6">
				<div class="faq">
					<div class="title-faq">
						<p><?php echo __('FAQ','repairpress'); ?></p>
						<span></span>
						<a href="<?php echo do_shortcode('[link_readmore_faq href = "#"]'); ?>"><?php echo __('read more','repairpress'); ?></a>
					</div>
					<div class="faqs">
						<ul>
							<?php echo do_shortcode('[accordion_faq max-length="20" content ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores similique laborum rerum, expedita porro consectetur repellat! Veniam quidem totam reiciendis quis aliquam quaerat deleniti expedita consequuntur in incidunt, dolor." title = "HOW TO MAKE TEXT BIGGER ON THE IPHONE?"]'); ?>
							<?php echo do_shortcode('[accordion_faq max-length="20" content ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores similique laborum rerum, expedita porro consectetur repellat! Veniam quidem totam reiciendis quis aliquam quaerat deleniti expedita consequuntur in incidunt, dolor." title = "HOW TO MAKE TEXT BIGGER ON THE IPHONE?"]'); ?>
							<?php echo do_shortcode('[accordion_faq max-length="20" content ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores similique laborum rerum, expedita porro consectetur repellat! Veniam quidem totam reiciendis quis aliquam quaerat deleniti expedita consequuntur in incidunt, dolor." title = "HOW TO MAKE TEXT BIGGER ON THE IPHONE?"]'); ?>
							<?php echo do_shortcode('[accordion_faq max-length="20" content ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores similique laborum rerum, expedita porro consectetur repellat! Veniam quidem totam reiciendis quis aliquam quaerat deleniti expedita consequuntur in incidunt, dolor." title = "HOW TO MAKE TEXT BIGGER ON THE IPHONE?"]'); ?>
							<?php echo do_shortcode('[accordion_faq max-length="20" content ="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores similique laborum rerum, expedita porro consectetur repellat! Veniam quidem totam reiciendis quis aliquam quaerat deleniti expedita consequuntur in incidunt, dolor." title = "HOW TO MAKE TEXT BIGGER ON THE IPHONE?"]'); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo do_shortcode('[add_map]<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14369.949326362925!2d2.335905574926782!3d48.8551524935009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2zUGEgcmksIFBow6Fw!5e1!3m2!1svi!2s!4v1472270136134" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>[/add_map]'); ?>

<div class="row-gallery">
	<div class="container">
		<div class="title-gallery">
			<p><?php echo __('Gallery before - after','repairpress'); ?></p>
			<span></span>
		</div>
		<div class="content-gallery row">
			<?php echo do_shortcode('[item_gallery src-before="http://www.suadienthoaihcm.net/wp-content/uploads/2015/08/Sony-Xperia-Z-28-JPG-1363578764_500x0.jpg" src-after = "http://media.tinmoi.vn/2013/03/14/sony-xperia-z-.jpg" desc = "water damage repair"]'); ?>
		</div>
	</div>
</div>

<div class="row-testimonials"></div>

<?php get_footer(); ?>