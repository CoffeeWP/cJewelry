<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package cJewelry
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if IE]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Oswald:400,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.sticky-menu').fadeOut("fast");

			var windowH = jQuery(window).height();
			var stickToBot = 160;

			jQuery(window).scroll(function() {
				var scrollVal = jQuery(this).scrollTop();

				if ( scrollVal > stickToBot ) {
					jQuery('.sticky-menu').fadeIn("fast");
				} else {
					jQuery(".sticky-menu").fadeOut("fast");
				}
			});
		});
	</script>

	<style type="text/css">
		.sliderReplacement img {
			border: 2px solid <?php echo of_get_option('theme_colorpicker', '#ffe094'); ?>;
		}

		.sliderReplacement .overlay .text {
			color: <?php echo of_get_option('theme_colorpicker', '#ffe094'); ?>;
		}

		.site-footer {
			border-top: 5px solid <?php echo of_get_option('theme_colorpicker', '#ffe094'); ?>;
		}
	</style>

</head>
</html>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
<!-- 		<?php if ( get_header_image() ) : ?>
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		<?php endif; // End header image check. ?> -->
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		<?php global $woocommerce; ?>
		<div class="my-cart">
			<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/cart-icon.png" />
				<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - 
				<?php echo $woocommerce->cart->get_cart_total(); ?>
			</a>
		</div>
		<div class="hr"></div>
		<!-- Primary Menu -->
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		<div class="sticky-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</header><!-- #masthead -->


	<div id="content" class="site-content">


