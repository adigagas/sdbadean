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



    function daftar_post()
    {
        $data = array(
            'nisn'           => $this->post('nisn'),
            'password'          => $this->post('password'),
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
