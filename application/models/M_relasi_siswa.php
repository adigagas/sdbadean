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
}
