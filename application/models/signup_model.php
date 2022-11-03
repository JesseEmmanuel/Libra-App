<?php

class Signup_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->limit(1);
        $this->db->insert('tblaccounts', $data);
    }
}