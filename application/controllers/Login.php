<?php
 
class Login extends CI_Controller{
 
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');

        if(!empty($this->session->userdata['data_user'])){
            redirect('/Home');
        }
    }
 
    public function index()
    {
        $this->load->model('Login_model');

        $data['title'] = 'KOS RESTY';
        $this->load->view('login', $data);

    }
 
    public function login_aksi(){
        $this->load->model('Login_model');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
            );
        $cek = $this->Login_model->cek_login("admin",$where)->num_rows();
        if($cek > 0){
 
            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
            redirect(base_url('Home'));
 
        }else{
            echo 'Gagal Login, silahkan <a href= "'.base_url().'login">Ulangi lagi</a>';
        }
    }
 
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}

