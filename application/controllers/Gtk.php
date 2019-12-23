<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_Gtk');
    }
    public function index()
    {
        $data['gtk'] = $this->M_Gtk->getAllGtk();
        $this->load->view('gtk/gtk', $data);
    }
    public function detailGtk($id_gtk)
    {
        $data['detailgtk'] = $this->db->get_where('tb_gtk', ['id_gtk' => $id_gtk])->row_array();
        $this->load->view('gtk/detail_gtk', $data);
    }
    public function inputGtk()
    {
        $this->load->view('gtk/tambah_gtk2');
    }

    public function tambahGtk()
    {
        $this->M_Gtk->addGtk();
        redirect('Gtk/index');
    }

    public function editGtk($id_gtk = null)
    {
        if ($this->input->post('submit')) {
            $this->M_Gtk->updateGtk($id_gtk);
            redirect('Gtk/index');
        }
        $data['gtk'] = $this->M_Gtk->getById($id_gtk);
        $this->load->view('gtk/edit_gtk', $data);
    }
    public function ubah($nis){
        if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
          if($this->SiswaModel->validation("update")){ // Jika validasi sukses atau hasil validasi adalah TRUE
            $this->SiswaModel->edit($nis); // Panggil fungsi edit() yang ada di SiswaModel.php
            redirect('siswa');
          }
        }
        
        $data['siswa'] = $this->SiswaModel->view_by($nis);
        $this->load->view('siswa/form_ubah', $data);
    }    

    public function hapusGtk($id_gtk = null)
    {
        if ($id_gtk) {
            $this->M_Gtk->deleteGtk($id_gtk);
            $this->session->set_flashdata('message', 'GTK telah dihapus');
            redirect('Gtk/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Gtk/index');
        }
    }

    public function print($id_gtk)
    {
        $data['detailgtk'] =  $this->M_Gtk->getById($id_gtk);
        $this->load->view('gtk/print_gtk', $data);
    }
}
