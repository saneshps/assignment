  <?php include('header.php'); ?>
  <body>
    <!-- HEADER AREA START -->
    <header>
      <?php include('menu.php'); ?>
    </header>
    <!-- HEADER AREA END -->

    <!-- SLIDER AREA START -->
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
      <div class="container hero-area">
        <div class="row">
          <div class="col-lg-5" data-aos="fade-right">
            <img loading="lazy" src="./img/hero-1.svg" alt="Credit Repair & Tax preparation">
          </div>

          <div class="col-lg-6" data-aos="fade-left">
            <!-- Swiper -->
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
              <div class="swiper-wrapper" id="swiper-wrapper-9189b8f1fdb9de51" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-570px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 3" style="width: 540px; margin-right: 30px;">
                  <h1> <span class="welcome">WELCOME TO</span> <br> OUR COMPANY </h1>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.consectetuer adipiscing elit.Lorem ipsum dolor sit amet,
                    consectetuer adipiscing elit.consectetuer adipiscing elit.</p>
                  <p>
                    <a href="credit_repair.php" class="btn btn-lg abt-but mt-4">Read More</a>
                  </p>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 3" style="width: 540px; margin-right: 30px;">
                  <h1><span class="welcome">WELCOME TO</span><br> OUR COMPANY</h1>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.consectetuer adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.consectetuer adipiscing elit.
                  </p>
                  <p><a href="credit_repair.php" class="btn btn-lg abt-but mt-4">Read More</a></p>
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 3" style="width: 540px; margin-right: 30px;">
                  <h1><span class="welcome">WELCOME TO</span><br>OUR COMPANY</h1>
                  <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit.consectetuer adipiscing elit.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.consectetuer adipiscing elit.
                  </p>
                  <p><a href="credit_repair.php" class="btn btn-lg abt-but mt-4">Read More</a></p>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
          </div>
        </div>
      </div>
      <!--// container-->
    </section>
    <!-- SLIDER AREA e END -->

    <main id="main-area">

      <!-- ABOUT AREA START -->
      <section class="about-area">
        <div class="container">
          <div class="row">
            <div class="col-md-6" data-aos="fade-up">
              <div class="title-head">
                <h3>ABOUT US</h3>
              </div>
              <div class="about_detail">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                  consectetuer adipiscing elit.Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit.consectetuer adipiscing elit.
                  consectetuer adipiscing elit.consectetuer adipiscing elit.</p>
                <li>
                  <i class="far fa-check-circle"></i>
                  Consectetuer adipiscing elit
                  <span class="text_pointer">Lorem ipsum dolor sit amet</span>
                </li>
                <li>
                  <i class="far fa-check-circle"></i>
                  <span class="text_pointer">Adipiscing elit.Lorem ipsum dolor sit ipsum dol</span>
                </li>
                <li>
                  <i class="far fa-check-circle"></i>
                  <span class="text_pointer">Dolor sit ipsum dolor sit amet</span>
                </li>
                <a href="#" class="btn btn-lg abt-but mt-4">Read More</a>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-down">
              <img loading="lazy" class="#" src="./img/about-image.svg" alt="Credit Repair & Tax preparation">
            </div>
          </div>
        </div>
      </section>
      <!-- ABOUT AREA END -->

      <!-- SERVICES AREA START -->
      <section id="service-area" class="service-area pb-0">
        <div class="container">
          <div class="title-head-center text-center">
            <h3>SERVICES </h3>
          </div>
          <div class="row">
            <div class="col-md-4 service_box text-center aos-init aos-animate" data-aos="fade-up">
              <a href="credit_repair.php" title="">
                <div class="service_img">
                  <img loading="lazy" src="img/credit.jpg" class="img-fluid" alt="credit repair">
                </div>
              </a>
              <div class="service_details">
                <h4> Credit Repair </h4>
                <p>Dolor sit amet, consectetuer adipiscing elit.
                  consectetuer adipiscing elit.Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit.consectetuer adipiscing elit.
                  consectetuer adipiscing elit.consectetuer adipiscing elit.</p>
                <h5><a href="credit_repair.php"> Read More </a><span class="fa fa-chevron-right"></span> </h5>
              </div>
            </div>
            <div class="col-md-4 service_box text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <a href="tax_preparation.php" title="">
                <div class="service_img">
                  <img loading="lazy" src="img/tax.jpg" class="img-fluid" alt="tax preparation">
                </div>
              </a>
              <div class="service_details">
                <h4> Tax Preparation </h4>
                <p>Consectetuer adipiscing elit.
                  consectetuer adipiscing elit.Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit.consectetuer adipiscing elit.
                  consectetuer adipiscing elit.consectetuer adipiscing elit.</p>
                <h5><a href="tax_preparation.php"> Read More </a><span class="fa fa-chevron-right"></span> </h5>
              </div>
            </div>
            <div class="col-md-4 service_box text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <a href="business_preparation.php" title="">
                <div class="service_img">
                  <img loading="lazy" src="img/business.jpg" class="img-fluid" alt="business preparation">
                </div>
              </a>
              <div class="service_details">
                <h4> Business Preparation </h4>
                <p>Adipiscing elit.
                  consectetuer adipiscing elit.Lorem ipsum dolor sit amet,
                  consectetuer adipiscing elit.consectetuer adipiscing elit.
                  consectetuer adipiscing elit.consectetuer adipiscing elit.</p>
                <h5><a href="business_preparation.php"> Read More</a><span class="fa fa-chevron-right"></span> </h5>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#c0c0c06e" fill-opacity="1" d="M0,160L1440,320L1440,320L0,320Z"></path>
        </svg>
      </section>
      <!-- SERVICES AREA END -->

      <!-- FOOTER AREA START -->
      <footer id="footer-area" class="footer-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 footer-logo" data-aos="flip-left">
              <img loading="lazy" src="./img/logo.png" alt="logo">
            </div>
            <div class="col-lg-4 col-md-6 footer-link" data-aos="flip-up">
              <ul>
                <li> <a href="credit_repair.php"> <span class="fas fa-angle-double-right"></span> Credit Repair </a></li>
                <li> <a href="tax_preparation.php"><span class="fas fa-angle-double-right"></span> Tax Preparation </a></li>
                <li> <a href="business_preparation.php"> <span class="fas fa-angle-double-right"></span> Business Preparation </a></li>
                <li> <a href="contact.php"><span class="fas fa-angle-double-right"></span> Contact Us </a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 footer-info" data-aos="flip-right">
              <h3> Company Name </h3>
              <p>
                P238 Adam Street <br>
                PO Box 789, UK <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@company.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" target="blank" class="twitter"><i class="fab fa-twitter-square"></i> </a>
                <a href="#" target="blank" class="linkedin"><i class="fab fa-linkedin"></i> </a>
                <a href="#" target="blank" class="facebook"><i class="fab fa-facebook-square"></i> </a>
                <a href="#" target="blank" class="instagram"><i class="fab fa-instagram-square"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- FOOTER AREA END -->
      <a href="#" class="back-to-top" style="display: inline;">
        <i class="fas fa-chevron-up"></i>
      </a>
      <div class="container bottom-footer">
        <div class="row">
          <div class="col-lg-5">
            <div class="copyright">
              © 2021 <strong><span>Credit Repair </span></strong>. All Rights Reserved
            </div>
          </div>
          <div class="col-lg-7">
            <ul class="policy">
              <ol> <a href="#"> Privacy Policy</a></ol>
              <ol><a href="#">Terms & Conditions</a></ol>
              <ol><a href="#">Disclosure </a></ol>
            </ul>
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/holder.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/smoothscroll.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>

    <!-- aos js -->
    <script>
      AOS.init({
        duration: 1200,
      })
    </script>
    <!-- aos js -->

  </body>
  </html>