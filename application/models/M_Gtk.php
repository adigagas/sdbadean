<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Gtk extends CI_Model
{
    private $_table = "tb_gtk";
    public $id_gtk;
    public $nik_gtk;
    public $nip_gtk;
    public $nama_gtk;
    public $tempat_lahir_gtk;
    public $tanggal_lahir_gtk;
    public $jenis_kelamin_gtk;
    public $pajago_gtk;
    public $gelar_gtk;
    public $posisi_gtk;
    public $agama_gtk;
    public $alamat_gtk;
    public $tgl_masuk_gtk;
    public $tgl_keluar_gtk;
    public $foto_gtk;


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
                'field' => 'id',
                'label' => 'id',
                'rules' => 'required'
            ]
        ];
    }



    function getAllGtk()
    {
        return $this->db->get($this->_table)->result();
    }

    function addGtk()
    {

        $post = $this->input->post();
        $this->id_gtk = $post['id_gtk'];
        $this->nik_gtk = $post['nik_gtk'];
        $this->nip_gtk = $post['nip_gtk'];
        $this->nama_gtk = $post['nama_gtk'];
        $this->tempat_lahir_gtk = $post['tempat_lahir_gtk'];
        $this->tanggal_lahir_gtk = $post['tanggal_lahir_gtk'];
        $this->jenis_kelamin_gtk = $post['jenis_kelamin_gtk'];
        $this->pajago_gtk = $post['pajago_gtk'];
        $this->gelar_gtk = $post['gelar_gtk'];
        $this->posisi_gtk = $post['posisi_gtk'];
        $this->agama_gtk = $post['agama_gtk'];
        $this->alamat_gtk = $post['alamat_gtk'];
        $this->tgl_masuk_gtk = $post['tgl_masuk_gtk'];
        $this->tgl_keluar_gtk = $post['tgl_keluar_gtk'];
        $this->foto_gtk = $post['foto_gtk'];
        $this->db->insert($this->_table, $this);
    }
    function updateGtk()
    {
    }

    function deleteGtk()
    {
    }
}
