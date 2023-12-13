<?= $this->extend('templates/dashboardTemplate'); ?>
<?= $this->section('content'); ?>

<section class="content">
    <div class="container-fluid">
        <div class="col p-0 mb-3">
            <h1>Data Pendaftar</h1>
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
                    <?php $dftr = $pendaftar; ?>

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
                                <input type="text" name="nama" class="form-control" autocomplete="off" value="<?= $dftr['nama']; ?>" data-section="1" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jenis Kelamin </label>
                                <span style="color: red;">*</span>
                                <select name="jenisKel" id="inputState" class="form-control" data-section="1" readonly disabled>
                                    <option disabled>--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-laki" <?= ($dftr['jenisKel'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= ($dftr['jenisKel'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Tempat Lahir</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="tempatLahir" class="form-control" autocomplete="off" value="<?= $dftr['tempatLahir']; ?>" data-section="1" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Tanggal Lahir </label>
                                <span style="color: red;">*</span>
                                <input type="date" name="tanggalLahir" class="form-control" max="<?= date('Y-m-d', strtotime('-13 years')); ?>" data-section="1" readonly min="<?= date('Y-m-d', strtotime('-15 years')); ?>" data-section="1" value="<?= $dftr['tanggalLahir']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NISN</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nisn" class="form-control" autocomplete="off" value="<?= $dftr['nisn']; ?>" data-section="1" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nik" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nik']; ?>" data-section="1" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Anak Ke (Gunakan Angka)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="anakKe" class="form-control" autocomplete="off" value="<?= $dftr['anakKe']; ?>" data-section="1" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Jumlah Saudara (Gunakan Angka)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="jumlahSaudara" class="form-control" min=0 autocomplete="off" value="<?= $dftr['jumlahSaudara']; ?>" data-section="1" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamat" class="form-control" autocomplete="off" value="<?= $dftr['alamat']; ?>" data-section="1" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">No Telepon</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="noTelp" class="form-control" min=0 autocomplete="off" value="<?= $dftr['noTelp']; ?>" data-section="1" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Sekolah Asal</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="sekolahAsal" class="form-control" autocomplete="off" value="<?= $dftr['sekolahAsal']; ?>" data-section="1" readonly>
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
                                <input type="text" name="namaAyah" class="form-control" autocomplete="off" value="<?= $dftr['namaAyah']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Nama Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="namaIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['namaIbu']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanAyah" class="form-control" autocomplete="off" value="<?= $dftr['pekerjaanAyah']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanIbu']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">NIK Ayah</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikAyah" class="form-control" autocomplete="off" value="<?= $dftr['nikAyah']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">NIK Ibu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="nikIbu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['nikIbu']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Penghasilan Ortu (contoh: 1000000)</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="penghasilanOrtu" class="form-control" autocomplete="off" value="<?= $dftr['penghasilanOrtu']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Agama Ortu </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="agamaOrtu" class="form-control" min=0 autocomplete="off" value="<?= $dftr['agamaOrtu']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Alamat Ortu</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamatOrtu" class="form-control" autocomplete="off" value="<?= $dftr['alamatOrtu']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pendidikan </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pendidikan" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pendidikan']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Nama Wali</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="namaWali" class="form-control" autocomplete="off" value="<?= $dftr['namaWali']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Pekerjaan Wali </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="pekerjaanWali" class="form-control" min=0 autocomplete="off" value="<?= $dftr['pekerjaanWali']; ?>" data-section="2" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label class="col-form-label">Agama Wali</label>
                                <span style="color: red;">*</span>
                                <input type="text" name="agamaWali" class="form-control" autocomplete="off" value="<?= $dftr['agamaWali']; ?>" data-section="2" readonly>
                            </div>

                            <div class="col">
                                <label class="col-form-label">Alamat Wali </label>
                                <span style="color: red;">*</span>
                                <input type="text" name="alamatWali" class="form-control" min=0 autocomplete="off" value="<?= $dftr['alamatWali']; ?>" data-section="2" readonly>
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
                                <select name="status_daftar" id="inputState" class="form-control" data-section="3" readonly disabled>
                                    <option disabled>--Pilih Status--</option>
                                    <option value="Baru" <?= ($dftr['status_daftar'] == 'Baru') ? 'selected' : ''; ?>>Baru</option>
                                    <option value="Finalisasi" <?= ($dftr['status_daftar'] == 'Finalisasi') ? 'selected' : ''; ?>>Finalisasi</option>
                                    <option value="Diterima" <?= ($dftr['status_daftar'] == 'Diterima') ? 'selected' : ''; ?>>Diterima</option>
                                    <option value="Ditolak" <?= ($dftr['status_daftar'] == 'Ditolak') ? 'selected' : ''; ?>>Ditolak</option>
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
                                    <input type="file" class="custom-file-input" id="exampleInputFilePasFoto" name="pasfoto" onchange="updateFileName('exampleInputFilePasFoto', 'fileLabelPasFoto')" disabled data-section="4">
                                    <label class="custom-file-label" id="fileLabelPasFoto" for="exampleInputFilePasFoto"><?= $dftr['pasfoto']; ?></label>
                                </div>
                            </div>

                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Akta Kelahiran (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileAkta" name="aktaKelahiran" onchange="updateFileName('exampleInputFileAkta', 'fileLabelAkta')" disabled data-section="4">
                                    <label class="custom-file-label" id="fileLabelAkta" for="exampleInputFileAkta"><?= $dftr['aktaKelahiran']; ?></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row" style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Kartu Keluarga (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileKK" name="KK" onchange="updateFileName('exampleInputFileKK', 'fileLabelKK')" disabled data-section="4">
                                    <label class="custom-file-label" id="fileLabelKK" for="exampleInputFileKK"><?= $dftr['KK']; ?> </label>
                                </div>
                            </div>
                            <div class="form-group mt-2 mb-3 col-6">
                                <label for="exampleInputFile">Ijazah SD (Harap unggah dokumen dengan format pdf)</label>
                                <span style="color: red;">*</span>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFileIjazah" name="ijazahSD" onchange="updateFileName('exampleInputFileIjazah', 'fileLabelIjazah')" disabled data-section="4">
                                    <label class="custom-file-label" id="fileLabelIjazah" for="exampleInputFileIjazah"><?= $dftr['ijazahSD']; ?></label>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-info text-white" onclick="previousSection(4)">Sebelumnya</button>
                        <a href="<?= base_url('/semuaPendaftar') ?>" class="btn btn-danger">Kembali</a>
                    </div>
                    <!-- End Form Section -->

                </form>
            </div>
        </div>
    </div>
</section>

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

<?= $this->endSection(); ?>