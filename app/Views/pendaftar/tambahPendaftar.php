<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
	<div class="container-fluid">
		<div class="col p-0 mb-3" style="display: flex; justify-content: space-between; align-items: center;">
			<h1>Tambah Data Pendaftar</h1>
			<span style="color: red;">* Wajib Diisi</span>
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
							<div class="col-lg-1 text-right">
								<h9>1/4</h9>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Nama Lengkap</label>
								<span style="color: red;">*</span>
								<input type="text" name="nama" class="form-control" autocomplete="off" value="<?= old('nama'); ?>" required data-section="1">
							</div>

							<div class="col">
								<label class="col-form-label">Jenis Kelamin </label>
								<span style="color: red;">*</span>
								<select name="jenisKel" id="inputState" class="form-control" required data-section="1">
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
								<input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= old('tempatLahir'); ?>" required data-section="1">
							</div>

							<div class="col">
								<label class="col-form-label">Tanggal Lahir </label>
								<span style="color: red;">*</span>
								<input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" required data-section="1" min="<?= date('Y-m-d', strtotime('-15 years')); ?>" required data-section="1">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">NISN</label>
								<span style="color: red;">*</span>
								<input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= old('nisn'); ?>" required data-section="1">
							</div>

							<div class="col">
								<label class="col-form-label">NIK </label>
								<span style="color: red;">*</span>
								<input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= old('nik'); ?>" required data-section="1">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Anak Ke (Gunakan Angka)</label>
								<span style="color: red;">*</span>
								<input type="text" name="anakKe" class="form-control" autocomplete="off" value="<?= old('anakKe'); ?>" required data-section="1">
							</div>

							<div class="col">
								<label class="col-form-label">Jumlah Saudara (Gunakan Angka)</label>
								<span style="color: red;">*</span>
								<input type="text" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= old('jumlahSaudara'); ?>" required data-section="1">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Alamat </label>
								<span style="color: red;">*</span>
								<input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= old('alamat'); ?>" required data-section="1">
							</div>

							<div class="col">
								<label class="col-form-label">No Telepon</label>
								<span style="color: red;">*</span>
								<input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= old('noTelp'); ?>" required data-section="1">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Sekolah Asal</label>
								<span style="color: red;">*</span>
								<input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= old('sekolahAsal'); ?>" required data-section="1">
							</div>
						</div>
						<button type="button" class="btn btn-success text-white mr-auto mt-3" onclick="nextSection(1)">Berikutnya</button>

					</div>
					<!-- End Form Section -->


					<!-- Data Ortu -->
					<div class="form-section" id="section2">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">B. Orang Tua</h9>
							</div>
							<div class="col-lg-1 text-right">
								<h9>2/4</h9>
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Nama Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= old('namaAyah'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Nama Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= old('namaIbu'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Pekerjaan Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= old('pekerjaanAyah'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Pekerjaan Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= old('pekerjaanIbu'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">NIK Ayah</label>
								<span style="color: red;">*</span>
								<input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= old('nikAyah'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">NIK Ibu </label>
								<span style="color: red;">*</span>
								<input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= old('nikIbu'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Penghasilan Ortu (contoh: 1000000)</label>
								<span style="color: red;">*</span>
								<input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= old('penghasilanOrtu'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Agama Ortu </label>
								<span style="color: red;">*</span>
								<input type="text" name="agamaOrtu" class="form-control" min=0 autocomplete="off" value="<?= old('agamaOrtu'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Alamat Ortu</label>
								<span style="color: red;">*</span>
								<input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= old('alamatOrtu'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Pendidikan </label>
								<span style="color: red;">*</span>
								<input type="text" name="pendidikan" class="form-control" min=0 autocomplete="off" value="<?= old('pendidikan'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Nama Wali</label>
								<span style="color: red;">*</span>
								<input type="text" name="namaWali" class="form-control" autocomplete="off" value="<?= old('namaWali'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Pekerjaan Wali </label>
								<span style="color: red;">*</span>
								<input type="text" name="pekerjaanWali" class="form-control" min=0 autocomplete="off" value="<?= old('pekerjaanWali'); ?>" required data-section="2">
							</div>
						</div>
						<div class="form-row">
							<div class="col">
								<label class="col-form-label">Agama Wali</label>
								<span style="color: red;">*</span>
								<input type="text" name="agamaWali" class="form-control" autocomplete="off" value="<?= old('agamaWali'); ?>" required data-section="2">
							</div>

							<div class="col">
								<label class="col-form-label">Alamat Wali </label>
								<span style="color: red;">*</span>
								<input type="text" name="alamatWali" class="form-control" min=0 autocomplete="off" value="<?= old('alamatWali'); ?>" required data-section="2">
							</div>
						</div>
						<button type="button" class="btn btn-info text-white mt-3" onclick="previousSection(2)">Sebelumnya</button>
						<button type="button" class="btn btn-success text-white mr-auto mt-3" onclick="nextSection(2)">Berikutnya</button>
					</div>
					<!-- End Form Section -->


					<!-- Lain-Lain -->
					<div class="form-section" id="section3">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">C. Lain-lain</h9>
							</div>
							<div class="col-lg-1 text-right">
								<h9>3/4</h9>
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
						<button type="button" class="btn btn-info text-white mt-3" onclick="previousSection(3)">Sebelumnya</button>
						<button type="button" class="btn btn-success text-white mr-auto mt-3" onclick="nextSection(3)">Berikutnya</button>
					</div>
					<!-- End Form section -->


					<!-- Lampiran -->
					<div class="form-section" id="section4">
						<div class="row mb-3">
							<div class="col-lg-11">
								<h9 class="font-weight-bold" style="color: green;">D. Lampiran</h9>
							</div>
							<div class="col-lg-1 text-right">
								<h9>4/4</h9>
							</div>
						</div>
						<div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Pas Foto (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')" required data-section="4">
									<label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"></label>
								</div>
							</div>

							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')" required data-section="4">
									<label class="custom-file-label" id="fileLabelAkta" for="exampleInputFileAkta"></label>
								</div>
							</div>
						</div>

						<div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Kartu Keluarga (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')" required data-section="4">
									<label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"></label>
								</div>
							</div>
							<div class="form-group mt-2 mb-3 col-6">
								<label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
								<span style="color: red;">*</span>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')" required data-section="4">
									<label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"></label>
								</div>
							</div>
						</div>
						<button type="button" class="btn btn-info text-white" onclick="previousSection(4)">Sebelumnya</button>
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

<script>
	function showSection(sectionNumber) {
		// Hide all sections
		document.querySelectorAll('.form-section').forEach(function(section) {
			section.style.display = 'none';
		});

		// Show the selected section
		document.getElementById('section' + sectionNumber).style.display = 'block';
	}

	function nextSection(currentSection) {
		// Move to the next section
		showSection(currentSection + 1);
	}

	function previousSection(currentSection) {
		// Move to the previous section
		showSection(currentSection - 1);
	}

	// Initially, show the first section
	document.addEventListener('DOMContentLoaded', function() {
		showSection(1);
	});
</script>

<script>
	function nextSection(currentSection) {
		// Dapatkan semua input yang diperlukan di bagian saat ini
		const requiredInputs = document.querySelectorAll(`.form-section#section${currentSection} [required]`);

		// Periksa apakah semua input yang diperlukan telah diisi
		const allInputsFilled = Array.from(requiredInputs).every(input => input.value.trim() !== '');

		// Pindah ke bagian berikutnya hanya jika semua input telah diisi
		if (allInputsFilled) {
			showSection(currentSection + 1);
		} else {
			alert('Harap isi semua form yang diperlukan sebelum melanjutkan.');
		}
	}
</script>


<?= $this->endSection(); ?>