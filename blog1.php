<?php
include_once 'db/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">banteaysreicambodia.org</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+855 888 111</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/banteaysreingo" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/BanteaySreiNGO/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/banteaysrei.ngo/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/company/banteaysrei/?viewAsMember=true" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="./" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Banteay Srei<span></span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="./">Home</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blog</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

      <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="../assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author-list">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
        <div class="row gy-4 posts-list">
          <?php
          $sql = 'select post_ID, CAST(post_date AS DATE) post_date, post_title, post_description, post_image
                                      from post;';
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo $row['post_ID'] . '<br>';
              echo $row['post_title'] . '<br>';
              echo $row['post_date'] . '<br>';
              echo $row['post_image'] . '<br>';

          ?>
              <div class="col-xl-4 col-md-6">
                <article>

                  <div class="post-img">
                    <img src="<?= $row['post_image']; ?>" alt="" class="img-fluid">
                  </div>

                  <p class="post-category"><time datetime="2022-01-01"><?= $row['post_date']; ?>sdfsdf</time></p>

                  <h2 class="title">
                    <a href="blog-details.html"><?= $row['post_title']; ?></a>
                  </h2>

                  <div class="d-flex align-items-center">
                    <img src="assets\img\images.png" alt="" class="img-fluid post-author-img flex-shrink-0">
                    <div class="post-meta">
                      <p class="post-author-list">Banteay Srei</p>
                      <p class="post-date">
                      </p>
                    </div>
                  </div>

                </article>
              </div><!-- End post list item -->
          <?php
            }
          }
          ?>
          sdfsdlf
          


          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div><!-- End blog pagination -->

        </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Banteay Srei Organisation</span>
          </a>
          <p>Please note that while a copyright notice is not required by law in many countries, it does remind visitors that the content is legally protected.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/banteaysreingo" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/BanteaySreiNGO/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/banteaysrei.ngo/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/banteaysrei/?viewAsMember=true" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Works</h4>
          <ul>
            <li><a href="#">Women Rights</a></li>
            <li><a href="#">Donate</a></li>
            <li><a href="#">Product Management</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            #19B, Street 145, Sangkat Phsar Doeum Tkov,<br>
            Khann Chamcar Mon, Phnom Penh, Cambodia,<br>
            Phnom Penh, Cambodia <br><br>
            <strong>Phone:</strong> +23 888 888<br>
            <strong>Email:</strong> info@banteaysrei.info<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>