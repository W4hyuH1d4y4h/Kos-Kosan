<?php

class Kamar_model extends CI_Model{

    public function getdatakmr(){
        // bikin konesi
        $this->load->database();
        return $this->db->get('kamar');

        // bikin query
        $sql = "SELECT * FROM kamar WHERE status_kamar=kosong";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }
    public function getallkamar(){

        // bikin query
        $sql = "SELECT * FROM kamar";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }
    public function getpesankamar(){

        // bikin query
        $sql = "SELECT id_kamar, no_kamar FROM kamar WHERE status_kamar='kosong'";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }
    public function hapusPenghuni(){

        $no_kamar = $this->input->GET('no_kamar');
        // bikin query
        $sql = "UPDATE kamar SET status_kamar=terisi WHERE no_kamar='$no_kamar'";

        // esekusi query
        $hasil =  $this->db->query($sql);
    }

    public function tambahPenghuni(){
        // bikin konekni
        $this->load->database();
        
        // tangkap data
        $id_pemesan = $this->input->POST('id_pemesan');
        $no_kamar = $this->input->POST('id_kamar');

        $nama = $this->input->POST('nama');
        $alamat = $this->input->POST('alamat');
        $no_telepon = $this->input->POST('no_telepon');
        $jenis_kelamin = $this->input->POST('jenis_kelamin');
        $waktu_sewa = $this->input->POST('waktu_sewa');
        $bukti_bayar = $_FILES['bukti_pembayaran']['name'];

        // upload file
        $this->load->helper('form');
        
        $config['upload_path'] = './foto/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);
        $this->upload->do_upload('bukti_pembayaran');

        // bikin query
        $sql = "INSERT INTO pemesan (id_kamar, nama, alamat, no_telepon, jenis_kelamin, waktu_sewa, bukti_pembayaran) 
        values ('$no_kamar', '$nama', '$alamat', '$no_telepon', '$jenis_kelamin', '$waktu_sewa', '$bukti_bayar')";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // $pemesanan =  $this->db->query("select * from pemesan order by id_pemesan desc limit 1");
        // $id_pemesanan = $pemesanan->result_array()[0]['id_pemesan'];

        return $id_pemesanan;
    }
}
