<?php
session_start();

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('dashboard/home');
        $this->load->view('templates/footer');
    }

}