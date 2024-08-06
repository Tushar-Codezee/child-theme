<?php
defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php echo do_shortcode('[yith_wcan_filters slug="draft-preset"]'); ?>
            
        </div>
        <div class="col-md-9">
            <?php
            do_action( 'woocommerce_before_main_content' );

            if ( apply_filters( 'woocommerce_show_page_title', true ) ) :
                ?>
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                <?php
            endif;

            do_action( 'woocommerce_archive_description' );

            if ( woocommerce_product_loop() ) {
                do_action( 'woocommerce_before_shop_loop' );

                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();

                        do_action( 'woocommerce_shop_loop' );

                        wc_get_template_part( 'content', 'product' );
                    }
                }

                woocommerce_product_loop_end();

                do_action( 'woocommerce_after_shop_loop' );
            } else {
                do_action( 'woocommerce_no_products_found' );
            }

            do_action( 'woocommerce_after_main_content' );

            ?>
        </div>
    </div>
</div>

<?php
get_footer( 'shop' );
