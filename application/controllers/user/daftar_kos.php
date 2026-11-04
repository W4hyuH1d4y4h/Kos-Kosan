<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftar_kos extends CI_Controller
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
            // Ambil data kos
            $sqlKos = "SELECT * FROM daftar_kos WHERE status=1";
            $hasilKos = $this->db->query($sqlKos);
            $dataKos['dataKos'] = $hasilKos->result_array();

            // Ambil foto kos
            $sqlFoto = "SELECT * FROM gambar_kos";
            $hasilFoto = $this->db->query($sqlFoto);
            $dataFoto['fotoKos'] = $hasilFoto->result_array();

            // Ambil data nomor
            $sqlNomor = "SELECT * FROM penyewa";
            $hasilNomor = $this->db->query($sqlNomor);
            $dataNomor['nomorKos'] = $hasilNomor->result_array();

            // Ambil data harga
            $sqlharga = "SELECT * FROM kamar";
            $hasilHarga = $this->db->query($sqlharga);
            $dataHarga['hargaKos'] = $hasilHarga->result_array();

            $data = $dataKos + $dataFoto + $dataNomor + $dataHarga;
            $this->load->view('user/daftar_kos2', $data);
        } elseif ($this->session->userdata('nohp')) {
            $info['user'] = $this->db->get_where('penyewa', ['email' => $this->session->userdata('email')])->row_array();

            $profile1['id_penyewa'] = $info['user']['id_penyewa'];
            $profile2['nama'] = $info['user']['nama'];
            $profile3['email'] = $info['user']['email'];
            $profile4['foto'] = $info['user']['foto'];
            $profile5['nohp'] = $info['user']['no_hp'];
            $fasilitas['fasilitas'] = $this->fasilitas_kos();

            $data = $profile1 + $profile2 + $profile3 + $profile4 + $profile5 + $fasilitas;

            $this->load->view('bos/daftar_kos', $data);
        } else {
            $info['user'] = $this->db->get_where('penghuni', ['email' => $this->session->userdata('email')])->row_array();

            $profile1['id_penghuni'] = $info['user']['id_penghuni'];
            $profile2['nama'] = $info['user']['nama'];
            $profile3['email'] = $info['user']['email'];
            $profile4['foto'] = $info['user']['foto'];

            // Ambil data kos
            $sqlKos = "SELECT * FROM daftar_kos WHERE status=1";
            $hasilKos = $this->db->query($sqlKos);
            $dataKos['dataKos'] = $hasilKos->result_array();

            // Ambil foto kos
            $sqlFoto = "SELECT * FROM gambar_kos";
            $hasilFoto = $this->db->query($sqlFoto);
            $dataFoto['fotoKos'] = $hasilFoto->result_array();

            // Ambil data nomor
            $sqlNomor = "SELECT * FROM penyewa";
            $hasilNomor = $this->db->query($sqlNomor);
            $dataNomor['nomorKos'] = $hasilNomor->result_array();

            // Ambil data harga
            $sqlharga = "SELECT * FROM kamar";
            $hasilHarga = $this->db->query($sqlharga);
            $dataHarga['hargaKos'] = $hasilHarga->result_array();

            $data = $profile1 + $profile2 + $profile3 + $profile4 + $dataKos + $dataFoto + $dataNomor + $dataHarga;
            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';
            // die;

            $this->load->view('user/daftar_kos2', $data);
        }
    }

    public function daftar()
    {
        $nama = $this->input->post('nama_kos');
        echo $nama;
    }

    private function fasilitas_kos()
    {
        $sql = "SELECT * FROM daftar_fasilitas";
        $hasil = $this->db->query($sql);
        $data = $hasil->result_array();

        return $data;
    }

    public function temporary_kos()
    {
        // Check if file was uploaded
        if (isset($_FILES['photos'])) {
            // Define the target directory
            $target_dir = "uploads/";

            // Get the filename
            $filename = basename($_FILES["photos"]["name"]);

            // Define the target file
            $target_file = $target_dir . $filename;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {
                // Define the upload URL
                $uploadURL = base_url() . $target_file;

                // Create a response array
                $response = array(
                    "success" => true,
                    "url" => $uploadURL
                );

                // Encode the response as JSON and output it
                echo json_encode($response);
            } else {
                echo json_encode(array("error" => "Failed to move uploaded file."));
            }
        } else {
            echo json_encode(array("error" => "No file uploaded."));
        }
    }

    public function image_kos()
    {
        // Check if file was uploaded
        if (isset($_FILES['photos'])) {
            // Define the target directory
            $target_dir = "uploads/kos/";

            // Get the filename
            $filename = basename($_FILES["photos"]["name"]);

            // Define the target file
            $target_file = $target_dir . $filename;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["photos"]["tmp_name"], $target_file)) {
                // Define the upload URL
                $uploadURL = base_url() . $target_file;

                // Create a response array
                $response = array(
                    "success" => true,
                    "url" => $uploadURL
                );

                // Encode the response as JSON and output it
                echo json_encode($response);
            } else {
                echo json_encode(array("error" => "Failed to move uploaded file."));
            }
        } else {
            echo json_encode(array("error" => "No file uploaded."));
        }
    }

    public function daftarkan()
    {
        $id = $this->input->post('id_user');
        $status = $this->input->post('status');
        $nama_kos = $this->input->post('step1');
        $alamat_kos = $this->input->post('step2');
        $fasilitas_kos = $this->input->post('step3');
        $kamar_kos = $this->input->post('step4');
        $foto_kos = $this->input->post('step5');

        // Query tambah kos
        $addKos = "INSERT INTO daftar_kos VALUES ('', '$id','" . $nama_kos[0]['value'] . "', '" . $alamat_kos[0]['value'] . "', '" . $alamat_kos[1]['value'] . "', '" . $nama_kos[1]['value'] . "', '$status')";
        $this->db->query($addKos);

        // Query select kos terbaru
        $qidKos = "SELECT id_kos FROM daftar_kos ORDER BY id_kos DESC LIMIT 1";
        $data = $this->db->query($qidKos);
        $hasil = $data->result_array();
        $idKos = $hasil[0]['id_kos'];

        // Query input fasilitas kos
        foreach ($fasilitas_kos as $idx => $value) {
            $addFasilitas = "INSERT INTO fasilitas VALUES ('', '$idKos', '" . $value['value'] . "')";
            $this->db->query($addFasilitas);
        }

        // Query input kamar
        foreach ($kamar_kos as $idx => $value) {
            $addKamar = "INSERT INTO kamar VALUE ('', '$idKos', '" . $value['name'] . "', '" . $value['pricePerMonth'] . "', '" . $value['pricePerYear'] . "', '$status' ,'" . $value['imageUrl'] . "')";
            $this->db->query($addKamar);
        }

        // Query input foto kos
        foreach ($foto_kos as $key => $value) {
            $addFoto = "INSERT INTO gambar_kos VALUES ('', '$idKos', '$value')";
            $this->db->query($addFoto);
        }
    }
}
