<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

<section class="content-header p-0 m-0" style="display: flex; justify-content: space-between; align-items: center;">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Data Profil</h1>
      </div>

    </div><!-- /.container-fluid -->
</section>

<div class="card mt-4">
  <div class="card-body">
    <!-- Content -->

    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif ?>

    <?php if (!empty($data)) : ?>
      <form action="/profil/proses_ubah" method="POST">
        <div class="form-row">
          <div class="form-group col-6">
            <label>Alur Pendaftaran</label>
            <input type="hidden" value="<?= $data[0]['idProfil'] ?>" name="idProfil">
            <textarea class="form-control" rows="8" placeholder="Enter ..." name="alur_pendaftaran" readonly><?= $data[0]['alur_pendaftaran'] ?></textarea>
          </div>
          <div class="form-group col-6">
            <label>Syarat Pendaftaran</label>
            <textarea class="form-control" rows="8" placeholder="Enter ..." name="syarat_pendaftaran" readonly><?= $data[0]['syarat_pendaftaran'] ?></textarea>
          </div>
          <div class="form-group col-6">
            <label>Visi</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="visi" readonly><?= $data[0]['visi'] ?></textarea>
          </div>
          <div class="form-group col-6">
            <label>Misi</label>
            <textarea class="form-control" rows="3" placeholder="Enter ..." name="misi" readonly><?= $data[0]['misi'] ?></textarea>
          </div>
        </div>
        <?php if (session()->get('level') == 1) : ?>
          <a href="<?= base_url('profil/ubahprofil/' . $data[0]['idProfil']); ?>" class="btn btn-warning" style="color:white;"><i class="fas fa-pen-alt" style="color: #ffffff;"></i> Ubah Data</a>

        <?php endif; ?>
      </form>
    <?php endif; ?>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

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