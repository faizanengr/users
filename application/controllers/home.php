<?php
class Home extends CI_Controller 
{

    public function index()
    {
        $this->load->view('home/inc/header_v');
        $this->load->view('home/home_v');
        $this->load->view('home/inc/footer_v'); 
    }

    public function login()
    {
        $this->load->view('home/inc/header_v');
        $this->load->view('home/login_v');
        $this->load->view('home/inc/footer_v'); 
    }

}

