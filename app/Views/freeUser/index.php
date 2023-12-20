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
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?= base_url(); ?>" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
              <a href="#kontak" class="nav-link">Kontak</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Pendaftaran</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="#" class="dropdown-item">Mendaftar </a></li>
                <li><a href="#" class="dropdown-item">Cara Mendaftar</a></li>

                <li class="dropdown-divider"></li>

                <!-- Level two dropdown-->
                <li class="dropdown-submenu dropdown-hover">
                  <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                  <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                    <li>
                      <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                    </li>

                    <!-- Level three dropdown-->
                    <li class="dropdown-submenu">
                      <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                      <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                        <li><a href="#" class="dropdown-item">3rd level</a></li>
                      </ul>
                    </li>
                    <!-- End Level three -->

                    <li><a href="#" class="dropdown-item">level 2</a></li>
                    <li><a href="#" class="dropdown-item">level 2</a></li>
                  </ul>
                </li>
                <!-- End Level two -->
              </ul>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Cari..." aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login') ?>">
              Masuk
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <div class="content">
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
                    <img class="d-block w-100" height="500px" src="file/<?= $data[0]['gambar'] ?>" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" height="500px" src="file/<?= $data[0]['gambar'] ?>" alt="Third slide">
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
          <div class="col-12 bg-visimisi">
            <br>

            <div class="col-lg-12">
              <div class="card" style="background-color: #f0f0f0;">
                <div class="card-body">
                  <h5 class="col-lg-12">Visi</h5>

                  <p class="card-text">
                    <?= $profil['visi'] ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body" style="background-color: #f0f0f0;">
                  <h5 class="col-lg-12">Misi</h5>

                  <p class="card-text" style="white-space: pre-line;">
                    <?= $profil['misi'] ?>
                  </p>
                </div>
              </div>
            </div>

            <!--  -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body" style="background-color: #f0f0f0;">
                  <h5 class="col-lg-12">Alur Pendaftran</h5>

                  <p class="card-text" style="white-space: pre-line;">
                    <?= $profil['alur_pendaftaran'] ?>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-body" style="background-color: #f0f0f0;">
                  <h5 class="col-lg-12">Syarat Pendaftaran</h5>

                  <p class="card-text" style="white-space: pre-line;">
                    <?= $profil['syarat_pendaftaran'] ?>
                  </p>
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

  <div class="bg-kontakkami" id="kontak">
    <p class="h3 text-center"> Kontak Kami</p>
    <p class="h6 text-center"> JL. Matah II Karang Taruna Pelaihari - Tanah Laut - Kalimantan Selatan</p>
    <p class="h6 text-center"> 085246474785 </p>
    <p class="h6 text-center"> info@mtsn4tala.sch.id</p>
    <p class="h6 text-center"> www.mtsn4tala.sch.id</p>
  </div>

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
    <strong> &copy; MTsN 4 Tanah Laut.</strong>
  </footer>
  </div>
  <!-- ./wrapper -->

  <?= $this->endSection() ?>