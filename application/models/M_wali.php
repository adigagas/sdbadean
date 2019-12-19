<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wali extends CI_Model
{

    private $_table = 'tb_wali';



    public $id_wali;
    public $nama_wali;
    public $pekerjaan_wali;
    public $alamat_wali;
    public $hubungan_kel_wali;

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


    public function addWali()
    {
        $post = $this->input->post();
        $this->id_wali = $post['id_wali'];
        $this->nama_wali = $post['nama_wali'];
        $this->pekerjaan_wali = $post['pekerjaan_wali'];
        $this->alamat_wali = $post['desa_wali'];
        $this->hubungan_kel_wali = $post['hubungan_kel_wali'];
        $this->db->insert($this->_table, $this);
    }
}
