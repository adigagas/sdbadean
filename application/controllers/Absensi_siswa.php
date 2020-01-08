<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model 

        $this->load->model('M_absensi');
        $this->load->model('M_peserta_didik');

        //
        $this->load->library('form_validation');
        $this->load->library('ajax_pagination');
        // Per page limit 
        $this->perPage = 4;
        //
        $this->load->helper('url');
        $this->load->helper('array');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

        $this->load->view('absensi/absensi_siswa');
    }

    public function absenSiswa($id_kelas)
    {
        $data['modal'] = $this->M_absensi->getIdKelas($id_kelas)->result();
        $data['kelas'] = $this->M_absensi->getIdKelas($id_kelas)->row();
        $data['siswa'] = $this->M_absensi->getIdKelas($id_kelas)->result();
        $this->load->view('absensi/data_absensi', $data);
    }

    public function absenData()
    {

        $id_kelas = $this->input->post('id_kelas');
        $nama_siswa = $this->input->post('nama_siswa');
        if (!isset($id_kelas)) show_404();
        if ($this->M_absensi->addSiswa()) {

            $this->session->set_flashdata(
                'absensi',
                '
                <div class="container" style="margin:10px;">
                <p class="alert alert-success col-md-12 col-xs-12">' .  $nama_siswa .  ' telah di absen !</p>
                </div>
            '
            );
            redirect('absensi_siswa/absenSiswa/' . $id_kelas);
        }
    }

    public function laporanAbsen()
    {
        $data['laporan'] = $this->M_absensi->getAbsensiSiswa()->result();
        $this->load->view('absensi/laporan_absensi', $data);
    }
}