<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog Details - </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="<?= base_url('home') ?>" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Kelly</h1>
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

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Blog Details</h2>
        <p>Sharing experiences, achievements and learning moments throughout my university journey.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- LEFT SIDEBAR --> 
          <div class="col-lg-3"> 
            
            <div class="portfolio-info mb-4"> 
              <img src="<?= base_url('/') ?>/assets/img/profile-img.jpg" class="img-fluid rounded-circle mb-3" alt="Profile"> 
              <h4>Ainnisha Sofea</h4> 
              <p> 
                Software Development student passionate about web development, AI technologies and continuous learning.
              </p> 
            </div> 
            
            <div class="portfolio-info mb-4"> 
              <h3>Popular Posts</h3> 
              <ul> 
                <li><a href="<?= base_url('blog-post-1') ?>">Student Activity Highlights</a></li> 
                <li><a href="<?= base_url('blog-post-2') ?>">Learning Teamwork During a University Program</a></li> 
                <li><a href="<?= base_url('blog-post-3') ?>">Academic Achievement Notes</a></li> 
              </ul> 
            </div> 
            
            <div class="portfolio-info"> 
              <h3>Categories</h3> 
              <ul> 
                <li>Activities</li> 
                <li>Achievements</li> 
              </ul> 
            </div> 
          </div> 
          
          <!-- MAIN BLOG CONTENT --> 
          <div class="col-lg-6"> 
            <a href="<?= base_url('blog') ?>" class="btn btn-outline-success mb-4"> <i class="bi bi-arrow-left"></i> Back to Blog </a><img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid rounded mb-4" alt="Blog Image"> 
            <h2>Exploring Campus Life Through Student Activities</h2> 
            
            <p> 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. 
            </p> 
            
            <p> 
              Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper. Maecenas faucibus mollis interdum. 
            </p> 
            
            <p> 
              Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Curabitur blandit tempus porttitor. 
            </p> 
            
            <p> 
              Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. 
            </p> 
          </div> 
          <!-- RIGHT META INFO --> 
           
          <div class="col-lg-3"> 
            <div class="portfolio-info"> 
              <h3>Post Information</h3> 
              <ul> 
                <li> <strong>Author</strong><br> Ainnisha Sofea </li> 
                <li> <strong>Date</strong><br> Jan 12, 2026 </li> 
                <li> <strong>Category</strong><br> Activities </li> 
                <li> <strong>Views</strong><br> 245 Views </li> 
                <li> <strong>Reading Time</strong><br> 3 Minutes </li> 
              </ul> 
            </div> 
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelly</strong> <span>All Rights Reserved<br></span></p>
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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
