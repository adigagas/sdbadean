<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load model 

        $this->load->model('M_absensi');
        $this->load->model('M_user');
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
        $data['kepsek'] = $this->M_absensi->reportAbsensiKepsek();
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
        $waktu = date('Y-m-d');
        $hari = formatHariTanggal($waktu);

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
            //---------------------
            $mapel = $this->db->get_where('tb_pelajaran', ['id_pelajaran' => $data['id_pelajaran']])->row_array();
            $pel = $mapel['nama_pelajaran'];
            //--------------------
            $siswa = $this->db->get_where('tb_siswa', ['id_siswa' => $data['id_siswa']])->row_array();
            $nama = $siswa['nama_siswa'];
            //--------------------
            $insert = $this->db->insert('tb_absensi', $data);
            if ($insert > 0) {
                $this->db->where('nisn', $data['id_siswa']);
                $datauser = $this->db->get('tb_device')->result();
                foreach ($datauser as $user) {
                    $fcmUrl = 'https://fcm.googleapis.com/fcm/send';
                    $msg = array(
                        'body'  => $nama . ' pada hari ' . $hari . ' di mata pelajaran ' . $pel . ' keteranganya ' . $keterangan,
                        'title' => "Pemberitahuan baru ",
                        'sound' => 'default'
                    );
                    $dt = array(

                        'jenis_notif'   => "surat masuk",
                        'message'       => "No. Surat " . $keterangan,
                        'title'         => "Surat Masuk Baru ",
                        'sound'         => 'default'
                    );
                    $notification = [
                        "to"            => $user->token,
                        'notification'  => $msg,
                        'data'          => $dt
                    ];
                    $headers = [
                        'Authorization: key=AAAAvkADDYs:APA91bEwYrz9xAmyFth7bPn37xyDQEobkz5Rxl1rgcBM2LGCvzclxR61HY5qlLKraM3KWkHikOqTodaWt9Xz7BGO5wMKSxhVxJl2_VxRXuk6fb7ym2_wf20V92i9h-QMh4sMvRkc3wMH',
                        'Content-Type: application/json'
                    ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $fcmUrl);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($notification));
                    $insert = curl_exec($ch);
                    curl_close($ch);
                }
            }
        }
        redirect('Admin/indexguru');
    }

    public function absenDataHarian($id_mapel)
    {
        $waktu = date('Y-m-d');
        $data['waktu'] = formatHariTanggal($waktu);
        $data['laporan'] = $this->M_absensi->getAbsensiHarian($id_mapel)->result();
        $data['modal'] = $this->M_absensi->getAbsensiHarian($id_mapel)->result();
        $data['kelas'] = $this->M_absensi->getAbsensiHarian($id_mapel)->row();
        $this->load->view('absensi/laporan_absensi_hari', $data);
    }

    public function updateKehadiran()
    {
        $id_siswa = $this->input->post('id_siswa');
        $kehadiran = $this->input->post('kehadiran');
        $id_mapel = $this->input->post('id_mapel');
        $this->db->set('keterangan', $kehadiran);
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('tb_absensi');
        $this->session->set_flashdata(
            'brhsl',
            '<div class="alert alert-success">
            <p>Keterangan berhasil di rubah!</p>
            </div>'
        );
        redirect(base_url('Absensi_siswa/absenDataHarian/' . $id_mapel));
    }

    public function laporanAbsen()
    {

        $data['tanggal'] = $this->db->query("SELECT DISTINCT tanggal_absensi FROM  tb_absensi")->result();
        $data['laporan'] = $this->M_absensi->getAbsensiSiswa()->result();
        $this->load->view('absensi/laporan_absensi', $data);
    }
}
