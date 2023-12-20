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

		<form method="POST" action="/banner/proses_ubah" method="POST" enctype="multipart/form-data">
			<?= csrf_field(); ?>
			<input type="hidden" value="<?= $data['idBanner'] ?>" name="id">
			<div class="form-group mt-2 mb-3">
				<label for="exampleInputFile">Foto</label>
				<div class="input-group">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="updateFileName()">
						<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
					</div>
				</div>
			</div>

			<button type="submit" class="btn btn-primary">Simpan Data</button>
			<a href="<?= base_url('banner') ?>" class="btn btn-danger">Kembali</a>

		</form>
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