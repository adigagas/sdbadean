<link href="<?= base_url() ?>vendor/dist/css/style_cetak.css" rel="stylesheet">

<body>
    <center>
        <h4>RAPORT PESERTA DIDIK DAN PROFIL PESERTA DIDIK</h4><br><br>
    </center>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xs-6">
                    <p>Nama Peserta Didik<br>
                        NISN/NIS<br>
                        Nama Sekolah<br>
                        Alamat Sekolah</p>
                </div>
                <div class="col-md-6 col-lg-6 col-xs-6">

                </div>
            </div>

            <div>
                <h5>A.Sikap</h5>
                <table border="1" style="width: 100%">
                    <tr>
                        <td colspan="2" style="background: #f0f0f0; height:25px;">
                            <p style="text-align: center; color:#000;"><b>Deskripsi</b></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:30%;">
                            <p style="padding:5px;color:#000;"><b> 1. Sikap Spiritual</b></p>
                        </td>
                        <td>
                            <p style="padding:5px">
                                Baris 3, Kolom 3</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="width:30%;">
                            <p style="padding: 5px;color:#000;"><b> 2. Sikap Sosial</b></p>
                        </td>
                        <td>
                            <p style="padding:5px"> Baris 3, Kolom 3</p>
                        </td>
                    </tr>
                </table>
            </div><br>
            <div>
                <h5>B.Pengetahuan dan Keterampilan</h5>
                <p>KKM Satuan Pendidikan</p>

                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                            <td rowspan="2"> No</td>
                            <td rowspan="2"> Muatan Pelajaran</td>
                            <td colspan="3"> Pengetahuan</td>
                            <td colspan="3"> Keterampilan</td>
                        </tr>
                        <tr>
                            <td> Nilai</td>
                            <td> Predikat</td>
                            <td> Deskripsi</td>
                            <td> Nilai</td>
                            <td> Predikat</td>
                            <td> Deskripsi</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>


</body>

</html>