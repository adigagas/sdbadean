<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gtk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('gtk/gtk');
    }

    public function tambahGtk()
    {

        $this->load->view('gtk/tambah_gtk');
    }
}
