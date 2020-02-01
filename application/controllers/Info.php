<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_info');
    }

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $data['info'] = $this->M_info->getinfo();
        $this->load->view('Info/info', $data);
    }

    public function tambahInfo()
    {
        if ($this->input->post('submit')) {
            $this->M_info->addInfo();
            redirect('Info/index');
        }

        $this->load->view('Info/tambahinfo');
    }
    
    public function hapusInfo($id_info = null)
    {
        if ($id_info) {
            $this->M_info->deleteInfo($id_info);
            $this->session->set_flashdata('hapusinfomessage', 'GTK telah dihapus');
            redirect('Info');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect('Info');
        }
    }

    public function editInfo($id_info = null)
    {
        if ($this->input->post('submit')) {
            $this->M_info->updateInfo($id_info);
            redirect('info/index');
        }
            $data['info'] = $this->M_info->getById($id_info);
            $this->load->view('info/editInfo', $data);
        
    }


}