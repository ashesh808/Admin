<?php

Class Login_Database extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // construct the Model class

        $this->load->database();

    }

    public function login($data)
    {

        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }


    }

    public function read_information($user_email)
    {

        $condition = "email =" . "'" . $user_email . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}