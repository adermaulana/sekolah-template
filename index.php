<?php

include 'koneksi.php';

session_start();

// Cek apakah pengguna sudah login
if(isset($_SESSION['username_admin'])) {
    $isLoggedIn = true;
    $userName = $_SESSION['username_admin']; // Ambil nama user dari session
} 
else {
    $isLoggedIn = false;
}

$tampil = mysqli_query($koneksi, "SELECT * FROM pengaturan WHERE id = 1");
$data = mysqli_fetch_array($tampil);
if($data){
    $namasekolah = $data['namasekolah'];
    $email = $data['email'];
    $telp = $data['telp'];
    $alamat = $data['alamat'];
    $logo = $data['logo'];
    $jumlahsiswa = $data['jumlahsiswa'];
}

$tampilvisimisi = mysqli_query($koneksi, "SELECT * FROM visimisi WHERE id = 1");
$datavisimisi = mysqli_fetch_array($tampilvisimisi);
if($datavisimisi){
    $visi = $datavisimisi['visi'];
    $misi = $datavisimisi['misi'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $namasekolah ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/<?= $logo ?>" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
      .jumbotron {
          background: url(assets/img/20180402_122150.webp);
          z-index: 0;
      }

      .jumbotron::after {
          content: '';
          display: block;
          position: absolute;
          width: 100%;
          height: 100%;
          background-image: linear-gradient(to bottom, rgba(0,0,0,9), rgba(0,0,0,0));
          bottom: 0;
          pointer-events: none;
      }

      .tulisan {
          position: relative; /* Relative to .jumbotron */
          z-index: 2; /* Place the text above the overlay */
          color: white; /* Make the text white to stand out against the dark overlay */
        }

      .highlight-text {
        font-size: 2em; /* Adjust font size as needed */
        text-align: center; /* Center the text */
      }


  </style>


</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
         <img src="admin/<?= $logo ?>" alt="<?= $logo ?>">
        <h1 style="font-size:22px;" class="sitename"><?= $namasekolah ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#visimisi">Visi & Misi</a></li>
          <li><a href="#fasilitas">Fasilitas</a></li>
          <li><a href="#guru">Guru</a></li>
          <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <?php
              $no = 1;
              $tampil = mysqli_query($koneksi, "SELECT * FROM jurusan");
              while($data = mysqli_fetch_array($tampil)):
            ?>
              <li><a href="jurusan.php?hal=jurusan&nama=<?= $data['namajurusan'] ?>"><?= $data['namajurusan'] ?></a></li>
              <?php
                endwhile; 
              ?>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Ekstrakurikuler</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <?php
              $no = 1;
              $tampil = mysqli_query($koneksi, "SELECT * FROM ekstrakurikuler");
              while($data = mysqli_fetch_array($tampil)):
            ?>
              <li><a href="ekstrakurikuler.php?hal=ekstrakurikuler&nama=<?= $data['namaekskul'] ?>"><?= $data['namaekskul'] ?></a></li>
              <?php
                endwhile; 
              ?>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
       <?php if($isLoggedIn): ?>
        <a class="btn-getstarted" href="admin">Dashboard</a>

      <?php else: ?>
      <a class="btn-getstarted" href="login.php">Login</a>
      <?php endif; ?>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero jumbotron section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center tulisan" data-aos="zoom-out">
            <h1 class="highlight-text">Membentuk Generasi Emas untuk Masa Depan Gemilang</h1>
            <p class="highlight-text">"Membentuk Generasi Emas untuk Masa Depan Gemilang", mencerminkan komitmen kami untuk mengasah setiap siswa menjadi individu yang cerdas, berbudi pekerti luhur, dan siap menghadapi tantangan masa depan.</p>
            <div class="d-flex">
              <a href="daftar.php" class="btn-get-started">Daftar Sekarang</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="visimisi" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Visi & Misi</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              <?= $visi ?>
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p><?= $misi ?></p>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/20180402_114911.jpg" alt="">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>“Akreditasi A”</h3>
            <p>Sebagai sekolah dengan akreditasi "A", SMK PRIMA TIARA MAKASSAR memiliki rekam jejak prestasi yang membanggakan di tingkat lokal maupun nasional. Siswa-siswanya seringkali meraih penghargaan dalam berbagai kompetisi kejuruan, baik di bidang teknologi, kesehatan, maupun fashion.</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="daftar.php">Daftar Sekarang!</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Services Section -->
    <section id="fasilitas" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Fasilitas</h2>
        <p>Fasilitas Sarana & Prasarana</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Ruang Kelas Berlantai 4 dan Sejuk</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Laboratorium Tata Kecantikan Full Ac</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Laboratorium Komputer Full Ac</a></h4>

            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Laboratorium Keperawatan Full Ac</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Perpustakaan</a></h4>

            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-newspaper"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Proses Pembelajaran Berbasic ICT</a></h4>

            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-newspaper"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Ujian & Penilaian Berbasis Online</a></h4>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="800">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-broadcast icon"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Free Hotspot</a></h4>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="900">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Lab Hardware</a></h4>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="1000">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-hospital-fill"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Lab Software</a></h4>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="1100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-signpost"></i></div>
              <h4><a href="#fasilitas" class="stretched-link">Lokasi Mudah Dijangkau</a></h4>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Team Section -->
    <section id="guru" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Guru</h2>
        <p>Daftar guru yang mengajar di <?= $namasekolah ?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

        <?php
              $tampil = mysqli_query($koneksi, "SELECT * FROM guru");
              $delay = 100;
              while($data = mysqli_fetch_array($tampil)):
            ?>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="admin/<?= $data['foto'] ?>" class="img-fluid" alt="<?= $data['foto'] ?>"></div>
              <div class="member-info">
                <h4><?= $data['nama'] ?></h4>
                <span>Guru <?= $data['keahlian'] ?></span>
                <div class="social">
                  <a href="#guru"><i class="bi bi-twitter-x"></i></a>
                  <a href="#guru"><i class="bi bi-facebook"></i></a>
                  <a href="#guru"><i class="bi bi-instagram"></i></a>
                  <a href="#guru"> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->
          <?php
          $delay += 200;
                endwhile; 
              ?>
        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Paul Walker</h3>
                <h4>Alumni</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>"Sekolah XYZ telah membantu saya menemukan bakat dan mengembangkan keterampilan saya. Saya bangga menjadi bagian dari keluarga besar ini." - Alumni</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
  </main>

  <footer id="contact" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename"><?= $namasekolah ?></span>
          </a>
          <div class="footer-contact pt-3">
            <p><?= $alamat ?></p>
            <p>Sulawesi Selatan, Indonesia</p>
            <p class="mt-3"><strong>Phone:</strong> <span><?= $telp ?></span></p>
            <p><strong>Email:</strong> <span><?= $email ?></span></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <h4>Follow Us</h4>
          <p>Sosial Media</p>
          <div class="social-links d-flex">
            <a href="#contact"><i class="bi bi-twitter-x"></i></a>
            <a href="#contact"><i class="bi bi-facebook"></i></a>
            <a href="#contact"><i class="bi bi-instagram"></i></a>
            <a href="#contact"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Arsha</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>