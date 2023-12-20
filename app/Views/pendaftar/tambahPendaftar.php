<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<div class="col p-0 mb-3" style="display: flex; justify-content: space-between; align-items: center;">
			<h1>Tambah Data Pendaftar</h1>
		</div>
		<div class="card card-primary">
			<div class="card-body">
				<div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

				<?php

				if (!empty(session()->getFlashdata('errors'))) : ?>
					<div class="alert alert-danger alert-dismissible fade show " role="alert">
						<?= session()->getFlashdata('errors'); ?>
					</div>
				<?php endif; ?>

				<form method="POST" action="<?= base_url('/pendaftarMasuk/tambahPendaftar'); ?>" enctype="multipart/form-data">
					<?= csrf_field(); ?>
					<!-- Data Calon Siswa -->
					<div class="form-section current" id="section1">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">A. Calon Siswa</h9>
							</div>
							<div class="col- text-right" style="color: red;">
								<h9>*Wajib Diisi</h9>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Nama Lengkap</label>
								<span style="color: red;">*</span>
								<input type="text" name="nama" class="form-control" autocomplete="off" value="<?= old('nama'); ?>" required">
							</div>

							<div class="col">
								<label class="col-form-label">Jenis Kelamin </label>
								<span style="color: red;">*</span>
								<select name="jenisKel" id="inputState" class="form-control" required>
									<option disabled selected>--Pilih Jenis Kelamin--</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Tempat Lahir</label>
								<span style="color: red;">*</span>
								<input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= old('tempatLahir'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Tanggal Lahir </label>
								<span style="color: red;">*</span>
								<input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" required min="<?= date('Y-m-d', strtotime('-15 years')); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">NISN</label>
								<span style="color: red;">*</span>
								<input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= old('nisn'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">NIK </label>
								<span style="color: red;">*</span>
								<input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= old('nik'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Anak Ke </label>
								<span style="color: red;">*</span>
								<input type="number" name="anakKe" class="form-control" autocomplete="off" value="<?= old('anakKe'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Jumlah Saudara </label>
								<span style="color: red;">*</span>
								<input type="number" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= old('jumlahSaudara'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Alamat </label>
								<span style="color: red;">*</span>
								<input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= old('alamat'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">No Telepon</label>
								<span style="color: red;">*</span>
								<input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= old('noTelp'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Sekolah Asal</label>
								<span style="color: red;">*</span>
								<input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= old('sekolahAsal'); ?>" required>
							</div>
						</div>

					</div>
					<!-- End Form Section -->


					<!-- Data Ortu -->
					<div class="form-section mt-4" id="section2">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">B. Orang Tua</h9>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Nama Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= old('namaAyah'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Nama Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= old('namaIbu'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Pekerjaan Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= old('pekerjaanAyah'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Pekerjaan Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= old('pekerjaanIbu'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">NIK Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= old('nikAyah'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">NIK Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= old('nikIbu'); ?>" required>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Penghasilan Orang Tua (contoh: 1000000)</label>
								<span style="color: red;">*</span>
								<input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= old('penghasilanOrtu'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Agama Orang Tua </label>
								<span style="color: red;">*</span>
								<select name="agamaOrtu" id="inputState" class="form-control" required>
									<option disabled selected>--Pilih Agama--</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Katolik">Katolik</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Konghucu">Konghucu</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Alamat Orang Tua </label>
								<span style="color: red;">*</span>
								<input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= old('alamatOrtu'); ?>" required>
							</div>

							<div class="col">
								<label class="col-form-label">Pendidikan </label>
								<span style="color: red;">*</span>
								<select name="pendidikan" id="inputState" class="form-control" required>
									<option disabled selected>--Pilih Pendidikan--</option>
									<option value="SD/MI">SD/MI</option>
									<option value="SMP/MTS">SMP/MTS</option>
									<option value="SMA/SMK">SMA/SMK</option>
									<option value="D1">D1</option>
									<option value="D2">D2</option>
									<option value="D3">D3</option>
									<option value="D4/S1">D4/S1</option>
									<option value="S2">S2</option>
									<option value="S3">S3</option>
								</select>
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
					</div>
					<!-- End Form Section -->


					<!-- Lain-Lain -->
					<div class="form-section mt-4" id="section3">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">C. Lain-lain</h9>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Siswa Pindahan</label>
								<input type="text" name="siswaPindahan" class="form-control" autocomplete="off" value="<?= old('siswaPindahan'); ?>">
							</div>

							<div class="col">
								<label class="col-form-label">No. Surat Pindah </label>
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
								<span style="color: red;">*</span>
								<input type="text" name="status_daftar" class="form-control" min=0 autocomplete="off" value="Finalisasi" readonly>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Akun </label>
								<span style="color: red;">*</span>
								<select name="idUser" id="inputState" class="form-control" required data-section="3">
									<option value="idUser" disabled selected>--Pilih Akun--</option>
									<?php foreach ($user as $usr) : ?>
										<option value="<?= $usr['idUser']; ?>"><?= $usr['email']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
						</div>
					</div>
					<!-- End Form section -->


					<!-- Lampiran -->
					<div class="form-section mt-4" id="section4">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">D. Lampiran</h9>
							</div>
						</div>
						<div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Pas Foto (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')" required>
									<label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"></label>
								</div>
							</div>

							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')" required>
									<label class="custom-file-label" id="fileLabelAkta" for="exampleInputFileAkta"></label>
								</div>
							</div>
						</div>

						<div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Kartu Keluarga (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')" required>
									<label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"></label>
								</div>
							</div>
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')" required>
									<label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"></label>
								</div>
							</div>
						</div>
						<a href="<?= base_url('/pendaftarMasuk') ?>" type="button" class="btn btn-danger">Kembali</a>
						<button type="submit" class="btn btn-primary">Simpan Data</button>
					</div>
					<!-- End Form Section -->

				</form>
			</div>
		</div>
	</div>
</section>

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

<?= $this->endSection(); ?>