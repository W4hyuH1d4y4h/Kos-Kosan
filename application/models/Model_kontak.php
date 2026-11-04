<?php

class Model_kontak extends CI_Model{
    
    public function tambah_kontak(){
        // bikin konesi
        $this->load->database();

        // tangkap data
        // $id_kontak = $this->input->POST('id_kontak');
        $nama = $this->input->POST('nama');
        $email = $this->input->POST('email');
        $no_hp = $this->input->POST('no_hp');
        $pesan = $this->input->POST('pesan');

        // S: upload file
        $this->load->helper('form');
        // masukkan konfig ke library

        // bikin query
        $sql = "INSERT INTO kontak(nama, email, no_hp, pesan)
                VALUES('$nama', '$email','$no_hp', '$pesan')";

        // esekusi query
        $data = $this->db->query($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

}