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


    public function getIdKelas($id_kelas)
    {
        return $this->db->get_where('tb_siswa', ['id_kelas' => $id_kelas]);
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

    public function addSiswa()
    {
        $post = $this->input->post();
        $this->id_siswa = $post['id_siswa'];
        $this->tanggal = $post['tanggal'];
        $this->kehadiran = $post['kehadiran'];

        return $this->db->insert($this->_table, $this);
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