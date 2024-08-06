<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
	 </main>

    <footer>
      <div class="service_tag_wrapper">
        <div class="container">
          <div class="row g-0">
            <div class="col-md-3">
              <div class="service_tab_box">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/shipping.svg" alt="">
                <h4>Free Shipping</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="service_tab_box">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/money-back.svg" alt="">
                <h4>Money Back Guarantee</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="service_tab_box">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/discount.svg" alt="">
                <h4>Special discounts</h4>
              </div>
            </div>
            <div class="col-md-3">
              <div class="service_tab_box">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/exchange.svg" alt="">
                <h4>Exchanges & Returns</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main_footer">
        <div class="container">
          <div class="row g-0">
            <div class="col-md-3">
              <div class="footer_box about_footer">
                <a href="#" class="mb-3 d-inline-block"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png" alt=""></a>
                <p class="m-0">Explore our unique collection of limited editions. Find the streetwear brands you’ve been searching for!</p>
                <div class="social_Wrap">
                  <h5>Follow us on</h5>
                  <ul>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/facebook.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/twitter.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_box footer_link">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Clothing</a></li>
                  <li><a href="#">Accessories</a></li>
                  <li><a href="#">Trending</a></li>
                  <li><a href="#">New Arrivals</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_box footer_link">
                <h4>Information</h4>
                <ul>
                  <li><a href="about.html">About us</a></li>
                  <li><a href="contact.html">Contact us</a></li>
                  <li><a href="info-shipping.html">Shipping</a></li>
                  <li><a href="info-refund.html">Returns & Refunds</a></li>
                  <li><a href="info-payment.html">Payment</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer_box newsletter_wrap">
                <h4>Subscribe to our Newsletter</h4>
                <p>Be the first to get exclusive offers and the latest news on our product directly in your inbox</p>
                <form action="">
                  <div class="form-group mb-3">
                    <input type="email" class="form-control" placeholder="Enter your email address">
                  </div>
                  <button class="btn_primary w-100">Subscribe <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""></button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <p class="m-0">©<?php echo date('Y'); ?> Firstlyi, All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <div
      class="offcanvas offcanvas-start menu_offcanvas"
      tabindex="-1"
      id="mobileMenu"
      aria-labelledby="offcanvasExampleLabel"
    >
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
          <a href="index.html"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.svg" alt="" /></a>
        </h5>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <div class="search_wrap_faq">
          <input type="text" class="form-control" placeholder="Search" />
          <button class="btn_search">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/search2.svg" alt="" />
          </button>
        </div>
        <nav class="mobile_navbar navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link active dropdown-toggle"
                href="#"
                id="homeDropdown1"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Home
              </a>
              <ul class="dropdown-menu" aria-labelledby="homeDropdown1">
                <li><a class="dropdown-item" href="index.html">Home One</a></li>
                <li>
                  <a class="dropdown-item" href="home-two.html">Home Two</a>
                </li>
                <li>
                  <a class="dropdown-item" href="home-three.html">Home Three</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="shopDropdown2"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="shopDropdown2">
                <li><a class="dropdown-item" href="shop.html">Shop one</a></li>
                <li>
                  <a class="dropdown-item" href="shop-two.html">Shop Two</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faq.html">FAQ</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="blogDropdown3"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Blog
              </a>
              <ul class="dropdown-menu" aria-labelledby="blogDropdown3">
                <li><a class="dropdown-item" href="blog.html">Blog one</a></li>
                <li>
                  <a class="dropdown-item" href="blog-two.html">Blog Two</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="info-shipping.html">Info</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- custom js -->
  <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/custom.js'; ?>"></script>
  <!-- Google Map --> 

		<?php wp_footer(); ?>

	</body>
</html>
