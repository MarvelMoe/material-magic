<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap-magic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<style>
	.menu-1608-container {
		margin-left: calc(30% - 10px);
	}
	.main-navigation ul {
		padding: 12px 0;
	    font-size: 1.2em;
	}
	.main-navigation li {
		padding: 0 60px;
	}
	.main-navigation a {
	    color: #000;
	    font-weight: bold;
	}
	nav {
		text-align: center;
		margin-left: calc(0%);
		position: absolute;
		bottom: 100px;
	}
	.site-footer {
	    position: absolute;
	    bottom: 0;
	}

</style>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-magic' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				
				<!-- CODE TO DISPLAY ON INTERIOR PAGES -->

				<?php

			endif; ?>

		</div><!-- .site-branding -->



		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bootstrap-magic' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<hr style="width: 90%; border: 2px solid rgba(0,0,0,.9); margin-bottom: 2rem">

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
