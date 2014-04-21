<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package cJewelry
 */

get_header(); ?>

<div class="sliderReplacement">
	<img src="<?php echo get_template_directory_uri() . '/images/slider-replacment.jpg' ?>">
	<div class="overlay">
		<div class="text">
			<?php echo of_get_option('slider_replacment_overlay_text', 'Beautiful Jewelry theme, WooCommerce ready'); ?>
		</div>
	</div>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>
			<div class="products header">
				<div class="hr onethird"></div>
				<div class="text">- <?php echo __('New Products', 'cjewelry') ?> -</div>
				<div class="hr onethird"></div>
			</div>

			<?php if ( dynamic_sidebar('mainpage_widget_area') ) : else : endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) :  the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php cjewelry_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
