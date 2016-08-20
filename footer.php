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
		<div class="container sidebar-footer">
			<?php dynamic_sidebar('sidebar-footer'); ?>	
		</div>
		<div class="more-info">
			TODO::
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>	
	// var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
	//   var marker = new google.maps.Marker({
	//     position: myLatLng,
	//     map: map,
	//     icon: iconBase + './img/icons-map.png'
	//   });
</script>
</body>
</html>
