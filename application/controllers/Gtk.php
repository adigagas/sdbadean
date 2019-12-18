<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Gtk');
    }

    public function index()
    {

        $this->load->view('gtk/gtk');
    }

    public function detailGtk()
    {
        $this->load->view('gtk/detail_gtk');
    }

    public function tambahGtk()
    {

        $this->load->view('gtk/tambah_gtk');
    }
}
