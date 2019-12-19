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
        $data['detailgtk'] = $this->db->get_where( 'tb_gtk', ['id_gtk' => $id_gtk])->row_array();
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
