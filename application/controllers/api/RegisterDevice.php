<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class RegisterDevice extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    public function index_get()
    {
    }





    function cek_post()
    {
        $nisn = $this->input->post('nisn');
        $this->db->where('nomor_induk_sn', $nisn);
        $data = $this->db->get('tb_siswa')->row_array();
        $id_siswa = $data['id_siswa'];
        //---------------------------------------
        $this->db->select('*');
        $this->db->from('tb_alamat_ortu');
        $this->db->join('tb_relasi_siswa', 'tb_relasi_siswa.id_alamat_ortu=tb_alamat_ortu.id_alamat_ortu');
        $this->db->where('id_siswa', $id_siswa);
        $data2 = $this->db->get()->row_array();
        //----------------------------------------
        $this->db->select('*');
        $this->db->from('tb_rombel');
        $this->db->join('tb_relasi_rombel_siswa', 'tb_relasi_rombel_siswa.id_rombel=tb_rombel.id_rombel');
        $this->db->where('id_siswa', $id_siswa);
        $data3 = $this->db->get()->row_array();
        //-----------------------------------------------
        $this->db->select('*');
        $this->db->from('tb_ayah');
        $this->db->join('tb_relasi_siswa', 'tb_relasi_siswa.id_ayah=tb_ayah.id_ayah');
        $this->db->where('id_siswa', $id_siswa);
        $data4 = $this->db->get()->row_array();

        //-----------------------------------------------
        $this->db->select('*');
        $this->db->from('tb_ibu');
        $this->db->join('tb_relasi_siswa', 'tb_relasi_siswa.id_ibu=tb_ibu.id_ibu');
        $this->db->where('id_siswa', $id_siswa);
        $data5 = $this->db->get()->row_array();
        //----------------------------------------

        $this->db->where('nisn', $nisn);
        $cek = $this->db->get('tb_device')->row_array();

        if ($cek == 0) {
            if ($data) {
                $data['alamat'] = $data2['jalan_ortu'] . " , " . $data2['desa_ortu'] . " , " . $data2['kec_ortu'] . " , " . $data2['kab_ortu'] . " , " . $data2['prov_ortu'];
                $data['kelas'] = $data3['nama_rombel'];
                $data['nama_ayah'] = $data4['nama_ayah'];
                $data['nama_ibu'] = $data5['nama_ibu'];
                $this->response($data, 200);
            } else {
                $this->response(array('ket' => 'NISN tidak ada', 502));
            }
        } else {
            $this->response(array('stat' => 'Data Sudah Ada', 502));
        }
    }


    function index_post()
    {
        $data = array(
            'nisn'           => $this->post('nisn'),
            'password'           => $this->post('password'),
            'token'           => $this->post('token')

        );
        $insert = $this->db->insert('tb_device', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
