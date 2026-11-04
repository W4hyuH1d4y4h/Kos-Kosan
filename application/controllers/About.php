<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
		$data['title'] = 'KOS RESTY';
        $this->load->view('about', $data);
    }
}