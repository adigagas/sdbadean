<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_alamat_ortu extends CI_Model
{

    private $_table = 'tb_alamat_ortu';



    public $id_alamat_ortu;
    public $jalan_ortu;
    public $desa_ortu;
    public $kec_ortu;
    public $kab_ortu;
    public $prov_ortu;






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


    public function addAlamatOrtu()
    {
        $post = $this->input->post();
        $this->id_alamat_ortu = $post['id_alamat_ortu'];
        $this->desa_ortu = $post['desa_ortu'];
        $this->jalan_ortu = $post['jalan_ortu'];
        $this->kec_ortu = $post['kec_ortu'];
        $this->kab_ortu = $post['kab_ortu'];
        $this->prov_ortu = $post['prov_ortu'];
        $this->db->insert($this->_table, $this);
    }
}
