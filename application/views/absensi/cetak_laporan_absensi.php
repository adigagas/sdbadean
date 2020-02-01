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
        <div class="col-12">
            <div class="card">
                <h3>Rombel : <?= $id_rombel ?><br>
                    Mapel : <?= $nama_pelajaran ?><br>
                    Tahun Ajaran : <?= $bulan ?>, <?= $tahun ?> </h3>
                <table class="" border="1" cellpadding="5">
                    <thead>
                        <tr>

                            <th>No.</th>
                            <th>NISN</th>
                            <td>Nama</td>
                            <th>L/P</th>
                            <?php
                            /*
                            $this->db->group_by('tanggal_absensi');
                            $this->db->order_by('tanggal_absensi', 'DESC');
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $tgl = $this->db->get('tb_absensi');
                            foreach ($tgl->result() as $tgl) {
                                $tanggal = $tgl->tanggal_absensi;
                                list($day, $date, $month, $year) = mb_split('[ ]', $tanggal);*/
                            for ($tl = 1; $tl <= 31; $tl++) {
                            ?>
                                <th><?= $tl ?></th>
                            <?php } ?>
                            <th>S</th>
                            <th>I</th>
                            <th>A</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $this->db->group_by('id_siswa');
                        $data = $this->db->get('tb_absensi');
                        foreach ($data->result() as $d) {
                            $this->db->select('COUNT(keterangan) as s');
                            $this->db->where('id_siswa', $d->id_siswa);
                            $this->db->where('keterangan', 's');
                            $this->db->where('id_pelajaran', $id_pelajaran);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $s = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                            $this->db->select('COUNT(keterangan) as i');
                            $this->db->where('id_siswa', $d->id_siswa);
                            $this->db->where('keterangan', 'i');
                            $this->db->where('id_pelajaran', $id_pelajaran);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $i = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                            $this->db->select('COUNT(keterangan) as a');
                            $this->db->where('id_siswa', $d->id_siswa);
                            $this->db->where('keterangan', 'a');
                            $this->db->where('id_pelajaran', $id_pelajaran);
                            $this->db->like('tanggal_absensi', $bulan, 'both');
                            $a = $this->db->get('tb_absensi')->row_array();
                            /*-------------------------------------------*/
                            $this->db->where('id_siswa', $d->id_siswa);
                            $siswa = $this->db->get('tb_siswa')->row_array();
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $siswa['nomor_induk_sn'] ?></td>
                                <td><?= $siswa['nama_siswa'] ?></td>
                                <td><?= $siswa['jenis_kelamin_siswa'] ?></td>
                                <?php
                                $this->db->where('id_siswa', $d->id_siswa);
                                $this->db->where('id_pelajaran', $id_pelajaran);
                                $this->db->like('tanggal_absensi', $bulan, 'both');
                                $data2 = $this->db->get('tb_absensi');
                                foreach ($data2->result_array($d->id_siswa) as $t) {
                                ?>
                                    <td><?= $t['keterangan'] ?></td>
                                <?php } ?>
                                <td><?= $s['s'] ?></td>
                                <td><?= $i['i'] ?></td>
                                <td><?= $a['a'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>


</body>

</html>