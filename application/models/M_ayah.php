<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ayah extends CI_Model
{

    private $_table = 'tb_ayah';



    public $nama_ayah;
    public $pekerjaan_ayah;
    public $id_ayah;



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


    public function addAyah()
    {
        $post = $this->input->post();
        $this->nama_ayah = $post['nama_ayah'];
        $this->pekerjaan_ayah = $post['pekerjaan_ayah'];
        $this->id_ayah = $post['id_ayah'];
        $this->db->insert($this->_table, $this);
    }
}
