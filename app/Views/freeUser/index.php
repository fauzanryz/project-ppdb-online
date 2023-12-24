<?= $this->extend('templates/index') ?>
<?= $this->section('content') ?>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white bg-atas">
      <div class="container">
        <a href="<?= base_url(); ?>" class="navbar-brand">
          <img src="<?= base_url(); ?>/assets/logo.png" class="brand-image" style="opacity: .8">
          <span class="brand-text font-weight-light bg-atas"><b>MTsN 4 Tanah Laut</b></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link text-dark">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#visimisi" class="nav-link text-dark">Visi-Misi</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-dark">Pendaftaran</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="<?= base_url('register') ?>" class="dropdown-item text-dark">Mendaftar</a></li>
                <li><a href="#alurpendaftaran" class="dropdown-item text-dark">Alur Pendaftaran</a></li>
                <li><a href="#syaratpendaftaran" class="dropdown-item text-dark">Syarat Pendaftaran</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="<?= base_url('login') ?>">
                Masuk
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color: #00B696;">
      <!-- Main content -->
      <div class="content" style="background-color: #00B696;">
        <div class="container">
          <div class="row">

            <div class="col-sm-12">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" height="500px" src="file/<?= $data[0]['gambar'] ?>" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" height="500px" src="file/<?= $data[1]['gambar'] ?>" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" height="500px" src="file/<?= $data[2]['gambar'] ?>" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            </div>
            <!-- /.col -->

          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <div class="content" style="background-color: #00B696;">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 mt-5 bg-visimisi">
            <br>
            <div class="bg-visimisi" id="visimisi">
              <div class="col-lg-12">
                <div class="card" style="background-color: #f0f0f0;">
                  <div class="card-body">
                    <h5 class="col-lg-12 font-weight-bold">Visi</h5>
                    <p class="card-text m-0 p-0 font-italic" style="white-space: pre-line;">
                      <?= $profil['visi'] ?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="card" style="background-color: #f0f0f0;">
                  <div class="card-body">
                    <h5 class="col-lg-12 font-weight-bold">Misi</h5>
                    <p class="card-text m-0 p-0 font-italic" style="white-space: pre-line;">
                      <?= $profil['misi'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Alur Pendaftaran -->
            <div class="bg-alurpendaftaran" id="alurpendaftaran">
              <div class="col-lg-12">
                <div class="card" style="background-color: #f0f0f0;">
                  <div class="card-body">
                    <h5 class="col-lg-12 font-weight-bold">Alur Pendaftran</h5>
                    <p class="card-text m-0 p-0 font-italic" style="white-space: pre-line;">
                      <?= $profil['alur_pendaftaran'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Syarat Pendaftaran -->
            <div class="bg-syaratpendaftaran" id="syaratpendaftaran">
              <div class="col-lg-12">
                <div class="card" style="background-color: #f0f0f0;">
                  <div class="card-body">
                    <h5 class="col-lg-12 font-weight-bold">Syarat Pendaftaran</h5>
                    <p class="card-text m-0 p-0 font-italic" style="white-space: pre-line;">
                      <?= $profil['syarat_pendaftaran'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>


            <!-- Kontak Kami -->
            <div class="bg-kontakkami" id="kontak">
              <div class="col-lg-12">
                <div class="card" style="background-color: #f0f0f0;">
                  <div class="card-body">
                    <h5 class="col-lg-12 font-weight-bold">Kontak Kami</h5>
                    <p class="card-text">
                    <p class="h6 text-center font-italic" style="font-size: 13px;"> JL. Matah II Karang Taruna Pelaihari - Tanah Laut - Kalimantan Selatan</p>
                    <p class="h6 text-center font-italic" style="font-size: 13px;"> 085246474785 </p>
                    <p class="h6 text-center font-italic" style="font-size: 13px;"> info@mtsn4tala.sch.id</p>
                    <p class="h6 text-center font-italic" style="font-size: 13px;"> www.mtsn4tala.sch.id</p>
                    </p>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer text-center">
    <!-- To the right -->
    <!-- Default to the left -->
    <strong> &copy; MTsN 4 Tanah Laut</strong>
  </footer>
  </div>
  <!-- ./wrapper -->

  <?= $this->endSection() ?>