<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');

?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name');?> - <?php bloginfo('description');?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php wp_head();?>
</head>

<body <?php body_class();?>>

<div class="hfeed site" id="page">

	<header class="header-wrapper sps data-sps-offset" data-sps-offset="100">
      <nav class="navbar navbar-expand-md">
		<div class="container">
			<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-light.png" alt="Logo Dark Background" style="height:32px; width: auto;"/>
			</a>
					
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamroNav" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			
			<?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'hamroNav',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'header-main-menu',
                    'menu_item_class' => 'test',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                )
            );?>
			<div class="widget_shopping_cart_content">
				<?php echo woocommerce_mini_cart(); ?>
			</div>
			<?php get_product_search_form();?>
		</div>
      </nav>
    </header>