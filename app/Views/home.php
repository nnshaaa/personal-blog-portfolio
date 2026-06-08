<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Homepage</title>
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

<body class="index-page">

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

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="<?= base_url('/') ?>/assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Hi, I'm Ainnisha Sofea</h2>
            <p>Welcome to my digital portfolio. 
              Here, you'll find a collection of projects, experiences and achievements that reflect my growth as a Software Development student.</p>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!--================ Start About Us Area =================-->
	  <section class="about_area section_gap">
		  <div class="container">
			  <div class="row justify-content-start align-items-center">
				  <div class="col-lg-4">
					  <div class="about_img">
						  <img class="" src="<?= base_url('/') ?>/assets/img/about-me.jpg" alt="About Me">
					  </div>
				  </div>

				  <div class="col-lg-7">
					  <div class="main_title text-left">
						  <h2>Let’s Introduce about myself</h2><br>
						  <p>
							  I am a passionate Computer Science student who enjoys turning ideas into meaningful digital solutions. 
                My interests include web development, data analytics and technology-driven solutions. 
                I believe that continuous learning and curiosity are key to personal and professional growth.
						  </p>
						  <p>
							  Want to learn more about my journey, experiences, and projects? 
                Click the button below to discover more about me and my journey.
						  </p><br>
						  <a href="<?= base_url('about') ?>" class="btn-get-started"><span>About Me</span></a>
					  </div>
				  </div>
			  </div>
		  </div>
	  </section>
	  <!--================ End About Us Area =================-->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Profile Overview</h2>
        <p>A quick overview of my learning journey, project experiences and personal growth as a Software Development student.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects Completed</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
              <p>Technical Skills</p>
            </div>
          </div><!-- End Stats Item -->
        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Newsletter Section -->
    <section id="newsletter" class="newsletter section">
      <div class="container" data-aos="fade-up">
        <div class="newsletter-card mx-auto text-center">
          <h2>Get Updates From Anywhere</h2>
          <p>Subscribe to receive the latest news, project updates, and helpful resources directly in your inbox.</p>

          <form class="newsletter-form d-flex flex-column flex-md-row align-items-stretch justify-content-center gap-3">
            <input type="email" class="form-control" placeholder="Enter your email" aria-label="Email address">
            <button type="submit" class="btn btn-newsletter">Subscribe</button>
          </form>
        </div>
      </div>
    </section><!-- /Newsletter Section -->

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
