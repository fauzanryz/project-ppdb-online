<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

<section class="content-header p-0 m-0 mt-3" style="display: flex; justify-content: space-between; align-items: center;">
  <div class="container-fluid">

    <?php if (session()->get('level') == 1) { ?>
      <div class="row">
        <div class="col">
          <h1>Dashboard</h1><br>
        </div>
      </div><!-- /.container-fluid -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-copy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendaftar Masuk</span>
              <span class="info-box-number">
                <?= $countPendaftar; ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-solid fa-user-tie"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lolos Seleksi</span>
              <span class="info-box-number">
                <?= $countDiterima; ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-solid fa-mars"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendaftar Laki-laki</span>
              <span class="info-box-number">
                <?= $countPendaftarLakiLaki; ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-solid fa-venus" style="color: #ffffff;"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pendaftar Perempuan</span>
              <span class="info-box-number">
                <?= $countPendaftarPerempuan; ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


      </div>
      <!-- /.row -->

      <br>
      <div class="col p-0 mb-3">
        <h1>Data Pendaftar</h1>
      </div>

      <div class="card">
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped table-responsive-md table-sm">
            <thead style="text-align: center;">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody style="text-align: center;">
              <?php $no = 1 ?>
              <?php foreach ($pendaftarById as $dftr) : ?>
                <tr>
                  <th><?= $no++; ?></th>
                  <td><?= $dftr['nama']; ?></td>
                  <td><?= $dftr['jenisKel']; ?></td>
                  <td><?= $dftr['tempatLahir']; ?></td>
                  <td><?= $dftr['tanggalLahir']; ?></td>
                  <td><?= $dftr['status_daftar']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


    <?php } elseif (session()->get('level') == 2) { ?>

      <?php if ($status_pendaftar == "belum_mendaftar") : ?>
        <div class="col-md-6">
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="card  text-center">
                <div class="card-body">
                  <div class="col-auto"></div>
                  <div class="text-center">
                    <img src="<?= base_url('assets/exclamation.png') ?>" class="img-fluid rounded-circle mb-2 " style="width : 85px">
                  </div>
                  <p class="card-text"> Jangan lupa isi data diri Anda!</p>
                </div>
                <div class="card-footer">
                  <marquee style="margin-bottom:-5px;">Lengkapi data diri Anda untuk melanjutkan proses pendaftaran!</marquee>
                </div>
                <a class="btn btn-primary btn-sm " href="<?= base_url('biodata') ?>">
                  Lengkapi Data
                </a>
              </div>
            </div><!--End llustrations-->
          </div>
        </div>

      <?php elseif ($status_pendaftar == "sudah_final") : ?>
        <div class="col-md-6">
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Pengunguman Hasil Seleksi</h6>
            </div>
            <div class="card-body">
              <div class="card  text-center">
                <div class="card-body">
                  <div class="col-auto"></div>
                  <div class="text-center">
                    <img src="<?= base_url('assets/notif.png') ?>" class="img-fluid rounded-circle mb-1" style="width : 150px">
                  </div>
                  <p class="card-text"> Data Sudah Terfinalisasi.</p>
                </div>
                <div class="card-footer">
                  <marquee style="margin-bottom:-5px;">Tunggu Informasi Selanjutnya!</marquee>
                </div>
              </div>
            </div><!--End llustrations-->
          </div>
        </div>

      <?php elseif ($status_pendaftar == "Diterima") : ?>
        <div class="col-md-6">
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Pengunguman Hasil Seleksi</h6>
            </div>
            <div class="card-body">
              <div class="card  text-center">
                <div class="card-body">
                  <div class="col-auto"></div>
                  <div class="text-center">
                    <img src="<?= base_url('assets/ceklis.png') ?>" class="img-fluid rounded-circle" style="width : 102px">
                  </div>
                  <p class="card-text"> Selamat Anda Dinyatakan Lolos.</p>
                </div>
                <div class="card-footer">
                  <marquee style="margin-bottom:-5px;">Pada MTsN 4 Tanah Laut</marquee>
                </div>
              </div>
            </div><!--End llustrations-->
          </div>
        </div>

      <?php elseif ($status_pendaftar == "Ditolak") : ?>
        <div class="col-md-6">
          <!-- Illustrations -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Pengunguman Hasil Seleksi</h6>
            </div>
            <div class="card-body">
              <div class="card  text-center">
                <div class="card-body">
                  <div class="col-auto"></div>
                  <div class="text-center">
                    <img src="<?= base_url('assets/silang.png') ?>" class="img-fluid rounded-circle mb-2" style="width : 80px">
                  </div>
                  <p class="card-text"> Maaf Anda Dinyatakan Tidak Lolos.</p>
                </div>
                <div class="card-footer">
                  <marquee style="margin-bottom:-5px;">Pada MTsN 4 Tanah Laut</marquee>
                </div>
              </div>
            </div><!--End llustrations-->
          </div>
        </div>
      <?php endif; ?>

    <?php } ?>

</section>
</div><!-- /.col -->

</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- Default to the left -->
  <strong>Copyright &copy; 2023 MTsN 4 Tanah Laut.</strong>
</footer>
</div>
<!-- ./wrapper -->

<?= $this->endSection('content') ?>