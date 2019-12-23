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
    public $jalan_gtk;
    public $desa_gtk;
    public $kec_gtk;
    public $kab_gtk;
    public $prov_gtk;
    public $tgl_masuk_gtk;
    public $tgl_keluar_gtk;
    public $foto_gtk = "camera.png";


    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'id_gtk',
                'label' => 'id_gtk',
                'rules' => 'required'
            ],

            [
                'field' => 'nik_gtk',
                'label' => 'nik_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'nip_gtk',
                'label' => 'nip_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'nama_gtk',
                'label' => 'nama_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'tempat_lahir_gtk',
                'label' => 'tempat_lahir_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggal_lahir_gtk',
                'label' => 'tanggal_lahir_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'jenis_kelamin_gtk',
                'label' => 'jenis_kelamin_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'pajago_gtk',
                'label' => 'pajago_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'gelar_gtk',
                'label' => 'gelar_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'posisi_gtk',
                'label' => 'posisi_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'agama_gtk',
                'label' => 'agama_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'jalan_gtk',
                'label' => 'jalan_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'desa_gtk',
                'label' => 'desa_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'kec_gtk',
                'label' => 'kec_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'kab_gtk',
                'label' => 'kab_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'prov_gtk',
                'label' => 'prov_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_masuk_gtk',
                'label' => 'tgl_masuk_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'tgl_keluar_gtk',
                'label' => 'tgl_keluar_gtk',
                'rules' => 'required'
            ],
            [
                'field' => 'foto_gtk',
                'label' => 'foto_gtk',
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
        $this->jalan_gtk = $post['jalan_gtk'];
        $this->desa_gtk = $post['desa_gtk'];
        $this->kec_gtk = $post['kec_gtk'];
        $this->kab_gtk = $post['kab_gtk'];
        $this->prov_gtk = $post['prov_gtk'];
        $this->tgl_masuk_gtk = $post['tgl_masuk_gtk'];
        $this->tgl_keluar_gtk = $post['tgl_keluar_gtk'];
        $this->foto_gtk = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
    
    function updateGtk($id_gtk)
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
        $this->jalan_gtk = $post['jalan_gtk'];
        $this->desa_gtk = $post['desa_gtk'];
        $this->kec_gtk = $post['kec_gtk'];
        $this->kab_gtk = $post['kab_gtk'];
        $this->prov_gtk = $post['prov_gtk'];
        $this->tgl_masuk_gtk = $post['tgl_masuk_gtk'];
        $this->tgl_keluar_gtk = $post['tgl_keluar_gtk'];
        if (!empty($_FILES["foto_gtk"]["name"])) {
            $this->foto_gtk = $this->_uploadImage();
        } else {
            $this->foto_gtk = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array("id_gtk" => $id_gtk));
    }

    function deleteGtk($id_gtk)
    {
        $this->_deleteImage($id_gtk);
        return $this->db->delete($this->_table, array("id_gtk" => $id_gtk));
    }

    public function getById($id_gtk)
    {
        return $this->db->get_where($this->_table, ["id_gtk" => $id_gtk])->row();
    }

    private function _deleteImage($id_gtk)
    {
        $gtk = $this->getById($id_gtk);
        if ($gtk->image != "camera.png") {
            $filename = explode(".", $gtk->foto_gtk)[0];
            return array_map('unlink', glob(FCPATH . "./vendor/assets/images/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './vendor/assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['foto_gtk']['name'];
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto_gtk')) {
            return $this->upload->data("file_name");
        }

        return "camera.png";
    }
}
