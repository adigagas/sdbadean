<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/penilaian', $data);
    }

    public function nilai_sikap_spiritual()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/nilai_sikap_spiritual', $data);
    }

    public function nilai_sikap_sosial()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/nilai_sikap_sosial',$data);
    }

    public function nilai_mapel()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/nilai_mapel', $data);
    }

}
