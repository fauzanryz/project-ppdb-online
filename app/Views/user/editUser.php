<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
        <div class="col p-0 mb-3" >
            <h1>Edit Data User</h1>
        </div>
		<div class="card card-primary">
			<div class="card-body">
				<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

				<?php if (!empty(session()->getFlashdata('errors'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show " role="alert">
						<?= session()->getFlashdata('errors'); ?>
					</div>
				<?php endif; ?>

				<form method="POST" action="<?= base_url('/kelolaUser/updateUser/' . $user['idUser']); ?>" enctype="multipart/form-data">
					<?= csrf_field(); ?>

					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Email </label>
							<input type="text" name="email" class="form-control" autocomplete="off" value="<?= $user['email']; ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Username </label>
							<input type="text" name="username" class="form-control" min=0 autocomplete="off" value="<?= $user['username']; ?>">
						</div>
					</div>

                    <div class="form-row">
						<div class="col">
							<label class="col-form-label">Password </label>
							<input type="password" name="password" class="form-control" autocomplete="off">
						</div>
					</div>

                    <div class="form-group mt-2 mb-3">
                        <label for="exampleInputFile">Foto</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="foto" onchange="updateFileName()">
                                <label class="custom-file-label" for="exampleInputFile"><?= $user['foto'] ?? 'Pilih file'; ?></label>
                            </div>
                        </div>
                    </div>

					<button type="submit" class="btn btn-primary">Simpan Data</button>
					<a href="<?= base_url('/kelolaUser') ?>" class="btn btn-danger">Kembali</a>

				</form>
			</div>
		</div>
	</div>
</section>

<script>
    // Function to update the file input label with the selected file's name
    function updateFileName() {
        var input = document.getElementById('exampleInputFile');
        var label = document.querySelector('.custom-file-label');
        var fileName = input.files[0] ? input.files[0].name : "Pilih file";
        label.textContent = fileName;
    }

    // Execute the function on page load
    document.addEventListener('DOMContentLoaded', function() {
        updateFileName();
    });

    // Execute the function on input file change (additional)
    document.getElementById('exampleInputFile').addEventListener('change', updateFileName);
</script>

<?= $this->endSection(); ?>