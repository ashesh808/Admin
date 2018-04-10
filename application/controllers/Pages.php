<?php
class Pages extends CI_Controller {

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
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
    public function about()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/about');
        $this->load->view('templates/footer');
    }
}