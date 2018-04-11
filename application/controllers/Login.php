<?php
session_start();

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('security');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Login_Database');

    }

    public function login()
    {
        if (isset($_SESSION['user_logged_in'])) {
            redirect('home');
        } else {

            $this->load->view('templates/header');
            $this->load->view('dashboard/login');
            $this->load->view('templates/footer');
        }

    }


    public function login_process()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        $result = $this->Login_Database->login($data);

        if ($result == TRUE) {
            $user_email = $this->input->post('email');
            $result = $this->Login_Database->read_information($user_email);
            if ($result != false) {
                $session_data = array(
                    'id' => $result['id'],
                    'name' => $result['username'],
                    'email' => $result['email'],
                    'password' => $result['password'],
                    'type' => $result['type'],

                );
                $_SESSION['user_logged_in'] = $session_data;
                /*
                 if ($_SESSION['user_logged_in']['type'] == 1) {
                     redirect('');
                 } elseif ($_SESSION['user_logged_in']['type'] == 2) {
                     redirect('');

                 } elseif ($_SESSION['user_logged_in']['type'] == 3) {
                     redirect('');

                 } elseif ($_SESSION['user_logged_in']['type'] == 4) {
                     redirect('');

                 } elseif ($_SESSION['user_logged_in']['type'] == 5) {
                     redirect('home');
                 }
                */

                redirect('home');

            }
        } else {
            redirect('');
        }

    }

    public function logout()
    {
        session_destroy();
        redirect('');

    }
}