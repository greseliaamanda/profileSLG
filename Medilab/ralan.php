<?php include '../master/layout/koneksi.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rawat Jalan - RSUD SLG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 13 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->

    <!-- ======= Header ======= -->
    <?php include 'layout/navbar.php';?>
    <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <!-- <h2>Inner Page</h2> -->
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Rawat Jalan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="ralan" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Layanan Poliklinik RSUD SLG</h2>
          <p>Berikut beberapa jadwal lengkap mengenai layanan poliklinik yang ada pada RSUD SLG Kabupaten Kediri</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="member-info">
              <h4>Spesialis Penyakit Dalam</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis penyakit dalam'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Jantung</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis jantung'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Mata</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis mata'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
            </div>
          </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Paru</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis paru'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Obgyn</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis obgyn'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Bedah Plastik</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis bedah plastik'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Anak</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis anak'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis TB Paru</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis tb paru'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Laktasi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'laktasi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Rehabilitasi Medik</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis rehabilitasi medik'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Urologi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis urologi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis THT</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis tht'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Kulit dan Kelamin</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis kulit dan kelamin'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Orthopedi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis orthopedi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Patologi Anatomi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis anatomi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Anestesi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis anestesi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Gigi Umum</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'gigi umum'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Gigi Anak</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis gigi anak'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Prostodonti</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis prostodonti'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Konservasi Gigi</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis konservasi gigi'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Medical Check Up</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'mcu'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik VCT</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'vct'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Saraf</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis saraf'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Bedah</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis bedah'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="member-info">
                <h4>Klinik Spesialis Psikiatri</h4><br>
                <?php
                  $query = "SELECT * FROM ralan WHERE nm_poli = 'spesialis psikiatri'";
                  $q_tampil_ralan = mysqli_query($db, $query);

                  if (mysqli_num_rows($q_tampil_ralan) > 0) {
                      while ($r_tampil_ralan = mysqli_fetch_array($q_tampil_ralan)) {
                ?>
                  <span><strong><?= $r_tampil_ralan['nm_dokter']?></strong></span>
                  <p><?= $r_tampil_ralan['hari']?> <?= $r_tampil_ralan['jam']?></p>
                  <p><?= $r_tampil_ralan['hari2']?> <?= $r_tampil_ralan['jam2']?></p><br>
                <?php
                }
                  } else {
                      echo "";
                  }
                ?>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'layout/footer.php';?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Bootstrap -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</body>

</html>