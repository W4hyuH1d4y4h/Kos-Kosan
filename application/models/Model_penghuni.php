<?php

class Model_penghuni extends CI_Model{

    public function getdatapenghuni(){
        // bikin konesi
        $this->load->database();

        // bikin query
        $sql = "SELECT * FROM penghuni";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function deletedatapenghuni(){
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_penghuni = $this->input->get('id_penghuni');

        // bikin query
        $sql = "DELETE FROM penghuni WHERE id_penghuni='$id_penghuni'";

        // esekusi query
        $this->db->query($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function get_edit_penghuni(){
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_mhs = $this->input->get('id_penghuni');
        // bikin query
        $sql = "SELECT * FROM penghuni WHERE id_penghuni='id_penghuni'";

        // esekusi query
        $hasil =  $this->db->query($sql);

        // jabarkan hasil query
        $data =  $hasil->result_array($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }


}