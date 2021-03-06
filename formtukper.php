<?php
    require_once 'db/conn.php';
    $results = $crud->getTukper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Daftar Seminar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/poltek.png" rel="icon">
  <link href="assets/img/poltek.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/stylef.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.1.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">POLINEMA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="tukper.php">Kembali</a></li>
          <li><a class="nav-link scrollto" href="course.php">Course</a></li>
          <li><a class="nav-link scrollto" href="seminar.php">Seminar</a></li>
          <li><a class="getstarted scrollto" href="index.php">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row d-flex justify-content-center">
        <div style="text-align:center;" class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Selamat Datang Pendaftar Tukar Pelajar!</h1>
          <h2>Pastikan semua identitas dan keperluan untuk mendaftar Pertukaran Pelajar internasional sudah benar dan sesuai aturan</h2>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Form Pendaftaran</h2>
        </div>

        <div class="row content d-flex justify-content-center">
          <div class="col-lg-6">
            <p style="text-align: center;">
              Isi form berikut dengan baik dan benar :
            </p>
        </div>
        <form method="post" action ="successtp.php">
            <br>
            <div class="container">
                <label for="nama">Nama</label>
                <input required type="text" class="form-control" id="nama" name="nama">
            </div>
            <br>
            <div class="container">
                <label for="nimt">NIM</label>
                <input required type="number" require class="form-control" id="nimt" name="nimt">
            </div>
            <br>
            <div class="container">
                <label for="nikt" class="form-label">NIK</label>
                <input required type="number" class="form-control" id="nikt" name="nikt">
            </div>
            <br>
            <div class="container">
                <label for="ipkt" class="form-label">IPK</label>
                <input required type="text" class="form-control" id="ipkt" name="ipkt">
            </div>
            <br>
            <div class="container">
                <label for="semestert" class="form-label">Semester</label>
                <input required type="text" class="form-control" id="semestert" name="semestert">
            </div>
            <br>
            <div class="container">
                <label for="prodit">Program Studi</label>
                <input required type="text" class="form-control" id="prodit" name="prodit">
            </div>
            <br>
            <div class="container">
                <label for="jurusant">Jurusan</label>
                <input required type="text" class="form-control" id="jurusant" name="jurusant">
            </div>
            <br>
            <div class="container">
                <label for="emailt" class="form-label">Email address</label>
                <input required type="emailt" class="form-control" id="emailt" name="emailt" aria-describedby="emailHelp" >
                <div id="emailHelp" class="form-text">Kami akan menjaga kerahasiaan email anda</div>
            </div>
            <br>
            <div class="container-md">
            <label for="namat">Pilih Program :</label>
            <select class="form-control" id="namat" name="namat">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                    <option value="<?php echo $r ['id_tukper'] ?>"><?php echo $r['program'];?></option>
            <?php }?>
            </select>
        </div>
            <br>
            <br>
            <div class = "container ">
            <button style="background-color:#37517e; border-color: #37517e;" type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
            </div>
        </form>
        <br>
        <br>
      </div>
    </section><!-- End About Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Polinema</h3>
            <p>
              Jl. Soekarno Hatta No.9 <br>
              Jatimulyo, Kec. Lowokwaru, Kota Malang<br>
              Jawa Timur 65141 <br><br>
              <strong>Phone:</strong> (0341) 404424 - 404425<br>
              <strong>Email:</strong> @polinema.ac.id<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Daftar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="formcourse.php">Course</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="formseminar.php">Seminar</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Kunjungi media sosial Polinema :</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>