<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Fav Icon -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />

	<!-- Google Tag Manager -->
	<script>
	  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	  })(window,document,'script','dataLayer','GTM-5C2SXRX');
	</script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

<div class="covid19-update">
	<h6>Business Continuity with Virtual Meetings and Digital Solutions: </h6>
	<a href="/digital-consultations/"><h6>Learn More</h6></a>
</div>
	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<!-- Desktop Menu -->
		<div class="d-none d-md-block">
			<nav class="navbar navbar-expand-md fixed-top">

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/julius-bahn-logo.gif" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="225" alt="Julius Bahn Oak Buildings logo">
				 	</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon">
							<i class="fa fa-navicon"></i>
						</span>
					</button>

					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse text-center text-md-left',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>

					<a class="btn btn-white d-none d-lg-block" href="<?php echo get_site_url(); ?>/request-a-brochure/" role="button">Request a Brochure</a>

			</nav><!-- .site-navigation -->
		</div>

		<!-- Mobile Menu -->
		<div class="d-block d-md-none">
			<nav class="navbar navbar-expand-md fixed-top">

					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/julius-bahn-logo.gif" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="180" alt="Julius Bahn Oak Buildings logo">
				 	</a>

					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
						<span class="navbar-toggler-icon">
							<i class="fa fa-navicon"></i>
						</span>
					</button>

					<?php wp_nav_menu(
						array(
							'theme_location'  => 'mobile',
							'container_class' => 'collapse navbar-collapse text-center text-md-left',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>

			</nav><!-- .site-navigation -->
		</div>

	</div><!-- #wrapper-navbar end -->
