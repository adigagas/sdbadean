<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ibu extends CI_Model
{

    private $_table = 'tb_ibu';



    public $nama_ibu;
    public $pekerjaan_ibu;
    public $id_ibu;



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


    public function addIbu()
    {
        $post = $this->input->post();
        $this->nama_ibu = $post['nama_ibu'];
        $this->pekerjaan_ibu = $post['pekerjaan_ibu'];
        $this->id_ibu = $post['id_ibu'];
        $this->db->insert($this->_table, $this);
    }
}
