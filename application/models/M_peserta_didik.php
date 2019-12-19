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
        return $this->db->get($this->_table)->result();
    }

    public function getNisnSiswa()
    {
        return $this->db->get($this->_table)->result();
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
        $this->db->insert($this->_table, $this);
    }
}
