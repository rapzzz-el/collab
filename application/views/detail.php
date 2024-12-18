<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $judul ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Favicons -->
  <link href="<?= site_url('assets/template/') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= site_url('assets/template/') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= site_url('assets/projek1/') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= site_url('assets/projek1/') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= site_url('assets/projek1/') ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= site_url('assets/projek1/') ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= site_url('assets/projek1/') ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= site_url('assets/projek1/') ?>/assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

  <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portal Sejarah</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= base_url('home') ?>" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><?php foreach ($kategori as $kate) { ?>
                        <a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" class="nav-item nav-link"><?= $kate['nama_kategori'] ?></a>
                    <?php } ?></a></li>
            </ul>
          </li>
          <a href="<?= base_url('auth') ?>" class="btn btn-primary px-4">Login</a>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  </header>

  <main class="main">
  
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="assets/img/hero-bg-2.jpg" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1>Selamat Datang Di <span>PortalSejarah</span></h1>
          </div>
        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <div class="container py-5">
        <div class="row pt-5">
            <div class="col-lg-12">
                <div class="d-flex flex-column text-left mb-3">
                    <p class="section-title text-center pr-5">
                        <span class="px-2">Silahkan Membaca</span>
                    </p>
                    <h1 class="mb-3"><?= $konten->judul; ?></h1>
                    <div class="d-flex">
                        <!-- <p class="mr-3"><i class="fa fa-user text-primary"></i> <?= $konten->nama; ?></p> -->
                        <p class="mr-3">
                            <i class="fa fa-folder text-primary"></i> <?= $konten->nama_kategori; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img
                        class="img-fluid rounded w-100 mb-4"
                        src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" />
                    </div>
                    <dic class="col">
                        <?= $konten->keterangan; ?>
                    </dic>
                </div>
            </div>
        </div>
    </div>

       <!-- End Icon Box -->
 <!-- End Icon Box -->

             <!-- End Icon Box -->
 <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <!-- /Features Section -->

    <!-- Stats Section -->
   <!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Details Section -->
    <section id="details" class="details section">

      <!-- Section Title -->
    ]<!-- Features Item -->

       <!-- Features Item -->
    </section><!-- /Details Section -->

    <!-- Gallery Section -->

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
      </div><!-- End Section Title -->
<!-- End Gallery Item -->
          <!-- End Gallery Item -->
        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Testimonials Section -->
   <!-- End testimonial item -->
<!-- End testimonial item -->

           <!-- End testimonial item -->

            <!-- End testimonial item -->

            <!-- End testimonial item -->
    </section><!-- /Testimonials Section -->

    <!-- Team Section -->
    <section id="team" class="team section">
<!-- End Section Title -->
<!-- End Team Member -->
<!-- End Team Member -->

<!-- End Team Member -->

    </section><!-- /Team Section -->

    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
<!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

<!-- End Pricing Item -->
<!-- End Pricing Item -->
<!-- End Pricing Item -->

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
<!-- End Faq item-->  
<!-- End Faq item-->


    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Portal Sejarah</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <div class="col-lg-4 col-md-6 mb-5">
                <div class="d-flex">
                    <div class="pl-3">
                        <h5 class="text-white">Alamat</h5>
                        <p><?= $konfig->alamat; ?></p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p><?= $konfig->email; ?></p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="pl-3">
                        <h5 class="text-white">Phone</h5>
                        <p>+<?= $konfig->no_wa; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="<?= base_url() ?>"><i class="fa fa-angle-right mr-2"></i> Home </a>
                    <?php foreach ($kategori as $kate) { ?>
                        <a class="text-white mb-2" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                            <i class="fa fa-angle-right mr-2"></i>
                            <?= $kate['nama_kategori'] ?></a>
                    <?php } ?>
                </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Rapzzz Web</a> 
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->

  <!-- Vendor JS Files -->
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= site_url('assets/projek1/') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?= site_url('assets/projek1/') ?>/assets/js/main.js"></script>

</body>

</html>