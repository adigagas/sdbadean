<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Info_mapel extends REST_Controller
{

    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }


    function info_post()
    {

        $id_rombel = $this->input->post('id_rombel');
        $this->db->join('tb_pelajaran', 'tb_pelajaran.id_pelajaran=tb_info_mapel.id_pelajaran');
        $this->db->where('id_rombel', $id_rombel);
        $data = $this->db->get('tb_info_mapel')->result();
        $this->response(array("result" => $data, 200));
    }
}
