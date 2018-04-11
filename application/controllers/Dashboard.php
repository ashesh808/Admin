<?php
session_start();

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Login_Database');
        $this->load->model('Get_Database');


    }

    public function home()
    {
        if (isset($_SESSION['user_logged_in'])) {
            $data['user'] = $this->Get_Database->get_user();
            $this->load->view('templates/header');
            $this->load->view('dashboard/home',$data);
            $this->load->view('templates/footer');

        } else {
            redirect('');
        }
    }

    public function table()
    {
        if (isset($_SESSION['user_logged_in'])) {
            $this->load->view('templates/header');
            $this->load->view('dashboard/table');
            $this->load->view('templates/footer');


        } else {
            redirect('');
        }
    }

}