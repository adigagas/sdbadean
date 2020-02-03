<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class LoginOrtu extends REST_Controller
{

	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();

		#Configure load model api table users
		$this->load->model('M_device');
	}

	function index_get()
	{
		$a = $this->M_device->coba()->result();
		$this->response(array("result" => $a, 200));
	}

	function index_post()
	{
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');
		$cek = $this->M_device->get_pesan_by_id($nisn, $password);
		if ($cek) {
			$output['id_device'] = $cek['id_device'];
			$output['id_siswa'] = $cek['id_siswa'];
			$output['nisn'] = $nisn;
			$output['password'] = $cek['password'];
			$output['token'] = $cek['token'];
			$output['nama_siswa'] = $cek['nama_siswa'];
			$output['jenis_kelamin_siswa'] = $cek['jenis_kelamin_siswa'];
			//$output['keterangan'] = $cek['keterangan'];
			//$output['tanggal_absensi'] = $cek['tanggal_absensi'];
			//$output['waktu_mulai'] = $cek['waktu_mulai'];
			//$output['waktu_selesai'] = $cek['waktu_selesai'];
			//$output['nama_pelajaran'] = $cek['nama_pelajaran'];
			//$output['nama_rombel'] = $cek['nama_rombel'];
			//$output['nama_gtk'] = $cek['nama_gtk'];
			$this->response($output, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
