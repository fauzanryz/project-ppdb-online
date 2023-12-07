<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
        <div class="col p-0 mb-3" >
            <h1>Tambah Data Pendaftar</h1>
        </div>
		<div class="card card-primary">
			<div class="card-body">
				<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

				<?php if (!empty(session()->getFlashdata('errors'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show " role="alert">
						<?= session()->getFlashdata('errors'); ?>
					</div>
				<?php endif; ?>

				<form method="POST" action="<?= base_url('/pendaftarMasuk/tambahPendaftar'); ?>" enctype="multipart/form-data">
					<?= csrf_field(); ?>

					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Nama Lengkap</label>
							<input type="text" name="nama" class="form-control" autocomplete="off" value="<?= old('nama'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Jenis Kelamin </label>
							<input type="text" name="jenisKel" class="form-control" min=0 autocomplete="off" value="<?= old('jenisKel'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Tempat Lahir</label>
							<input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= old('tempatLahir'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Tanggal Lahir </label>
							<input type="text" name="tanggalLahir" class="form-control" min=0 autocomplete="off" value="<?= old('tanggalLahir'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">NISN</label>
							<input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= old('nisn'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">NIK </label>
							<input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= old('nik'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Anak Ke</label>
							<input type="text" name="anakKe" class="form-control" autocomplete="off" value="<?= old('anakKe'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Jumlah Saudara </label>
							<input type="text" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= old('jumlahSaudara'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Alamat </label>
							<input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= old('alamat'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">No Telepon</label>
							<input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= old('noTelp'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Sekolah Asal</label>
							<input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= old('sekolahAsal'); ?>">
						</div>

					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Nama Ayah</label>
							<input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= old('namaAyah'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Nama Ibu </label>
							<input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= old('namaIbu'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Pekerjaan Ayah</label>
							<input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= old('pekerjaanAyah'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Pekerjaan Ibu </label>
							<input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= old('pekerjaanIbu'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">NIK Ayah</label>
							<input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= old('nikAyah'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">NIK Ibu </label>
							<input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= old('nikIbu'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Penghasilan Ortu</label>
							<input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= old('penghasilanOrtu'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Agama Ortu </label>
							<input type="text" name="agamaOrtu" class="form-control" min=0 autocomplete="off" value="<?= old('agamaOrtu'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Alamat Ortu</label>
							<input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= old('alamatOrtu'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Pendidikan </label>
							<input type="text" name="pendidikan" class="form-control" min=0 autocomplete="off" value="<?= old('pendidikan'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Nama Wali</label>
							<input type="text" name="namaWali" class="form-control" autocomplete="off" value="<?= old('namaWali'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Pekerjaan Wali </label>
							<input type="text" name="pekerjaanWali" class="form-control" min=0 autocomplete="off" value="<?= old('pekerjaanWali'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Agama Wali</label>
							<input type="text" name="agamaWali" class="form-control" autocomplete="off" value="<?= old('agamaWali'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Alamat Wali </label>
							<input type="text" name="alamatWali" class="form-control" min=0 autocomplete="off" value="<?= old('alamatWali'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Siswa Pindahan</label>
							<input type="text" name="siswaPindahan" class="form-control" autocomplete="off" value="<?= old('siswaPindahan'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Surat Pindah </label>
							<input type="text" name="suratPindah" class="form-control" min=0 autocomplete="off" value="<?= old('suratPindah'); ?>">
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<label class="col-form-label">Diterima Dikelas</label>
							<input type="text" name="diterimaDiKelas" class="form-control" autocomplete="off" value="<?= old('diterimaDiKelas'); ?>">
						</div>

						<div class="col">
							<label class="col-form-label">Status </label>
							<input type="text" name="status_daftar" class="form-control" min=0 autocomplete="off" value="<?= old('status_daftar'); ?>">
						</div>
					</div>

                    <div style="display: flex; justify-content: space-between; align-items: center;">
					<div class="form-group mt-2 mb-3 col-6" >
						<label for="exampleInputFile">Pas Foto</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="pasfoto" onchange="updateFileName()">
								<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
							</div>
						</div>
					</div>
					<div class="form-group mt-2 mb-3 col-6">
						<label for="exampleInputFile">Akta Kelahiran</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="aktaKelahiran" onchange="updateFileName()">
								<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
							</div>
						</div>
					</div>
                    </div>
                    
                    <div style="display: flex; justify-content: space-between; align-items: center;">
					<div class="form-group mt-2 mb-3 col-6">
						<label for="exampleInputFile">Kartu Keluarga</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="fotoKK" onchange="updateFileName()">
								<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
							</div>
						</div>
					</div>
					<div class="form-group mt-2 mb-3 col-6">
						<label for="exampleInputFile">Ijazah SD</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile" name="ijazahSD" onchange="updateFileName()">
								<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
							</div>
						</div>
					</div>
                    </div>

					<button type="submit" class="btn btn-primary">Simpan Data</button>
					<a href="<?= base_url('/pendaftarMasuk') ?>" class="btn btn-danger">Kembali</a>

				</form>
			</div>
		</div>
	</div>
</section>

<script>
	function updateFileName() {
        var input = document.getElementById('exampleInputFile');
        var label = document.querySelector('.custom-file-label');
        var fileName = input.files[0] ? input.files[0].name : "Pilih file";
        label.textContent = fileName;
    }

    // Execute the function on input file change
    document.getElementById('exampleInputFile').addEventListener('change', updateFileName);
</script>

<?= $this->endSection(); ?>