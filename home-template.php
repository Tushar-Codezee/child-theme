<?php 
/*
template name:Home Template
*/
get_header();

$path = get_stylesheet_directory_uri().'/assets/';
?>


  <section id="hero" class="banner">
        <div class="swiper banner_slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner1.jpg" alt="" class="desktop_img"
              /></a>
              <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner1.jpg" alt="" class="mobile_img"
              /></a>
            </div>
            <div class="swiper-slide">
              <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner4.jpg" alt="" class="desktop_img"
              /></a>
              <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner4.jpg" alt="" class="mobile_img"
              /></a>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

        <?php
        if( have_rows('add_code_text') ): ?>
          <div class="offer_scroll_wrapper">
            <article class="main-container__marquee">
              <div class="main-container__marquee-track">
                <div class="main-container__marquee-items">
            <?php
            while( have_rows('add_code_text') ) : the_row();                
                $code_text = get_sub_field('add_code'); ?>
                <span class="main-container__marquee-item items_wrap"
                  ><?php echo $code_text; ?></span>
            <?php endwhile; ?>
              </div>
              <div aria-hidden="true" class="main-container__marquee-items">
                <?php
                while( have_rows('add_code_text') ) : the_row();                
                    $code_text = get_sub_field('add_code'); ?>
                    <span class="main-container__marquee-item items_wrap"
                      ><?php echo $code_text; ?></span>
                <?php endwhile; ?>
              </div>              
            </article>
          </div>        
        <?php
        endif; ?>
      </section>       

      <section id="trending_category" class="main_category_slider py_70">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h2><?php echo the_field('heading_ternding_section'); ?></h2>
              <div
                class="nav flex-lg-column nav-pills vertical_tab_wrap me-3"
                id="v-pills-tab"
                role="tablist"
                aria-orientation="vertical"
              >
                <button
                  class="nav-link active"
                  id="v-pills-Trending-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Trending"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Trending"
                  aria-selected="true"
                >
                  Trending <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                </button>
                <button
                  class="nav-link"
                  id="v-pills-Clothing-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Clothing"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Clothing"
                  aria-selected="false"
                >
                  Clothing <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                </button>
                <button
                  class="nav-link"
                  id="v-pills-Accessories-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Accessories"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Accessories"
                  aria-selected="false"
                >
                  Accessories <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                </button>
                <button
                  class="nav-link"
                  id="v-pills-New-Arrivals-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-New-Arrivals"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-New-Arrivals"
                  aria-selected="false"
                >
                  New Arrivals <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                </button>
                <button
                  class="nav-link"
                  id="v-pills-Wedding-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#v-pills-Wedding"
                  type="button"
                  role="tab"
                  aria-controls="v-pills-Wedding"
                  aria-selected="false"
                >
                  Wedding <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                </button>
              </div>
            </div>
            <div class="col-lg-9">
              <div class="tab-content" id="v-pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="v-pills-Trending"
                  role="tabpanel"
                  aria-labelledby="v-pills-Trending-tab"
                >
                  <?php echo do_shortcode('[trending_categories]'); ?>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-Clothing"
                  role="tabpanel"
                  aria-labelledby="v-pills-Clothing-tab"
                >                  
                  <?php echo do_shortcode('[child_categories parent="17"]'); ?>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-Accessories"
                  role="tabpanel"
                  aria-labelledby="v-pills-Accessories-tab"
                >
                  <?php echo do_shortcode('[child_categories parent="25"]'); ?>                 

                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-New-Arrivals"
                  role="tabpanel"
                  aria-labelledby="v-pills-New-Arrivals-tab"
                >
                  <div class="swiper category_tab_slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/kurti.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Kurti</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/tops.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Tops</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/jacket.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Jacket</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/lehengas.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Lehengas</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/dresses.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Dresses</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/kurti.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Kurti</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="v-pills-Wedding"
                  role="tabpanel"
                  aria-labelledby="v-pills-Wedding-tab"
                >
                  <div class="swiper category_tab_slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/kurti.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Kurti</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/tops.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Tops</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/jacket.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Jacket</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/lehengas.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Lehengas</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/dresses.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Dresses</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="category_slide">
                          <div class="category_slide_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/kurti.jpg" alt=""
                            /></a>
                          </div>
                          <div class="category_slide_title">
                            <div class="category_title_wrap">
                              <h3>Kurti</h3>
                            </div>
                            <div class="category_price_wrap">
                              <p>From $59</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="home_category" class="category_banner">
        <div class="container">
          <div class="row gx-3">
            <div class="col-md-6">
              <div class="category_banner_img small">
                <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/category-banner2.jpg" alt=""
                /></a>
              </div>
              <div class="row gx-3 mt-3">
                <div class="col-sm-6">
                  <div class="category_banner_img extra_small">
                    <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/category-banner3.jpg" alt=""
                    /></a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="category_banner_img extra_small">
                    <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/category-banner4.jpg" alt=""
                    /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="category_banner_img big">
                <a href="<?php echo wc_get_page_permalink( 'shop' );
 ?>"
                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/category-banner1.jpg" alt=""
                /></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="feature_collection" class="feature_collection pt_70">
        <div class="container">
          <h2 class="section_title">Featured Collections</h2>
          <div class="swiper feature_collection_slider">
             <?php echo do_shortcode('[soqopslider]'); ?>
            <!-- <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="product.html"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product1.jpg" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn added">
                        <a href="product.html"
                          >
                          <?php  echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
                          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart-red.svg" alt=""
                        /></a>
                      </div>
                      <div class="cart_button">
                        <a href="#" class="btn_primary w-100"
                          >Add to Cart <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="#">Rinaz Turquoise Printed Viscose George</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>$35.00 <del>$60.45</del></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="product.html"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product2.jpg" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn">
                        <a href="product.html"
                          ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="cart_button">
                        <a href="#" class="btn_primary w-100"
                          >Add to Cart <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="#">Rinaz Turquoise Printed Viscose George</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>$35.00 <del>$60.45</del></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="product.html"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product3.jpg" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn">
                        <a href="product.html"
                          ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="cart_button">
                        <a href="#" class="btn_primary w-100"
                          >Add to Cart <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="#">Rinaz Turquoise Printed Viscose George</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>$35.00 <del>$60.45</del></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="product.html"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product4.jpg" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn">
                        <a href="product.html"
                          ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="cart_button">
                        <a href="#" class="btn_primary w-100"
                          >Add to Cart <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="#">Rinaz Turquoise Printed Viscose George</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>$35.00 <del>$60.45</del></h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product_box">
                  <div class="product_box_img">
                    <a href="product.html"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product1.jpg" alt=""
                    /></a>
                    <div class="product_box_top">
                      <div class="wishlist_btn">
                        <a href="product.html"
                          ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="cart_button">
                        <a href="#" class="btn_primary w-100"
                          >Add to Cart <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                        /></a>
                      </div>
                    </div>
                  </div>
                  <div class="product_box_text">
                    <div class="product_title">
                      <h4>
                        <a href="#">Rinaz Turquoise Printed Viscose George</a>
                      </h4>
                    </div>
                    <div class="product_price">
                      <h5>$35.00 <del>$60.45</del></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div> -->
        </div>
      </section>

      <section class="accessories_wrapper">
        <div class="container">
          <div class="row align-items-center justify-content-end">
            <div class="col-md-6">
              <div class="jewellery_items_Wrapper">
                <div class="text-center">
                  <h2 class="mb-3">Mini earrings mania</h2>
                  <p class="m-0">Choose to wear your favorite colors</p>
                </div>
                <div class="jewellery_slider_wrapper">
                  <div class="swiper jewellery_slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="product_box">
                          <div class="product_box_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product9.jpg" alt=""
                            /></a>
                            <div class="product_box_top">
                              <div class="wishlist_btn added">
                                <a href="product.html"
                                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart-red.svg" alt=""
                                /></a>
                              </div>
                              <div class="cart_button">
                                <a href="#" class="btn_primary w-100"
                                  >Add to Cart
                                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                                /></a>
                              </div>
                            </div>
                          </div>
                          <div class="product_box_text">
                            <div class="product_title">
                              <h4>
                                <a href="#"
                                  >Rinaz Turquoise Printed Viscose George</a
                                >
                              </h4>
                            </div>
                            <div class="product_price">
                              <h5>$35.00 <del>$60.45</del></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                          <div class="product_box_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product10.jpg" alt=""
                            /></a>
                            <div class="product_box_top">
                              <div class="wishlist_btn added">
                                <a href="product.html"
                                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart-red.svg" alt=""
                                /></a>
                              </div>
                              <div class="cart_button">
                                <a href="#" class="btn_primary w-100"
                                  >Add to Cart
                                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                                /></a>
                              </div>
                            </div>
                          </div>
                          <div class="product_box_text">
                            <div class="product_title">
                              <h4>
                                <a href="#"
                                  >Rinaz Turquoise Printed Viscose George</a
                                >
                              </h4>
                            </div>
                            <div class="product_price">
                              <h5>$35.00 <del>$60.45</del></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="product_box">
                          <div class="product_box_img">
                            <a href="product.html"
                              ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product9.jpg" alt=""
                            /></a>
                            <div class="product_box_top">
                              <div class="wishlist_btn added">
                                <a href="product.html"
                                  ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/heart-red.svg" alt=""
                                /></a>
                              </div>
                              <div class="cart_button">
                                <a href="#" class="btn_primary w-100"
                                  >Add to Cart
                                  <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                                /></a>
                              </div>
                            </div>
                          </div>
                          <div class="product_box_text">
                            <div class="product_title">
                              <h4>
                                <a href="#"
                                  >Rinaz Turquoise Printed Viscose George</a
                                >
                              </h4>
                            </div>
                            <div class="product_price">
                              <h5>$35.00 <del>$60.45</del></h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="trending_accessories" class="feature_collection">
        <div class="container">
          <h2 class="section_title">Trending Accessories</h2>
          <div class="swiper trending_accessories_slider">   
          <?php echo do_shortcode('[trending_accessories]'); ?>                    
          </div>
        </div>
      </section>

      <section class="about_wrapper">
        <div class="container-fluid p-0">
          <div class="row g-0">
            <div class="col-md-7">
              <div class="about_img_wrap">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/about-img.jpg" alt="" />
              </div>
            </div>
            <div class="col-md-5">
              <div class="about_text_wrapper">
                <div class="about_text_inner">
                  <h2>An Unobtrusive, Innovative With A True Beauty!</h2>
                  <p>
                    We believe in creating unique products, so we use finest
                    materials and stunning design to create special items.
                  </p>
                  <a href="#" class="btn_primary"
                    >Learn More <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt=""
                  /></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="insta_wrapper pt_70">
        <div class="container">
          <h2 class="section_title">Follow us <span>@instagram</span></h2>
          <div class="swiper instagram_slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta1.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta2.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta3.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta4.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta5.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta1.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta2.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="insta_post_wrap">
                  <a href="#" class="insta_post_inner" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/insta3.jpg" alt="">
                  </a>
                  <a href="#" class="insta_icon" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/instagram.svg" alt=""></a>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </section>

  <?php 
get_footer();
?>