<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Projects</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url('/') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('/') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('/') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('/') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('/') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('/') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url('/') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('/') ?>/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Blog</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('home') ?>"<?= service('uri')->getSegment(1) === 'home' ? ' class="active"' : '' ?>>Home</a></li>
          <li><a href="<?= base_url('about') ?>"<?= service('uri')->getSegment(1) === 'about' ? ' class="active"' : '' ?>>About</a></li>
          <li><a href="<?= base_url('projects') ?>"<?= service('uri')->getSegment(1) === 'projects' ? ' class="active"' : '' ?>>Projects</a></li>
          <li><a href="<?= base_url('blog') ?>"<?= service('uri')->getSegment(1) === 'blog' ? ' class="active"' : '' ?>>Blog</a></li>
          <li><a href="<?= base_url('contact') ?>"<?= service('uri')->getSegment(1) === 'contact' ? ' class="active"' : '' ?>>Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>A collection of academic and personal projects that showcase my interests in software development, web applications and IoT solutions.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/lakaranimpian.png" class="img-fluid" alt="Lakaran Impian">
              <div class="portfolio-info">
                <h4>Lakaran Impian</h4>
                <p>Wedding Planner Mobile App UI Design</p>
                <a href="<?= base_url('/') ?>/assets/img/masonry-portfolio/lakaranimpian.png" title="Lakaran Impian" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('project-details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/heykawan.png" class="img-fluid" alt="HeyKawan">
              <div class="portfolio-info">
                <h4>HeyKawan</h4>
                <p>Mental Health Support Website</p>
                <a href="<?= base_url('/') ?>/assets/img/masonry-portfolio/heykawan.png" title="HeyKawan" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('project-details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/eduhub.png" class="img-fluid" alt="EduHub Center">
              <div class="portfolio-info">
                <h4>EduHub Center</h4>
                <p>Tuition Center Management System</p>
                <a href="<?= base_url('/') ?>/assets/img/masonry-portfolio/eduhub.png" title="EduHub Center" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('project-details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/speakhand.png" class="img-fluid" alt="SpeakHand">
              <div class="portfolio-info">
                <h4>SpeakHand</h4>
                <p>Malaysian Sign Language Learning Platform</p>
                <a href="<?= base_url('/') ?>/assets/img/masonry-portfolio/speakhand.png" title="SpeakHand" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('project-details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/iot.jpg" class="img-fluid" alt="IoT">
              <div class="portfolio-info">
                <h4>IoT</h4>
                <p>Smart Bed Patient Monitoring System</p>
                <a href="<?= base_url('/') ?>/assets/img/masonry-portfolio/iot.jpg" title="IoT" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= base_url('project-details') ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Portfolio</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('/') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url('/') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= base_url('/') ?>/assets/js/main.js"></script>

</body>

</html>
