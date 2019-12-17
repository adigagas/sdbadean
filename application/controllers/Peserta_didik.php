<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta_didik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('peserta_didik/peserta_didik');
    }
}
