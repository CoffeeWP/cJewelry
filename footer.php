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

<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
        <?php printf( __( '%1$s by %2$s.', 'cjewelry' ), 'cjewelry', '<a href="http://www.coffeewp.com/">CoffeeWP</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

