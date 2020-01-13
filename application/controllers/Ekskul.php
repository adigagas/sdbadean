<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekskul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_Ekskul');
    }

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');

        $data['ekskul'] = $this->M_Ekskul->getAllEkskul();
        $this->load->view('ekskul/ekskul', $data);
    }

    public function tambahEkskul()
    {
        $this->M_Ekskul->addEkskul();
        redirect('Ekskul');
    }

    public function editEkskul($id_ekskul = null)
    {
        $this->M_Ekskul->UpdateEkskul($id_ekskul);
        redirect('Ekskul');
    }

    public function hapusEkskul($id_ekskul = null)
    {
        if ($id_ekskul) {
            $this->M_Ekskul->deleteEkskul($id_ekskul);
            $this->session->set_flashdata('message', 'GTK telah dihapus');
            redirect('Ekskul/index');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Ekskul/index');
        }
    }

    public function print($id_ekskul)
    {
        $data['detailekskul'] =  $this->M_Gtk->getById($id_ekskul);
        $this->load->view('ekskul/print_ekskul', $data);
    }
}
