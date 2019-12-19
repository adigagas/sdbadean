<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alamat_wali extends CI_Model
{

    private $_table = 'tb_alamat_wali';

    public $id_alamat_wali;
    public $jalan_wali;
    public $desa_wali;
    public $kec_wali;
    public $kab_wali;
    public $prov_wali;

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


    public function addAlamatWali()
    {
        $post = $this->input->post();
        $this->id_alamat_wali = $post['id_alamat_wali'];
        $this->jalan_wali = $post['jalan_wali'];
        $this->desa_wali = $post['desa_wali'];
        $this->kec_wali = $post['kec_wali'];
        $this->kab_wali = $post['kab_wali'];
        $this->prov_wali = $post['prov_wali'];
        $this->db->insert($this->_table, $this);
    }
}
