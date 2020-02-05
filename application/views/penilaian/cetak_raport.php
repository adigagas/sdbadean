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
                    <p>Nama Peserta Didik : <?= $nama_siswa?><br>
                        NISN/NIS : <?= $nisn?> / <?= $nis?><br>
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

                <table border="1" style="width: 100%;">
                    <thead>
                        <tr>
                            <td rowspan="2" style="padding:5px;text-align: center;width:5%; "><b>No</b> </td>
                            <td rowspan="2" style="padding:5px;text-align: center; width:15%;"><b>Muatan Pelajaran</b></td>
                            <td colspan="3" style="padding:5px;text-align: center;"><b>Pengetahuan</b></td>
                            <td colspan="3" style="padding:5px;text-align: center;"><b>Keterampilan</b></td>
                        </tr>
                        <tr>
                            <td style="padding:5px;text-align: center;"><b>Nilai</b></td>
                            <td style="padding:5px;text-align: center;"><b>Predikat</b></td>
                            <td style="padding:5px;text-align: center;"><b>Deskripsi</b></td>
                            <td style="padding:5px;text-align: center;"><b>Nilai</b></td>
                            <td style="padding:5px;text-align: center;"><b>Predikat</b></td>
                            <td style="padding:5px;text-align: center;"><b>Deskripsi</b></td>
                        </tr>
                        <?php
                        $i=1;
                        foreach($nilai as $n){
                        ?>
                          <tr>
                            <td rowspan="2"> <?= $i++ ?></td>
                            <td rowspan="2"> <?= $n->nama_pelajaran ?></td>
                        </tr>
                        <tr>
                            <td> <?= $n->nilai_akhir ?></td>
                            <td> Predikat</td>
                            <td> Deskripsi</td>
                            <td> Nilai</td>
                            <td> Predikat</td>
                            <td> Deskripsi</td>
                        </tr>
                        <?php }?>
                    </thead>
                </table>
            </div><br>
            <div>
                <h5>C.Ekstra Kurikuler</h5>
                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; "><b>No</b></th>
                            <th style="text-align: center; "><b>Kegiatan Ekstrakrikuler</b></th>
                            <th style="text-align: center; "><b>Keterangan</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:5%; padding:5px;">1</td>
                            <td style="width:30%; padding:5px;">Pencak Silat</td>
                            <td style="width:70%; padding:5px;">Gahar</td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
            <div>
                <h5>D.Saran Saran</h5>
                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                        <td style="width:100%;height:75px;">
                            
                        </td>
                        </tr>
                    </thead>
                </table>
            </div><br>
              <div>
                <h5>E.Tinggi Dan Berat Badan</h5>
                <table border="1" style="width: 100%">
                    <thead>
                       <tr>
                            <td rowspan="2" style="padding:5px;text-align: center;width:5%; "><b>No</b> </td>
                            <td rowspan="2" style="padding:5px;text-align: center; width:55%;"><b>Aspek Yang Dinilai</b></td>
                            <td colspan="3" style="padding:5px;text-align: center;width:40%;"><b>Semester</b></td>
                           
                        </tr>
                          <tr>
                            <td style="padding:5px;text-align: center;"><b>1</b></td>
                            <td style="padding:5px;text-align: center;"><b>2</b></td>
                        </tr>
                         <tr>
                            <td> 1</td>
                            <td style="padding:5px;"> Tinggi Badan</td>
                            <td style="padding:5px;text-align: center;">... </td>
                            <td style="padding:5px;text-align: center;">... </td>
                        </tr>
                        <tr>
                            <td> 2</td>
                            <td style="padding:5px;"> Berat Badan</td>
                            <td style="padding:5px;text-align: center;"> ...</td>
                            <td style="padding:5px;text-align: center;"> ...</td>
                           
                        </tr>
                    </thead>
                </table>
            </div><br>
             <div>
                <h5>F.Kondisi Kesehatan</h5>
                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; "><b>No</b></th>
                            <th style="text-align: center; "><b>Aspek Fisik </b></th>
                            <th style="text-align: center; "><b>Keterangan</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:5%; padding:5px;">1</td>
                            <td style="width:30%; padding:5px;">Pendengaran</td>
                            <td style="width:70%; padding:5px;">Gahar</td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
              <div>
                <h5>G.Prestasi</h5>
                <table border="1" style="width: 100%">
                    <thead>
                        <tr>
                            <th style="text-align: center; "><b>No</b></th>
                            <th style="text-align: center; "><b>Jenis Prestasi </b></th>
                            <th style="text-align: center; "><b>Keterangan</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width:5%; padding:5px;">1</td>
                            <td style="width:30%; padding:5px;">Juara Apa</td>
                            <td style="width:70%; padding:5px;">Gahar</td>
                        </tr>
                    </tbody>
                </table>
            </div><br>
        </div>
    </div>

    <script>
        window.print();
    </script>


</body>

</html>