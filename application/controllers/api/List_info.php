<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class List_info extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
        $this->load->model("M_info");
    }


    function index_get()
    {
        $event = $this->M_info->info()->result();
        $this->response(array("result" => $event, 200));
    }

    function data_get($id_info = null)
    {
        if (!isset($id_info)) redirect('Info/index');
        $event = $this->db->get_where('tb_info', array('id_info' => $id_info))->result();
        $this->response(array("result" => $event, 200));
    }
}
