<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LovelyLocomotion
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
<div>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'lovelylocomotion' ); ?></a>

	<header class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lovelylocomotion' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div id="desktop-only" class="clearfix">
			<div class="contact">
				<h3>Say Hello!</h3>
				<a href="tel:2133277321">(213) 327-7321</a><br />
				<a href="mailto:hello@lovelylocomotion.com">hello@lovelylocomotion.com</a>
				<address>PO Box 50581<br />Los Angeles, CA 90050</address>
			</div>
			<div class="social">
				<h3>Let's Be Social</h3>
					<ul>
						<li><a href="http://bit.ly/20yNi9U" ><img src="http://localhost:8888/lovelylocomotion/wp-content/uploads/2016/05/instagram.png" alt="Follow @lovelylocomotion on Instagram"></a>
						</li>
						<li>
							<a href="http://bit.ly/1nTOxBX"><img src="http://localhost:8888/lovelylocomotion/wp-content/uploads/2016/05/pinterest.png" alt="Follow @kmclatchie on Pinterest"></a>
						</li>
						<li>
							<a href="http://bit.ly/1Q49aSE"><img src="http://localhost:8888/lovelylocomotion/wp-content/uploads/2016/05/twitter.png" alt="Follow @kmclatchie on Twitter"></a>
						</li>
						<li>
							<a href="http://bit.ly/1Shcrou"><img src="http://localhost:8888/lovelylocomotion/wp-content/uploads/2016/05/linkedin.png" alt="Connect with Kirstin on LinkedIn"></a>
						</li>
						<li>
							<a href="http://bit.ly/1nUjq9T"><img src="http://localhost:8888/lovelylocomotion/wp-content/uploads/2016/05/github.png" alt="Follow Kirstin on Github"></a>
						</li>
			</div>
	</header><!-- #masthead -->


	<div id="content">
