<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MTsN 4 Tanah Laut</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <style>
    .alert-danger ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .alert-danger li {
      margin-left: 1.25em;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="margin-top: 4px; margin-bottom: 6px;">
            <img src="<?= base_url('img/' . session()->get('foto')); ?>" style="width: 35px;" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline"><?= ucfirst(session()->get('username')) ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
              <img src="<?= base_url('img/' . session()->get('foto')); ?>" class="img-circle elevation-2" alt="User Image">

              <p>
                <?= ucfirst(session()->get('username')) ?>
                <small><?= session()->get('email') ?></small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <a href="<?= base_url('logout'); ?>" class="btn btn-default btn-flat float-right">Keluar</a>
            </li>
          </ul>
        </li>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= base_url('/dashboard'); ?>" class="brand-link">
        <img src="<?= base_url(); ?>/assets/logo.png" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">MTsN 4 TALA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->

            <!-- Menu Admin -->
            <?php if (session()->get('level') == 1) { ?>
              <li class="nav-item">
                <a href="<?= base_url('/dashboard'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/kelolaPendaftaran'); ?>" class="nav-link ">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Kelola Pendaftaran
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('/pendaftarMasuk'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pendaftar Masuk</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('/pendaftarDiterima'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pendaftar Diterima</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('/pendaftarDitolak'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pendaftar Ditolak</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('/semuaPendaftar'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Semua Pendaftar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('/kelolaUser'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>Kelola User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="nav-icon fas fa-ellipsis-h"></i>
                  <p>Pengaturan <i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('/banner'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Banner</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('/profil'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Profil</p>
                    </a>
                  </li>
                </ul>
              </li>

              <!-- Ensure the 'Keluar' link is not part of the treeview -->
              <li class="nav-item">
                <a href="<?= base_url('logout'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-arrow-left"></i>
                  <p>Keluar</p>
                </a>
              </li>


              <!-- Menu Siswa -->
            <?php } elseif (session()->get('level') == 2) { ?>
              <li class="nav-item">
                <a href="<?= base_url('dashboard'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('biodata'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-solid fa-address-card"></i>
                  <p>
                    Biodata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('logout'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-arrow-left"></i>
                  <p>
                    Keluar
                  </p>
                </a>
              </li>
            <?php } ?>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-md-12">
              <?= $this->renderSection('content') ?>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/AdminLTE/dist/js/adminlte.min.js"></script>
  <!-- Menghapus notifikasi setelah beberapa detik -->
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      })
    }, 3000);
  </script>

  <!-- DataTables  & Plugins -->
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/jszip/jszip.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url(); ?>/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": true, // Aktifkan opsi perubahan panjang halaman
        "lengthMenu": [10, 25, 50, 75, 100], // Atur opsi panjang halaman yang ingin ditampilkan
        "autoWidth": false,
        "buttons": []
      }).buttons().container().appendTo('#example1_wrapper .col-md-6 m-0 p-0:eq(0)');

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true, // Aktifkan opsi perubahan panjang halaman
        "lengthMenu": [10, 25, 50, 75, 100], // Atur opsi panjang halaman yang ingin ditampilkan
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "dom": '<"top"lf>rt<"bottom"ip><"clear">', // Tentukan posisi elemen-elemen kontrol
      });
    });
  </script>

</body>

</html>