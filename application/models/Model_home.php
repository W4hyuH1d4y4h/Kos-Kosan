<?php

class Model_home extends CI_Model
{

    public function getdataadm()
    {
        // bikin konesi
        $this->load->database();

        // bikin query
        $sql = "SELECT * FROM admin";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function deletedataadm()
    {
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_admin = $this->input->get('id_admin');

        // bikin query
        $sql = "DELETE FROM admin WHERE id_admin='$id_admin'";

        // esekusi query
        $hasil = $this->db->query($sql);

        // jabarkan hasil query
        $data = $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function get_edit_adm()
    {
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_admin = $this->input->get('id_admin');
        // bikin query
        $sql = "SELECT * FROM admin WHERE id_admin='id_admin'";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function aksi_edit_adm()
    {
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_admin = $this->input->POST('id_admin');
        $username = $this->input->POST('username');
        $password = $this->input->POST('password');
        $nama = $this->input->POST('nama');

        // buat query
        $sql = "UPDATE admin SET username='$username', password='$password', nama='$nama'
                                WHERE id_admin='$id_admin'";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }
}
