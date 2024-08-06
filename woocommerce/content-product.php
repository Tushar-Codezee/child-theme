<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
    return;
}
?>

<li <?php wc_product_class( '', $product ); ?>>
    <div class="product_box">
      <div class="product_box_img">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=""
            />
          </a>
        <div class="product_box_top">
          <div class="wishlist_btn added">
            <?php
             if (class_exists('YITH_WCWL')) {
                    echo do_shortcode('[yith_wcwl_add_to_wishlist]');
                }
                ?>
          </div>
          <div class="cart_button">
                        <a href="?add-to-cart=<?php echo esc_attr($product->get_id()); ?>&quantity=1" data-quantity="1" data-product_id="<?php echo esc_attr($product->get_id()); ?>" class="btn_primary w-100 add-to-cart  add_to_cart_button ajax_add_to_cart">Add to cart</a>
                    </div>
        </div>
      </div>
      <div class="product_box_text">
        <div class="product_title">
          <h4>
            <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
          </h4>
        </div>
        <div class="product_price">
          <h5><?php echo $product->get_price_html(); ?></h5>
        </div>
      </div>
    </div>    
</li>
