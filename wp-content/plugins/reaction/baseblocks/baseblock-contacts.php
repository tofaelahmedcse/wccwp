<?php
/**
 * Template Name: Contacts
 * Template Post Type: baseblock
* @package _rebase
 */
get_header(); 
?>

<section class="b-block p-2 border-0" id="navigator">
  <div class="container-fluid">
    <p class="m-0 text-center">
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/cta">Call to action</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/contacts">Contacts</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/contents">Contents</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/css">Typography</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/features">Features</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/footers">Footers</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/forms">Forms</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/headers">Headers</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/pricings">Pricings</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/teams">Teams</a>
      <a class="btn btn-empty m-1" href="<?php echo bloginfo('url'); ?>/baseblock/testimonials">Testimonials</a>
    </p>
  </div>
</section>

<article>
  
  <?php if (isset($_GET['index'])) { ?>
    <a href="<?php the_permalink(); ?>" class="btn w-50 m-auto d-block text-center"><h3>See Fullscreen</h3></a>
  <?php } else { ?>
    <a href="<?php echo bloginfo('url'); ?>/baseblock/index/#contacts" id="btn_contained" class="mt-4 btn w-50 ml-auto mr-auto d-block text-center"><h3>See Contained</h3></a>
  <?php } ?>  

  <h2 class="mb-0">Contact 01</h2> 
  <?php /* Contact 01 Start */ ?>   
  <section class="b-block pt-0">
    <div class="container-fluid p-0 pb-md-5">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5">
          <h2>Contact Us</h2>
          <p class="text-h3">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
          </p>

          <p class="text-h3">
            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
          </p>


          <p class="text-h3 mt-5">
            <strong>Email:</strong> <a href="#">hello@website.com</a>
          </p>
          <p class="text-h3">
            <strong>Phone:</strong> <a href="#">+44 123 123 1232</a>
          </p>
        </div>

        <div class="col-12 col-md-6 ml-auto pt-5 pt-md-0">
          <form>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control"  placeholder="Subject">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 01 End */ ?>   

  <h2 class="mb-0">Contact 02</h2> 
  <?php /* Contact 02 Start */ ?>    
  <section class="b-block bg-dark" style="background-image: url(<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>bg_0.svg)">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <h1>Contact Us</h1>
          <h2>We love to hear from you!</h2>
        </div>
      </div>

      <div class="row pt-4">
        <div class="col-12">
          <form>
            <div class="row">
              <div class="col-12 col-md">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
                <input type="text" class="form-control" placeholder="Phone (optional)">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control"  placeholder="Subject">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col text-center">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 02 End */ ?>   

  <h2 class="mb-0">Contact 03</h2> 
  <?php /* Contact 03 Start */ ?>    
  <section class="b-block">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <h1>Contact Us</h1>
          <p class="text-h3">One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
        </div>
      </div>

      <div class="row pt-4">
        <div class="col-12 col-md-6">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-12 col-md-6 pt-5 pt-md-0">
          <form>
            <div class="row">
              <div class="col">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control"  placeholder="Subject">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 03 End */ ?>   

  <h2 class="mb-0">Contact 04</h2> 
  <?php /* Contact 04 Start */ ?>    
  <section class="b-block" style="background-image: url(<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>bg_0.svg)">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="b-box b-touch">
            <div class="row text-center justify-content-center">
              <div class="col-12 col-md-9 col-lg-7">
                <h1>Contact Us</h1>
                <p class="text-h3">Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy.</p>
              </div>
            </div>

            <div class="row justify-content-center pt-4">
              <div class="col-12 col-md-8">
                <form>
                  <div class="row">
                    <div class="col-12 col-md">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-12 col-md mt-4 mt-md-0">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <input type="email" class="form-control"  placeholder="Subject">
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col text-center">
                      <button type="submit" class="btn">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 04 End */ ?>   

  <h2 class="mb-0">Contact 05</h2> 
  <?php /* Contact 05 Start */ ?>    
  <section class="b-block pt-0">
    <div class="container-fluid p-0 pb-3">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row text-center justify-content-center pt-5">
        <div class="col-12 col-md-7">
          <h1>Contact Us</h1>
        </div>
      </div>

      <div class="row justify-content-center pt-4">
        <div class="col-12 col-md-7">
          <form>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Email">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control"  placeholder="Subject">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col text-center">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row-100"></div>
    </div>
    <div class="bg-dark">
      <div class="container">
        <div class="row-50"></div>
        <div class="row justify-content-center text-center">
          <div class="col-12 col-md mr-auto ml-auto">
            <img alt="image" height="40" class="mb-2" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
            <p class="text-h3">+44 (112) 123 752</p>
          </div>

          <div class="col-12 col-md pt-4 pt-md-0 mr-auto ml-auto">
            <img alt="image" height="40" class="mb-2" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
            <p class="text-h3">123 6th St.<br>Melbourne, FL 32904</p>
          </div>

          <div class="col-12 col-md pt-4 pt-md-0 mr-auto ml-auto">
            <img alt="image" height="40" class="mb-2" src="<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>img_round.svg">
            <p class="text-h3">support@website.com</p>
          </div>
        </div>
        <div class="row-50"></div>
      </div>
    </div>

    <div class="container">
      <div class="row-70"></div>
      <div class="row text-center">
        <div class="col">
          <p class="text-h2">
            <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-google"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 05 End */ ?>   

  <h2 class="mb-0">Contact 06</h2> 
  <?php /* Contact 06 Start */ ?>    
  <section class="b-block pt-0">
    <div class="container-fluid p-0 pb-5">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="container">
      <div class="row pt-5">
        <div class="col-12">
          <form>
            <div class="row">
              <div class="col-12 col-md">
                <label>First Name</label>
                <input type="text" class="form-control">
              </div>
              <div class="col-12 col-md mt-4 mt-md-0">
                <label>Last Name</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <label>Your Email</label>
                <input type="email" class="form-control">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <label>Subject (optional but helpful)</label>
                <input type="email" class="form-control">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <label>How can we help?</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
            </div>
            <div class="row mt-4 text-center">
              <div class="col">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 06 End */ ?>   

  <h2 class="mb-0">Contact 07</h2> 
  <?php /* Contact 07 Start */ ?>    
  <section class="b-block pb-0" style="background-image: url(<?php echo content_url('/plugins/reaction/baseblocks/img/'); ?>bg_3.svg)">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <h1>Contact Us</h1>
          <p class="text-h3">If you’re already an active user, please <a href="#">sign in</a> before contacting us.</p>
        </div>
      </div>
      <div class="row-50">
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <form>
            <div class="row">
              <div class="col">
                <label>Your Email Address</label>
                <input type="text" class="form-control">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <label>Subject (optional but helpful)</label>
                <input type="email" class="form-control">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <label>How can we help?</label>
                <textarea class="form-control" name="message" rows="3"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col text-right">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row-100"></div>
    </div>

    <div class="container-fluid p-0">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
  <?php /* Contact 07 End */ ?>   

  <h2 class="mb-0">Contact 08</h2> 
  <?php /* Contact 08 Start */ ?>    
  <section class="b-block pt-0">
    <div class="bg-gray">
      <div class="container">
        <div class="row-100"></div>
        <div class="row text-left">
          <div class="col-8">
            <h1>Contact Us</h1>
            <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row-100"></div>
      </div>
    </div>
    <div class="container">
      <div class="row-100"></div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-5">
          <h2>Call or email</h2>
          <p class="text-large">Support, Sales, and Account Management services are currently available in English</p>

          <p class="text-h3 mt-4 mt-lg-5">
            <strong>Support</strong>
          </p>
          <p>
            +800 3005 4300
          </p>
          <p>
            <a href="#">Contact Support</a>
          </p>
          <p>
            Our technical support is available by phone or email from 11am to 11pm BST, Monday through Friday.
          </p>

          <p class="text-h3 mt-4 mt-lg-5">
            <strong>Sales</strong>
          </p>
          <p>
            +800 3005 4300
          </p>
          <p>
            <a href="#">Contact Sales</a>
          </p>
          <p>
            Our technical support is available by phone or email from 11am to 11pm BST, Monday through Friday.
          </p>

          <p class="text-h3 mt-4 mt-lg-5">
            <strong>General inquiries</strong>
          </p>
          <p>
            <a href="#">hello@website.com</a>
          </p>
        </div>

        <div class="col-12 col-md-6 ml-auto">
          <h2>Drop us a line</h2>
          <form>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control" placeholder="Company Name">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control" placeholder="Email">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Country">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <select class="form-control" required>
                  <option value="">Select Department</option>
                  <option value="1">Support</option>
                  <option value="2">Sales</option>
                  <option value="3">Accounting</option>
                </select>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="5" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 08 End */ ?>   

  <h2 class="mb-0">Contact 09</h2> 
  <?php /* Contact 09 Start */ ?>    
  <section class="b-block bg-gray">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <p class="text-h2">support@website.com</p>
          <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <p><br></p>
          <p class="text-h2">
            <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-google"></i></a>&nbsp;&nbsp;&nbsp;
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 09 End */ ?>   

  <h2 class="mb-0">Contact 10</h2> 
  <?php /* Contact 10 Start */ ?>    
  <section class="b-block">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
          <h1>Contact Us</h1>
          <p class="text-h3">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>
      <div class="row-70"></div>
      <div class="row">
        <div class="col-12 col-md-8 col-lg m-auto">
          <form>
            <div class="row">
              <div class="col">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col">
                <input type="email" class="form-control" placeholder="Subject">
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <button type="submit" class="btn">Submit</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-12 col-md-8 col-lg pt-5 m-auto pt-lg-0">
          <iframe class="mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.8444388087937!2d26.101253041406952!3d44.43635311654287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff4770adb5b7%3A0x58147f39579fe6fa!2zR3J1cHVsIFN0YXR1YXIgIkPEg3J1yJthIEN1IFBhaWHIm2Ui!5e0!3m2!1sen!2sro!4v1507381157656" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>

          <p><strong>Showroom</strong></p>
          <p>
            71 Pilgrim Avenue<br>Chevy Chase, MD 20815
          </p>
        </div>
      </div>
    </div>
  </section>
  <?php /* Contact 10 End */ ?>   
  
</article>
<?php
  get_footer();
