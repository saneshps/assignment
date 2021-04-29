<?php include('header.php'); ?>
<link href="./css/floating-labels.css" rel="stylesheet">
<body>
  <!-- HEADER AREA START -->
  <header>
    <?php include('menu.php'); ?>
  </header>
  <!-- HEADER AREA END -->
  <section class="form-area pb-0">
    <main id="main-area">
      <section id="portal" class="portal pb-0">
        <form class="form-signin" data-aos="flip-right">
          <div class="text-center mb-4">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
          </div>
          <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">Email address</label>
          </div>
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="btn portal-login" type="submit">Sign in</button>
        </form>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#fff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
      </section>
    </main>
    <!-- FOOTER AREA START -->
    <footer id="footer-area" class="footer-area bg-white  pt-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 footer-logo" data-aos="flip-left">
            <img loading="lazy" src="./img/logo.png" alt="logo">
          </div>
          <div class="col-lg-4 col-md-4 footer-link" data-aos="flip-up">
            <ul>
              <li> <a href="credit_repair.php"> <span class="fas fa-angle-double-right"></span> Credit Repair </a></li>
              <li> <a href="tax_preparation.php"><span class="fas fa-angle-double-right"></span> Tax Preparation </a></li>
              <li> <a href="business_preparation.php"> <span class="fas fa-angle-double-right"></span> Business Preparation </a></li>
              <li> <a href="contact.php"><span class="fas fa-angle-double-right"></span> Contact Us </a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-5 footer-info" data-aos="flip-right">
            <h3> Company Name </h3>
            <p>
              P238 Adam Street <br>
              PO Box 789, UK <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@company.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fab fa-twitter-square"></i> </a>
              <a href="#" class="linkedin"><i class="fab fa-linkedin"></i> </a>
              <a href="#" class="facebook"><i class="fab fa-facebook-square"></i> </a>
              <a href="#" class="instagram"><i class="fab fa-instagram-square"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- FOOTER AREA END -->
    <a href="#" class="back-to-top" style="display: inline;">
      <i class="fas fa-chevron-up"></i>
    </a>
    <footer id="bottom-footer">
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
    </footer>
  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/holder.min.js"></script>
  <script src="./js/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- aos js -->
  <script>
    AOS.init({
      duration: 1200,
    })
  </script>
  <!-- aos js -->
</body>
</html>