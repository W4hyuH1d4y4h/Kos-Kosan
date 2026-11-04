<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kos_user extends CI_Controller
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
            $id = $this->input->get('id');
            // Ambil data kos
            $sqlKos = "SELECT * FROM daftar_kos WHERE id_kos = '$id'";
            $hasilKos = $this->db->query($sqlKos);
            $dataKos['dataKos'] = $hasilKos->result_array();
            // Ambil foto kos
            $sqlFoto = "SELECT * FROM gambar_kos WHERE id_kos = '$id'";
            $hasilFoto = $this->db->query($sqlFoto);
            $dataFoto['fotoKos'] = $hasilFoto->result_array();
            // Ambil data nomor
            $sqlNomor = "SELECT no_hp FROM penyewa p JOIN daftar_kos ON p.id_penyewa = daftar_kos.id_penyewa WHERE daftar_kos.id_kos = '$id'";
            $hasilNomor = $this->db->query($sqlNomor);
            $dataNomor['nomorKos'] = $hasilNomor->result_array();
            // Ambil data kamar
            $sqlharga = "SELECT * FROM kamar WHERE id_kos = '$id'";
            $hasilHarga = $this->db->query($sqlharga);
            $dataHarga['kamarKos'] = $hasilHarga->result_array();
            // Ambil data murah
            $sqlMurah = "SELECT MIN(tarif_bulanan) AS smallest_tarif FROM kamar WHERE id_kos = '$id'";
            $hasilMurah = $this->db->query($sqlMurah);
            $dataMurah['termurah'] = $hasilMurah->result_array();

            $data = $dataKos + $dataFoto + $dataNomor + $dataHarga + $dataMurah;

            $this->load->view('user/kos_user', $data);
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

            $id = $this->input->get('id');
            // Ambil data kos
            $sqlKos = "SELECT * FROM daftar_kos WHERE id_kos = '$id'";
            $hasilKos = $this->db->query($sqlKos);
            $dataKos['dataKos'] = $hasilKos->result_array();
            // Ambil foto kos
            $sqlFoto = "SELECT * FROM gambar_kos WHERE id_kos = '$id'";
            $hasilFoto = $this->db->query($sqlFoto);
            $dataFoto['fotoKos'] = $hasilFoto->result_array();
            // Ambil data nomor
            $sqlNomor = "SELECT no_hp FROM penyewa p JOIN daftar_kos ON p.id_penyewa = daftar_kos.id_penyewa WHERE daftar_kos.id_kos = '$id'";
            $hasilNomor = $this->db->query($sqlNomor);
            $dataNomor['nomorKos'] = $hasilNomor->result_array();
            // Ambil data kamar
            $sqlharga = "SELECT * FROM kamar WHERE id_kos = '$id' AND status_kamar = '0'";
            $hasilHarga = $this->db->query($sqlharga);
            $dataHarga['kamarKos'] = $hasilHarga->result_array();
            // Ambil data murah
            $sqlMurah = "SELECT MIN(tarif_bulanan) AS smallest_tarif FROM kamar WHERE id_kos = '$id'";
            $hasilMurah = $this->db->query($sqlMurah);
            $dataMurah['termurah'] = $hasilMurah->result_array();

            $idKamar['id'] = $id;

            $data = $profile1 + $profile2 + $profile3 + $profile4 + $dataKos + $dataFoto + $dataNomor + $dataHarga + $dataMurah;
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // die;
            $this->load->view('user/kos_user', $data);
        }
    }
}
