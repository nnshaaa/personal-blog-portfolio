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
        <p>Sharing my academic journey, university activities, achievements, projects, and learning experiences throughout university.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-5">

          <div class="col-lg-4">
            <aside class="blog-sidebar" data-aos="fade-up" data-aos-delay="150">

              <div class="sidebar-widget search-widget">
                <form class="d-flex">
                  <input type="text" class="form-control" placeholder="Search posts..." aria-label="Search posts">
                  <button type="submit" class="btn"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End Search Widget -->

              <div class="sidebar-widget author-widget text-center">
                <img src="<?= base_url('/') ?>/assets/img/profile-img.jpg" class="author-img" alt="Ainnisha Sofea">
                <h4>Ainnisha Sofea</h4>
                <p class="role">Software Development Student</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. I share simple notes about learning, activities, and university experiences.</p>
                <div class="social-links d-flex justify-content-center">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div><!-- End Author Widget -->

              <div class="sidebar-widget">
                <h4>Popular Posts</h4>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-6.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-1') ?>">Student Activity Highlights</a></h5>
                    <span>Jan 12, 2026</span>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-7.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-3') ?>">Academic Achievement Notes</a></h5>
                    <span>Mar 18, 2026</span>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-8.jpg" alt="Popular post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-5') ?>">Practical Learning Journey</a></h5>
                    <span>May 21, 2026</span>
                  </div>
                </div>
              </div><!-- End Popular Posts -->

              <div class="sidebar-widget categories-widget">
                <h4>Categories</h4>
                <ul>
                  <li><a href="#">Activities <span>3</span></a></li>
                  <li><a href="#">Achievements <span>2</span></a></li>
                </ul>
              </div><!-- End Categories -->

              <div class="sidebar-widget">
                <h4>Recent Posts</h4>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-9.jpg" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-5') ?>">Building Confidence Through Practical Learning</a></h5>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/app-1.jpg" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-4') ?>">Receiving Recognition for a Class Project</a></h5>
                  </div>
                </div>
                <div class="sidebar-post">
                  <img src="<?= base_url('/') ?>/assets/img/portfolio/books-1.jpg" alt="Recent post">
                  <div>
                    <h5><a href="<?= base_url('blog-post-3') ?>">Celebrating a New Academic Milestone</a></h5>
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
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="University activity">
                    <div class="blog-post-content">
                      <h3>Exploring Campus Life Through Student Activities</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> Jan 12, 2026</span>
                        <span><i class="bi bi-eye"></i> 245 Views</span>
                        <span><i class="bi bi-chat-dots"></i> 12 Comments</span>
                      </div>
                      <a href="<?= base_url('blog-post-1') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="Group project activity">
                    <div class="blog-post-content">
                      <h3>Learning Teamwork During a University Program</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> Feb 4, 2026</span>
                        <span><i class="bi bi-eye"></i> 198 Views</span>
                        <span><i class="bi bi-chat-dots"></i> 8 Comments</span>
                      </div>
                      <a href="<?= base_url('blog-post-2') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-achievements">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="Academic achievement">
                    <div class="blog-post-content">
                      <h3>Celebrating a New Academic Milestone</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> Mar 18, 2026</span>
                        <span><i class="bi bi-eye"></i> 320 Views</span>
                        <span><i class="bi bi-chat-dots"></i> 15 Comments</span>
                      </div>
                      <a href="<?= base_url('blog-post-3') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-achievements">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="Award achievement">
                    <div class="blog-post-content">
                      <h3>Receiving Recognition for a Class Project</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> Apr 9, 2026</span>
                        <span><i class="bi bi-eye"></i> 276 Views</span>
                        <span><i class="bi bi-chat-dots"></i> 10 Comments</span>
                      </div>
                      <a href="<?= base_url('blog-post-4') ?>" class="btn-get-started">View More</a>
                    </div>
                  </article>
                </div><!-- End Blog Post -->

                <div class="col-11 blog-post isotope-item filter-activities">
                  <article class="blog-post-card">
                    <img src="<?= base_url('/') ?>/assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="Learning experience">
                    <div class="blog-post-content">
                      <h3>Building Confidence Through Practical Learning</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur.</p>
                      <div class="blog-meta d-flex flex-wrap gap-3">
                        <span><i class="bi bi-person"></i> Ainnisha Sofea</span>
                        <span><i class="bi bi-calendar"></i> May 21, 2026</span>
                        <span><i class="bi bi-eye"></i> 301 Views</span>
                        <span><i class="bi bi-chat-dots"></i> 14 Comments</span>
                      </div>
                      <a href="<?= base_url('blog-post-5') ?>" class="btn-get-started">View More</a>
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
        <p>Â© <span>Copyright</span> <strong class="px-1 sitename">Kelly</strong> <span>All Rights Reserved<br></span></p>
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
