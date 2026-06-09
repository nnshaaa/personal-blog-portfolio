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

<body class="blog-page">

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

    <!-- Blog Details Section -->
    <section id="blog" class="blog section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <!-- LEFT SIDEBAR -->
          <div class="col-lg-3">
            <aside class="blog-sidebar" data-aos="fade-up" data-aos-delay="150">

              <div class="sidebar-widget author-widget text-center">
                <img src="<?= base_url('/') ?>/assets/img/profile.png" class="author-img" alt="Ainnisha Sofea">
                <h4>Ainnisha Sofea</h4>
                <p class="role">Software Development Student</p>
                <p>
                  Passionate about web development and creating technology-driven solutions that solve real-world problems.
                  I enjoy transforming ideas into practical solutions while continuously improving my technical and problem-solving skills. 
                </p>
              </div><!-- End Author Widget -->

              <div class="sidebar-widget">
                <h4>Favourite Posts</h4>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/deanlist3.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-4') ?>">Achieving Dean's List Recognition</a></h5>
                    <span>November, 2025</span>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest3.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-3') ?>">Earning Second Place in a Startup Competition</a></h5>
                    <span>December, 2024</span>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/iot2.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-1') ?>">From Hospital Experience to an IoT Solution</a></h5>
                    <span>February, 2026</span>
                  </div>
                </div>
              </div><!-- End Popular Posts -->

              <div class="sidebar-widget categories-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Activities <span>4</span></a></li>
                  <li><a href="#">Achievements <span>2</span></a></li>
                </ul>
              </div><!-- End Categories -->

              <div class="sidebar-widget">
                <h4>Recent Posts</h4>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/iot2.jpg" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-1') ?>">From Hospital Experience to an IoT Solution</a></h5>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/eduhub1.png" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-2') ?>">Developing EduHub Center with My Team</a></h5>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest3.jpg" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-3') ?>">Earning Second Place in a Startup Competition</a></h5>
                  </div>
                </div>
              </div><!-- End Recent Posts -->

            </aside>
          </div> 
          
          <!-- MAIN BLOG CONTENT --> 
          <div class="col-lg-6"> 
            <a href="<?= base_url('blog') ?>" class="btn btn-outline-success mb-4"> <i class="bi bi-arrow-left"></i> Back to Blog </a><img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest3.jpg" class="img-fluid rounded mb-4" alt="Blog Image"> 
            <h2>Earning Second Place in a Startup Competition</h2> 
            
            <p> 
              HatchQuest Startup Challenge was one of the most exciting competitions that I had participated in during university. 
              The competition was conducted over two days which inclding entrepreneurship workshops and startup pitching sessions.
            </p> 
            
            <p> 
              Our team pitching idea is about a mobile application designed to connect university students with flexible part-time job opportunities.
              We named it as JobPocket. 
              This application aimed to solve that problem that we identified where many students struggle to find jobs that fit around their academic schedules.
            </p> 

            <div class="row g-2 mb-4">
              <div class="col-md-6">
                <img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest1.jpg" class="img-fluid rounded" alt="HatchQuest Image 1">
              </div>

              <div class="col-md-6">
                <img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest2.jpg" class="img-fluid rounded" alt="HatchQuest Image 2">
              </div>
            </div>

            <p> 
              On the first day, participants attended workshops conducted by industry experts. 
              They shared diverse of valuable insights about startup development, business models and pitching techniques. 
              The sessions helped us refine our ideas and better understand market needs.
            </p>
            
            <p> 
              The second day focused on pitching our startup idea to judges. 
              Presenting in front of experienced professionals was challenging but also rewarding. 
              When the results were announced and our team secured second place, we were thrilled and at the same time proud with our teamwork.
            </p>
            
            <p class="fst-italic">
              Participating in the Hatch Quest competition was an unforgettable experience that improved my confidence in presenting ideas and working under pressure. 
              Winning second place was a proud moment for my team and me.
              More importantly, it showed us that a simple idea can grow into something impactful when supported by teamwork and determination.
            </p> 
          </div> 
          <!-- RIGHT META INFO --> 
           
          <div class="col-lg-3"> 
            <div class="blog-info"> 
              <h5>Post Information</h5> 
              <ul> 
                <li> <strong>Author</strong><br> Ainnisha Sofea </li> 
                <li> <strong>Date</strong><br> December 13, 2025 </li> 
                <li> <strong>Category</strong><br> Achievements </li> 
                <li> <strong>Views</strong><br> 35 Views </li> 
                <li> <strong>Reading Time</strong><br> 7 Minutes </li> 
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
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Blog</strong> <span>All Rights Reserved<br></span></p>
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
