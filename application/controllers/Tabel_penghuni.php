<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tabel_penghuni extends CI_Controller {
    
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
        $this->load->model('Model_penghuni');
        $data['pgn'] = $this->Model_penghuni->getdatapenghuni();
        $data['title'] = 'TblPng';
        // $data['title'] = 'KOS RESTY';
        $this->load->view('tabel-penghuni', $data);
    }

    public function hapus()
    {   
        // panggil model
        $this->load->model('Model_penghuni');
        $data['pgn'] = $this->Model_penghuni->deletedatapenghuni();
        
        redirect('/tabel_penghuni');
    }

    public function edit()
    {   
        // panggil model
        $this->load->model('Model_penghuni');
        $data['pgn'] = $this->Model_penghuni->get_edit_penghuni();

        // panggil tampilan
        $this->load->view('tabel-penghuni', $data);
    }

    public function tambah()
    {   
        $this->load->view('tabel-penghuni');
    }
}