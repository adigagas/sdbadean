<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_peserta_didik extends CI_Model
{

    private $_table = 'tb_siswa';


    public $id_siswa;
    public $nomor_induk;
    public $nomor_induk_sn;
    public $nama_siswa;
    public $tempat_lahir_siswa;
    public $tanggal_lahir_siswa;
    public $jenis_kelamin_siswa;
    public $agama_siswa;
    public $kewarganegaraan_siswa;
    public $bahasa_siswa;
    public $golongan_siswa;
    public $alamat_siswa = "1.jpg";
    public $foto_satu = "1.jpg";
    public $foto_empat = "1.jpg";
    public $id_kelas = "1";


    function __construct()
    {
        parent::__construct();
    }
    public function rules()
    {
        return [
            [
                'field' => 'nomor_induk_sn',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function getAllSiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        //$this->db->join('tb_relasi_siswa','tb_siswa.id_siswa=tb_relasi_siswa.id_siswa');
        return $this->db->get()->result();
    }

    public function getSearch($keyword)
    {

        $this->db->like('nama_siswa', $keyword);
        return $this->db->get($this->_table)->result();
    }

    public function getNisnSiswa()
    {
        return $this->db->get($this->_table)->result();
    }

    public function countSiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_siswa');

        $this->db->limit(20);
        $query = $this->db->get()->num_rows();
        return $query;
    }

    public function addSiswa()
    {
        $post = $this->input->post();
        $this->id_siswa = $post['id_siswa'];
        $this->nomor_induk = $post['nomor_induk'];
        $this->nomor_induk_sn = $post['nomor_induk_sn'];
        $this->nama_siswa = $post['nama_siswa'];
        $this->tempat_lahir_siswa = $post['tempat_lahir_siswa'];
        $this->tanggal_lahir_siswa = $post['tanggal_lahir_siswa'];
        $this->jenis_kelamin_siswa = $post['jenis_kelamin_siswa'];
        $this->agama_siswa = $post['agama_siswa'];
        $this->kewarganegaraan_siswa = $post['kewarganegaraan_siswa'];
        $this->bahasa_siswa = $post['bahasa_siswa'];
        $this->golongan_siswa = $post['golongan_siswa'];
        $this->golongan_siswa = $post['golongan_siswa'];
        $this->foto_satu = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
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
