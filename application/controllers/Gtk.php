<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Gtk');
    }
    public function index()
    {
        $data['gtk'] = $this->M_Gtk->getAllGtk();
        $this->load->view('gtk/gtk', $data);
    }
    public function detailGtk($id_gtk)
    {
        $data['detailgtk'] = $this->db->get_where( 'tb_gtk', ['id_gtk' => $id_gtk])->row_array();
        $this->load->view('gtk/detail_gtk', $data);
    }
    public function inputGtk()
    {
        $this->load->view('gtk/tambah_gtk');
    }

    public function tambahGtk()
    {
        $data = [
            'id_gtk' => $this->input->post('id_gtk'),
            'nik_gtk' => $this->input->post('nik_gtk'),
            'nip_gtk' => $this->input->post('nip_gtk'),
            'nama_gtk' => $this->input->post('nama_gtk'),
            'tempat_lahir_gtk' => $this->input->post('tempat_lahir_gtk'),
            'tanggal_lahir_gtk' => $this->input->post('tanggal_lahir_gtk'),
            'jenis_kelamin_gtk' => $this->input->post('jenis_kelamin_gtk'),
            'pajago_gtk' => $this->input->post('pajago_gtk'),
            'gelar_gtk' => $this->input->post('gelar_gtk'),
            'posisi_gtk' => $this->input->post('posisi_gtk'),
            'agama_gtk' => $this->input->post('agama_gtk'),
            'jalan_gtk' => $this->input->post('jalan_gtk'),
            'desa_gtk' => $this->input->post('desa_gtk'),
            'kecamatan_gtk' => $this->input->post('kecamatan_gtk'),
            'kabupaten_gtk' => $this->input->post('kabupaten_gtk'),
            'provinsi_gtk' => $this->input->post('provinsi_gtk'),
            'tgl_masuk_gtk' => $this->input->post('tgl_masuk_gtk'),
            'tgl_keluar_gtk' => $this->input->post('tgl_keluar_gtk'),
            'foto_gtk' => $this->_uploadImage()
        ];


        $this->M_Gtk->addGtk($data);
        $this->session->set_flashdata('tambahgtk', '<div class="alert alert-success" role="alert">
                GTK ditambahkan
              </div>');
        redirect('Gtk/index');
    }

    private function _uploadImage()
    {
        $config['upload_path']          =  '.vendor/assets/images/';
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

        return "default.jpg";
    }

    public function hapusGtk($id_gtk){
        if ($id_gtk) {
            $this->M_Gtk->deleteGtk($id_gtk);
            $this->session->set_flashdata('message', 'GTK telah dihapus');
            redirect('Gtk/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Gtk/index');
        }
    }
  
}
