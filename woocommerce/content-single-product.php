<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<?php
//single product
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action ('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);


/**
 * Remove product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

?>
<section class="page-content_single-product">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-title_main">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="product-<?php the_ID(); ?>" <?php wc_product_class('single-product-main', $product); ?>>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="main-summary">
                                <!-- <div class="summary entry-summary main-summary">-->
                                <?php
                                /**
                                 * Hook: woocommerce_single_product_summary.
                                 *
                                 * @hooked woocommerce_template_single_title - 5
                                 * @hooked woocommerce_template_single_rating - 10
                                 * @hooked woocommerce_template_single_price - 10
                                 * @hooked woocommerce_template_single_excerpt - 20
                                 * @hooked woocommerce_template_single_add_to_cart - 30
                                 * @hooked woocommerce_template_single_meta - 40
                                 * @hooked woocommerce_template_single_sharing - 50
                                 * @hooked WC_Structured_Data::generate_product_data() - 60
                                 */
                                //                                  do_action('woocommerce_single_product_summary');

                                ?>
                                <div class="wrap_price-availability">
                                    <div class="price-wrap">
                                        <?php woocommerce_template_single_price(); ?>
                                    </div>
                                    <div>
                                        <?php

                                        if (get_post_meta(get_the_ID(), '_stock_status', true) == 'outofstock') {
                                            echo '<div class="outofstock">Нет в наличии</div>';
                                        } else {
                                            echo '<div class="stock">Товар в наличии</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                    <?php woocommerce_template_single_add_to_cart(); ?>
                                </div>
                                <div class="description-product">
                                    <div class="title">Описание</div>
                                    <div class="descr">
                                        <?php woocommerce_template_single_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <?php
                            /**
                             * Hook: woocommerce_before_single_product_summary.
                             *
                             * @hooked woocommerce_show_product_sale_flash - 10
                             * @hooked woocommerce_show_product_images - 20
                             */
                            do_action('woocommerce_before_single_product_summary');
                            ?>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php
                            /**
                             * Hook: woocommerce_after_single_product_summary.
                             *
                             * @hooked woocommerce_output_product_data_tabs - 10
                             * @hooked woocommerce_upsell_display - 15
                             * @hooked woocommerce_output_related_products - 20
                             */
                            do_action('woocommerce_after_single_product_summary');
                            ?>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>


    <?php do_action('woocommerce_after_single_product'); ?>

</section>

