<?php 
/*
template name:Contact page
*/
get_header(); ?> 

<section class="inner_banner">
        <div class="contact_banner">
          <div class="container">
            <div class="row">
              <div class="col-xxl-4 col-xl-5 col-md-6">
                <div class="inner_banner_text">
                  <h1>Contact</h1>
                  <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum
                  </p>
                  <div class="banner_btn_wrap">
                    <a href="tel:+15477832258" class="btn_primary"
                      ><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/call.svg" class="call_img" alt="" />+1
                      547 7832 258</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="contact_wrap py_70">
        <div class="container">
          <div class="title">
            <h2>We are looking forward to hearing from you</h2>
            <p>
              Lobortis at platea sit diam sed quis est. Lobortis elit morbi
              neque praesent. Sed scelerisque volutpat ipsum vitae, suspendisse
              vestibulum aliquam eu.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="contact_form_wrap">
                <?php echo do_shortcode('[contact-form-7 id="86a130b" title="Contact form"]'); ?>
                <form action="#">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control"
                          id="FirstName"
                          placeholder="Enter your first name"
                        />
                        <label for="FirstName">First Name</label>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control"
                          id="LastName"
                          placeholder="Enter your last name"
                        />
                        <label for="LastName">Last Name</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Enter your Email"
                    />
                    <label for="email">Email Address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Enter your subject"
                    />
                    <label for="subject">Subject</label>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea
                      class="form-control"
                      placeholder="Leave a comment here"
                      id="messange"
                    ></textarea>
                    <label for="messange">Messange</label>
                  </div>
                  <div class="submit_button text-end">
                    <button class="btn_primary">
                      Submit <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/right-arrow.svg" alt="" />
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="map_wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15281513.599027047!2d72.11033709507376!3d20.7573478286956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1715946064725!5m2!1sen!2sin" width="100%" height="476" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="address_wrap_contact py_70">
        <div class="container">
          <div class="address_wrap_contact_in">
            <div class="row">
              <div class="col-lg-4">
                <div class="address_box">
                  <div class="address_icon">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/call2.svg" alt="" />
                  </div>
                  <ul>
                    <li><a href="tel:+15477832258">+1 547 7832 258</a></li>
                    <li><a href="tel:+13671482244">+1 367 1482 244</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="address_box">
                  <div class="address_icon">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/email2.svg" alt="" />
                  </div>
                  <ul>
                    <li>
                      <a href="mailto:feshentic12@gmail.com"
                        >feshentic12@gmail.com</a
                      >
                    </li>
                    <li>
                      <a href="mailto:fashiondemo@12@gmail.com"
                        >fashiondemo@12@gmail.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="address_box">
                  <div class="address_icon">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/location2.svg" alt="" />
                  </div>
                  <ul>
                    <li>
                      <a href="https://www.google.com/maps" target="_blank"
                        >14, As Lorem ipsum dollar Newyork, USA</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php
get_footer();
?>