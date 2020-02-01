<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Absen extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }


    function index_get()
    {

        $data = $this->db->get('tb_pelajaran')->result();
        $this->response(array("result" => $data, 200));
    }

    function absensi_post()
    {
        $id_siswa = $this->input->post('id_siswa');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $bulan = $this->input->post('bulan');
        //----------------------------
        $this->db->select('COUNT(keterangan) as jumlah,keterangan,nama_rombel');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->group_by('keterangan');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->where('tb_absensi.id_pelajaran', $id_pelajaran);
        $this->db->where('keterangan', "I");
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $i = $this->db->get('tb_absensi')->row_array();
        //----------------------------
        $this->db->select('COUNT(keterangan) as jumlah,keterangan,nama_rombel');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->group_by('keterangan');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->where('tb_absensi.id_pelajaran', $id_pelajaran);
        $this->db->where('keterangan', "A");
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $a = $this->db->get('tb_absensi')->row_array();
        //----------------------------
        $this->db->select('COUNT(keterangan) as jumlah,keterangan,nama_rombel');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->group_by('keterangan');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->where('tb_absensi.id_pelajaran', $id_pelajaran);
        $this->db->where('keterangan', "H");
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $h = $this->db->get('tb_absensi')->row_array();
        //----------------------------
        $this->db->select('COUNT(keterangan) as jumlah,keterangan,nama_rombel');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_pelajaran', 'tb_absensi.id_pelajaran=tb_pelajaran.id_pelajaran');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->group_by('keterangan');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->where('tb_absensi.id_pelajaran', $id_pelajaran);
        $this->db->where('keterangan', "S");
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $s = $this->db->get('tb_absensi')->row_array();
        //----------------------------
        $this->db->select('tanggal_absensi,nama_rombel');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->group_by('keterangan');
        $this->db->order_by('id_absensi', 'ASC');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $tgl = $this->db->get('tb_absensi')->row_array();
        //list($day, $date, $month, $year) = mb_split('[ ]', $tgl['tanggal_absensi']);
        //----------------------------



        $data['jumlah_i'] = $i['jumlah'];
        $data['jumlah_a'] = $a['jumlah'];
        $data['jumlah_h'] = $h['jumlah'];
        $data['jumlah_s'] = $s['jumlah'];
        $data['nama_rombel'] = $tgl['nama_rombel'];
        $data['tanggal'] =  $tgl['tanggal_absensi'];
        if ($data) {
            if ($tgl['tanggal_absensi']) {
                $this->response($data, 200);
            } else {
                $this->response(array('status' => 'Belum Ada Abseensi Bulan Ini', 502));
            }
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    public function bulan_post()
    {
        $id_siswa = $this->input->post('id_siswa');
        $id_pelajaran = $this->input->post('id_pelajaran');
        $bulan = $this->input->post('bulan');

        //----------------------------
        $this->db->select('tb_siswa.id_siswa');
        $this->db->join('tb_siswa', 'tb_absensi.id_siswa=tb_siswa.id_siswa');
        $this->db->join('tb_rombel', 'tb_absensi.id_rombel=tb_rombel.id_rombel');
        $this->db->where('tb_absensi.id_siswa', $id_siswa);
        $this->db->like('tanggal_absensi', $bulan, 'both');
        $tgl = $this->db->get('tb_absensi')->row_array();

        if ($tgl) {
            $this->response($tgl, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
