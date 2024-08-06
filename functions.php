<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}



function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

add_action('acf/init', 'my_function_name');

function my_function_name(){
  // add options pages here
   $page = acf_add_options_page(array(
        'page_title' 	=> __('My Theme Options', 'productify'),
        'menu_title' 	=> __('My Theme Options', 'productify'),
        'menu_slug' 	=> 'my-theme-options',
        'capability' 	=> 'edit_posts',
        'redirect' 	    => false
    ));
}

// add_action( 'wp_head', 'show_template_path' );

function show_template_path(){
    global $template;
    echo $template;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'wc_refresh_mini_cart_count');
function wc_refresh_mini_cart_count($fragments){
    ob_start();
    $items_count = WC()->cart->get_cart_contents_count();
    ?>
    <div id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></div>
    <?php
        $fragments['#mini-cart-count'] = ob_get_clean();
    return $fragments;
}

if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_get_items_count' ) ) {
  function yith_wcwl_get_items_count() {
    ob_start();
    ?>
      <a href="<?php echo esc_url( YITH_WCWL()->get_wishlist_url() ); ?>">
        <span class="yith-wcwl-items-count">
          <i class="yith-wcwl-icon fa fa-heart-o"><?php echo esc_html( yith_wcwl_count_all_products() ); ?></i>
        </span>
      </a>
    <?php
    return ob_get_clean();
  }

  add_shortcode( 'yith_wcwl_items_count', 'yith_wcwl_get_items_count' );
}

if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_ajax_update_count' ) ) {
  function yith_wcwl_ajax_update_count() {
    wp_send_json( array(
      'count' => yith_wcwl_count_all_products()
    ) );
  }

  add_action( 'wp_ajax_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
  add_action( 'wp_ajax_nopriv_yith_wcwl_update_wishlist_count', 'yith_wcwl_ajax_update_count' );
}

if ( defined( 'YITH_WCWL' ) && ! function_exists( 'yith_wcwl_enqueue_custom_script' ) ) {
  function yith_wcwl_enqueue_custom_script() {
    wp_add_inline_script(
      'jquery-yith-wcwl',
      "
        jQuery( function( $ ) {
          $( document ).on( 'added_to_wishlist removed_from_wishlist', function() {
            $.get( yith_wcwl_l10n.ajax_url, {
              action: 'yith_wcwl_update_wishlist_count'
            }, function( data ) {
              $('.yith-wcwl-items-count').children('i').html( data.count );
            } );
          } );
        } );
      "
    );
  }

  add_action( 'wp_enqueue_scripts', 'yith_wcwl_enqueue_custom_script', 20 );
}

add_filter('nav_menu_submenu_css_class', function( $classes, $args, $depth ) {
    if (property_exists($args, 'submenu_class')) {
        $arr_classes = explode(' ', $args->submenu_class);
        $classes = array_merge($classes, $arr_classes);
    }

    if (property_exists($args, "submenu_class_$depth")) {
        $arr_classes = explode(' ', $args->{"submenu_class_$depth"});
        $classes = array_merge($classes, $arr_classes);
    }

    return $classes;
}, 1, 3);


// Trending category shortcode
function get_trending_categories($atts) {
    $atts = shortcode_atts(array(
        'limit' => 10, 
    ), $atts, 'trending_categories');
    
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'count', // Order by the number of products in each category
        'order' => 'DESC',
        'number' => $atts['limit'], // Limit the number of categories
        'hide_empty' => true, // Hide empty categories
    );
    
    $product_categories = get_terms($args);

    ob_start();
    
    if (!empty($product_categories) && !is_wp_error($product_categories)) {
        echo '<div class="swiper category_tab_slider">
                    <div class="swiper-wrapper">';
        foreach ($product_categories as $category) {
            $category_link = get_term_link($category);
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_image_url($thumbnail_id, 'full');
            if (is_wp_error($category_link)) {
                continue;
            }
            echo '<div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">';
								            echo '<a href="' . esc_url($category_link) . '">';
								            	echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" />';           
								            echo '</a>';
             							echo '</div>';

             							echo '<div class="category_slide_title">
			                            <div class="category_title_wrap">
			                              <h3>'.esc_html($category->name).'</h3>
			                            </div>
			                            <div class="category_price_wrap">
			                              <p>From $59</p>
			                            </div>
                          			</div>
                        	</div>
                    </div>';
        }
        echo '</div>
        <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>';
        echo '</div>';
    } else {
        echo '<p>No categories found.</p>';
    }
    return ob_get_clean();
}
add_shortcode('trending_categories', 'get_trending_categories');


function get_child_categories_shortcode($atts) {
    $atts = shortcode_atts(
        array(
            'parent' => 0, 
        ),
        $atts,
        'child_categories'
    );

    $args = array(
        'taxonomy'   => 'product_cat',
        'child_of'   => $atts['parent'],
        'hide_empty' => true,
    );

    $categories = get_categories($args);

    if (!empty($categories) && !is_wp_error($categories)) {
        echo '<div class="swiper category_tab_slider">
                    <div class="swiper-wrapper">';
        foreach ($categories as $category) {
            $category_link = get_term_link($category);
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = wp_get_attachment_image_url($thumbnail_id, 'full');
            if (is_wp_error($category_link)) {
                continue;
            }
            echo '<div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">';
							            echo '<a href="' . esc_url($category_link) . '">';
							            	echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" />';           
							            echo '</a>';
             							echo '</div>';

             							echo '<div class="category_slide_title">
			                            <div class="category_title_wrap">
			                              <h3>'.esc_html($category->name).'</h3>
			                            </div>
			                            <div class="category_price_wrap">
			                              <p>From $59</p>
			                            </div>
                          			</div>
                        	</div>
                    </div>';
        }
        echo '</div>
        			<div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>';
        echo '</div>';
    } else {
        echo '<p>No categories found.</p>';
    }

    $output = ob_get_clean();
    return $output;
}
add_shortcode('child_categories', 'get_child_categories_shortcode');


// Custom shortcode to display products with the ACF radio button field set to "Yes"
// function display_featured_products($atts) {
//     // Extract shortcode attributes and set defaults if needed
//     $atts = shortcode_atts(
//         array(
//             'posts_per_page' => -1, // Default to show all products
//         ),
//         $atts,
//         'featured_productssss'
//     );

//     // Query arguments to get products with the ACF radio button set to "Yes"
//     $args = array(
//         'post_type' => 'product',
//         'posts_per_page' => $atts['posts_per_page'],
//         'meta_query' => array(
//             array(
//                 'key' => 'featured_product',
//                 'value' => 'Yes', // Value when the radio button is set to "Yes"
//                 'compare' => '=='
//             )
//         )
//     );

//     // Get the products
//     $query = new WP_Query($args);

//     if (!$query->have_posts()) {
//         return '<p>No featured products found.</p>';
//     }

//     // Start output buffering
//     ob_start();

//     echo '<ul class="featured-products">';
//     while ($query->have_posts()) {
//         $query->the_post();
//         global $product;
//         echo '<li>';
//         echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
//         echo '<div class="price">' . $product->get_price_html() . '</div>';
//         echo woocommerce_get_product_thumbnail();
//         echo '</li>';
//     }
//     echo '</ul>';

//     // Restore original Post Data
//     wp_reset_postdata();

//     // Get the buffered content and clean the buffer
//     $output = ob_get_clean();

//     return $output;
// }

// // Register the custom shortcode
// add_shortcode('featured_productssss', 'display_featured_products');


// Custom shortcode to display featured products
add_shortcode('soqopslider', 'wps_soqopslider');

function wps_soqopslider($atts) {
    $atts = shortcode_atts(
        array(
            'per_page' => '12',
            'columns'  => '4',
            'orderby'  => 'date',
            'order'    => 'desc',
            'category' => '',  // Slugs
            'operator' => 'IN', // Possible values are 'IN', 'NOT IN', 'AND'.
        ), $atts, 'soqopslider'
    );

    $meta_query  = WC()->query->get_meta_query();
    $tax_query   = WC()->query->get_tax_query();
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'featured',
        'operator' => 'IN',
    );

    $query_args = array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => $atts['per_page'],
        'orderby'             => $atts['orderby'],
        'order'               => $atts['order'],
        'meta_query'          => $meta_query,
        'tax_query'           => $tax_query,
    );

    // The Query
    $the_query = new WP_Query($query_args);

    $html = '<div class="swiper-wrapper">';

    // The Loop
    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            global $product;
            $html .= '<div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="' . esc_url(get_permalink()) . '"
                      ><img src="' . esc_url(get_the_post_thumbnail_url()) . '" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn added">';
                         if (class_exists('YITH_WCWL')) {
						                $html .= do_shortcode('[yith_wcwl_add_to_wishlist]');
						            }
                      $html .='</div>
                      <div class="cart_button">';           

            	$html .= '<a href="?add-to-cart=' . esc_attr($product->get_id()) . '&quantity=1" data-quantity="1" data-product_id="' . esc_attr($product->get_id()) . '" class="btn_primary w-100 add-to-cart  add_to_cart_button ajax_add_to_cart">Add to cart</a>';

            $html .= '</div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>' . $product->get_price_html() . '</h5>
                    </div>
                  </div>
                </div>
              </div>';
        }
        // Restore original Post Data
        wp_reset_postdata();
        // Output
        return $html . '</div><div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>';
    } else {
        return "No featured products found :(";
    }
}


add_shortcode('trending_accessories', 'custom_trending_accessories_shortcode');

function custom_trending_accessories_shortcode($atts) {
    // Extract shortcode attributes and set defaults if needed
    $atts = shortcode_atts(
        array(
            'per_page' => '12',
            'columns'  => '4',
            'orderby'  => 'date',
            'order'    => 'desc',
        ),
        $atts,
        'trending_accessories'
    );

    // Query arguments to get trending products in the accessories category
    $args = array(
        'post_type'           => 'product',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => 1,
        'posts_per_page'      => $atts['per_page'],
        'orderby'             => $atts['orderby'],
        'order'               => $atts['order'],
        'meta_key'            => 'total_sales', // Assuming you're using total sales to determine trending products
        'meta_query'          => array(
            array(
                'key'     => '_stock_status',
                'value'   => 'instock',
                'compare' => '=',
            ),
        ),
        'tax_query'           => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'accessories', // Change 'accessories' to your desired category slug
                'operator' => 'IN',
            ),
        ),
    );

    // Get the products
    $products = new WP_Query($args);

    // Output the products
    ob_start();
    if ($products->have_posts()) {
        echo '<div class="swiper-wrapper">';
        while ($products->have_posts()) {
            $products->the_post();
            global $product;
            ?>
            <div class="swiper-slide">
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
              </div>
              <?php
        }
        echo '</div><div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>';
    } else {
        echo '<p>No trending products found in the accessories category.</p>';
    }
    wp_reset_postdata();

    return ob_get_clean();
}


add_action( 'wp_footer', 'footer_script' );
function footer_script(){
    ?>
    <script>
    jQuery(document).ready(function($) {
		     
		});
   </script>

   <?php 
}
?>