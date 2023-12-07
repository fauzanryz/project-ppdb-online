<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

    <section class="content-header p-0 m-0" style="display: flex; justify-content: space-between; align-items: center;">
        <div class="container-fluid">
            <div class="row">
            <div class="col" >
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
        </div>
        <!-- /.row -->
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