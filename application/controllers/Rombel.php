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
        $data['kelas'] = $this->M_rombel->getKelas();
        $data['wali'] = $this->M_rombel->getWali();
        $this->load->view('peserta_didik/rombongan_belajar', $data);
    }

    public function detail_rombel($id_rombel)
    {
        $data['rombel'] = $this->M_rombel->getDetailRombel($id_rombel);
        $data['count'] = $this->M_rombel->getCount($id_rombel);
        $data['rombel_detail'] = $this->M_rombel->getRombel($id_rombel);
        $data['siswafree'] = $this->M_rombel->getSiswaIsFree();
        $data['kelas'] = $this->M_rombel->getKelas();
        $data['rombel_show'] = $this->M_rombel->getRombelSelect($id_rombel);
        $this->load->view('rombel/detail_rombel', $data);
    }

    public function addsiswa()
    {
        $id_rombel = $this->input->post('id_rombel');
        $id_siswa = $this->input->post('id_siswa');

        $data = array(
            'id_relasi_rombel_siswa' => md5(uniqid(rand(), true)),
            'id_rombel' => $id_rombel,
            'id_siswa' => $id_siswa,
        );
        $this->M_rombel->input_data($data, 'tb_relasi_rombel_siswa');
        redirect('rombel/detail_rombel/' . $id_rombel);
    }

    public function addRombel()
    {
        $id_kelas = $this->input->post('id_kelas');
        $id_gtk = $this->input->post('id_gtk');
        $nama_rombel = $this->input->post('nama_rombel');
        $tahun_ajaran = $this->input->post('tahun_ajaran');

        $data = array(
            'id_rombel' => md5(uniqid(rand(), true)),
            'id_kelas' => $id_kelas,
            'nama_rombel' => $nama_rombel,
            'id_gtk' => $id_gtk,
            'tahun_ajaran' => $tahun_ajaran,
        );
        $this->M_rombel->input_data($data, 'tb_rombel');
        redirect('rombel');
    }

    public function naikkelas()
    {
        $id_kelas = $this->input->post('id_kelas');
        $id_class = $this->input->post('id_class');
        $Id_siswaRombel = $this->input->post('Id_siswa');
        for ($i = 0; $i < count($Id_siswaRombel); $i++) {
            echo $this->input->post('Id_siswa')[$i];
            $this->db->set('id_rombel', $id_kelas);
            $this->db->where('id_siswa', $this->input->post('Id_siswa')[$i]);
            $this->db->update('tb_relasi_rombel_siswa');
        }
        redirect(base_url('rombel/detail_rombel/' . $id_class));
    }
}
