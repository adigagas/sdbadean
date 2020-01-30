<table id="zero_config" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <?php
            $this->db->group_by('tanggal_absensi');
            $this->db->order_by('tanggal_absensi', 'DESC');
            $tgl = $this->db->get('tb_absensi');
            foreach ($tgl->result() as $tgl) {
            ?>
                <th><?= $tgl->tanggal_absensi ?></th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $this->db->group_by('id_siswa');
        $data = $this->db->get('tb_absensi');
        foreach ($data->result() as $d) {
        ?>
            <tr>
                <td><?= $d->id_siswa ?></td>
                <?php
                $this->db->where('id_siswa', $d->id_siswa);
                $data2 = $this->db->get('tb_absensi');
                foreach ($data2->result_array($d->id_siswa) as $t) {
                ?>
                    <td><?= $t['keterangan'] ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>