<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {
        $this->load->view('Penilaian/penilaian');
    }

    public function nilai_sikap_spiritual()
    {
        $this->load->view('Penilaian/nilai_sikap_spiritual');
    }

    public function nilai_sikap_sosial()
    {
        $this->load->view('Penilaian/nilai_sikap_sosial');
    }

    public function nilai_mapel()
    {
        $this->load->view('Penilaian/nilai_mapel');
    }

}
