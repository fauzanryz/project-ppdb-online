<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

<section class="content-header p-0 m-0" style="display: flex; justify-content: space-between; align-items: center;">
  <div class="container-fluid">
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
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users" style="color: #ffffff;"></i></span>

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


    <div class="card">
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-responsive-md">
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
            <?php foreach ($pendaftar as $dftr) : ?>
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