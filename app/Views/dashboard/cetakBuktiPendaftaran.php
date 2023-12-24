<style>
    table {
        font-size: 14px;
    }

    table,
    th,
    td {
        border-collapse: collapse;
    }

    thead {
        font-size: 16px;
    }

    .judul h3,
    h2,
    p {
        text-align: center;
        margin: 5px 0 5px 0;
    }

    .a {
        text-align: right;
        margin: 5px 0 5px 0;
    }

    .form-inline img {
        display: inline-block;
    }

    h2 {
        font-size: 30px;
    }

    .kop tr td {
        text-align: center;
        border: 2px solid white;
        border-collapse: collapse;
    }

    .gambar {
        margin-right: 10px;
    }

    .isi-tujuan {
        margin-top: 10px;
        position: absolute;
        right: 100px;
        font-size: 17px;
    }

    .isi tr td {
        padding-left: 5px;
        padding-right: 5px;
    }

    .font-17px {
        font-size: 17px;
    }

    .ttd {
        text-align: center;
        /* display: inline-block;
    float: right; */
    }
</style>

<script>
    window.load = print_d();

    function print_d() {
        window.print();
    }
    window.onfocus = function() {
        window.close();
    }
</script>

<title>MTsN 4 Tanah Laut</title>

<div class="container-fluid">
    <center>
        <table class="kop">
            <tr>
                <td rowspan="5"><img src="<?= base_url() ?>/assets/logo.png" height="95" class="gambar" style="padding-right:50px;"></td>
            </tr>
            <tr>
                <td style="font-size: 20px; font-weight: bold; padding-bottom: 10px; ">
                    KEMENTRIAN AGAMA KAB. TANAH LAUT
                </td>
            </tr>
            <tr>
                <td style="font-size: 17px; font-weight: bold">
                    MADRASAH TSANAWIYAH NEGERI 4 TANAH LAUT
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; font-style: italic;">
                    Jl. Matah II Kel. Karang Taruna Kec. Pelaihari 70811
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold; font-style: italic;">
                    Telp. (0512)2423053
                </td>
                <td style="padding-left:50px;">

                </td>
            </tr>

        </table>
    </center>

    <hr size="2px" color="black" style="margin-bottom: 1px" />
    <hr size="2px" color="black" style="margin-top: 1px" />

    <center>
        <div>
            <table border="0" style="margin-top: 20px; margin-left: 0px; ">
                <tbody style="line-height: 20px; font-size: 18px">
                    <tr>
                        <td style="font-size: 17px; font-weight: bold;">
                            BUKTI PENDAFTARAN
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>
    <center>
        <div>
            <table border="0" style="margin-top: 10px; margin-left: 10px; ">
                <tbody style="line-height: 20px; font-size: 18px">
                    <tr>
                        <td style="font-size: 17px; font-weight: bold;">
                            PENERIMAAN PESERTA DIDIK BARU
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>

    <?php $value = $pendaftar ?>
    <div>
        <table border="0" style="margin-top: 50px; margin-left: 50px">
            <tbody style="line-height: 20px; font-size: 18px">
                <tr>
                    <td style="font-size: 17px">NISN</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['nisn'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">NIK</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['nik'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Nama</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['nama'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Jenis Kelamin</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['jenisKel'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Tempat Lahir</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['tempatLahir'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Tanggal Lahir</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= date('d-m-Y', strtotime($value['tanggalLahir'])) ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Alamat</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['alamat'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">Sekolah Asal</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['sekolahAsal'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 17px">No. Telepon</td>
                    <td style="font-size: 17px">:</td>
                    <td style="font-size: 17px"><?= $value['noTelp'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <div>
    </div>
    <div>
        <table class="font-17px" style="margin-left: 400px; margin-right: 50px; margin-top: 100px">
            <tr>
                <td>Menyetujui, </td>
            </tr>
            <tr>
                <td>Kepala Sekolah MTsN 4 Tanah Laut</td>
            </tr>

        </table>
        <table class="font-17px" style="margin-left: 400px; margin-top: 100px">
            <tr>
                <td>Mubasir, S.Pd I.M.Pd </td>
            </tr>
        </table>
    </div>
    <div>
        <table class="font-17px" style="justify-content: center; margin-left: 500px; margin-top: 30px">

        </table>
    </div>
</div>