<?php

class Auth_model extends CI_Model
{
    public function authenticate($data)
    {
        $this->db->select('*');
        $this->db->where('accountUserName', $data['accountUserName']);
        $this->db->where('acountPassWord', $data['acountPassWord']);
        $this->db->from('tblaccounts');
        $query = $this->db->get();
        if($query->num_rows() == 1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
}