<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="col p-0 mb-3" style="display: flex; justify-content: space-between; align-items: center;">
            <h1>Ubah Data Pendaftar</h1>
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
                <?php $dftr = $pendaftar; ?>


                <form method="POST" action="<?= base_url('/pendaftarMasuk/updatePendaftar/' . $dftr['idPendaftar']); ?>" enctype="multipart/form-data">
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
                                <input type="text" name="nama" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" autocomplete="off" value="<?= $dftr['nama']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jenis Kelamin </label>
                                <span style="color: red;">*</span>
                                <select name="jenisKel" id="inputState" class="form-control" required>
                                    <option disabled selected>--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-laki" <?= ($dftr['jenisKel'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= ($dftr['jenisKel'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Tempat Lahir</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="tempatLahir" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" autocomplete="off" value="<?= $dftr['tempatLahir']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Tanggal Lahir </label>
                                <span style="color: red;">*</span>
                                <input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" required min="<?= date('Y-m-d', strtotime('-15 years')); ?>" value="<?= $dftr['tanggalLahir']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NISN</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nisn" pattern="[0-9\s]*" maxlength="50" class="form-control" autocomplete="off" value="<?= $dftr['nisn']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nik" pattern="[0-9\s]*" maxlength="50" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nik']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Anak Ke </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="anakKe" max="99" class="form-control" autocomplete="off" value="<?= $dftr['anakKe']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jumlah Saudara </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="jumlahSaudara" max="99" class="form-control" min=0 autocomplete="off" value="<?= $dftr['jumlahSaudara']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamat" pattern="[A-Za-z0-9\s.,/'()-]+" maxlength="150" class="form-control" autocomplete="off" value="<?= $dftr['alamat']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No Telepon</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="noTelp" pattern="[0-9+\s]+" maxlength="20" class="form-control" min=0 autocomplete="off" value="<?= $dftr['noTelp']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Sekolah Asal</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="sekolahAsal" pattern="[A-Za-z0-9\s]+" maxlength="50" class="form-control" autocomplete="off" value="<?= $dftr['sekolahAsal']; ?>" required>
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
                                <input type="text" name="namaAyah" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" autocomplete="off" value="<?= $dftr['namaAyah']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Nama Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="namaIbu" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" min=0 autocomplete="off" value="<?= $dftr['namaIbu']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanAyah" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" autocomplete="off" value="<?= $dftr['pekerjaanAyah']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanIbu" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanIbu']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NIK Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikAyah" pattern="[0-9\s]*" maxlength="50" class="form-control" autocomplete="off" value="<?= $dftr['nikAyah']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikIbu" pattern="[0-9\s]*" maxlength="50" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nikIbu']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Penghasilan Orang Tua (contoh: 1000000)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="penghasilanOrtu" pattern="[0-9]+" class="form-control" autocomplete="off" value="<?= $dftr['penghasilanOrtu']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Agama Orang Tua </label>
                                <span style="color: red;">*</span>
                                <select name="agamaOrtu" id="inputState" class="form-control" required>
                                    <option disabled selected>--Pilih Agama--</option>
                                    <option value="Islam" <?= ($dftr['agamaOrtu'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= ($dftr['agamaOrtu'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                    <option value="Katolik" <?= ($dftr['agamaOrtu'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                    <option value="Hindu" <?= ($dftr['agamaOrtu'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                    <option value="Buddha" <?= ($dftr['agamaOrtu'] == 'Budha') ? 'selected' : ''; ?>>Buddha</option>
                                    <option value="Konghucu" <?= ($dftr['agamaOrtu'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat Orang Tua</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamatOrtu" pattern="[A-Za-z0-9\s.,/'()-]+" maxlength="150" class="form-control" autocomplete="off" value="<?= $dftr['alamatOrtu']; ?>" required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pendidikan </label>
                                <span style="color: red;">*</span>
                                <select name="pendidikan" id="inputState" class="form-control" required>
                                    <option disabled selected>--Pilih Pendidikan--</option>
                                    <option value="SD/MI" <?= ($dftr['pendidikan'] == 'SD/MI') ? 'selected' : ''; ?>>SD/MI</option>
                                    <option value="SMP/MTS" <?= ($dftr['pendidikan'] == 'SMP/MTS') ? 'selected' : ''; ?>>SMP/MTS</option>
                                    <option value="SMA/SMK" <?= ($dftr['pendidikan'] == 'SMA/SMK') ? 'selected' : ''; ?>>SMA/SMK</option>
                                    <option value="D1" <?= ($dftr['pendidikan'] == 'D1') ? 'selected' : ''; ?>>D1</option>
                                    <option value="D2" <?= ($dftr['pendidikan'] == 'D2') ? 'selected' : ''; ?>>D2</option>
                                    <option value="D3" <?= ($dftr['pendidikan'] == 'D3') ? 'selected' : ''; ?>>D3</option>
                                    <option value="D4/S1" <?= ($dftr['pendidikan'] == 'D4/S1') ? 'selected' : ''; ?>>D4/S1</option>
                                    <option value="S2" <?= ($dftr['pendidikan'] == 'S2') ? 'selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= ($dftr['pendidikan'] == 'S3') ? 'selected' : ''; ?>>S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Nama Wali</label>
                                <input type="text" name="namaWali" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" autocomplete="off" value="<?= $dftr['namaWali']; ?>">
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Wali </label>
                                <input type="text" name="pekerjaanWali" pattern="[A-Za-z\s]+" maxlength="100" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanWali']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Agama Wali</label>
                                <select name="agamaWali" id="inputState" class="form-control">
                                    <option disabled selected>--Pilih Agama--</option>
                                    <option value="Islam" <?= ($dftr['agamaWali'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= ($dftr['agamaWali'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                    <option value="Katolik" <?= ($dftr['agamaWali'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                    <option value="Hindu" <?= ($dftr['agamaWali'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                    <option value="Buddha" <?= ($dftr['agamaWali'] == 'Budha') ? 'selected' : ''; ?>>Buddha</option>
                                    <option value="Konghucu" <?= ($dftr['agamaWali'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                </select>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Alamat Wali </label>
                                <input type="text" name="alamatWali" pattern="[A-Za-z0-9\s.,/'()-]+" maxlength="150" class="form-control" min=0 autocomplete="off" value="<?= $dftr['alamatWali']; ?>">
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
                                <input type="text" name="siswaPindahan" pattern="[A-Za-z0-9\s]+" maxlength="50" class="form-control" autocomplete="off" value="<?= $dftr['siswaPindahan']; ?>">
                            </div>

                            <div class="col">
                                <label class="col-form-label">No. Surat Pindah </label>
                                <input type="text" name="suratPindah" pattern="[A-Za-z0-9\s.,/'()-]+" maxlength="50" class="form-control" min=0 autocomplete="off" value="<?= $dftr['suratPindah']; ?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Diterima Dikelas</label>
                                <input type="text" name="diterimaDiKelas" pattern="[A-Za-z0-9\s.,/'()-]+" maxlength="20" class="form-control" autocomplete="off" value="<?= $dftr['diterimaDiKelas']; ?>">
                            </div>
                            <div class="col">
                                <label class="col-form-label">Status </label>
                                <span style="color: red;">*</span>
                                <select name="status_daftar" id="inputState" class="form-control" required>
                                    <option disabled selected>--Pilih Status--</option>
                                    <option value="Finalisasi" <?= ($dftr['status_daftar'] == 'Finalisasi') ? 'selected' : ''; ?>>Finalisasi</option>
                                    <option value="Diterima" <?= ($dftr['status_daftar'] == 'Diterima') ? 'selected' : ''; ?>>Diterima</option>
                                    <option value="Ditolak" <?= ($dftr['status_daftar'] == 'Ditolak') ? 'selected' : ''; ?>>Ditolak</option>
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
                                    <input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')">
                                    <label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"><?= $dftr['pasfoto']; ?></label>
                                    <a id="downloadPasFoto" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')">
                                    <label class="custom-file-label" id="fileLabelAkta" for="exampleInputFileAkta"><?= $dftr['aktaKelahiran']; ?></label>
                                    <a id="downloadAkta" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Kartu Keluarga (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')">
                                    <label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"><?= $dftr['KK']; ?></label>
                                    <a id="downloadKK" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')">
                                    <label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"><?= $dftr['ijazahSD']; ?></label>
                                    <a id="downloadIjazah" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('/pendaftarMasuk') ?>" type="button" class="btn btn-danger mt-3">Kembali</a>
                        <button type="submit" class="btn btn-primary mt-3">Simpan Data</button>
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
    // Function to trigger file download
    function downloadFile(folderName, fileName) {
        var fileUrl = '<?= base_url('upload/') ?>' + folderName + '/' + fileName;
        window.open(fileUrl, '_self');
    }

    // Add click event listeners to the download buttons
    document.getElementById('downloadPasFoto').addEventListener('click', function() {
        downloadFile('pasfoto', '<?= $dftr['pasfoto']; ?>');
    });

    document.getElementById('downloadAkta').addEventListener('click', function() {
        downloadFile('akta_kelahiran', '<?= $dftr['aktaKelahiran']; ?>');
    });

    document.getElementById('downloadKK').addEventListener('click', function() {
        downloadFile('kartu_keluarga', '<?= $dftr['KK']; ?>');
    });

    document.getElementById('downloadIjazah').addEventListener('click', function() {
        downloadFile('ijazah_sd', '<?= $dftr['ijazahSD']; ?>');
    });
</script>


<?= $this->endSection(); ?>