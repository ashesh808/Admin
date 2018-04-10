<?php
class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function login(){

        $this->load->view('templates/header');
        $this->load->view('dashboard/login');
        $this->load->view('templates/footer');
    }
}