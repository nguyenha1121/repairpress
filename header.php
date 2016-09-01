<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RepairPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'repairpress' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="tops">
			<div class="rotate">
			</div>
			<div class="container">
				<div class="top">
					<div class="welcome"><?php echo get_theme_mod('description-Top'); ?></div>
					<nav class="navbar-top">
						<?php 
							 wp_nav_menu( array(
                                'menu'              => 'top-menu',
                                'theme_location'    => 'Top-menu',
                                'depth'             => 3,
                                'menu_class'        => 'top-menu'
                                )
                            );
						?>
					</nav>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="site-branding">			
				<?php logo_site(); ?>
				
			</div>
		</div>
		<div class="navbar-primary">
			<div class="container">
				<div class="nodo">
					<nav id="site-navigation" class="main-navigation " role="navigation">
						<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="fa fa-home" aria-hidden="true"></i></a>
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'repairpress' ); ?></button>
						<div class="primary-menu-haeder">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth'=>'3','menu_id' => 'primary-menu' ) ); ?>
						</div>
					</nav><!-- #site-navigation -->
							
					<div class="social-menu-icons">
						<?php my_social_media_icons(); ?>		
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="menu-res">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'depth'=>'3','menu_id' => 'menu-res' ) ); ?>
	</div>
	<div id="content" class="site-content">
