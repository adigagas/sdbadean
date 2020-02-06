<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_absensi extends CI_Model
{

    private $_table = 'tb_absensi_siswa';


    public $id_siswa;
    public $tanggal;
    public $kehadiran;
    public $id_rombel = 1;
    public $waktu_masuk = 1;
    public $waktu_keluar = 1;
    public $bulan = 1;
    public $tahun = 1;



    function __construct()
    {
        parent::__construct();
    }
    public function rules()
    {
        return [
            [
                'field' => 'id_siswa',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }

    public function getCount($id_rombel)
    {
        $this->db->select('*');
        $this->db->from("tb_relasi_rombel_siswa");
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel = tb_relasi_rombel_siswa.id_rombel');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa = tb_relasi_rombel_siswa.id_siswa');
        $this->db->where('tb_relasi_rombel_siswa.id_rombel', $id_rombel);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function getMapel($id_rombel,$id_gtk)
    {
        $this->db->where('id_gtk',$id_gtk);
        $id_g=$this->db->get('tb_rombel')->row_array();

        $this->db->select('tb_siswa.*');
        $this->db->from('tb_relasi_rombel_siswa');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa=tb_relasi_rombel_siswa.id_siswa');
         $this->db->join('tb_rombel', 'tb_rombel.id_rombel=tb_relasi_rombel_siswa.id_rombel');
        
        $this->db->where('tb_relasi_rombel_siswa.id_rombel',$id_g['id_rombel']);
       // $this->db->where('tb_rombel.id_rombel', );
        return $this->db->get();
    }

    public function getAbsensiSiswa()
    {
        $tgl = date('d-m-Y');
        $this->db->select('tb_siswa.*,tb_absensi_siswa.*');
        $this->db->from('tb_absensi_siswa');
        $this->db->join('tb_siswa', 'tb_absensi_siswa.id_siswa=tb_siswa.id_siswa');
        $this->db->where('tanggal', $tgl);
        return $this->db->get();
    }

    public function getAbsensiHarian($id_mapel)
    {
        $id_gtk = $this->session->userdata('id_gtk');
        $waktu = date('Y-m-d');
        $now = formatHariTanggal($waktu);
        $this->db->select('*');
        $this->db->from('tb_absensi');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->where('tanggal_absensi', $now);
        $this->db->where('tb_absensi.id_gtk', $id_gtk);
        $this->db->where('tb_absensi.id_mapel', $id_mapel);
        return $this->db->get();
    }

    function addSiswa($data, $table)
    {
        return $this->db->insert($table, $data);
    }

    public function reportAbsensi($id_gtk)
    {
        $waktu = date('Y-m-d');
        $now = formatHariTanggal($waktu);
        $this->db->select('*');
        $this->db->from('tb_absensi');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran=tb_absensi.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel=tb_absensi.id_rombel');
        $this->db->join('tb_mapel', 'tb_mapel.id_jadwal_mapel=tb_absensi.id_mapel');
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk=tb_absensi.id_gtk');
        $this->db->group_by(array("tb_absensi.id_mapel", "tb_absensi.id_gtk"));
        $this->db->where('tb_absensi.id_gtk', $id_gtk);
        $this->db->where('tb_absensi.tanggal_absensi', $now);

        return $this->db->get()->result();
    }
    public function reportAbsensiKepsek()
    {
        $waktu = date('Y-m-d');
        $now = formatHariTanggal($waktu);
        $this->db->select('*');
        $this->db->from('tb_absensi');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran=tb_absensi.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_rombel.id_rombel=tb_absensi.id_rombel');
        $this->db->join('tb_mapel', 'tb_mapel.id_jadwal_mapel=tb_absensi.id_mapel');
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk=tb_absensi.id_gtk');
        $this->db->group_by(array("tb_absensi.id_mapel", "tb_absensi.id_gtk"));
        $this->db->where('tb_absensi.tanggal_absensi', $now);

        return $this->db->get()->result();
    }

    public function updateSiswa($id_siswa)
    {
        $this->db->select('*');
        $this->db->from('tb_relasi_siswa');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa =tb_relasi_siswa.id_siswa');
        $this->db->join('tb_wali', 'tb_wali.id_wali=tb_relasi_siswa.id_wali');
        $this->db->join('tb_alamat_wali', 'tb_alamat_wali.id_alamat_wali=tb_relasi_siswa.id_alamat_wali');
        $this->db->join('tb_alamat_ortu', 'tb_alamat_ortu.id_alamat_ortu=tb_relasi_siswa.id_alamat_ortu');
        $this->db->join('tb_ayah', 'tb_ayah.id_ayah=tb_relasi_siswa.id_ayah');
        $this->db->join('tb_ibu', 'tb_ibu.id_ibu=tb_relasi_siswa.id_ibu');
        $this->db->where('tb_siswa.id_siswa', $id_siswa);
        $query = $this->db->get()->row();
        return $query;
    }



    private function _uploadImage()
    {
        $config['upload_path']          =  './vendor/assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['foto_satu']['name'];
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_satu')) {
            return $this->upload->data("file_name");
        }

        return "camera.jpg";
    }
}
