
<?php include('header.php'); ?>
<body>
  <!-- HEADER AREA START -->
  <header>
    <?php include('menu.php'); ?>
  </header>
  <!-- HEADER AREA END -->
  <section class="contact-area pb-0">
    <main id="main-area">
      <!-- contact-area start -->
      <section id="title-banner" class="title-banner pt-0">
        <div class="container title-head">
          <h2> CONTACT US </h2>
        </div>
      </section>
      <!-- contact-area end -->
      <section id="address-area" class="address-area mt-5 pb-5">
        <div class="container contact">
          <div class="row">
            <div class="col-lg-7 p-0 address-box" data-aos="fade-up">
              <div class="row">
                <div class="col-md-12">
                  <div class="info-box">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Our Address</h3>
                    <p>P238 Adam Street
                      PO Box 789, UK</p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                  <div class="info-box mt-4">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>info@company.com<br>contact@company.com</p>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                  <div class="info-box mt-4">
                    <i class="fas fa-phone-volume"></i>
                    <h3>Call Us</h3>
                    <p>+1 5489 55488 55<br>+1 6338 254445 41</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 form-box" data-aos="fade-down">
              <form class="form-horizontal">
                <div class="form-content">
                  <div class="row form-group">
                    <div class="col-sm-6">
                      <label class="control-label" for="exampleInputName2"><i class="fa fa-user"></i></label>
                      <input class="form-control" id="exampleInputName2" placeholder="Name" type="text">
                    </div>
                    <div class="col-sm-6">
                      <label class="control-label" for="exampleInputName2"><i class="fa fa-envelope-o"></i></label>
                      <input class="form-control" id="exampleInputName2" placeholder="Email" type="email">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-sm-12">
                      <label class="control-label" for="exampleInputName2"><i class="fa fa-lock"></i></label>
                      <input class="form-control" id="exampleInputName2" placeholder="Phone" type="text">
                    </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-sm-12">
                      <label class="control-label" for="exampleInputName2"><i class="fa fa-calendar"></i></label>
                      <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="clearfix">
                    <button type="submit" class="btn btn-default login-btn"> <span> SUBMIT </span> </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- map start -->
      <section id="map" class="map-area mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 map" data-aos="zoom-in-right">
              <article class="map_google">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105275.50876125408!2d75.78214200860076!3d11.310975343944708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65bbe42f95ff3%3A0x4249cfa63d708d2d!2sLimenzy%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1618562125258!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </article>
            </div>
            <div class="col-lg-5 map-svg" data-aos="zoom-out-up">
              <img loading="lazy" src="./img/map.svg" alt="map">
            </div>
          </div>
        </div>
      </section>
      <!-- map end -->
    </main>
    <script src="./js/aos.js"></script>
     <!-- aos js -->
 <script>
   AOS.init({
     duration: 1200,
   })
 </script>
 <!-- aos js -->
    <?php include('footer.php'); ?>
</body>
</html>