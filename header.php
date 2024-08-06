<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
?><!DOCTYPE html> 

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link
	      rel="stylesheet"
	      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
	    />
	    <link
	      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	      rel="stylesheet"
	      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	      crossorigin="anonymous"
	    />
	    <link
	      rel="stylesheet"
	      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
	    />

  <!-- Custom styles for this template -->
  <link href="<?php echo get_stylesheet_directory_uri().'/assets/css/style.css'; ?>" rel="stylesheet" />
  <!-- responsive style -->
  <!-- <link href="<?php echo get_stylesheet_directory_uri().'/assets/css/responsive.css'; ?>" rel="stylesheet" /> -->

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header class="fixed_hedaer">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
        	<?php 
				$image = get_field('header_site_logo','options');
				if( !empty( $image ) ): ?>
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</a>
				<?php endif; ?>
          <!-- <a class="navbar-brand" href="<?php echo get_site_url(); ?>"
            ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt=""
          /></a> -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          	<?php wp_nav_menu( array(
			   'menu' => 'Main Menu',
			   'container' => 'ul',
			   'container_class' => 'ul',
			   'menu_class' => 'menu_wrap',
			   'submenu_class'=>'submenu'
			 )); ?>
            <!-- <ul id="menu" class="menu_wrap">
              <li class="active"><a href="index.html">Home</a></li>
              <li class="parent_menu">
                <a href="#">Accessories</a>
                <ul class="submenu">
                  <li><a href="#">Jewellery</a></li>
                  <li><a href="#">Bag</a></li>
                  <li><a href="#">Clutches</a></li>
                  <li><a href="#">Belts</a></li>
                </ul>
              </li>
              <li class="parent_menu">
                <a href="#">Clothing</a>
                <ul class="submenu">
                  <li><a href="#">Ladies Dress</a></li>
                  <li><a href="#">Indo Western</a></li>
                  <li><a href="#">Bridal</a></li>
                  <li><a href="#">Salwar Kameez</a></li>
                  <li><a href="#">Saree</a></li>
                  <li><a href="#">Kurtis</a></li>
                  <li><a href="#">Top</a></li>
                </ul>
              </li>
              <li><a href="about.html">About us</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul> -->
          </div>
          <div class="right_header">
            <ul>
              <li>
                <div class="search-toggle">
                  <button class="search-icon icon-search">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/search.svg" alt="" />
                  </button>
                  <button class="search-icon icon-close">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/close.svg" alt="" />
                  </button>
                </div>
                <div class="search-container">

            	<form role="search" method="get" id="searchform" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">				        
				        <input type="text" id="s" class="search-field" placeholder="<?php echo esc_attr_x( 'Search products…', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
				        <button type="submit" id="searchsubmit" class="search-submit search-icon"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/search.svg" alt="" /></button>
				        <input type="hidden" name="post_type" value="product" />
				</form>

                  <!-- <form>
                    <input
                      type="text"
                      name="q"
                      id="search-terms"
                      placeholder="Search terms..."
                    />
                    <button
                      type="submit"
                      name="submit"
                      value="Go"
                      class="search-icon"
                    >
                      <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/search.svg" alt="" />
                    </button>
                  </form> -->
                </div>
              </li>
              <li>
                <!-- <a href="#"
                  > -->
                  <?php echo do_shortcode('[yith_wcwl_items_count]'); ?>
                  <!-- <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart.svg" alt="" /><span>3</span></a
                > -->
              </li>
              <li>
              	<?php $items_count = WC()->cart->get_cart_contents_count(); 
				?>
				    <!-- <div id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></div> -->

                <a href="<?php echo wc_get_cart_url(); ?>"
                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/cart.svg" alt="" /><span id="mini-cart-count"><?php echo $items_count ? $items_count : '&nbsp;'; ?></span></a
                >
              </li>
              <li>
                <a href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/user.svg" alt="" /></a>
              </li>
            </ul>
          </div>
          <div class="menu_button">
            <a
              class="menu_btn"
              data-bs-toggle="offcanvas"
              href="#mobileMenu"
              role="button"
              aria-controls="mobileMenu"
            >
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/menu-burger.svg" alt="" />
            </a>
          </div>
        </nav>
      </div>
    </header> 

    <main class="top_padding">
