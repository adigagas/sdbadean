<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function index()
    {
        $data['jabatan'] = $this->session->userdata('jabatan');
        $this->load->view('Profile', $data);
    }
}