<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">



	<div class="header-wrapper">  <!--top Header-->
		<div class="container mb-3 mt-3">
			<div class="row align-items-center">
				<div class="col-sm-3">
					<!-- Your site title as branding in the menu -->
					<!-- TODO: Add theme option to display default logo or name ie. echo bloginfo('name') -->
					<?php if ( ! has_custom_logo() ) { ?>
						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0">
								<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">								
									<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" />									
								</a>
							</h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">								
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo Dark background"/>
							</a>

						<?php endif; ?>


						<?php } else {
						the_custom_logo();
						} ?><!-- end custom logo -->
				</div>
				<div class="col-sm-4">
							<!-- Woocommerce Product Search -->
							<?php get_product_search_form(); ?>
				</div>
				<div class="col-sm-3">
					<div class="support-text">
						Email<br/>
						<a href="mailto:customersupport@hamronepalko.com">
							Customer Support
						</a>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget_shopping_cart_content">
						<?php echo woocommerce_mini_cart();?>
					</div>							
				</div>
			</div>
		</div>
	</div>


	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-dark sps data-sps-offset" data-sps-offset="200">

		<?php if ( 'container' == $container ) : ?>
			<div class="container" >
		<?php endif; ?>

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="Logo Dark Background" style="height:32px; width: auto;"/>
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
