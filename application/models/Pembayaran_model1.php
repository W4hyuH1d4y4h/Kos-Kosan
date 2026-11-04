<?php

class Pembayaran_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
        // bikin konesi
        // $this->load->database();
        
    }
    public function aksi_bayar(){
        // bikin konesi
        $this->load->database();

        // tangkap data
        $id_pemesan = $this->input->POST('id_pemesan');
        $foto_lama = $this->input->POST('bukti_pembayaran');

        $nama = $this->input->POST('nama');
        $no_hp = $this->input->POST('no_hp');
        $waktu_sewa = $this->input->POST('waktu_sewa');
        $bukti_bayar= $_FILES['bukti_pembayaran']['name'];

        if($bukti_bayar){
            // ada foto baru
            // S: upload file
            $this->load->helper('form');
            // konfig upload
            $config['file_name'] = $bukti_bayar;
            $config['upload_path'] = './images';
            $config['allowed_types'] = 'gif|jpg|png';
            // masukkan konfig ke library
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            // upload gambar:

            // hapus 
            if($foto_lama){
            unlink('images/'.$foto_lama);
            }

            // E: upload file
            $this->upload->do_upload('images');

            $bukti_pembayaran = $this->upload->data();

            $bukti_bayar = $bukti_pembayaran['file_name'];

            // buat query
            $sql = "UPDATE pemesan SET nama='$nama', no_hp='$no_hp', waktu_sewa='$waktu_sewa', bukti_pembayaran='$bukti_bayar'
                                WHERE id_pemesan='$id_pemesan'";
        }else{
            // tidak ada foto baru
            // buat query
            $sql = "UPDATE pemesan SET nama='$nama', no_hp='$no_hp', waktu_sewa='$waktu_sewa'
                                WHERE id_pemesan='$id_pemesan'";
        }
        // esekusi query
        $this->db->query($sql);

        // echo '<pre>'; print_r($data); echoo '</pre>';die();
        return $data;
    }

    public function get_pemesan(){

        $id_pemesan = $this->input->get('id_pemesan');
        // bikin query
        $sql = "SELECT * FROM pemesan WHERE id_pemesan = '$id_pemesan'";

        // esekusi query
        $hasil =  $this->db->query($sql);

        $data = $hasil->result_array();

        return $data;
    }
}