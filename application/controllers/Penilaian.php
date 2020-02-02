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
        $data['id_rombel'] = $this->input->post('id_rombel');
        $data['nama_rombel'] = $this->input->post('nama_rombel');
        $data['ki'] = $this->db->get('tb_ki')->result();
        $this->load->view('Penilaian/penilaian', $data);
    }

    public function cek_rombel()
    {
        $id_gtk = $this->session->userdata('id_gtk');
        $this->db->where('id_gtk', $id_gtk);
        $data['rombel'] = $this->db->get('tb_rombel')->result();
        $this->load->view('Penilaian/cek_rombel', $data);
    }

    public function nilai_sikap_spiritual()
    {
        $this->load->view('Penilaian/nilai_sikap_spiritual');
    }

    public function nilai_sikap_sosial()
    {
        $this->load->view('Penilaian/nilai_sikap_sosial');
    }

    public function nilai_mapel()
    {
        $data['id_ki'] = $this->input->post('id_ki');
        $data['nama_ki'] = $this->input->post('nama_ki');
        $data['id_pelajaran'] = $this->input->post('id_pelajaran');
        $data['nama_rombel'] = $this->input->post('nama_rombel');
        $data['id_rombel'] = $this->input->post('id_rombel');

        if ($data['id_ki'] == "KI-1") {
            $this->load->view('Penilaian/nilai_sikap_spiritual');
        } else if ($data['id_ki'] == "KI-2") {
            $this->load->view('Penilaian/nilai_sikap_sosial');
        } else {

            //---------------------------Ambil Id GTK-----------------------------
            $this->db->where('id_pelajaran', $data['id_pelajaran']);
            $mapel = $this->db->get('tb_mapel')->row_array();
            //---------------------------Ambil Nama Pelajaran-----------------------------
            $this->db->where('id_pelajaran', $data['id_pelajaran']);
            $pelajaran = $this->db->get('tb_pelajaran')->row_array();
            $data['nama_pelajaran'] = $pelajaran['nama_pelajaran'];
            //---------------------------Ambil Id Nama GTK--------------------------
            $this->db->where('id_gtk', $mapel['id_gtk']);
            $gtk = $this->db->get('tb_gtk')->row_array();
            $data['nama_gtk'] = $gtk['nama_gtk'];
            $data['nip_gtk'] = $gtk['nip_gtk'];

            $this->load->view('Penilaian/nilai_mapel', $data);
        }
    }
}
