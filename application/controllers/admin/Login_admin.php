<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $hasil = $this->db->query($sql);
        $dataAdm = $hasil->result_array();

        if ($dataAdm) {
            $infoAdm = [
                'username' => $dataAdm[0]['username'],
            ];
            $this->session->set_userdata($infoAdm);
            redirect('admin/Home_admin');
        } else {
            $this->session->set_flashdata('message', 'Gagal');
            $this->load->view('admin/login');
        }
    }

    public function logout_admin()
    {
        $this->session->unset_userdata('username');
        redirect('admin/Login_admin');
    }
}
