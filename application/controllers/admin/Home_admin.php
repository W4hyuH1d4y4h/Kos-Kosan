<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
        if (!$this->session->userdata('username')) {
            redirect('admin/Login_admin');
        }
    }
    public function index()
    {
        $dataAdm = $this->session->userdata('username');
        $sql = "SELECT * FROM admin";
        $hasil = $this->db->query($sql);
        $dataAdm2['adm'] = $hasil->result_array();
        // $dataAdm['adm'] = $dataAdm2[0]['username'];

        $data = $dataAdm2;

        $this->load->view('admin/home', $data);
    }
}
