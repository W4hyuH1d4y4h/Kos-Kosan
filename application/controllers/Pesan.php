<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->model('Kamar_model');
        $data['kamar'] = $this->Kamar_model->getpesankamar();
		$data['title'] = 'KOS RESTY';
        $this->load->view('pesan', $data);
    }
    public function tambah_aksi(){
        $this->load->model('Kamar_model');
        $this->Kamar_model->tambahPenghuni();

        redirect('/Pesan');
        // redirect('/pembayaran?id_pemesan='.$id_pemesan);
    }
    
    public function pesan_kamar(){
        $this->load->model('Kamar_model');
        $data['kamar']=$this->Kamar_model->getpesankamar();

        redirect('/Pesan');
    }

    public function hapus_penghuni_lama(){
        $this->load->model('Kamar_model');
        $data['kamar']=$this->Kamar_model->hapusPenghuni();

        redirect('/Pesan');
    }
}

