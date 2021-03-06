<?php
  include "./navbar.php"
?>
<!-- breadcumb -->
<section class="breadcumb" aria-label="breadcumb" style="background-image: url('img/breadcumb.jpg');">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
      <div class="main">
        <div class="bread">
          <div class="img-icon">
             <img src="img/breadcumb-icon.png" alt="#">
          </div>
          <div class="bread-title">CONTACT</div>
          <div class="bread-subtitle">
            <a href="index.php">Home</a> 
              <span class="spacebread"></span> 
            <span>Contact</span>
          </div>
        </div>
      </div>
    </div>
   </div>
 </div>
</section>
<!-- breadcumb end -->

<!-- map -->
<section aria-label="map" class="no-bottom">
  <div class="container-fluid">
    <div class="row p-3-vh">
      <div class="col-md-12">
        <div id="map-1"></div>
      </div>
    </div>
  </div>
</section> 
<!-- map end -->

<!-- section contact -->
      <section aria-label="contact">
        <div class="container-fluid">
        <div class="row p-3-vh">

         <div class="col-md-6">
            <div class="text-side">
              <h3 class="heading">Talk with us </h3>
              <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. <br>Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
              <div class="address">
                  <div class="heading">Our Office</div>
                  <div class="list">
                    <i class="fa fa-map-marker"></i>
                    387 S First street (SoFa Market), San Jose, 95113 
                  </div>
                  <div class="list">
                    <i class="fa fa-envelope-o"></i>
                    <a href="mailto:duaritika0330@gmail.com" target="_blank" rel="noopener noreferrer">duaritika0330@gmail.com</a>
                  </div>
                  <div class="list">
                    <i class="fa fa-phone"></i>+92 423 567 7
                  </div>
              </div>
            </div>
         </div>
          
            <div class="col-md-6">
                  <form id="form-contact1" class="autoheight">
                              <div class="form-group user-name">
                                  <input type="text" class="form-control" required id="name-contact-1" placeholder="Your Name">
                              </div>

                              <div class="form-group user-email">
                                  <input type="email" class="form-control" required id="email-contact" placeholder="Your Email">
                              </div>
                          
                              <div class="form-group user-message">
                                  <textarea class="form-control" required id="message-contact" placeholder="Your Message"></textarea>
                                  <div class="success" id="mail_success">Thank you. Your message has been sent</div>
                                  <div class="error" id="mail_failed">Error, email not sent</div>
                              </div>
                      <button type="submit" id="send-contact-1" class="btn-contact">Send Now</button>
                  </form>
            </div>
        </div>
        </div>
      </section>
      <!-- section end -->

<!-- footer -->
<footer style="background-image: url('img/bgfoodicon.png');">
  <div class="container-fluid">
    <div class="row p-3-vh">

      <div class="col-md-4 centered">
        <div class="foo-cont">
          <div class="title">
            Our Address
          </div>
          <div class="detail">
            387 S First street (SoFa Market),<br> 
            San Jose, 95113
          </div>
          <a class="btn" href="#">View on Map</a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="foo-reserv">
          <div class="title">
            Make Reservation
          </div>
          <div class="detail">
            <div class="list">
              <span class="day">Week Days</span>
              <span class="time">09:00 AM - 21:00 PM</span>
            </div>
          </div>
          <div class="detail">
            <div class="list">
              <span class="day">Saturday</span>
              <span class="time">12:00 AM - 00:00 AM</span>
            </div>
          </div>
          <div class="detail pb-1">
            <div class="list">
              <span class="day">Sunday</span>
              <span class="time">11:00 AM - 22:00 PM</span>
            </div>
          </div>
          <a class="btn-content mt-4" data-toggle="modal" data-target="#resevmodal" href="#">
            <span class="shine"></span>
            BOOK NOW
          </a>
        </div>
      </div>

      <div class="col-md-4 centered">
        <div class="foo-cont">
          <div class="title">
            Contact Us
          </div>
          <div class="detail">
            Email: duaritika0330@gmail.com<br>
            Phone: 04 987654321
          </div>
          <a class="btn mb-0" href="#">SEND MESSAGE</a>
        </div>
      </div>

    </div>
 </div>
</footer>
<div class="subfooter">
  <span>Copyright??2021 D'bento All Rights Reserved.</span>
</div>
<!-- footer end -->

</div>
<!-- container-wrapper end -->

    <!-- sidegalery-->
    <div id="bgsidegalery"></div>
    <div id="sidegalery" class="init">
      <div class="sidebar">
        <div id="closesidegalery" class="cl-sidebar init">
          <div>
            <span class="ti-close"></span>
          </div>
        </div>

        <h3>Our Menu</h3>
        <div class="s-galery">
          <div id="w-gallery-container" class="w-gallery-container side">
            <a class="w-gallery" href="img/gallery/1.jpg">
                <img src="img/gallery/1.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/2.jpg">
                <img src="img/gallery/2.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/3.jpg">
                <img src="img/gallery/3.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/4.jpg">
                <img src="img/gallery/4.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/5.jpg">
                <img src="img/gallery/5.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/6.jpg">
                <img src="img/gallery/6.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/7.jpg">
                <img src="img/gallery/7.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/8.jpg">
                <img src="img/gallery/8.jpg" alt="" class="w-gallery-image">
                </a>

            <a class="w-gallery" href="img/gallery/9.jpg">
                <img src="img/gallery/9.jpg" alt="" class="w-gallery-image">
                </a>
          </div>
        </div>
        <h3>Share us: </h3>
        <div class="s-social">
          <a href="#"><span class="ti-twitter"></span></a>
          <a href="#"><span class="ti-facebook"></span></a>
          <a href="#"><span class="ti-youtube"></span></a>
          <a href="#"><span class="ti-instagram"></span></a>
        </div>

      </div>
    </div>
    <!-- sidegalery end -->

    <!-- modal reservation -->
    <div class="modal fade" id="resevmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog custommodal" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="heading">
              Online Reservation
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="modalform">
               <div class="form-row">
                <div class="col">
                  <input id="wa_name" type="text" required="" class="form-control" placeholder="Name">
                </div>
                <div class="col">
                  <input id="wa_phone" type="text" required="" class="form-control" placeholder="Phone">
                </div>
                <div class="col">
                  <input id="wa_email" type="text" required="" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <input id="wa_guest" type="text" required="" class="form-control" placeholder="Number of Guest">
                </div>
                <div class="col">
                  <input id="wa_date" type="text" required="" class="form-control" placeholder="09/02/2021">
                </div>
                <div class="col">
                  <input id="wa_time" type="text" class="form-control" placeholder="Time">
                </div>
              </div>
              <div class="form-group">
                <textarea rows="10" cols="50" required="" class="form-control" id="message-text" placeholder="Your Message"></textarea>
                <a id="sendreservation" class="btn-content" href="#">
                  <span class="shine"></span>
                  SEND NOW
                </a>
              </div>
              <div id="text-info"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modal reservation -->

    <!-- ScrolltoTop -->
    <div id="totop" class="init">
      <i class="fa fa-chevron-up"></i>
    </div>  


  <!-- plugin js -->
  <script src="js/pluginson3step.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- slider revolution  -->
  <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
  <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
  <!--  map google  -->
  <script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCQ5KODzqooIP496GPLRaMAsZ4eN8Vro_U"></script> 
  <script src="js/map-1.js"></script>
  <!-- velocity  -->
  <script  src="js/velocity.min.js"></script>
  <!-- velocity  -->
  <script  src="js/lightgallery.js"></script>
  <!-- main js -->
  <script  src="js/sticky.js"></script>
  <script src="js/on3step.js"></script>
  <script src="js/plugin-form.js"></script>
  </body>

</html>