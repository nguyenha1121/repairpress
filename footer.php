<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RepairPress
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="tail-site">
			<div class="container ">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="sidebar-footer">
							<div class="info-footer">
								<?php logo_footer(); ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6">
						<?php dynamic_sidebar('sidebar-footer'); ?>	
					</div>
					<div class="col-md-3 col-sm-3 col-xs-6">
						<?php contact_footer(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="more-info">
				<span class="early-f"><?php echo get_theme_mod('early'); ?></span>
				<span class="middle-f"><?php my_bank_cards(); ?></span>
				<span class="late-f"><?php echo get_theme_mod('late'); ?></span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
