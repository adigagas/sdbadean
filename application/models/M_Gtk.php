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

    function addGtk($data)
    {
        $this->db->insert('tb_gtk', $data);
    }
    function updateGtk()
    {
    }

    function deleteGtk($id_gtk)
    {
        $this->_deleteImage($id_gtk);
        $this->db->where('id_gtk', $id_gtk);
        $this->db->delete('tb_gtk');
    }
    private function _deleteImage($id_gtk)
    {
        $gtk = $this->getById($id_gtk);
        if ($gtk->image != "camera.png") {
            $filename = explode(".", $gtk->foto_gtk)[0];
            return array_map('unlink', glob(FCPATH . ".vendor/assets/images/$filename.*"));
        }
    }
}
