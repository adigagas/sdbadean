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
        $data['tahun'] = $this->M_rombel->getTahun();
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('peserta_didik/rombongan_belajar', $data);
    }

    public function detail_rombel($id_rombel)
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $data['wali'] = $this->M_rombel->getWali();
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

    public function TidakNaik()
    {
        $nama_kelas = $this->input->post('nama_kelas');
        $id_class = $this->input->post('id_class');
        $Id_siswaRombel = $this->input->post('Id_siswa');
        $class_id = $this->input->post('class_id');
        $aboutgtk = $this->input->post('aboutgtk');
        $years_ajaran = $this->input->post('years_ajaran');
        echo $nama_kelas, $id_class, $Id_siswaRombel, $class_id, $aboutgtk, $years_ajaran;
    }

    public function NaikKelas()
    {
        $nama_kelas = $this->input->post('nama_kelas');
        $id_class = $this->input->post('id_class');
        $Id_siswaRombel = $this->input->post('Id_siswa');
        $class_id = $this->input->post('class_id');
        $aboutgtk = $this->input->post('id_gtk');
        $years_ajaran = $this->input->post('years_ajaran');
        $id_class_nonaik = $this->input->post('id_class_nonaik');
        $nama_rombel_nonaik = $this->input->post('nama_rombel_nonaik');
        $tahun_ajaran_nonaik = $this->input->post('tahun_ajaran_nonaik');
        $id_gtk_nonaik = $this->input->post('id_gtk_nonaik');

        $idRombel = md5(uniqid(rand(), true));
        $data = array(
            'id_rombel' => $idRombel,
            'id_kelas' => $class_id,
            'nama_rombel' => $nama_kelas,
            'id_gtk' => $aboutgtk,
            'tahun_ajaran' => $years_ajaran,
        );

        if (isset($_POST['remove_levels'])) {
            $query = $this->db->query('SELECT * FROM tb_rombel WHERE id_kelas = ' . $class_id . ' AND nama_rombel = "' . $nama_kelas . '" AND id_gtk ="' . $aboutgtk . '" AND tahun_ajaran = "' . $years_ajaran . '"');
            if ($query->num_rows() == 0) {

                $this->M_rombel->input_data($data, 'tb_rombel');
                for ($i = 0; $i < count($Id_siswaRombel); $i++) {
                    $data = array(
                        'id_relasi_rombel_siswa' => md5(uniqid(rand(), true)),
                        'id_rombel' => $idRombel,
                        'id_siswa' => $this->input->post('Id_siswa')[$i],
                    );
                    echo "done";
                    $this->M_rombel->input_data($data, 'tb_relasi_rombel_siswa');
                }
                redirect(base_url("rombel/detail_rombel/" . $id_class));
            } else if ($query->num_rows() == 1) {
                foreach ($query->result() as $row) {
                    $id_rombel = $row->id_rombel;
                    echo $row->id_rombel;
                }
                for ($i = 0; $i < count($Id_siswaRombel); $i++) {
                    $data = array(
                        'id_relasi_rombel_siswa' => md5(uniqid(rand(), true)),
                        'id_rombel' => $id_rombel,
                        'id_siswa' => $this->input->post('Id_siswa')[$i],
                    );
                    $this->M_rombel->input_data($data, 'tb_relasi_rombel_siswa');
                }
                redirect(base_url("rombel/detail_rombel/" . $id_class));
            }
        } else if (isset($_POST['noclasstrue'])) {
            $thisjust = $id_class_nonaik + 1;
            $query = $this->db->query('SELECT * FROM tb_rombel WHERE id_kelas = ' . $thisjust . ' AND nama_rombel = "' . $nama_rombel_nonaik . '" AND id_gtk ="' . $id_gtk_nonaik . '" AND tahun_ajaran = "' . $tahun_ajaran_nonaik . '"');
            echo $query->num_rows();
            if ($query->num_rows() == 0) {
                $yeah = array(
                    'id_rombel' => $idRombel,
                    'id_kelas' => $id_class_nonaik + 1,
                    'nama_rombel' => $nama_rombel_nonaik,
                    'id_gtk' => $id_gtk_nonaik,
                    'tahun_ajaran' => $tahun_ajaran_nonaik,
                );
                $this->M_rombel->input_data($yeah, 'tb_rombel');
                for ($i = 0; $i < count($Id_siswaRombel); $i++) {
                    $data = array(
                        'id_relasi_rombel_siswa' => md5(uniqid(rand(), true)),
                        'id_rombel' => $idRombel,
                        'id_siswa' => $this->input->post('Id_siswa')[$i],
                    );
                    echo "done";
                    $this->M_rombel->input_data($data, 'tb_relasi_rombel_siswa');
                }
                redirect(base_url("rombel/detail_rombel/" . $id_class));
            } else if ($query->num_rows() == 1) {
                foreach ($query->result() as $row) {
                    $id_rombel = $row->id_rombel;
                    echo $row->id_rombel;
                }
                for ($i = 0; $i < count($Id_siswaRombel); $i++) {
                    $data = array(
                        'id_relasi_rombel_siswa' => md5(uniqid(rand(), true)),
                        'id_rombel' => $id_rombel,
                        'id_siswa' => $this->input->post('Id_siswa')[$i],
                    );
                    $this->M_rombel->input_data($data, 'tb_relasi_rombel_siswa');
                }
                redirect(base_url("rombel/detail_rombel/" . $id_class));
            }
        }
    }
}
