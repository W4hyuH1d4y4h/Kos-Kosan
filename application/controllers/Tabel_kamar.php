<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel_kamar extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $data['title'] = 'KOS RESTY';
        if(!empty($this->session->userdata['data_user'])){
            redirect('/Home');
        }
    }

    public function index(){
        $this->load->model('Model_kamar');
        $data['kmr'] = $this->Model_kamar->getdatakmr();
        $data['title'] = 'TblKmr';

        // $data['title'] = 'KOS RESTY';
        $this->load->view('tabel-kamar', $data);
    }

    public function tambah_aksi()
    {   
        // panggil model
        $this->load->model('Model_kamar');
        $this->Model_kamar->tambah_K();

        // kembalikan ke home
        redirect('Tabel_kamar');
    }
}