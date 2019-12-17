<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SI - DESAKU</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url(''); ?>/vendor2/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(''); ?>/vendor2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url(''); ?>/vendor2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url(''); ?>/vendor2/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(''); ?>/vendor2/lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url(''); ?>/vendor2/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">SI-DESAKU</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>
      <nav id="nav-menu-container">

        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#features">Info APBD</a></li>
          <li><a href="#pricing">Inovasi Desa</a></li>
          <li class="menu-has-children"><a href="">Layanan</a>
            <ul>
              <li><a href="" data-toggle="modal" data-target="#modalsktmForm">Pembuatan SKTM</a></li>
              <li class="menu-has-children"><a href="">Surat Rekom</a>
                <ul>
                  <li><a href="" data-toggle="modal" data-target="#modaldomisiliForm">Surat Domisili</a></li>
                  <li><a href="" data-toggle="modal" data-target="#modalpengantarpindahForm">Surat Pengantar Pindah</a></li>
                  <li><a href="" data-toggle="modal" data-target="#modalpengantarnikahForm">Surat Pengantar Nikah</a></li>
                  <li><a href="" data-toggle="modal" data-target="#modalpengantarceraiForm">Surat Pengantar Cerai</a></li>
                </ul>
              </li>
              <li><a href="" data-toggle="modal" data-target="#modalktpForm">Pembuatan KTP</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalkkForm">Pembuatan KK</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalaktaForm">Pembuatan AKTA LAHIR</a></li>
              <li><a href="" data-toggle="modal" data-target="#modalsurattanahForm">Pembuatan Surat Tanah</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a href="#team">Perangkat Desa</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="<?= base_url('Auth') ?>" class="btn btn-default btn-rounded mb-4">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->



  <div class="modal fade" id="modalsktmForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modaldomisiliForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalpengantarpindahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalpengantarnikahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalpengantarceraiForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalktpForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="modalkkForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="modalaktaForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalsurattanahForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="email" id="defaultForm-email" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-lock prefix grey-text"></i>
            <input type="password" id="defaultForm-pass" class="form-control validate">
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button class="btn btn-default">Login</button>
        </div>
      </div>
    </div>
  </div>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>SELAMAT DATANG DI SI-DESAKU</h2>
      <p>Melayani Sepenuh Hati Untuk Kepentingan Bersama</p>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>

    <div class="product-screens">

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="<?php echo base_url(''); ?>/vendor2/img/product-screen-2.png" alt="">
      </div>

    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Tentang Kami</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Sistem Informasi Layanan Desa<br>
            Memberikan Pelayanan Yang Responsif, Tepat, dan Transparan untuk Kepentingan Mayarakat
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="<?php echo base_url(''); ?>/vendor2/img/gambiran.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Desa Yosomulyo, Kecamatan Gambiran, Banyuwangi</h2>
            <h3>Yosomulyo adalah sebuah nama desa di wilayah Gambiran, Kabupaten Banyuwangi, Provinsi Jawa Timur, Indonesia..</h3>
            <p>
              Dulu desa ini bernama Karangasem. Nama itu diberikan karena dulu banyak sekali pohon asam di sana. Desa ini pada zaman PKI Di anggap tempat basis PKI di Banyuwangi sehingga sangat ditakuti di seluruh Banyuwangi. Orang-orang Yosomulyo terkenal kesaktiannya. Hal itu terbukti saat orang Yosomulyo bentrok dengan orang ANSOR Muncar. Bentrokan ini bermula dari orang-orang NU dari Muncar yang merencanakan penyerangan di Yosomulyo untuk menumpas PKI.
            </p>
            <h5>Pembagian Wilayah</h5>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Krajan</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidomukti</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidorejo Kulon.</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidorejo Wetan.</li>
              <li><i class="ion-android-checkmark-circle"></i>Dusun Sidotentrem.</li>
            </ul>


          </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Alokasi APBD Desa</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="<?php echo base_url(''); ?>/vendor2/img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Rencana Strategis</a></h4>
                <p class="description">Rencana strategis dilakukan untuk pengalokasian dana desa dan alokasi dana desa baik berdasarkan APBN dan APBD Daerah.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Dasar (AD)</a></h4>
                <p class="description">Sebesar 77% dari pagu atau sebesar Rp46.200,00 miliar, dibagi secara merata kepada setiap desa.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Afirmasi (AA)</a></h4>
                <p class="description">Sebesar 3% dari pagu atau Rp1.800,00 miliar, dibagi secara proporsional kepada desa tertinggal dan desa sangat tertinggal yang mempunyai jumlah penduduk miskin (JPM) tinggi.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Alokasi Formula (AF)</a></h4>
                <p class="description"> Sebesar 20% dari pagu atau Rp12.000,00 miliar, dibagi berdasarkan: jumlah penduduk desa bobot 10%, jumlah penduduk miskin bobot 50%, luas wilayah desa bobot 15%, dan Indeks Kemahalan Konstruksi atau Indeks Kesulitan Geografis .</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    <!--==========================
      Product Advanced Featuress Section
    ============================-->
    <section id="advanced-features">
      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="img/advanced-feature-2.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>Kebijakan pengalokasian Dana Desa dilakukan dengan menyempurnakan formula pengalokasian Dana Desa:</h2>
                <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-dlay="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.5s"> penyesuaian proporsi dana yang dibagi rata (Alokasi Dasar) dan dana yang dibagi berdasarkan formula (Alokasi Formula).</p>
                <i class="ion-ios-color-filter-outline" wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"> memberikan afirmasi pada desa tertinggal dan sangat tertinggal yang mempunyai jumlah penduduk miskin tinggi; dan.</p>
                <i class="ion-ios-barcode-outline" class="wow fadeInRight" data-wow-delay="0.4""0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Memberikan fokus yang lebih besar pada pengentasan kemiskinan dan ketimpangan, yaitu dengan melakukan penyesuaian bobot variabel jumlah penduduk miskin dan luas wilayah.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #advanced-features -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Agenda</h3>
          <span class="section-divider"></span>
          <p class="section-description">Agenda kegiatan desa untuk menunjang dan mengambangkan minat bakat masyarakat</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
              <h4 class="title"><a href="">Kerja Bakti</a></h4>
              <p class="description">Kerja bakti desa mewajibkan warganya setiap RT untuk membersihkan lingkugan sekitar dan umum.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="">Kegiatan Bulanan</a></h4>
              <p class="description">Agenda evaluasi dan pelaksana untuk situasi dan kondisi desa.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="ion-ios-heart-outline"></i></div>
              <h4 class="title"><a href="">Musyawarah</a></h4>
              <p class="description">Dilakukan setiap pengadaan agenda acara atau even yang berhubungan dengan waktu dan tempat desa.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
              <h4 class="title"><a href="">Karang Taruna</a></h4>
              <p class="description">Kegiatan mingguan untuk meningkatkan kemampuan minat bakat dan membangun inovasi desa</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Clients
    ============================-->
    <section id="clients">
      <div class="container">

        <div class="row wow fadeInUp">

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-1.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-2.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-3.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-4.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-5.png" alt="">
          </div>

          <div class="col-md-2">
            <img src="<?php echo base_url(''); ?>/vendor2/img/clients/client-6.png" alt="">
          </div>

        </div>
      </div>
    </section><!-- #more-features -->

    <!--==========================
      Pricing Section
    ============================-->
    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Inovasi Desa</h3>
          <span class="section-divider"></span>
          <p class="section-description">Komunitas pengembang dan inovasi</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInLeft">
              <h3>Inovasi PLTMH</h3>
              <h4><i><span>Pembangkit Listrik Tenaga Mikro Hidro</span></i></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Inovasi untuk daerah terisolir</li>
                <li><i class="ion-android-checkmark-circle"></i> Sebagai sumber energi listrik</li>
                <li><i class="ion-android-checkmark-circle"></i> Sarana penyeimbang SDA</li>
                <li><i class="ion-android-checkmark-circle"></i> Pengembangan daerah jarang tersentuh pembangunan</li>


              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h3>Inovasi Return BUMDes</h3>
              <h4><span> Bidang Kewirausahaan</span></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Pengembang Wirausaha Desa</li>
                <li><i class="ion-android-checkmark-circle"></i> Pencipta Lapangan kerja Baru</li>
                <li><i class="ion-android-checkmark-circle"></i> Wadah pengembang cipta inovasi</li>
                <li><i class="ion-android-checkmark-circle"></i> Mendongkrak Perekonomian Desa</li>
                <li><i class="ion-android-checkmark-circle"></i> Menjadikan Cipta Desa Wisata</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInRight">
              <h3>Inovasi BPJS Desa Mandiri</h3>
              <h4><span> Bidang Kesehatan</span></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Pemerataan Jaminan Kesehatan</li>
                <li><i class="ion-android-checkmark-circle"></i> Pemerataan Fasilitas Kesehatan</li>
                <li><i class="ion-android-checkmark-circle"></i> Sarana Pembantu Polindes</li>
                <li><i class="ion-android-checkmark-circle"></i> Sarana pertolongan Pertama</li>
                <li><i class="ion-android-checkmark-circle"></i> Jaminan mayarakat kurang mampu </li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #pricing -->


    <!--==========================
      Frequently Asked Questions Section
    ============================-->


    <!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Perangkat Desa</h3>
          <span class="section-divider"></span>
          <p class="section-description">Struktur Pemerintahan Desa Yosomulyo</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kades.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Kepala Desa</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/sekretaris.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Sekretaris Desa</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur1.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>KASI PEMERINTAHAN</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur4.jpeg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>KAUR KEUANGAN</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member">
            <div class="pic"><img src="<?php echo base_url(''); ?>/vendor2/img/kaur3.jpg" alt=""></div>
            <h4>Walter White</h4>
            <span>KAUR PEMBANGUNAN</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Galeri</h3>
          <span class="section-divider"></span>
          <p class="section-description">Dokumentasi Kegiatan</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam7.jpeg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam7.jpeg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam2.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam2.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam3.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam3.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam4.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam4.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam5.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam5.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?php echo base_url(''); ?>/vendor2/img/gam6.jpg" class="gallery-popup">
                <img src="<?php echo base_url(''); ?>/vendor2/img/gam6.jpg" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Yosomulyo, Gambiran Banyuwangi</h3>
              <p>Informasi dan Kontak.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Yosomulyo, Kec. Gambiran, Kab. Banyuwangi<br>Jawa Timur, 68486</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>Si_Desagambiran@gmail.go.id</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>Kantor: +0331 55 55488 86</p>
              </div>
              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>HP: +62 813 3322 277 </p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            Copyright &copy; 2019<strong>WebDesa</strong>. Kabupaten Banyuwangi
          </div </div> </div> <div class="col-lg-6">
          <nav class="footer-links text-lg-right">
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url(''); ?>/vendor2/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/easing/easing.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/wow/wow.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/superfish/hoverIntent.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/superfish/superfish.min.js"></script>
  <script src="<?php echo base_url(''); ?>/vendor2/lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url(''); ?>/vendor2/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url(''); ?>/vendor2/js/main.js"></script>

</body>

</html>