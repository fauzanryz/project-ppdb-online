<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="card">

    <!-- /.card-header -->
    <div class="card-body">

      <form action="<?= base_url('profil/proses_tambah') ?>" method="POST">
        <div class="form-row">
          <!-- textarea -->
          <div class="form-group col-6">
            <label>Alur Pendaftaran</label>
            <textarea class="form-control" name="alur_pendaftaran" rows="8" placeholder="Enter ..." required></textarea>
          </div>
          <div class="form-group col-6">
            <label>Persyaratan</label>
            <textarea class="form-control" name="persyaratan" rows="3" placeholder="Enter ..." required></textarea>
          </div>
          <div class="form-group col-6">
            <label>Visi</label>
            <textarea class="form-control" name="visi" rows="3" placeholder="Enter ..." required></textarea>
          </div>
          <div class="form-group col-6">
            <label>Misi</label>
            <textarea class="form-control" name="misi" rows="3" placeholder="Enter ..." required></textarea>
          </div>
          <div class="form-group col-6">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div><!-- /.container-fluid -->

<?= $this->endSection(); ?>