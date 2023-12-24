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
            <table border="0" style="margin-top: 10px; margin-left: 10px; ">
                <tbody style="line-height: 20px; font-size: 18px">
                    <tr>
                        <td style="font-size: 17px; font-weight: bold;">
                            Pendaftar Diterima di MTsN 4 Tanah Laut
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>
    <div>


        <table border="0" style="width:100% ;margin-top: 30px; border-collapse:collapse;">
            <thead>
                <tr>
                    <th style="font-size: 17px; border:1px solid #333; padding: 2px; background-color:#CCC;">No.</th>
                    <th style="font-size: 17px; border:1px solid #333; padding: 2px; background-color:#CCC;">NISN</th>
                    <th style="font-size: 17px; border:1px solid #333; padding: 2px; background-color:#CCC;">Nama</th>
                    <th style="font-size: 17px; border:1px solid #333; padding: 2px; background-color:#CCC;">Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody style="line-height: 20px; font-size: 18px">
                <?php
                $no = 1;
                foreach ($pendaftarDiterima as $value) { ?>
                    <tr>
                        <td style="font-size: 17px; border:1px solid #333;"><?= $no++ ?>.</td>
                        <td style="font-size: 17px; border:1px solid #333;"><?= $value['nisn']; ?></td>
                        <td style="font-size: 17px; border:1px solid #333;"><?= $value['nama']; ?></td>
                        <td style="font-size: 17px; border:1px solid #333;"><?= $value['jenisKel'] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

    </div>
    <div>

    </div>
    <div>
        <table class="font-17px" style="margin-left: 450px; margin-top: 20px">
            <tr>
                <td>Menyetujui, </td>
            </tr>
            <tr>
                <td>Kepala Sekolah MTsN 4 Tanah Laut</td>
            </tr>

        </table>
        <table class="font-17px" style="margin-left: 450px; margin-top: 100px">
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