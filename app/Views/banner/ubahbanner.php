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
			<input type="hidden" value="<?= $data['idBanner'] ?>" name="idBanner">
			<div class="form-group mt-2 mb-3">
				<label for="exampleInputFile">Gambar</label>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="exampleInputFileGambar" name="foto" onchange="updateFileName('exampleInputFileGambar', 'fileLabelGambar')" required>
					<label class="custom-file-label" id="fileLabelGambar" for="exampleInputFileGambar"><?= $data['gambar']; ?></label>
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

<script>
	function updateFileName(inputId, labelId) {
		var fileInput = document.getElementById(inputId);
		var fileLabel = document.getElementById(labelId);

		// Cek jika file input tidak kosong
		if (fileInput.files.length > 0) {
			// Tampilkan nama file yang dipilih
			fileLabel.innerText = fileInput.files[0].name;
		} else {
			// Jika tidak ada file dipilih, biarkan label kosong
			fileLabel.innerText = '';
		}
	}
</script>

<?= $this->endSection('content') ?>