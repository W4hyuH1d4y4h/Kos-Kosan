<?php

class Model_kamar extends CI_Model
{

    public function getdatakmr()
    {
        // bikin konesi
        $this->load->database();

        // bikin query
        $sql = "SELECT * FROM kamar";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function tambah_K()
    {
        // bikin konesi
        $this->load->database();

        // tangkap data
        $no_kamar = $this->input->POST('no_kamar');
        $no_lantai = $this->input->POST('no_lantai');
        $fasilitas = $this->input->POST('fasilitas');
        $tarif_bulanan = $this->input->POST('tarif_bulanan');
        $tarif_tahunan = $this->input->POST('tarif_tahunan');
        $diskon = $this->input->POST('diskon');
        $status_kamar = $this->input->POST('status_kamar');


        // bikin query
        $sql = "INSERT INTO kamar(no_kamar, no_lantai, fasilitas, tarif_bulanan, tarif_tahunan, diskon, status_kamar)
                VALUES('$no_kamar', '$no_lantai', '$fasilitas', '$tarif_bulanan', '$tarif_tahunan', '$diskon', '$status_kamar')";

        // esekusi query
        $hasil = $this->db->query($sql);
        // jabarkan hasil query
        $data =  $hasil->result_array($sql);
        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }
}
