<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Masalek</a></h1>
      
    <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  active" href="index.php">Home</a></li>
          <li><a class="nav-link " href="about.php">About</a></li>
          <li><a class="nav-link " href="education.php">Education</a></li>
          <li><a class="nav-link " href="skill.php">Skill</a></li>
          <li><a class="nav-link " href="blog.php">Blog</a></li>
          <li><a class="nav-link " href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <?php
    include "koneksi.php";
    
    if (!koneksi()) {
      die("Koneksi error");
    }
    $querySQL = "SELECT * FROM about";
    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

    if (mysqli_num_rows($execQuerySQL) > 0 ) {
      while($row = mysqli_fetch_assoc($execQuerySQL)) {
    ?>

   <!-- ======= Hero Section ======= -->
   <div id="hero"+>
  </div><!-- End Hero Section -->



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/post-4.jpeg" class="img-fluid rounded " alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Afdonny Dimas</span></p>
                        <p><span class="title-s">Profile: </span> <span>Stundent</span></p>
                        <p><span class="title-s">Email: </span> <span>afdonnydk@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>(+62) 895-1465-8690 </span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-a"><?= $row['aboutme']?></h5>
                    </div>
                    <p class="lead"><?= $row['deskripsi']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->
<?php
}
}
?>
  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>