<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }
    public function index()
    {
        if (!$this->session->userdata('email')) {
            $this->load->view('user/pesanan_user_empty');
        } else {
            $info['user'] = $this->db->get_where('penghuni', ['email' => $this->session->userdata('email')])->row_array();

            $profile1['id_penghuni'] = $info['user']['id_penghuni'];
            $profile2['nama'] = $info['user']['nama'];
            $profile3['email'] = $info['user']['email'];
            $profile4['foto'] = $info['user']['foto'];

            $data = $profile1 + $profile2 + $profile3 + $profile4;

            $id = $profile1['id_penghuni'];
            $sql = "SELECT * FROM pesanan WHERE id_penghuni = '$id'";
            $hasil = $this->db->query($sql);

            if ($hasil->num_rows() > 0) {
                $pesananUser['pesanan'] = $hasil->result_array();
                $namaKos['namaKos'] = [];
                $namaKamar['namaKamar'] = [];

                foreach ($pesananUser['pesanan'] as $key => $pesanan) {
                    $kosResult = $this->db->query("SELECT nama_kos FROM daftar_kos JOIN kamar ON daftar_kos.id_kos = kamar.id_kos WHERE id_kamar = '{$pesanan['id_kamar']}'")->result_array();
                    $kamarResult = $this->db->query("SELECT nama_kamar FROM kamar JOIN daftar_kos ON daftar_kos.id_kos = kamar.id_kos WHERE id_kamar = '{$pesanan['id_kamar']}' AND status_kamar = '1'")->result_array();
                    if (!empty($kosResult)) {
                        $namaKos['namaKos'][] = $kosResult[0]; // Assuming each query only returns one row
                    }
                    if (!empty($kamarResult)) {
                        $namaKamar['namaKamar'][] = $kamarResult[0]; // Assuming each query only returns one row
                    }
                }
                $combinedArray['pesanan'] = [];

                foreach ($pesananUser['pesanan'] as $key => $pesanan) {
                    $combinedArray['pesanan'][] = array_merge($pesanan, $namaKos['namaKos'][$key], $namaKamar['namaKamar'][$key]);
                }
                $data = $profile1 + $profile2 + $profile3 + $profile4 + $combinedArray;
                // echo '<pre>';
                // print_r($data);
                // echo '</pre>';
                // die;
                $this->load->view('user/pesanan_user', $data);
            } else {
                $this->load->view('user/pesanan_user_empty', $data);
            }
        }
    }

    public function add_order()
    {
        $id_penghuni = $this->input->post('id_occupants');
        $id_kos = $this->input->post('id_kos');
        $id_room = $this->input->post('id_room');
        $duration = $this->input->post('duration');

        $check = $this->db->query("SELECT * FROM kamar WHERE id_kamar = '$id_room' AND status_kamar = '1'");
        $data = $check->result_array();

        if ($data) {
            $this->session->set_flashdata('message', 'Berhasil');
            redirect('user/Kos_user');
        } else {
            $this->db->trans_start();

            $this->db->query("INSERT INTO pesanan VALUES ('', '$id_kos', '$id_room', '$id_penghuni', NOW(), DATE_ADD(NOW(), INTERVAL '$duration' MONTH))");
            $this->db->query("UPDATE kamar
            SET status_kamar = 1
            WHERE id_kamar = '$id_room'");

            $this->db->trans_complete();
        }
    }
}
