<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabel_Konfirmasi extends CI_Controller
{

    public function __construct()
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
        $sql = "SELECT * FROM daftar_kos WHERE status=0";
        $hasil =  $this->db->query($sql);
        $data['pgn'] =  $hasil->result_array($sql);
        $this->load->view('admin/tabel-konfirmasi', $data);
    }

    public function konfirm()
    {
        $id = $this->input->post('id');
        $sql = "UPDATE daftar_kos
        SET status = 1
        WHERE id_kos = '$id' ";
        $this->db->query($sql);
        redirect('admin/Home_admin');
    }
}
