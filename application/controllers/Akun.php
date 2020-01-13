<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        $this->load->model('M_akun');
    }

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $data['akun'] = $this->M_akun->getakun();
        $data['jabatan'] = $this->M_akun->getjabatan();
        $data['gtk'] = $this->M_akun->getgtk();
        $this->load->view('Akun/akun', $data);
    }

    public function tambahAkun()
    {
        $this->M_akun->addAkun();
        redirect('Akun');
    }
    


}