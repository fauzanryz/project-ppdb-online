<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

<section class="content-header p-0 m-0 mb-4" style="display: flex; justify-content: space-between; align-items: center;">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Data Banner</h1>
      </div>
    </div><!-- /.container-fluid -->
</section>

<div class="card">
  <div class="card-body">
    <!-- Content -->

    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>
    <?php endif ?>

    <table id="example1" class="table table-bordered table-striped table-sm">
      <thead style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody style="text-align: center;">
        <?php
        $no = 1;
        foreach ($data as $value) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><img src="/file/<?= $value['gambar'] ?>" width="100px" alt="">

            </td>
            <td>
              <a href="<?= base_url('banner/ubahbanner/' . $value['idBanner']); ?>" class="btn btn-warning"><i class="fas fa-pen-alt" style="color: #ffffff;"></i></a>
              <!-- <a href="<?= base_url('banner/hapusbanner/' . $value['idBanner']); ?>" class="btn btn-danger btn-sm">Hapus</a> -->
            </td>
          </tr>

        <?php } ?>

      </tbody>

    </table>
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