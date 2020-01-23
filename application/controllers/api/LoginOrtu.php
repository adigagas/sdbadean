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
		$a = $this->db->get('tb_device')->result();
		$this->response(array("result" => $a, 200));
	}

	function index_post()
	{
		$nisn = $this->input->post('nisn');
		$password = $this->input->post('password');
		$cek = $this->M_device->get_pesan_by_id($nisn,$password);
		if ($cek) {
			$output['id_device'] = $cek['id_device'];
			$output['nisn'] = $cek['nisn'];
			$output['password'] = $cek['password'];
			$output['token'] = $cek['token'];
			$this->response($output, 200);
		} else {
			$this->response(array('status' => 'fail', 502));
		}
	}
}
