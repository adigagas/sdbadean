<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_akun extends CI_Model
{

    private $_table = 'users';



    public $id_login;
    public $id_gtk;
    public $username;
    public $password;
    public $jabatan;




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


    public function addAkun()
    {
        $post = $this->input->post();
        $this->id_login = $post['id_login'];
        $this->id_gtk = $post['id_gtk'];
        $this->username = $post['username'];
        $this->password = $post['password'];
        $this->jabatan = $post['jabatan'];
        $this->db->insert($this->_table, $this);
    }
    public function getakun()
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('tb_gtk', 'tb_gtk.id_gtk =users.id_gtk');
        $this->db->join('jabatan', 'jabatan.id_jabatan=users.jabatan');
        $query = $this->db->get();
        return $query->result();
    }
    public function getjabatan()
    {
        return $this->db->get('jabatan')->result();
    }
    public function getgtk()
    {
        return $this->db->get('tb_gtk')->result();
    }

    public function getAkunSelect($id_gtk)
    {
        $this->db->select('*');
        $this->db->from("users");
        $this->db->where("id_gtk !=", $id_gtk);
        $query = $this->db->get();
        return $query->result();
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
