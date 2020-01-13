<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_relasi_siswa extends CI_Model
{

    private $_table = 'tb_relasi_siswa';



    public $id_siswa;
    public $id_ayah;
    public $id_ibu;
    public $id_alamat_ortu;
    public $id_wali;
    public $id_alamat_wali;




    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_ayah',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function addRelasi()
    {
        $post = $this->input->post();
        $this->id_ayah = $post['id_ayah'];
        $this->id_ibu = $post['id_ibu'];
        $this->id_wali = $post['id_wali'];
        $this->id_alamat_ortu = $post['id_alamat_ortu'];
        $this->id_alamat_wali = $post['id_alamat_wali'];
        $this->id_siswa = $post['id_siswa'];
        $this->db->insert($this->_table, $this);
    }

    public function getDetailSiswa($id_siswa)
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

    public function getexportSiswa()
    {
        $this->db->select('*');
        $this->db->from('tb_relasi_siswa');
        $this->db->join('tb_siswa', 'tb_siswa.id_siswa =tb_relasi_siswa.id_siswa');
        $this->db->join('tb_wali', 'tb_wali.id_wali=tb_relasi_siswa.id_wali');
        $this->db->join('tb_alamat_wali', 'tb_alamat_wali.id_alamat_wali=tb_relasi_siswa.id_alamat_wali');
        $this->db->join('tb_alamat_ortu', 'tb_alamat_ortu.id_alamat_ortu=tb_relasi_siswa.id_alamat_ortu');
        $this->db->join('tb_ayah', 'tb_ayah.id_ayah=tb_relasi_siswa.id_ayah');
        $this->db->join('tb_ibu', 'tb_ibu.id_ibu=tb_relasi_siswa.id_ibu');
        $query = $this->db->get();
        return $query;
    }
}
