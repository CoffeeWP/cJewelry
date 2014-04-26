<?php global $product; ?>
<li class="product">
    <div class="frame-top">
        <div class="frame-bottom">
            <a href="<?php echo esc_url( get_permalink( $product->id ) ); ?>" title="<?php echo esc_attr( $product->get_title() ); ?>">
                <?php echo $product->get_image(); ?>
                <?php echo $product->get_title(); ?>
            </a>
            <?php if ( ! empty( $show_rating ) ) echo $product->get_rating_html(); ?>
            <?php echo $product->get_price_html(); ?>
            <div class="buttonWrapper">
                <div class="button">Add to Cart</div>
                <div class="button">Details</div>
            </div>
        </div>
    </div>
</li>