<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_info extends CI_Model
{

    private $_table = 'tb_info';



    public $id_info;
    public $judul;
    public $description;
    public $tgl_publish;
    public $gambar = "camera.jpg";




    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function addInfo()
    {
        $post = $this->input->post();
        $this->id_info = $post['id_info'];
        $this->judul = $post['judul'];
        $this->description = $post['description'];
        $this->tgl_publish = $post['tgl_publish'];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);
    }
    public function getinfo()
    {
        $query = $this->db->get('tb_info');
        return $query->result();
    }
    
    function updateInfo($id_info)
    {
        $post = $this->input->post();
        $this->id_info = $post['id_info'];
        $this->judul = $post['judul'];
        $this->description = $post['description'];
        $this->tgl_publish = $post['tgl_publish'];
        $this->gambar = $this->_uploadImage();
        $this->db->update($this->_table, $this, array("id_login" => $id_info));
    }

    public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["id_info" => $id_info])->row();
    }
    function deleteInfo($id_info)
    {
        return $this->db->delete($this->_table, array("id_info" => $id_info));
    }

    private function _deleteImage($id_info)
    {
        $info = $this->getById($id_info);
        if ($info->image != "camera.jpg") {
            $filename = explode(".", $info->gambar)[0];
            return array_map('unlink', glob(FCPATH . "./vendor/assets/images/$filename.*"));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  './vendor/assets/images/';
        $config['allowed_types']        = 'gif|jpg|png|JPG';
        $config['max_size']             = 9048;
        $config['overwrite']            = true;
        $config['file_name']            = $_FILES['gambar']['name'];
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }

        return "camera.jpg";
    }



    function info()
	{
        //$data = $this->db->query("SELECT tb_device.*, tb_siswa.nama_siswa, tb_absensi.keterangan, tb_absensi.tanggal_absensi, tb_mapel.waktu_mulai, tb_mapel.waktu_selesai, tb_pelajaran.nama_pelajaran, tb_rombel.nama_rombel, tb_gtk.nama_gtk FROM tb_device JOIN tb_siswa ON tb_siswa.nomor_induk_sn=tb_device.nisn JOIN tb_absensi ON tb_absensi.id_siswa=tb_siswa.id_siswa JOIN tb_mapel ON tb_mapel.id_jadwal_mapel=tb_absensi.id_mapel JOIN tb_pelajaran ON tb_pelajaran.id_pelajaran=tb_absensi.id_pelajaran JOIN tb_rombel ON tb_rombel.id_rombel=tb_absensi.id_rombel JOIN tb_gtk ON tb_gtk.id_gtk=tb_absensi.id_gtk WHERE tb_device.nisn='$nisn' AND tb_device.password='$password'")->row_array();
        $this->db->select('*');
        $this->db->from('tb_info');
        $this->db->order_by('tgl_publish DESC');
        $data = $this->db->get();
		return $data;
	}

    
}
