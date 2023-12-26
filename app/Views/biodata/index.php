<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>


<?php
if ($status_pendaftar == "sudah_mendaftar" || $status_pendaftar == "sudah_final") {
    // Form Berisi
    $nama = $pendaftar['nama'];
    $jenisKel = $pendaftar['jenisKel'];
    $tempatLahir = $pendaftar['tempatLahir'];
    $tanggalLahir = $pendaftar['tanggalLahir'];
    $nisn = $pendaftar['nisn'];
    $nik = $pendaftar['nik'];
    $anakKe = $pendaftar['anakKe'];
    $jumlahSaudara = $pendaftar['jumlahSaudara'];
    $alamat = $pendaftar['alamat'];
    $noTelp = $pendaftar['noTelp'];
    $sekolahAsal = $pendaftar['sekolahAsal'];
    $namaAyah = $pendaftar['namaAyah'];
    $namaIbu = $pendaftar['namaIbu'];
    $pekerjaanAyah = $pendaftar['pekerjaanAyah'];
    $pekerjaanIbu = $pendaftar['pekerjaanIbu'];
    $nikAyah = $pendaftar['nikAyah'];
    $nikIbu = $pendaftar['nikIbu'];
    $penghasilanOrtu = $pendaftar['penghasilanOrtu'];
    $agamaOrtu = $pendaftar['agamaOrtu'];
    $alamatOrtu = $pendaftar['alamatOrtu'];
    $pendidikan = $pendaftar['pendidikan'];
    $namaWali = $pendaftar['namaWali'];
    $pekerjaanWali = $pendaftar['pekerjaanWali'];
    $agamaWali = $pendaftar['agamaWali'];
    $alamatWali = $pendaftar['alamatWali'];
    $siswaPindahan = $pendaftar['siswaPindahan'];
    $suratPindah = $pendaftar['suratPindah'];
    $diterimaDiKelas = $pendaftar['diterimaDiKelas'];
    $status_daftar = $pendaftar['status_daftar'];
    $pasfoto = $pendaftar['pasfoto'];
    $aktaKelahiran = $pendaftar['aktaKelahiran'];
    $KK = $pendaftar['KK'];
    $ijazahSD = $pendaftar['ijazahSD'];
} else {
    // Form Kosong
    $nama = old('nama');
    $jenisKel = old('jenisKel');
    $tempatLahir = old('tempatLahir');
    $tanggalLahir = old('tanggalLahir');
    $nisn = old('nisn');
    $nik = old('nik');
    $anakKe = old('anakKe');
    $jumlahSaudara = old('jumlahSaudara');
    $alamat = old('alamat');
    $noTelp = old('noTelp');
    $sekolahAsal = old('sekolahAsal');
    $namaAyah = old('namaAyah');
    $namaIbu = old('namaIbu');
    $pekerjaanAyah = old('pekerjaanAyah');
    $pekerjaanIbu = old('pekerjaanIbu');
    $nikAyah = old('nikAyah');
    $nikIbu = old('nikIbu');
    $penghasilanOrtu = old('penghasilanOrtu');
    $agamaOrtu = old('agamaOrtu');
    $alamatOrtu = old('alamatOrtu');
    $pendidikan = old('pendidikan');
    $namaWali = old('namaWali');
    $pekerjaanWali = old('pekerjaanWali');
    $agamaWali = old('agamaWali');
    $alamatWali = old('alamatWali');
    $siswaPindahan = old('siswaPindahan');
    $suratPindah = old('suratPindah');
    $diterimaDiKelas = old('diterimaDiKelas');
    $status_daftar = old('status_daftar');
    $pasfoto = old('pasfoto');
    $aktaKelahiran = old('aktaKelahiran');
    $KK = old('KK');
    $ijazahSD = old('ijazahSD');
}
?>

<section class="content">
    <div class="container-fluid">
        <div class="col p-0 mb-3" style="display: flex; justify-content: space-between; align-items: center;">
            <h1>Biodata</h1>
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


                <form method="POST" action="<?= base_url('biodata/tambahBiodata'); ?>" enctype="multipart/form-data">
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
                                <input type="text" name="nama" class="form-control" autocomplete="off" value="<?= $nama; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jenis Kelamin </label>
                                <span style="color: red;">*</span>
                                <select name="jenisKel" id="inputState" class="form-control" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <option disabled selected>--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-laki" <?= ($jenisKel == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= ($jenisKel == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Tempat Lahir</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= $tempatLahir; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?> required>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Tanggal Lahir </label>
                                <span style="color: red;">*</span>
                                <input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" required min="<?= date('Y-m-d', strtotime('-15 years')); ?>" value="<?= $tanggalLahir; ?>" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NISN</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= $nisn ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= $nik; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Anak Ke </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="anakKe" class="form-control" autocomplete="off" value="<?= $anakKe; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jumlah Saudara </label>
                                <span style="color: red;">*</span>
                                <input type="number" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= $jumlahSaudara; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= $alamat; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No Telepon</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= $noTelp; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Sekolah Asal</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= $sekolahAsal; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
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
                                <input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= $namaAyah; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Nama Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= $namaIbu; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= $pekerjaanAyah; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= $pekerjaanIbu; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NIK Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= $nikAyah; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= $nikIbu; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Penghasilan Orang Tua (contoh: 1000000)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= $penghasilanOrtu; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Agama Orang Tua </label>
                                <span style="color: red;">*</span>
                                <select name="agamaOrtu" id="inputState" class="form-control" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <option disabled selected>--Pilih Agama--</option>
                                    <option value="Islam" <?= ($agamaOrtu == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= ($agamaOrtu == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                    <option value="Katolik" <?= ($agamaOrtu == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                    <option value="Hindu" <?= ($agamaOrtu == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                    <option value="Buddha" <?= ($agamaOrtu == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                    <option value="Konghucu" <?= ($agamaOrtu == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat Orang Tua </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= $alamatOrtu; ?>" required <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pendidikan </label>
                                <span style="color: red;">*</span>
                                <select name="pendidikan" id="inputState" class="form-control" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <option disabled selected>--Pilih Pendidikan--</option>
                                    <option value="SD/MI" <?= ($pendidikan == 'SD/MI') ? 'selected' : ''; ?>>SD/MI</option>
                                    <option value="SMP/MTS" <?= ($pendidikan == 'SMP/MTS') ? 'selected' : ''; ?>>SMP/MTS</option>
                                    <option value="SMA/SMK" <?= ($pendidikan == 'SMA/SMK') ? 'selected' : ''; ?>>SMA/SMK</option>
                                    <option value="D1" <?= ($pendidikan == 'D1') ? 'selected' : ''; ?>>D1</option>
                                    <option value="D2" <?= ($pendidikan == 'D2') ? 'selected' : ''; ?>>D2</option>
                                    <option value="D3" <?= ($pendidikan == 'D3') ? 'selected' : ''; ?>>D3</option>
                                    <option value="D4/S1" <?= ($pendidikan == 'D4/S1') ? 'selected' : ''; ?>>D4/S1</option>
                                    <option value="S2" <?= ($pendidikan == 'S2') ? 'selected' : ''; ?>>S2</option>
                                    <option value="S3" <?= ($pendidikan == 'S3') ? 'selected' : ''; ?>>S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Nama Wali</label>
                                <input type="text" name="namaWali" class="form-control" autocomplete="off" value="<?= $namaWali; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Wali </label>
                                <input type="text" name="pekerjaanWali" class="form-control" min=0 autocomplete="off" value="<?= $pekerjaanWali; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Agama Wali</label>
                                <select name="agamaWali" id="inputState" class="form-control" <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <option disabled selected>--Pilih Agama--</option>
                                    <option value="Islam" <?= ($agamaWali == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                    <option value="Kristen" <?= ($agamaWali == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
                                    <option value="Katolik" <?= ($agamaWali == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                    <option value="Hindu" <?= ($agamaWali == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                    <option value="Buddha" <?= ($agamaWali == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                    <option value="Konghucu" <?= ($agamaWali == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                </select>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Alamat Wali </label>
                                <input type="text" name="alamatWali" class="form-control" min=0 autocomplete="off" value="<?= $alamatWali; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
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
                                <input type="text" name="siswaPindahan" class="form-control" autocomplete="off" value="<?= $siswaPindahan; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No. Surat Pindah </label>
                                <input type="text" name="suratPindah" class="form-control" min=0 autocomplete="off" value="<?= $suratPindah; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Diterima Dikelas</label>
                                <input type="text" name="diterimaDiKelas" class="form-control" autocomplete="off" value="<?= $diterimaDiKelas; ?>" <?= ($status_pendaftar == "sudah_final") ? "readonly" : null; ?>>
                            </div>
                            <div>
                                <input type="hidden" name="status_daftar" class="form-control" min=0 autocomplete="off" value="Finalisasi">
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
                                    <input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"><?= $pasfoto; ?></label>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <label class="custom-file-label" id="fileLabelAkta" for="exampleInputFileAkta"><?= $aktaKelahiran; ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Kartu Keluarga (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"><?= $KK; ?></label>
                                </div>
                            </div>
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')" required <?= ($status_pendaftar == "sudah_final") ? "disabled" : null; ?>>
                                    <label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"><?= $ijazahSD; ?></label>
                                </div>
                            </div>
                        </div>
                        <?php if ($status_pendaftar == "belum_mendaftar") : ?>
                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menyimpan?')">Simpan/Finalisasi</button>
                        <?php elseif ($status_pendaftar == "sudah_final") : ?>

                        <?php endif; ?>

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