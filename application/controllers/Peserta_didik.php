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
        $this->load->model('M_rombel');
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

    public function cetakDetail($id_siswa = null)

    {
        $siswa = $this->M_relasi_siswa;
        $data["siswa"] = $siswa->getDetailSiswa($id_siswa);
        $this->load->view('peserta_didik/cetak_peserta_didik', $data);
    }

    public function detailPeserta($id_siswa = null)
    {
        $siswa = $this->M_relasi_siswa;
        $data["siswa"] = $siswa->getDetailSiswa($id_siswa);
        
        if(is_null($id_siswa)) {
            redirect(base_url(peserta_didik));
        } else {
            $this->load->view('peserta_didik/detail_peserta_didik', $data);
        }
    }

    public function mutasiKeluarPeserta()
    {

        $this->load->view('peserta_didik/mutasi_keluar_pd');
    }

    public function rombonganBelajar()
    {
        $data['rombel'] = $this->M_rombel->getAllRombel();
        $this->load->view('peserta_didik/rombongan_belajar', $data);
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
