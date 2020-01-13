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
        $data['jabatan'] = $this->session->userdata('jabatan');

        $id_gtk = $this->session->userdata('id_gtk');
        $data['laporan'] = $this->M_absensi->reportAbsensi($id_gtk);
        $this->load->view('absensi/absensi_siswa', $data);
    }

    public function absenSiswa()
    {
        $waktu = date('Y-m-d');
        $data['waktu'] = formatHariTanggal($waktu);
        $nama_rombel = $this->input->post('nama_rombel');
        $id_jadwal_mapel = $this->input->post('id_jadwal_mapel');
        $nama_pelajaran = $this->input->post('nama_pelajaran');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_rombel = $this->input->post('id_rombel');
        $id_gtk =  $this->session->userdata('id_gtk');
        $data['rombel'] = $this->M_absensi->getMapel($id_rombel)->result();
        $data['id_pelajaran'] = $id_pelajaran;
        $data['nama_mapel'] = $nama_pelajaran;
        $data['nama_rombel'] = $nama_rombel;
        $data['jadwal_mapel'] = $id_jadwal_mapel;
        $data['id_gtk'] = $id_gtk;
        $data['id_rombel'] = $id_rombel;
        $this->load->view('absensi/data_absensi', $data);
    }

    public function absensData()
    {
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_gtk =  $this->session->userdata('id_gtk');
        $id_siswa = $this->input->post('id_siswa');
        $id_mapel = $this->input->post('id_mapel');
        $id_rombel = $this->input->post('id_rombel');
        $tanggal_absensi = $this->input->post('tanggal_absensi');

        for ($i = 0; $i < sizeof($id_siswa); $i++) {
            $keterangan = $_POST['keterangan' . $i];
            $data = array(
                'id_siswa' => $id_siswa[$i],
                'id_mapel' => $id_mapel,
                'tanggal_absensi' => $tanggal_absensi,
                'keterangan' => $keterangan,
                'id_gtk' => $id_gtk,
                'id_pelajaran' => $id_pelajaran,
                'id_rombel' => $id_rombel
            );
            $this->db->insert('tb_absensi', $data);
        }
        redirect('Admin/indexguru');
    }

    public function absenData()
    {
    }

    public function laporanAbsen()
    {
        $data['laporan'] = $this->M_absensi->getAbsensiSiswa()->result();
        $this->load->view('absensi/laporan_absensi', $data);
    }
}
