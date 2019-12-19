<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_didik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_peserta_didik');
        $this->load->model('M_ayah');
        $this->load->model('M_ibu');
        $this->load->model('M_alamat_ortu');
        $this->load->model('M_alamat_wali');
        $this->load->model('M_wali');
        $this->load->model('M_relasi_siswa');


        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
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

    public function tambahPeserta2()
    {

        $this->load->view('peserta_didik/tambah_peserta_didik2');
    }

    public function detailPeserta()
    {

        $this->load->view('peserta_didik/detail_peserta_didik');
    }

    public function mutasiKeluarPeserta()
    {

        $this->load->view('peserta_didik/mutasi_keluar_pd');
    }

    public function simpanSiswa()
    {
        $this->M_peserta_didik->addSiswa();
        $this->M_ayah->addAyah();
        $this->M_ibu->addIbu();
        $this->M_alamat_ortu->addAlamatOrtu();
        $this->M_alamat_wali->addAlamatWali();
        $this->M_wali->addWali();
        $this->M_relasi_siswa->addRelasi();
        redirect('peserta_didik/index');
    }
    public function tambahPD()
    {

        $this->load->view('peserta_didik/tambah_pd');
    }
}
