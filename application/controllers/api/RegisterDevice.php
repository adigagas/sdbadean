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


    function cek_post()
    {

        $nisn = $this->input->post('nisn');
        $this->db->where('nomor_induk_sn', $nisn);
        $data = $this->db->get('tb_siswa')->result();
        if ($data) {
            $this->response(array('result' => $data, 200));
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }


    function daftar_post()
    {
        $tes = array(
            'nisn'           => $this->post('nisn')
        );
        $this->db->where('nomor_induk_sn', $tes['nisn']);
        $cek = $this->db->get('tb_siswa')->row_array();
        $id_siswa = $cek['id_siswa'];
        $data = array(
            'nisn'           => $id_siswa,
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
