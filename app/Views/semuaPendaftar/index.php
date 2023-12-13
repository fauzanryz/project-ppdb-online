<?= $this->extend('templates/dashboardTemplate') ?>
<?= $this->section('content') ?>

<section class="content-header p-0 m-0" style="display: flex; justify-content: space-between; align-items: center;">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1>Data Semua Pendaftar</h1><br>
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

        <table id="example1" class="table table-bordered table-striped table-responsive-md">
            <thead style="text-align: center;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                <?php $no = 1 ?>
                <?php foreach ($pendaftarBaru as $dftr) : ?>
                    <tr>
                        <th><?= $no++; ?></th>
                        <td><?= $dftr['nama']; ?></td>
                        <td><?= $dftr['jenisKel']; ?></td>
                        <td><?= $dftr['tempatLahir']; ?></td>
                        <td><?= $dftr['tanggalLahir']; ?></td>
                        <td><?= $dftr['status_daftar']; ?></td>
                        <td>
                            <?php if (session()->get('level') == 1) : ?>
                                <a href="<?= base_url('/semuaPendaftar/detail' . '/' . $dftr['idPendaftar']) ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>

                                <form action="<?= base_url('/semuaPendaftar/hapus' . '/' . $dftr['idPendaftar']); ?>" class="d-inline" method="POST">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i></button>
                                </form>

                            <?php endif; ?>

                        </td>
                    </tr>
                <?php endforeach; ?>
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