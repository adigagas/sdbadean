<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');

        // Load model

        $this->load->model('M_laporan_absensi');
    }

    public function index()
    {

        $this->load->view('absensi/rekap_laporan_absensi');
    }

    public function userList()
    {

        // POST data
        $postData = $this->input->post();

        // Get data
        $data = $this->M_laporan_absensi->getUsers($postData);

        echo json_encode($data);
    }

    public function getKD()
    {
        $postData = $this->input->post();
        $data = $this->M_laporan_absensi->getKD($postData);

        echo json_encode($data);
    }

    public function cetakLaporan()
    {
        $cek['id_rombel'] = $this->input->post('id_rombel');
        $cek['nama_kategori'] = $this->input->post('nama_kategori');
        $cek['tahun'] = $this->input->post('tahun');
        $cek['bulan'] = $this->input->post('bulan');

        $this->db->where('nama_rombel', $cek['id_rombel']);
        $rombel = $this->db->get('tb_rombel')->row_array();
        $cek['id_rmbl'] =  $rombel['id_rombel'];
        $cek['id_gtk'] =  $rombel['id_gtk'];

        $this->db->where('nama_kategori', $cek['nama_kategori']);
        $mapel = $this->db->get('tb_kategori')->row_array();

        $cek['id_kategori'] = $mapel['id_kategori'];




        $this->load->view('absensi/cetak_laporan_absensi', $cek);
    }
}
