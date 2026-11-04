<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kamar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        // panggil model
        $this->load->model('Kamar_model');
        $data['s_kmr'] = $this->Kamar_model->getdatakmr()->result();
        $data['title'] = 'KOS RESTY';

        // panggil tampilan
        $this->load->view('kamar', $data);
    }

    public function pesan_kamar()
    {
        $this->load->model('Kamar_model');
        $data['kamar'] = $this->Kamar_model->getpesankamar();

        redirect('Kamar');
    }
}
