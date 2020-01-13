<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashbord extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		$this->load->view('user/dashbord');
	}
	function add_event()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$agama = $this->input->post('longlat');
		$keperluan = $this->input->post('keperluan');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'agama' => $agama,
			'keperluan' => $keperluan,

		);
		$this->m_data->add_event($data, 'akta');
		echo "<script>
                alert('Event Dibuat!');
                </script>";
		echo '<script>window.location="list_event";</script>';
	}
}
