<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_peserta_didik extends CI_Model
{

    private $_table = 'tb_siswa';


    public $id_siswa;
    public $nis;
    public $nisn;
    public $tempat_lahir_siswa;
    public $tanggal_lahir_siswa;
    public $jenis_kelamin_siswa;
    public $agama_siswa;
    public $kewarganegaraan_siswa;
    public $bahasa_siswa;
    public $golongan_siswa;
    public $alamat_siswa;
    public $foto_satu;
    public $foto_empat;


    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_depan',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'id_buku',
                'label' => 'Halaman',
                'rules' => 'required'
            ]
        ];
    }

    public function getAllSiswa()
    {
        return $this->db->get($this->_table)->result();
    }

    public function addSiswa()
    {
        $post = $this->input->post();
        $this->nis = $post['nis'];
        $this->nisn = $post['nisn'];
        $this->tempat_lahir_siswa = $post['tempat_lahir_siswa'];
        $this->tanggal_lahir_siswa = $post['tanggal_lahir_siswa'];
        $this->jenis_kelamin_siswa = $post['jenis_kelamin_siswa'];
        $this->agama_siswa = $post['agama_siswa'];
        $this->kewarganegaraan_siswa = $post['kewarganegaraan_siswa'];
        $this->bahasa_siswa = $post['bahasa_siswa'];
        $this->golongan_siswa = $post['golongan_siswa'];
        $this->alamat_siswa = $post['alamat_siswa'];
        $this->foto_satu = $post['foto_satu'];
        $this->foto_empat = $post['foto_empat'];
        $this->db->insert($this->_table, $this);
    }
}
