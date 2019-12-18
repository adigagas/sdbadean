<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_didik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peserta_didik');
    }

    public function index()
    {

        $data['siswa'] = $this->M_peserta_didik->getAllSiswa();
        $this->load->view('peserta_didik/peserta_didik', $data);
    }

    public function tambahPeserta()
    {
        $this->load->view('peserta_didik/tambah_peserta_didik');
    }

    public function detailPeserta()
    {

        $this->load->view('peserta_didik/detail_peserta_didik');
    }

    public function mutasiKeluarPeserta()
    {

        $this->load->view('peserta_didik/mutasi_keluar_pd');
    }
}
