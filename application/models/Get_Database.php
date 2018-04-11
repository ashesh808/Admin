<?php

Class Get_Database extends CI_Model
{
    function __construct()
    {
        parent::__construct(); // construct the Model class

        $this->load->database();

    }

    public function get_user($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

}