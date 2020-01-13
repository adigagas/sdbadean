<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Ekskul extends CI_Model
{
    private $_table = "tb_ekskul";
    public $id_ekskul;
    public $nama_ekskul;
    public $pj_ekskul;
 


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



    function getAllEkskul()
    {
        return $this->db->get($this->_table)->result();
    }

    function addEkskul()
    {
        $post = $this->input->post();
        $this->id_ekskul = $post['id_ekskul'];
        $this->nama_ekskul = $post['nama_ekskul'];
        $this->pj_ekskul = $post['pj_ekskul'];
       
        $this->db->insert($this->_table, $this);
    }

    function updateEkskul($id_ekskul)
    {
        $post = $this->input->post();
        $this->id_ekskul = $post['id_ekskul'];
        $this->nama_ekskul = $post['nama_ekskul'];
        $this->pj_ekskul = $post['pj_ekskul'];
        
        $this->db->update($this->_table, $this, array("id_ekskul" => $id_ekskul));
    }

    function deleteEkskul($id_ekskul)
    {
        $this->_deleteImage($id_ekskul);
        return $this->db->delete($this->_table, array("id_ekskul" => $id_ekskul));
    }

    public function getById($id_ekskul)
    {
        return $this->db->get_where($this->_table, ["id_ekskul" => $id_ekskul])->row();
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
