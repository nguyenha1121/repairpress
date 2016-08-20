<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RepairPress
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main main-404" role="main">

			<section class="error-404 not-found container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( '404 Error', 'repairpress' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p class="p1"><?php esc_html_e( 'Looks like something went wrong', 'repairpress' ); ?></p>
					<p class="p2"><?php esc_html_e('Page you are looking for is not here.','repairpress') ?></p>
					<p class="p3">Go <a href="<?php esc_url( home_url( '/' ) ); ?>">Home</a> of try to search.</p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>