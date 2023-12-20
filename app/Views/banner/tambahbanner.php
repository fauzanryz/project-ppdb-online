<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>
<div class="card card-primary">
	<div class="card-body">
		<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

		<?php if (!empty(session()->getFlashdata('errors'))) : ?>
			<div class="alert alert-danger alert-dismissible fade show " role="alert">
				<?= session()->getFlashdata('errors'); ?>
			</div>
		<?php endif; ?>

		<form method="POST" action="<?= base_url('banner/proses_tambah'); ?>" enctype="multipart/form-data">
			<?= csrf_field(); ?>

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
			<a href="<?= base_url('') ?>" class="btn btn-danger">Kembali</a>

		</form>
	</div>
</div>
</div>
</section>


<?= $this->endSection(); ?>