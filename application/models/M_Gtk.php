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
    public $foto_gtk = "camera.jpg";


    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nip',
                'label' => 'NIP',
                'rules' => 'required | numeric'
            ],
            [
                'field' => 'nama',
                'label' => 'Nama',
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
            if ($post["old_image"] != 'camera.jpg') {
                unlink(FCPATH . './vendor/assets/images/' . $post["old_image"]);
            }
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
        if ($gtk->image != "camera.jpg") {
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

        return "camera.jpg";
    }
}
