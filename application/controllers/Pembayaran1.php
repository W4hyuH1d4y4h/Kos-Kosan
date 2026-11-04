<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
		$data['title'] = 'KOS RESTY';
		$this->load->model('Pembayaran_model');
		$data['pemesan'] = $this->Pembayaran_model->get_pemesan();
        $this->load->view('pembayaran', $data);
    }

	public function konfir_pembayaran()
	{	
		// panggil model
		$this->load->model('Pembayaran_model');
		$this->Pembayaran_model->aksi_bayar();

		// kembalikan ke home
		redirect('/Pembayaran');
	}

	public function aksi_pesan()
	{	
		// panggil model
		$this->load->model('Pembayaran_model');
		$this->Pembayaran_model->get_pemesan();

		// kembalikan ke home
		redirect('/Pembayaran');
	}
}