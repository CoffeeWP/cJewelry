<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cJewelry
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="warp-footer">
		<div class="widget-footer widget-one"><?php if ( dynamic_sidebar('widgetfooter1') ) : else : endif; ?></div>
		<div class="widget-footer widget-two"><?php if ( dynamic_sidebar('widgetfooter2') ) : else : endif; ?></div>
		<div class="widget-footer widget-three"><?php if ( dynamic_sidebar('widgetfooter3') ) : else : endif; ?></div>
		<div class="widget-footer widget-four"><?php if ( dynamic_sidebar('widgetfooter4') ) : else : endif; ?></div>

		<div class="warp-footer">
			<div class="site-info">
				<?php printf( __( '%1$s by %2$s.', 'cjewelry' ), 'cjewelry', '<a href="http://www.coffeewp.com/">CoffeeWP</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</div>
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>

