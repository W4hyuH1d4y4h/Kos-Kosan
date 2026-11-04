<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
	}
	public function index()
	{
		if (!$this->session->userdata('email')) {
			$this->load->view('user/home_user');
		} else {
			$info['user'] = $this->db->get_where('penghuni', ['email' => $this->session->userdata('email')])->row_array();

			$profile1['id_penghuni'] = $info['user']['id_penghuni'];
			$profile2['nama'] = $info['user']['nama'];
			$profile3['email'] = $info['user']['email'];
			$profile4['foto'] = $info['user']['foto'];

			$data = $profile1 + $profile2 + $profile3 + $profile4;
			$this->load->view('user/home_user', $data);

			// echo '<pre>';
			// print_r($info['user']);
			// echo '</pre>';


		}
	}
}
