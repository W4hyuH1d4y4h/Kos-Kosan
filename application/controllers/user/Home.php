<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
    }
    public function index()
    {
        if (!$this->session->userdata('email')) {
            $this->load->view('user/home_user');
        } elseif ($this->session->userdata('nohp')) {
            $info['user'] = $this->db->get_where('penyewa', ['email' => $this->session->userdata('email')])->row_array();

            $profile1['id_penyewa'] = $info['user']['id_penyewa'];
            $profile2['nama'] = $info['user']['nama'];
            $profile3['email'] = $info['user']['email'];
            $profile4['foto'] = $info['user']['foto'];
            $profile5['nohp'] = $info['user']['no_hp'];

            $data = $profile1 + $profile2 + $profile3 + $profile4 + $profile5;

            $id = $profile1['id_penyewa'];
            $sql = "SELECT * FROM daftar_kos WHERE id_penyewa = '$id'";
            $hasil = $this->db->query($sql);

            if ($hasil->num_rows() > 0) {
                $this->load->view('bos/home', $data);
            } else {
                $this->load->view('bos/home_empty', $data);
            }
        } else {
            $info['user'] = $this->db->get_where('penghuni', ['email' => $this->session->userdata('email')])->row_array();

            $profile1['id_penghuni'] = $info['user']['id_penghuni'];
            $profile2['nama'] = $info['user']['nama'];
            $profile3['email'] = $info['user']['email'];
            $profile4['foto'] = $info['user']['foto'];

            $data = $profile1 + $profile2 + $profile3 + $profile4;
            $this->load->view('user/home_user', $data);
        }
    }
}