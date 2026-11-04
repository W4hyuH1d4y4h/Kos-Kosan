<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		if (!empty($this->session->userdata['data_user'])) {
			redirect('/login');
		}
	}

	public function index()
	{
		$this->load->model('Model_home');
		$data['adm'] = $this->Model_home->getdataadm();
		$data['title'] = 'DasAdm';

		// $data['title'] = 'KOS RESTY';
		$this->load->view('home', $data);
	}

	public function hapus()
	{
		// panggil model
		$this->load->model('Model_home');
		$data['adm'] = $this->Model_home->deletedataadm();

		redirect('/home');
	}

	public function edit()
	{
		// panggil model
		$this->load->model('Model_home');
		$data['adm'] = $this->Model_home->get_edit_adm();

		// panggil tampilan
		$this->load->view('home', $data);
	}

	public function edit_aksi()
	{
		// panggil model
		$this->load->model('Model_home');
		$this->Model_home->aksi_edit_adm();

		// kembalikan ke home
		redirect('/home');
	}
}
