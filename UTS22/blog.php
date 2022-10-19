<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog</title>
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
    $querySQL = "SELECT * FROM blog";
    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

    if (mysqli_num_rows($execQuerySQL) > 0 ) {
      while($row = mysqli_fetch_assoc($execQuerySQL)) {
    ?>

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a"><?= $row['header']?></h3>
              <p class="subtitle-a"><?= $row['deskripsi']?></p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-img">
                <a><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
              </div>
              <div class="card-body">
                <div class="card-category-box">
                  <div class="card-category">
                    <a class="category" href="https://www.blogger.com/blog/posts/5293807828910723682">GO</a>
                  </div>
                </div>
                <h3 class="card-title"><a>Lihat lebih banyak tentang saya!</a></h3>
              </div>
              <div class="card-footer">
                <div class="post-author">
                </div>
              </div>
            </div>
          </div>
    </section><!-- End Blog Section -->

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