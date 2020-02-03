<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_rombel');
        $this->load->model('M_penilaian');
    }

    public function index()
    {
        $data['id_rombel'] = $this->input->post('id_rombel');
        $data['nama_rombel'] = $this->input->post('nama_rombel');
        $data['ki'] = $this->db->get('tb_ki')->result();
        $this->load->view('Penilaian/penilaian', $data);
    }

    public function kd()
    {
        $data['rombel'] = $this->M_rombel->getAllRombel();
        $data['kelas'] = $this->M_rombel->getKelas();
        $data['pelajaran'] = $this->M_penilaian->getPelajaran();
        $data['tahun'] = $this->M_penilaian->getTahun();
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/kd_view_example', $data);
    }

    public function userList()
    {
        $postData = $this->input->post();
        $data = $this->M_penilaian->getUsers($postData);
        echo json_encode($data);
    }

    public function userListI()
    {
        $postData = $this->input->post();
        $data = $this->M_penilaian->getUsersI($postData);
        echo json_encode($data);
    }

    public function userListII()
    {
        $postData = $this->input->post();
        $data = $this->M_penilaian->getUsersII($postData);
        echo json_encode($data);
    }

    public function userListIII()
    {
        $postData = $this->input->post();
        $data = $this->M_penilaian->getUsersIII($postData);
        echo json_encode($data);
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
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/nilai_sikap_spiritual', $data);
    }

    public function nilai_sikap_sosial()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Penilaian/nilai_sikap_sosial', $data);
    }

    public function nilai_mapel()
    {
        $data['id_ki'] = $this->input->post('id_ki');
        $data['nama_ki'] = $this->input->post('nama_ki');
        $data['id_pelajaran'] = $this->input->post('id_pelajaran');
        $data['nama_rombel'] = $this->input->post('nama_rombel');
        $data['id_rombel'] = $this->input->post('id_rombel');
        $id = $this->input->post('id_rombel');
        $query = $this->db->query('SELECT * FROM tb_rombel WHERE id_rombel = "' . $id . '"');
        foreach ($query->result() as $row) {
            $id_kelas = $row->id_kelas;
            $semester = $row->semester;
            $tahun_ajaran = $row->tahun_ajaran;
        }
        $id_pelajaran = $this->input->post('id_pelajaran');
        $id_ki = $this->input->post('id_ki');
        echo $id_kelas, $id_pelajaran, $id_ki, $semester, $tahun_ajaran;
        $data['indikator_show'] = $this->M_penilaian->getIndikator($id_kelas, $id_pelajaran, $id_ki, $semester, $tahun_ajaran);
        // $show = $this->M_penilaian->getIndikator($id_kelas, $id_pelajaran, $id_ki, $semester, $tahun_ajaran);
        // print_r($show);

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
