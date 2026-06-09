<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Blog</title>
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

    <!-- Blog Section -->
    <section id="blog" class="blog portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Blog</h2>
        <p>This blog is where I share my university experiences, achievements and project development journey throughout university.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-5">

          <div class="col-lg-4">
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

          <div class="col-lg-8">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

              <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All Posts</li>
                <li data-filter=".filter-activities">Activities</li>
                <li data-filter=".filter-achievements">Achievements</li>
              </ul><!-- End Blog Filters -->

              <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/portfolio/iot2.jpg" class="img-fluid" alt="University activity">
                    <div class="blog-post-content">
                      <h3>From Hospital Experience to an IoT Solution</h3>
                      <p>
                        A final assessment project for my Internet of Things subject, inspired by my experience caring for my grandmother in the hospital and designed to improve patient monitoring through connected healthcare technology.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> February 15, 2026</span>
                        <span><i class="bi bi-eye"></i> 15 Views</span>
                        <span><i class="bi bi-clock-history"></i> 4 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-1') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/portfolio/eduhub1.png" class="img-fluid" alt="Academic achievement">
                    <div class="blog-post-content">
                      <h3>Developing EduHub Center with My Team</h3>
                      <p>
                        A collaborative software development project that challenged our team to design, develop, document and test a complete educational management system from start to finish.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> February 10, 2026</span>
                        <span><i class="bi bi-eye"></i> 20 Views</span>
                        <span><i class="bi bi-clock-history"></i> 6 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-2') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-achievements">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/portfolio/hatchquest3.jpg" class="img-fluid" alt="Learning experience">
                    <div class="blog-post-content">
                      <h3>Earning Second Place in a Startup Competition</h3>
                      <p>
                        An exciting two-day startup competition where my team developed and pitched a startup idea designed specifically for university students and earning second place among competing teams.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> December 13, 2024</span>
                        <span><i class="bi bi-eye"></i> 25 Views</span>
                        <span><i class="bi bi-clock-history"></i> 7 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-3') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-achievements">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/portfolio/deanlist3.jpg" class="img-fluid" alt="Group project activity">
                    <div class="blog-post-content">
                      <h3>Achieving Dean's List Recognition: A Memorable Milestone</h3>
                      <p>
                        Receiving Dean's List recognition was one of the most rewarding moments of my university journey and a reflection of the effort, discipline and perseverance invested throughout the semester.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> September 25, 2025</span>
                        <span><i class="bi bi-eye"></i> 20 Views</span>
                        <span><i class="bi bi-clock-history"></i> 5 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-4') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/heykawan.png" class="img-fluid" alt="Learning experience">
                    <div class="blog-post-content">
                      <h3>Creating HeyKawan: A Safe Space for Students to Share</h3>
                      <p>
                        A web application project inspired by student burnout and emotional well-being designed to provide a safe and supportive space for students to express their thoughts and feelings.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> February 20, 2025</span>
                        <span><i class="bi bi-eye"></i> 35 Views</span>
                        <span><i class="bi bi-clock-history"></i> 5 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-5') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/portfolio/lakaranimpian1.png" class="img-fluid" alt="Award achievement">
                    <div class="blog-post-content">
                      <h3>Designing Lakaran Impian: From UI Concept to Mobile Application</h3>
                      <p>
                        A mobile application design project focused on creating a wedding planning platform, where I contributed to the bride and groom user interface from concept design to application development.
                      </p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> February 16, 2025</span>
                        <span><i class="bi bi-eye"></i> 30 Views</span>
                        <span><i class="bi bi-clock-history"></i> 5 Minutes</span>
                      </div>
                      <a href="<?= base_url('blog-post-6') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

              </div><!-- End Blog Container -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /Blog Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>Â© <span>Copyright</span> <strong class="px-1 sitename">Portfolio</strong> <span>All Rights Reserved<br></span></p>
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
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=â€œhttps://themewagon.com>ThemeWagon
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
