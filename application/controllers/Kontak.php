<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
		$data['title'] = 'KOS RESTY';
        $this->load->view('kontak', $data);
    }

	public function tambah_aksi()
	{	
		// panggil model
		$this->load->model('Model_kontak');
		$this->Model_kontak->tambah_kontak();

		// kembalikan ke home
		redirect('/kontak');
	}
}