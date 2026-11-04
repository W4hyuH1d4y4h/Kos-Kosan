<?php
defined('BASEPATH') or exit('No direct script access allowed');

class signup_user extends CI_Controller
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
        $this->load->view('user/signup_user');
    }
    public function regCari()
    {
        $rules = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama harus diisi!'
                ],
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[penghuni.email]',
                'errors' => [
                    'required' => 'Email harus diisi!',
                    'valid_email' => 'Email anda tidak valid',
                    'is_unique' => 'Email ini sudah terdaftar',
                ],
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]|matches[conpassword]',
                'errors' => [
                    'required' => 'Password harus diisi!',
                    'min_length' => 'Password terlalu pendek!',
                    'matches' => 'Password tidak sama!'
                ],
            ],
            [
                'field' => 'conpassword',
                'label' => 'ConPassword',
                'rules' => 'required|trim|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi password!',
                    'matches' => 'Password tidak sama!',
                ],
            ],
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/signup_user');
        } else {
            $this->createCari();
        }
    }

    private function createCari()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $sql = "INSERT INTO penghuni (nama, email, password)
        VALUES ('$nama', '$email', '$password')";
        $this->db->query($sql);

        $this->session->set_flashdata('message', 'Berhasil');

        redirect('user/signup_user');
    }

    public function regBos()
    {
        $rules = [
            [
                'field' => 'nama2',
                'label' => 'Nama',
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama harus diisi!'
                ],
            ],
            [
                'field' => 'email2',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|is_unique[penyewa.email]',
                'errors' => [
                    'required' => 'Email harus diisi!',
                    'valid_email' => 'Email anda tidak valid',
                    'is_unique' => 'Email ini sudah terdaftar',
                ],
            ],
            [
                'field' => 'nohp',
                'label' => 'NomorHP',
                'rules' => 'required|max_length[12]',
                'errors' => [
                    'required' => 'Nomor HP harus diisi!',
                    'max_length' => 'Nomor terlalu panjang',
                ],
            ],
            [
                'field' => 'password2',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[8]|matches[conpassword2]',
                'errors' => [
                    'required' => 'Password harus diisi!',
                    'min_length' => 'Password terlalu pendek!',
                    'matches' => 'Password tidak sama!'
                ],
            ],
            [
                'field' => 'conpassword2',
                'label' => 'ConPassword',
                'rules' => 'required|trim|matches[password2]',
                'errors' => [
                    'required' => 'Konfirmasi password!',
                    'matches' => 'Password tidak sama!',
                ],
            ],
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/signup_user');
        } else {
            $this->createBos();
        }
    }

    private function createBos()
    {
        $nama = $this->input->post('nama2');
        $email = $this->input->post('email2');
        $nohp = $this->input->post('nohp');
        $password = password_hash($this->input->post('password2'), PASSWORD_DEFAULT);

        $sql = "INSERT INTO penyewa (nama, no_hp, email, password)
        VALUES ('$nama', '$nohp', '$email', '$password')";
        $this->db->query($sql);

        $this->session->set_flashdata('message', 'Berhasil');

        redirect('user/signup_user');
    }
}
