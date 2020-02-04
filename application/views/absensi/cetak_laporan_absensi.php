<link href="<?= base_url() ?>vendor/dist/css/style_cetak.css" rel="stylesheet">

<body>
    <center>
        <h2>LAPORAN ABSENSI<br>
            SDN 01 BADEAN BONDOWOSO</h2>
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
        <div class="col-md-12">
            <div class="card">
                <h5>Rombel : <?= $id_rombel ?><br>
                    Kategori : <?= $nama_kategori ?><br>
                    Tahun Ajaran : <?= $bulan ?>, <?= $tahun ?> </h5>
                <table class="" border="1" cellpadding="5">
                    <thead>
                        <tr>

                            <th>No.</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>L/P</th>
                            <?php
                            $this->db->group_by('tanggal_absensi');
                            $this->db->order_by('tanggal_absensi', 'DESC');
                            $this->db->where('id_rombel', $id_rmbl);
                            $this->db->where('id_kategori', $id_kategori);
                            $this->db->like('tanggal_absensi', $bulan, 'both');

                            $tgl = $this->db->get('tb_absensi');
                            $aktif = 0;
                            foreach ($tgl->result() as $tgl) {
                                $tanggal = $tgl->tanggal_absensi;
                                list($day, $date, $month, $year) = mb_split('[ ]', $tanggal);
                                $aktif++;
                            ?>

                                <th><?= $date ?></th>
                            <?php } ?>
                            <th>S</th>
                            <th>I</th>
                            <th>A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        /*-------------------------------------------*/

                        $this->db->group_by('id_siswa');
                        $this->db->where('id_kategori', $id_kategori);
                        $this->db->where('id_rombel', $id_rmbl);
                        $data = $this->db->get('tb_absensi');
                        foreach ($data->result() as $d) {
                            $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
                            $this->db->where('tb_absensi.id_siswa', $d->id_siswa);
                            $this->db->where('id_kategori', $id_kategori);
                            $this->db->where('id_rombel', $id_rmbl);
                            $siswa = $this->db->get('tb_absensi')->row_array();

                            $this->db->select('COUNT(keterangan) as s');
                            $this->db->where('id_siswa', $siswa['id_siswa']);
                            $this->db->where('keterangan', 's');
                            $this->db->where('id_kategori', $id_kategori);
                            $this->db->where('id_rombel', $id_rmbl);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $s = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                            $this->db->select('COUNT(keterangan) as i');
                            $this->db->where('id_siswa', $siswa['id_siswa']);
                            $this->db->where('keterangan', 'i');
                            $this->db->where('id_kategori', $id_kategori);
                            $this->db->where('id_rombel', $id_rmbl);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $i = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                            $this->db->select('COUNT(keterangan) as a');
                            $this->db->where('id_siswa', $siswa['id_siswa']);
                            $this->db->where('keterangan', 'a');
                            $this->db->where('id_kategori', $id_kategori);
                            $this->db->where('id_rombel', $id_rmbl);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $a = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $siswa['nomor_induk_sn'] ?></td>
                                <td><?= $siswa['nama_siswa'] ?></td>
                                <td><?= $siswa['jenis_kelamin_siswa'] ?></td>
                                <?php
                                $this->db->where('id_siswa', $siswa['id_siswa']);
                                $this->db->where('id_kategori', $id_kategori);
                                $this->db->where('id_rombel', $id_rmbl);
                                $this->db->like('tanggal_absensi', $bulan, 'both');
                                $data2 = $this->db->get('tb_absensi')->result_array($d->id_siswa);
                                foreach ($data2 as $t) {
                                ?>
                                    <td><?= $t['keterangan'] ?></td>
                                <?php } ?>
                                <td><?= $s['s'] ?></td>
                                <td><?= $i['i'] ?></td>
                                <td><?= $a['a'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table><br><br>

            </div>
        </div>
        <div class="col-md-3">
            <p style="text-align: center;margin-bottom:60px;"><b>Mengetahui,<br>
                    Kepala SDN 1 Badean
                </b></p>
            <p style="text-align: center"><b><u>SITI AGUSTINAH.M.Pd</u><br>
                    NIP.196608271991112001
                </b> </p>
        </div>

        <div class="col-md-2" style="text-align: right">
            <?php
            $this->db->select('COUNT(jenis_kelamin_siswa) as l');
            $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
            $this->db->where('id_kategori', $id_kategori);
            $this->db->where('jenis_kelamin_siswa', 'L');
            $this->db->where('id_rombel', $id_rmbl);
            $this->db->like('tanggal_absensi', $bulan, 'both');
            $jk = $this->db->get('tb_absensi')->row_array();
            ?>
            <?php
            $this->db->select('COUNT(jenis_kelamin_siswa) as p');
            $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
            $this->db->where('id_kategori', $id_kategori);
            $this->db->where('jenis_kelamin_siswa', 'P');
            $this->db->where('id_rombel', $id_rmbl);
            $this->db->like('tanggal_absensi', $bulan, 'both');
            $jk_p = $this->db->get('tb_absensi')->row_array();
            ?>
            <p><b>L &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $jk['l'] ?> Orang<br>
                    P &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $jk_p['p'] ?> Orang<br>
                    JML&nbsp;&nbsp;: <?= $jk_p['p'] + $jk['l']  ?> Orang
                </b></p>
        </div>
        <div class="col-md-4" style="text-align: left;padding-left:100px;">
            <?php
            $this->db->select('COUNT(keterangan) as s');
            $this->db->where('id_kategori', $id_kategori);
            $this->db->where('keterangan', 's');
            $this->db->where('id_rombel', $id_rmbl);
            $this->db->like('tanggal_absensi', $bulan, 'both');
            $jum_s = $this->db->get('tb_absensi')->row_array();
            ?>
            <?php
            $this->db->select('COUNT(keterangan) as i');
            $this->db->where('id_kategori', $id_kategori);
            $this->db->where('keterangan', 'i');
            $this->db->where('id_rombel', $id_rmbl);
            $this->db->like('tanggal_absensi', $bulan, 'both');
            $jum_i = $this->db->get('tb_absensi')->row_array();
            ?>
            <?php
            $jmlh_siswa = $jk_p['p'] + $jk['l'];
            $this->db->select('COUNT(keterangan) as a');
            $this->db->where('id_kategori', $id_kategori);
            $this->db->where('keterangan', 'a');
            $this->db->where('id_rombel', $id_rmbl);
            $this->db->like('tanggal_absensi', $bulan, 'both');
            $jum_a = $this->db->get('tb_absensi')->row_array();
            ?>
            <p><b>Hari Efektif : <?= $aktif ?><br>
                    S : <?= $jum_s['s'] ?><br>
                    I &nbsp;: <?= $jum_i['i'] ?><br>A : <?= $jum_a['a'] ?>
                </b></p><br>
            <?php
            $tot =  $jum_s['s']  +  $jum_i['i'] + $jum_a['a'];
            $jmlh_siswa = $jk_p['p'] + $jk['l'];
            $tot2 = $tot * $jmlh_siswa;
            $bagi = $aktif / $tot2;
            $tot3 = $bagi * 100;
            ?>
            <p> Absensi = (<?= $aktif ?>/<?= $jum_s['s'] ?> + <?= $jum_i['i'] ?> + <?= $jum_a['a'] ?> * <?= $jmlh_siswa ?>) * 100% </p>
            <h4 style="margin-left: 55px"><b>= <?= $tot3 ?>% </b></h4>


        </div>
        <div class="col-md-3">
            <?php
            $this->db->where('id_gtk', $id_gtk);
            $guru = $this->db->get('tb_gtk')->row_array();
            ?>
            <p style="text-align: center;margin-bottom:60px;"><b>Bondowoso,................................<br>
                    Guru Kelas <?= $id_rombel ?>
                </b></p>
            <p style="text-align: center"><b><u><?= $guru['nama_gtk'] ?>.<?= $guru['gelar_gtk'] ?></u><br>
                    NIP.<?= $guru['nip_gtk'] ?>
                </b></p>

        </div>
    </div>

    <script>
        window.print();
    </script>


</body>

</html>