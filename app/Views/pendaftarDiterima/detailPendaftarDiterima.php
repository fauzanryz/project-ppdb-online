<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="col p-0 mb-3">
            <h1>Detail Pendaftar</h1>
        </div>
        <div class="card card-primary">
            <div class="card-body">
                <div class="swal" data-swal="<?= session()->getFlashdata('pesan'); ?>"></div>

                <?php if (!empty(session()->getFlashdata('errors'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show " role="alert">
                        <?= session()->getFlashdata('errors'); ?>
                    </div>
                <?php endif; ?>
                <?php $dftr = $pendaftar; ?>

                <form method="POST" action="<?= base_url('/pendaftarDiterima'); ?>" enctype="multipart/form-data">
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
                                <input type="text" name="nama" class="form-control" autocomplete="off" value="<?= $dftr['nama']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jenis Kelamin </label>
                                <span style="color: red;">*</span>
                                <select name="jenisKel" id="inputState" class="form-control" disabled>
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
                                <input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= $dftr['tempatLahir']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Tanggal Lahir </label>
                                <span style="color: red;">*</span>
                                <input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" readonly min="<?= date('Y-m-d', strtotime('-15 years')); ?>" value="<?= $dftr['tanggalLahir']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NISN</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= $dftr['nisn']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nik']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Anak Ke </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="anakKe" class="form-control" autocomplete="off" value="<?= $dftr['anakKe']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jumlah Saudara </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= $dftr['jumlahSaudara']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= $dftr['alamat']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No Telepon</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= $dftr['noTelp']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Sekolah Asal</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= $dftr['sekolahAsal']; ?>" readonly>
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
                                <input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= $dftr['namaAyah']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Nama Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['namaIbu']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= $dftr['pekerjaanAyah']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanIbu']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NIK Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= $dftr['nikAyah']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nikIbu']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Penghasilan Orang Tua (contoh: 1000000)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= $dftr['penghasilanOrtu']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Agama Orang Tua </label>
                                <span style="color: red;">*</span>
                                <select name="agamaOrtu" id="inputState" class="form-control" disabled>
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
                                <label class="col-form-label">Alamat Orang Tua </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= $dftr['alamatOrtu']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pendidikan </label>
                                <span style="color: red;">*</span>
                                <select name="pendidikan" id="inputState" class="form-control" disabled>
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
                                <input type="text" name="namaWali" class="form-control" autocomplete="off" value="<?= $dftr['namaWali']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Wali </label>
                                <input type="text" name="pekerjaanWali" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanWali']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Agama Wali</label>
                                <input type="text" name="agamaWali" class="form-control" autocomplete="off" value="<?= $dftr['agamaWali']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Alamat Wali </label>
                                <input type="text" name="alamatWali" class="form-control" min=0 autocomplete="off" value="<?= $dftr['alamatWali']; ?>" readonly>
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
                                <input type="text" name="siswaPindahan" class="form-control" autocomplete="off" value="<?= $dftr['siswaPindahan']; ?>" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No. Surat Pindah </label>
                                <input type="text" name="suratPindah" class="form-control" min=0 autocomplete="off" value="<?= $dftr['suratPindah']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Diterima Dikelas</label>
                                <input type="text" name="diterimaDiKelas" class="form-control" autocomplete="off" value="<?= $dftr['diterimaDiKelas']; ?>" readonly>
                            </div>
                            <div class="col">
                                <label class="col-form-label">Status </label>
                                <span style="color: red;">*</span>
                                <select name="status_daftar" id="inputState" class="form-control" disabled>
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
                                    <input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')" disabled>
                                    <label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"><?= $dftr['pasfoto']; ?></label>
                                    <a id="downloadPasFoto" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')" disabled>
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
                                    <input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')" disabled>
                                    <label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"><?= $dftr['KK']; ?></label>
                                    <a id="downloadKK" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')" disabled>
                                    <label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"><?= $dftr['ijazahSD']; ?></label>
                                    <a id="downloadIjazah" class="btn btn-primary"><i class="fas fa-solid fa-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url('/pendaftarDitolak') ?>" type="button" class="btn btn-danger">Kembali</a>
                    </div>
                    <!-- End Form Section -->

                </form>
            </div>
        </div>
    </div>
</section>

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