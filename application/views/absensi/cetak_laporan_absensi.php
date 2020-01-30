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
                            <th>Nama</th>
                            <?php
                            $this->db->group_by('tanggal_absensi');
                            $this->db->order_by('tanggal_absensi', 'DESC');
                            $tgl = $this->db->get('tb_absensi');
                            foreach ($tgl->result() as $tgl) {
                                $tanggal = $tgl->tanggal_absensi;
                                list($day, $date, $month, $year) = mb_split('[ ]', $tanggal);
                            ?>
                                <th><?= $date ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $this->db->group_by('id_siswa');
                        $data = $this->db->get('tb_absensi');
                        foreach ($data->result() as $d) {
                            $this->db->where('id_siswa', $d->id_siswa);
                            $siswa = $this->db->get('tb_siswa')->row_array();
                        ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $siswa['nama_siswa'] ?></td>
                                <?php
                                $this->db->where('id_siswa', $d->id_siswa);
                                $this->db->where('id_pelajaran', $id_pelajaran);
                                $data2 = $this->db->get('tb_absensi');
                                foreach ($data2->result_array($d->id_siswa) as $t) {
                                ?>
                                    <td><?= $t['keterangan'] ?></td>
                                <?php } ?>
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