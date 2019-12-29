<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rombel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peserta_didik');
        $this->load->model('M_rombel');
        $this->load->model('M_relasi_siswa');
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['rombel'] = $this->M_rombel->getAllRombel();
        $this->load->view('peserta_didik/rombongan_belajar', $data);
    }

    public function detail_rombel($id_rombel)
    {
        $data['rombel'] = $this->M_rombel->getDetailRombel($id_rombel);
        $this->load->view('rombel/detail_rombel', $data);
    }
}
