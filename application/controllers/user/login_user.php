<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function index()
    {
        // $data['title'] = 'KOS RESTY';
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus diisi!', 'valid_email' => 'Email anda tidak valid!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password harus diisi!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/login_user');
        } else {
            $this->login();
        }
    }

    private function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role = $this->input->post('inlineRadioOptions');

        if ($role == 1) {
            $this->logHuni($email, $password);
        } else {
            $this->logBos($email, $password);
        }
    }

    private function logHuni($email, $password)
    {
        $sql = "SELECT * FROM penghuni WHERE email = '$email'";
        $hasil = $this->db->query($sql);
        $data = $hasil->result_array();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        if ($data) {
            if (password_verify($password, $data['0']['password'])) {
                $info = [
                    'id_user' => $data['0']['penghuni'],
                    'nama' => $data['0']['nama'],
                    'email' => $data['0']['email'],
                ];

                $this->session->set_userdata($info);
                $this->session->set_flashdata('message', 'Berhasil');
                redirect('user/Home');
            } else {
                $this->session->set_flashdata('message2', 'gagal');
                redirect('user/login_user');
            }
        } else {
            $this->session->set_flashdata('message', 'Gagal');
            redirect('user/login_user');
        }
    }

    private function logBos($email, $password)
    {
        $sql = "SELECT * FROM penyewa WHERE email = '$email'";
        $hasil = $this->db->query($sql);
        $data = $hasil->result_array();

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';

        if ($data) {
            if (password_verify($password, $data['0']['password'])) {
                $info = [
                    'id_user' => $data['0']['penghuni'],
                    'nama' => $data['0']['nama'],
                    'email' => $data['0']['email'],
                    'nohp' => $data['0']['no_hp'],
                ];

                $this->session->set_userdata($info);
                $this->session->set_flashdata('message', 'Berhasil');
                redirect('user/Home');
            } else {
                $this->session->set_flashdata('message2', 'gagal');
                redirect('user/login_user');
            }
        } else {
            $this->session->set_flashdata('message', 'Gagal');
            redirect('user/login_user');
        }
    }

    public function logout()
    {
        // $this->session->sess_destroy();

        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        if ($this->session->userdata('nohp')) {
            $this->session->unset_userdata('nohp');
        }
        $this->session->set_flashdata('message3', 'sangat gagal');
        redirect('user/login_user');
    }
}
