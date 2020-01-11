<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function indexkepsek()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('index', $data);
    }
    public function indexguru()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('index', $data);
    }
    public function indexoperator()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('index', $data);
    }
    public function indextu()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('index', $data);
    }
}
