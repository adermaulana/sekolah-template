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

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Daftar - <?= $namasekolah ?></title>
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
  * Updated: May 18 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

    <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
         <img src="admin/<?= $logo ?>" alt="<?= $logo ?>">
        <h1 style="font-size:22px;" class="sitename"><?= $namasekolah ?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="">Home</a></li>
          <li><a href="index.php#visimisi">Visi & Misi</a></li>
          <li><a href="index.php#fasilitas">Fasilitas</a></li>
          <li><a href="index.php#guru">Guru</a></li>
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
          <li><a href="index.php#contact">Contact</a></li>
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

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Daftar</li>
          </ol>
        </nav>
        <h1 style="margin-top:10px;">Daftar</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section style="margin-top:-50px;" id="starter-section" class="starter-section section">

      <div class="container" data-aos="fade-up">
        <div class="row"> 
            <div class="col-lg-6 col-md-12">
                <div>                    
                 <h6>Syarat Pendaftaran</h6>
                    <ol>
                        <li>Mengisi Formulir pendaftaran</li>
                        <li>Menyerahkan Foto copy Ijazah SMP/MTs 3 Lembar</li>
                        <li>Menyerahkan Foto copy NEM SML/MTs 3 Lembar</li>
                        <li>Membawa Ijazah & NEM Asli SMP/MTs</li>
                        <li>Menyerahkan Pas Foto 3x4 3 Lembar</li>
                    </ol>
                </div>
                <div>
                    <h6>Waktu dan Tempat Pendaftaran</h6>
                    <ol>
                        <li>Pendaftaran mulai dari tanggal 6 Mei - 29 Juni 2024</li>
                        <li>Pengambilan & pengambalian Formulir di sekolah</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div>
                    <h6>Sistem Pendaftaran</h6>
                    <ol>
                        <li>Online dengan link yang tertera pada<a href="https://docs.google.com/forms/d/e/1FAIpQLSeX2t_UUNzzgw0SOV1DdnlIKbxPEWkCti
     m_Z4JWDqnhzRs34Q/viewform?vc=0&c=0&w=1&flr=0&pli=1"> link berikut</a></li>
                        <li>Pengambilan & pengambalian Formulir di sekolah</li>
                    </ol>
                </div>
                <div>
                    <h6>Mekanisme Pendaftaran</h6>
                    <ol>
                        <li>Seleksi Berkas</li>
                        <li>Wawancara</li>
                        <li>Tes Tertulis</li>
                    </ol>
                </div>
            </div>
        </div>
      </div>

    </section><!-- /Starter Section Section -->

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