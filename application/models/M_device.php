<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_device extends CI_Model
{

    private $_table = 'tb_device';



    public $nisn;
    public $password;
    public $token;



    function __construct()
    {
        parent::__construct();
    }

    public function rules()
    {
        return [
            [
                'field' => 'nisn',
                'label' => 'Name',
                'rules' => 'required'
            ]
        ];
    }


    public function addDevice()
    {
        $post = $this->input->post();
        $this->nisn = $post['nomor_induk_sn'];
        $this->password = $post['password'];
        $this->token = $post['token'];
        $this->db->insert($this->_table, $this);
    }
}
